<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use View;
use Flash;
use Input;
use Response;
use App\Services\Pagination;
use App\Http\Controllers\Controller;
use App\Repositories\Article\ArticleInterface;
use App\Repositories\Category\CategoryInterface;
use App\Exceptions\Validation\ValidationException;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Article;
use function Psy\debug;

/**
 * Class ArticleController.
 *
 * @author Sefa Karagöz <karagozsefa@gmail.com>
 */
class ArticleController extends Controller
{
    protected $article;
    protected $category;
    protected $perPage;

    public function __construct(ArticleInterface $article, CategoryInterface $category)
    {
        View::share('active', 'blog');
        $this->article = $article;
        $this->category = $category;

        $this->perPage = config('fully.modules.article.per_page');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $pagiData = $this->article->paginate(Input::get('page', 1), $this->perPage, true);
        $articles = Article::paginate(6);

        return view('/admin/backend.article.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $cat_array = null;
        $categories = Category::pluck('title', 'id');
          return view('/admin/backend.article.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        try {
            $this->article->create(Input::all());
            /*Flash::message('Article was successfully added');*/

            return langRedirectRoute('admin.article.index');
        } catch (ValidationException $e) {
            return langRedirectRoute('admin.article.create')->withInput()->withErrors($e->getErrors());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $article = $this->article->find($id);

        return view('/admin/backend.article.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $article = $this->article->find($id);
        $categories = Category::pluck('title', 'id');
        return view('/admin/backend.article.edit', compact('article', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function update($id)
    {
        try {
            $this->article->update($id, Input::all());
           /* Flash::message('Article was successfully updated');*/

            return langRedirectRoute('admin.article.index');
        } catch (ValidationException $e) {
            return langRedirectRoute('admin.article.edit')->withInput()->withErrors($e->getErrors());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $this->article->delete($id);
        /*Flash::message('Article was successfully deleted');*/

        return langRedirectRoute('admin.article.index');
    }

    public function confirmDestroy($id)
    {
        $article = $this->article->find($id);

        return view('/admin/backend.article.confirm-destroy', compact('article'));
    }

    public function togglePublish($id)
    {
        return $this->article->togglePublish($id);
    }

    public function mostrar(Request $request)
    {
        $texto = trim($request->get('texto'));
        $idCategoria = $request->get('categoria');
        $articulos = DB::table('articles')
            ->select('id', 'title', 'content', 'path', 'file_name', 'created_at')
            ->where('title', 'LIKE', '%'.$texto.'%')
            ->orWhere('content', 'LIKE', '%'.$texto.'%')
            ->orderBy('title', 'asc')
            ->get();
        if( $idCategoria!=0){
            $articulos = DB::table('articles')
                ->select('id', 'title', 'content', 'path', 'file_name', 'created_at')
                ->where('category_id', '=', '"'.$idCategoria.'"')
                ->orWhere('title', 'LIKE', '%'.$texto.'%')
                ->orWhere('content', 'LIKE', '%'.$texto.'%')
                ->orderBy('title', 'asc')
                ->get();
        }

        $categorias = DB::table('categories')->get();

        return view('pages.articulo', compact('articulos', 'texto', 'categorias'));
    }

}
