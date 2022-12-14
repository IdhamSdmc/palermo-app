<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use View;
use Input;
use Flash;
use App\Models\Setting;
use App\Repositories\Setting\SettingInterface;

/**
 * Class SettingController.
 *
 * @author Sefa Karagöz <karagozsefa@gmail.com>
 */
class SettingController extends Controller
{
    protected $setting;
    public function __construct(SettingInterface $setting)
    {
        $this->setting = $setting;

    }
      /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $setting = (Setting::all()->first()) ?: new Setting();
      

        return view('/admin/backend.setting.setting', compact('setting'))->with('active', 'settings');
    }
  /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function save()
    {
        $setting = (Setting::all()->first()) ?: new Setting();

        $formData = Input::all();
        unset($formData['_token']);

        $json = json_encode($formData);
        $setting->fill(array('settings' => $json))->save();

        Flash::message('Settings was successfully updated');

        return Redirect::route('admin.settings');
    }
        /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */

    public function store()
    {
        try {

            $this->setting->create(Input::all());
            return langRedirectRoute('admin.setting.index');
        } catch (ValidationException $e) {
            return langRedirectRoute('admin.setting.index')->withInput()->withErrors($e->getErrors());
        }
    }
  /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
}
