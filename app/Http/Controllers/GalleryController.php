<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Gallery;
use App\Image;
use App\Http\Controllers\Redirect;
class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function galleryList()
    {
        $galleries = Gallery::all(); 
        $images  = Image::all(); 
        return view("gallery.gallery")->with('galleries',$galleries);
    }

    public function saveGallery(Request $request)
    {   $user = new Gallery();
        $user->name = $request->gallery_name;
        $user->create_by = $request->user_id;
        $user->published = $request->publish;
        $user->save();
        $galleries = Gallery::all(); 

        return view("gallery.gallery")->with('galleries',$galleries);
    }

    public function viewGalleryPics($id)
    {
        $gallery = Gallery::findOrFail($id);
        $images  = Image::where('gallery_id','=', $id)->get();
        return view('gallery.gallery-view',compact('gallery','images'));
    }
    public function imageUpload(Request $request)
    {
        $file = $request->file('file');

        $filename = uniqid() . $file->getClientOriginalName();

        $file->move('gallery/images', $filename);

        $gallery = Gallery::find($request->input('gallery_id'));
        $image = $gallery->images()->create([
            'gallery_id' => $request->input('gallery_id'),
            'file_name' => $filename,
            'file_size' => $file->getClientSize(), 
            'file_mime' => $file->getClientMimeType(),
            'file_path' => 'gallery/images/' .$filename, 
            'created_by' => Auth::user()->id,
            ]);

    }
}

?>