<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Historia;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HistoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $historias = Historia::paginate(6);

        return view('admin.backend.historia.index', compact('historias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.backend.historia.create');
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
                $ruta = public_path()."/uploads/historia/";
                $size = $imagen->getSize();
                $imagen->move($ruta, $nombreimagen);
            }else{
                $nombreimagen = '';
                $size = 0;
            }
            $historia = new Historia();
            $historia->titulo = $request->title;
            $historia->reto = $request->reto;
            $historia->solucion = $request->solucion;
            $historia->resultado = $request->resultado;
            $historia->path = '/uploads/historia/';
            $historia->file_name = $nombreimagen;
            $historia->file_size = $size;
            $historia->created_at = Carbon::now();
            $historia->updated_at = Carbon::now();
            $historia->save();
            return redirect()->route('admin.historia.index');
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
        $historia = Historia::all()->find($id);

        return view('admin.backend.historia.show', compact('historia'));
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
        $historia = Historia::all()->find($id);

        return view('admin.backend.historia.edit', compact('historia'));
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
            $historia = Historia::all()->find($id);
            $historia->titulo = $request->title;
            $historia->reto = $request->reto;
            $historia->solucion = $request->solucion;
            $historia->resultado = $request->resultado;
            if($request->hasFile('image')){
                $imagen = $request->file("image");
                $nombreimagen = $imagen->getClientOriginalName();
                $ruta = public_path()."/uploads/historia/";
                $size = $imagen->getSize();
                $imagen->move($ruta, $nombreimagen);
                $historia->file_name = $nombreimagen;
                $historia->file_size = $size;
            }
            $historia->updated_at = Carbon::now();
            $historia->update();
            return redirect()->route('admin.historia.index');
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
