<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function blog($id)
    {
        //
        $categorias = DB::table('categories')->get();
        $article =DB::table('articles')->find($id);
        return view('pages.blog', compact('categorias','article'));
    }

    
}
