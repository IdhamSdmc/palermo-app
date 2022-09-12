<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Marca;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $marcas = Marca::paginate(6);

        return view('admin.backend.marca.index', compact('marcas'));
    }
    public function marcas()
    {
        //
        $marcas = DB::table('marcas')->get();
        $historias = DB::table('historias')->get();

        return view('pages.inicio2', compact('marcas', 'historias'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.backend.marca.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        try {
            if($request->hasFile('image')){
                $imagen = $request->file("image");
                $nombreimagen = $imagen->getClientOriginalName();
                $ruta = public_path()."/uploads/marca/";
                $size = $imagen->getSize();
                $imagen->move($ruta, $nombreimagen);
            }else{
                $nombreimagen = '';
                $size = 0;
            }
            $marca = new Marca();
            $marca->marca = $request->title;
            $marca->path = '/uploads/marca/';
            $marca->file_name = $nombreimagen;
            $marca->file_size = $size;
            $marca->created_at = Carbon::now();
            $marca->updated_at = Carbon::now();
            $marca->save();
            return redirect()->route('admin.marca.index');
        }catch (\Throwable $th){
            return($th);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $marca = Marca::all()->find($id);

        return view('admin.backend.marca.show', compact('marca'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $marca = Marca::all()->find($id);

        return view('admin.backend.marca.edit', compact('marca'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        try {
            $marca = Marca::all()->find($id);
            $marca->marca = $request->title;
            if($request->hasFile('image')){
                $imagen = $request->file("image");
                $nombreimagen = $imagen->getClientOriginalName();
                $ruta = public_path()."/uploads/marca/";
                $size = $imagen->getSize();
                $imagen->move($ruta, $nombreimagen);
                $marca->file_name = $nombreimagen;
                $marca->file_size = $size;
            }
            $marca->updated_at = Carbon::now();
            $marca->update();
            return redirect()->route('admin.marca.index');
        }catch (\Throwable $th){
            return($th);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
