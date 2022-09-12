<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Linea;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LineaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $lineas = Linea::paginate(6);

        return view('admin.backend.linea.index', compact('lineas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function lineas()
    {
        //
        $lineas = DB::table('lineas')->get();

        return view('pages.nosotros2', compact('lineas'));
    }
    public function create()
    {
        //
        return view('admin.backend.linea.create');
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

            $linea = new Linea();
            $linea->year = $request->title;
            $linea->descripcion = $request->descripcion;
            $linea->created_at = Carbon::now();
            $linea->updated_at = Carbon::now();
            $linea->save();
            return redirect()->route('admin.linea.index');
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
        $linea = Linea::all()->find($id);

        return view('admin.backend.linea.show', compact('linea'));
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
        $linea = Linea::all()->find($id);

        return view('admin.backend.linea.edit', compact('linea'));
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
            $linea = Linea::all()->find($id);
            $linea->year = $request->title;
            $linea->descripcion = $request->descripcion;
            $linea->updated_at = Carbon::now();
            $linea->update();
            return redirect()->route('admin.linea.index');
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
