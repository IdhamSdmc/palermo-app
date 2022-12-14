<?php

namespace App\Http\Controllers\Admin;

use Mail;
use Reminder;
use Redirect;
use Validator;
use App\User;
use App\Services\Mailer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use Sentinel;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Spatie\Activitylog\Models\Activity;

/**
 * Class AuthController.
 *
 * @author Sefa Karagöz <karagozsefa@gmail.com>
 */
class AuthController extends Controller
{
    /**
     * Create a new authentication controller instance.
     */
    public function __construct()
    {
        $this->messageBag = new MessageBag;
    }

    /**
     * Display the login page.
     *
     * @return View
     */
    public function getSignin()
    {
      //  dd(Auth::check());

        if (Auth::check()) {

            return Redirect::route('admin.dashboard');

        }
        return view('/admin/backend/auth/login2');
    }

    /**
     * Login action.
     *
     * @param Request $request
     *
     * @return mixed
     */
    public function postSignin(Request $request)
    {

        $credentials = array(
            'email' => $request->get('email'),
            'password' => $request->get('password'),
        );

        $rememberMe = $request->get('rememberMe');


        
        try {
            // Try to log the user in
            if ($user =  Auth::attempt($request->only('email', 'password'))) {
                // Redirect to the dashboard page
                //Activity log

                return Redirect::route("admin.dashboard")->with('success', trans('auth/message.signin.success'));
            }

            $this->messageBag->add('email', trans('auth/message.account_not_found'));

        } catch (NotActivatedException $e) {
            $this->messageBag->add('email', trans('auth/message.account_not_activated'));
        } catch (ThrottlingException $e) {
            $delay = $e->getDelay();
            $this->messageBag->add('email', trans('auth/message.account_suspended', compact('delay')));
        }

        // Ooops.. something went wrong
        return Redirect::back()->withInput()->withErrors($this->messageBag);

    }

    /**
     * Logout action.
     *
     * @return Redirect
     */
    public function postSignup(UserRequest $request)
    {

        try {
            // Register the user
            $user = Sentinel::registerAndActivate([
                'first_name' => $request->get('first_name'),
                'last_name' => $request->get('last_name'),
                'email' => $request->get('email'),
                'password' => $request->get('password'),
            ]);

            //add user to 'User' group
            $role = Sentinel::findRoleById(2);
            $role->users()->attach($user);


            // Log the user in
            $name = Sentinel::login($user, false);
            //Activity log

          
            //activity log ends
            // Redirect to the home page with success menu
            return Redirect::route("admin.dashboard")->with('success', trans('auth/message.signup.success'));

        } catch (UserExistsException $e) {
            $this->messageBag->add('email', trans('auth/message.account_already_exists'));
        }

        // Ooops.. something went wrong
        return Redirect::back()->withInput()->withErrors($this->messageBag);
    }

    /**
     * User account activation page.
     *
     * @param number $userId
     * @param string $activationCode
     * @return
     */
    public function getActivate($userId,$activationCode = null)
    {
        // Is user logged in?
        if (Sentinel::check()) {
            return Redirect::route('admin.dashboard');
        }

        $user = Sentinel::findById($userId);
        $activation = Activation::create($user);

        if (Activation::complete($user, $activation->code)) {
            // Activation was successful
            // Redirect to the login page
            return Redirect::route('signin')->with('success', trans('auth/message.activate.success'));
        } else {
            // Activation not found or not completed.
            $error = trans('auth/message.activate.error');
            return Redirect::route('signin')->with('error', $error);
        }

    }

    /**
     * Forgot password form processing page.
     * @param Request $request
     *
     * @return Redirect
     */
    public function postForgotPassword(ForgotRequest $request)
    {
        $data = new stdClass();

        try {
            // Get the user password recovery code
            //$user = User::where(['email' => $request->get('email')]);
            $user = User::where('email' , $request->get('email'))->first();

            if (!$user) {
                return back()->with('error', trans('auth/message.account_email_not_found'));
            }
            $activation = Activation::where('user_id', $user->id)->first();
            if($activation->completed == 0){
                return back()->with('error', trans('auth/message.account_not_activated'));
            }

            /*$reminder = PasswordReset::updateOrCreate(
                ['user_id' => $user->id],
                [
                    'user_id' => $user->id,
                    'code' => str_random(60),
                    'completed' => 0
                ]
            );*/

            $reminder = Reminder::exists($user) ?: Reminder::create($user);
            // Data to be used on the email view

            $data->user_name = $user->first_name .' ' .$user->last_name;
            $data->forgotPasswordUrl = URL::route('forgot-password-confirm', [$user->id, $reminder->code]);

            // Send the activation code through email

            Mail::to($user->email)
                ->send(new ForgotPassword($data));

        } catch (UserNotFoundException $e) {
            // Even though the email was not found, we will pretend
            // we have sent the password reset code through email,
            // this is a security measure against hackers.
        }

        //  Redirect to the forgot password
        return back()->with('success', trans('auth/message.forgot-password.success'));
    }

    /**
     * Forgot Password Confirmation page.
     *
     * @param number $userId
     * @param  string $passwordResetCode
     * @return View
     */
    public function getForgotPasswordConfirm($userId,$passwordResetCode = null)
    {
        // Find the user using the password reset code
        if(!$user = User::find($userId)) {
            // Redirect to the forgot password page
            return Redirect::route('forgot-password')->with('error', trans('auth/message.account_not_found'));
        }
        if($reminder = Reminder::exists($user)) {
            if($passwordResetCode == $reminder->code) {
                return view('admin.auth.forgot-password-confirm');
            } else{
                return 'code does not match';
            }
        } else {
            return 'does not exists';
        }

        // Show the page
        // return View('admin.auth.forgot-password-confirm');
    }

    /**
     * Forgot Password Confirmation form processing page.
     *
     * @param Request $request
     * @param number $userId
     * @param  string   $passwordResetCode
     * @return Redirect
     */
    public function postForgotPasswordConfirm(ConfirmPasswordRequest $request, $userId, $passwordResetCode = null)
    {

        // Find the user using the password reset code
        $user = User::find($userId);
        if (!$reminder = Reminder::complete($user, $passwordResetCode, $request->get('password'))) {
            // Ooops.. something went wrong
            return Redirect::route('signin')->with('error', trans('auth/message.forgot-password-confirm.error'));
        }

        // Password successfully reseted
        return Redirect::route('signin')->with('success', trans('auth/message.forgot-password-confirm.success'));
    }

    /**
     * Logout page.
     *
     * @return Redirect
     */
    public function getLogout()
    {

        if (Auth::check()) {
            //Activity log
            $user = Auth::user();
            unset($user['role_id']);
           
            // Log the user out
            Auth::logout();
        }


        // Redirect to the users page
        return redirect('admin/signin')->with('success', 'Has cerrado sesión exitosamente');
    }

    /**
     * Account sign up form processing for register2 page
     *
     * @param Request $request
     *
     * @return Redirect
     */
    public function postRegister2(UserRequest $request)
    {

        try {
            // Register the user
            $user = Sentinel::registerAndActivate(array(
                'first_name' => $request->get('first_name'),
                'last_name' => $request->get('last_name'),
                'email' => $request->get('email'),
                'password' => $request->get('password'),
            ));

            //add user to 'User' group
            $role = Sentinel::findRoleById(2);
            $role->users()->attach($user);

            // Log the user in
            Sentinel::login($user, false);

            // Redirect to the home page with success menu
            return Redirect::route("admin.dashboard")->with('success', trans('auth/message.signup.success'));

        } catch (UserExistsException $e) {
            $this->messageBag->add('email', trans('auth/message.account_already_exists'));
        }

        // Ooops.. something went wrong
        return Redirect::back()->withInput()->withErrors($this->messageBag);
    }
}
