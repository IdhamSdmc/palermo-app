<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use View;
use Input;
use Flash;
use App\Models\Footer;
use App\Repositories\Footer\FooterInterface;

/**
 * Class FooterController.
 *
 * @author Sefa Karagöz <karagozsefa@gmail.com>
 */
class FooterController extends Controller
{
    protected $footer;
    public function __construct(FooterInterface $footer)
    {
        $this->footer = $footer;

    }
      /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $footer = (Footer::all()->first()) ?: new Footer();
      

        return view('/admin/backend.footer.footer', compact('footer'))->with('active', 'footers');
    }
  /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function save()
    {
        $footer = (Footer::all()->first()) ?: new Footer();

        $formData = Input::all();
        unset($formData['_token']);

        $json = json_encode($formData);
        $footer->fill(array('footers' => $json, 'lang' => getLang()))->save();

        Flash::message('Footers was successfully updated');

        return Redirect::route('admin.footers');
    }
        /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */

    public function store()
    {
        try {

            $this->footer->create(Input::all());
            return langRedirectRoute('admin.footer.index');
        } catch (ValidationException $e) {
            return langRedirectRoute('admin.footer.index')->withInput()->withErrors($e->getErrors());
        }
    }
  /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
}
