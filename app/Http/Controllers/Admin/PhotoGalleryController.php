<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use View;
use File;
use Flash;
use Input;
use Redirect;
use Response;
use App\Services\Pagination;
use App\Http\Controllers\Controller;
use App\Exceptions\Validation\ValidationException;
use App\Repositories\PhotoGallery\PhotoGalleryInterface;
use App\Repositories\PhotoGallery\PhotoGalleryRepository as PhotoGallery;

/**
 * Class PhotoGalleryController.
 *
 * @author Sefa Karagöz <karagozsefa@gmail.com>
 */
class PhotoGalleryController extends Controller
{
    protected $photoGallery;
    protected $perPage;

    public function __construct(PhotoGalleryInterface $photoGallery)
    {
        View::share('active', 'modules');
        $this->photoGallery = $photoGallery;
        $this->perPage = config('fully.modules.photo_gallery.per_page');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $pagiData = $this->photoGallery->paginate(Input::get('page', 1), $this->perPage, true);
        $photo_galleries = Pagination::makeLengthAware($pagiData->items, $pagiData->totalItems, $this->perPage);

        return view('admin.backend.photo_gallery.index', compact('photo_galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $attributes = [
            'title' => 'Photo Gallery Title',
            'content' => 'Photo Gallery Content',
            'is_published' => false,
        ];

        try {
            $id = $this->photoGallery->create($attributes);

            return Redirect::to('/admin/photo-gallery/'.$id.'/edit');
        } catch (ValidationException $e) {
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
        $photo_gallery = $this->photoGallery->find($id);

        return view('/admin/backend.photo_gallery.show', compact('photo_gallery'));
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
        $photo_gallery = $this->photoGallery->find($id);

        return view('admin/backend.photo_gallery.edit', compact('photo_gallery'));
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
            $this->photoGallery->update($id, Input::all());
            Flash::message('Photo gallery was successfully updated');

            return langRedirectRoute('admin.photo-gallery.index');
        } catch (ValidationException $e) {
            return langRedirectRoute('admin.photo_gallery.edit')->withInput()->withErrors($e->getErrors());
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
        $this->photoGallery->delete($id);
        Flash::message('Photo gallery was successfully deleted');

        return langRedirectRoute('admin.photo-gallery.index');
    }

    public function confirmDestroy($id)
    {
        $photo_gallery = $this->photoGallery->find($id);

        return view('/admin/backend.photo_gallery.confirm-destroy', compact('photo_gallery'));
    }

    public function togglePublish($id)
    {
        return $this->photoGallery->togglePublish($id);
    }

    public function upload($id)
    {
        try {
            $this->photoGallery->upload($id, Input::file());

            return Response::json('success', 200);
        } catch (ValidationException $e) {
            return Response::json('error: '.$e->getErrors(), 400);
        }
    }

    public function deleteImage()
    {
        return $this->photoGallery->deletePhoto(Input::get('file'));
    }
}
