<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use View;
use Input;
use Flash;
use App\Models\Footer;
use App\Repositories\Footer\FooterInterface;
use Illuminate\Http\Request;
use Config;
use File;
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
        $config = Config::get('fully');
        $this->perPage = $config['per_page'];
        $this->width = $config['modules']['footer']['image_size']['width'];
        $this->height = $config['modules']['footer']['image_size']['height'];
        $this->thumbWidth = $config['modules']['footer']['thumb_size']['width'];
        $this->thumbHeight = $config['modules']['footer']['thumb_size']['height'];
        $this->imgDir = $config['modules']['footer']['image_dir'];
    }
      /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $footer = (Footer::all()->first()) ?: new Footer();
        $jsonData = $footer->redes;
        $footer->redes = json_decode($jsonData, true);
        return view('/admin/backend.footer.footer', compact('footer'))->with('active', 'footer');
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
        $footer->fill(array('footers' => $json))->save();

        Flash::message('Footers was successfully updated');

        return Redirect::route('admin.footers');
    }
        /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */

    public function store(Request $request)
    {
        try {


            $this->footer = (Footer::all()->first()) ?: new Footer();


            $this->footer->correo=$request['correo'];
            $this->footer->telefono=$request['telefono'];
            $dataAr = json_decode($request['redes']);
            $array = array();
            if(!empty($dataAr)) {
                foreach ($dataAr as $value) {
                    if ($value->nuevo=='1'){
                       $destinationPath = public_path().$this->imgDir;
                       $base64_str = substr($value->file, strpos($value->file, ",")+1);
                       $image = base64_decode($base64_str);
                       $safeName = $value->name;
                       file_put_contents($destinationPath.$safeName,  $image);
                    }
                  
                   $arreglo = array(
                       'url' => $value->url,
                       'name' => $value->name,
                       'path' => $this->imgDir
                   );
                   array_push( $array, $arreglo);
   
               }
               $this->footer->redes=json_encode($array);
            }
            
            $this->footer->save();  
               //--------------------------------------------------------
               
               //Event::fire('article.created', $this->article);
   
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
