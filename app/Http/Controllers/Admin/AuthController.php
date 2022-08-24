<?php

namespace App\Http\Controllers\Admin;

use Mail;
use Sentinel;
use Reminder;
use Redirect;
use Validator;
use App\User;
use App\Services\Mailer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Cartalyst\Sentinel\Checkpoints\NotActivatedException;
use Cartalyst\Sentinel\Checkpoints\ThrottlingException;
use Cartalyst\Sentinel\Laravel\Facades\Activation;
use Session;

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
    }

    /**
     * Display the login page.
     *
     * @return View
     */
    public function getLogin()
    {
        if (!Sentinel::check()) {
            return view('/admin/backend/auth/login');
        }

        return Redirect::route('admin.dashboard');
    }

    /**
     * Login action.
     *
     * @param Request $request
     *
     * @return mixed
     */
    public function postLogin(Request $request)
    {

        $credentials = array(
            'email' => $request->get('email'),
            'password' => $request->get('password'),
        );

        $rememberMe = $request->get('rememberMe');

        try {
       
                $result = Sentinel::authenticate($credentials);
            if ($result) {
                return Redirect::route('admin.dashboard');
            }
        } catch (NotActivatedException $e) {
            return Redirect::back()->withErrors($e->getMessage());
        } catch (ThrottlingException $e) {
            $delay = $e->getDelay();
        }
        return Redirect::back()->withInput();
    }

    /**
     * Logout action.
     *
     * @return Redirect
     */
    public function getLogout()
    {
        Sentinel::logout(Sentinel::getUser());

        return Redirect::route('admin.login');
    }

    public function getForgotPassword()
    {
        if (!Sentinel::check()) {
            return view('backend/auth/forgot-password');
        }

        return Redirect::route('admin.dashboard');
    }

    public function postForgotPassword(Request $request)
    {
        $credentials = array(
            'email' => $request->get('email'),
        );

        $rules = array(
            'email' => 'required|email',
        );

        $validation = Validator::make($credentials, $rules);

        if ($validation->fails()) {
            return Redirect::back()->withErrors($validation)->withInput();
        }

        // Find the user using the user email address
        $this->user = Sentinel::findByCredentials($credentials);

        if (!$this->user) {

            return Redirect::route('admin.forgot.password');
        }

        $reminderData = Reminder::create($this->user);

        // Get the password reset code
        $resetCode = $reminderData->code;

        $formData = array('userId' => $this->user->id, 'resetCode' => $resetCode);

        try {
            Mail::send('emails.auth.reset-password', $formData, function ($message) use ($request) {
                $message->from('noreply@fully.com', 'App');
                $message->to($request->get('email'), 'Lorem Lipsum')->subject('Reset Password');
            });

            return Redirect::route('admin.login');
        } catch (Exception $ex) {
            return Redirect::route('admin.forgot.password')->withErrors(array('forgot-password' => 'Password reset failed'));
        }
        /*$mailer = new Mailer;
        $mailer->send('emails.auth.reset-password', 'user@fully.com', 'Reset Password', $formData);*/
    }

    public function getResetPassword($id, $code)
    {
        // Find the user using the user id
        $this->user = Sentinel::findById($id);

        if ($reminder = Reminder::exists($this->user, $code)) {

            return view('backend/auth/reset-password', compact('id', 'code'));
        } else {
            return Redirect::route('admin.login');
        }
    }

    public function postResetPassword(Request $request)
    {
        $formData = array(
            'id' => $request->get('id'),
            'code' => $request->get('code'),
            'password' => $request->get('password'),
            'confirm-password' => $request->get('confirm_password'),
        );

        $rules = array(
            'id' => 'required',
            'code' => 'required',
            'password' => 'required|min:4',
            'confirm-password' => 'required|same:password',
        );

        $validation = Validator::make($formData, $rules);

        if ($validation->fails()) {
            return Redirect::back()->withErrors($validation)->withInput();
        }

        // Find the user using the user id
        $this->user = Sentinel::findById($formData['id']);

        if ($reminder = Reminder::complete($this->user, $formData['code'], $formData['password'])) {
            // Password reset passed
            return Redirect::route('admin.login');
        } else {
            // Password reset failed
            return Redirect::route('admin.reset.password')->withErrors(array('forgot-password' => 'Password reset failed'));
        }
    }
}
