<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    //
    function upload(Request $req)
    {
        $path = $req->file('file')->store('public');
        $pathArray = explode('/', $path);
        $imgPath = $pathArray[1];
        $img = new Image();
        $img->path = $imgPath;
        if ($img->save())
            return redirect('list');
        else
            return redirect('/');
    }

    function list()
    {
        $images = Image::all();
        // return $images;
        return view('display',['imgData'=>$images]);
    }
}
