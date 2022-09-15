<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::paginate(6);

        return view('/admin/backend.product.index', compact('products'));
    }
    public function productos()
    {
        //
        $products = DB::table('products')->get();
        return view('pages.productos2', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('/admin.backend.product.create');
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
                $ruta = public_path()."/uploads/product/";
                $size = $imagen->getSize();
                $imagen->move($ruta, $nombreimagen);
            }else{
                $nombreimagen = '';
                $size = 0;
            }
            $producto = new Product();
            $producto->titulo = $request->title;
            $producto->descripcion = $request->descripcion;
            $producto->path = '/uploads/product/';
            $producto->file_name = $nombreimagen;
            $producto->file_size = $size;
            $producto->created_at = Carbon::now();
            $producto->updated_at = Carbon::now();
            $producto->save();
            return redirect()->route('admin.product.index');
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
        $product = Product::all()->find($id);

        return view('admin.backend.product.show', compact('product'));
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
        $product = Product::all()->find($id);

        return view('admin.backend.product.edit', compact('product'));
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
            $producto = Product::all()->find($id);
            $producto->titulo = $request->title;
            $producto->descripcion = $request->descripcion;
            if($request->hasFile('image')){
                $imagen = $request->file("image");
                $nombreimagen = $imagen->getClientOriginalName();
                $ruta = public_path()."/uploads/product/";
                $size = $imagen->getSize();
                $imagen->move($ruta, $nombreimagen);
                $producto->file_name = $nombreimagen;
                $producto->file_size = $size;
            }
            $producto->updated_at = Carbon::now();
            $producto->update();
            return redirect()->route('admin.product.index');
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
