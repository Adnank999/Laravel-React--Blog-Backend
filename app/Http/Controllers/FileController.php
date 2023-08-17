<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    function upload(Request $req)
    {
            // $path=$req->file('file')->store('public/upload');
            // return ["result"=>"$path"];

        // $path = Storage::putFile('image', $req->image);
        // return response()->json(['path' => $path]);
    }

    public function getImage(Request $req)
    {
        $filePath = Blog::all('image');
        return response()->json(['path' => $filePath]);

    }
}
