<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BackendController extends Controller
{
    public function index()
    {
        $allblogs = Blog::all();

        // return response()->json([
        //     'results' => $allblogs
        // ], 200);

        return view('admin.allblogs',compact('allblogs'));
    }


    public function show($id)
    {

        $blog = Blog::find($id);

        if (!$blog) {
            return response()->json([
                'message' => 'user not found'
            ], 404);
        }

        // return response()->json([
        //     'blogs' => $blog
        // ], 200);

        return view('admin.individual', compact('blog'));
    }


    public function delete($id)
    {

        $blogs = Blog::find($id);
        if (!$blogs) {
            return $blogs()->json([
                'message' => 'User not found!'
            ], 404);
        }

        $blogs->delete();

        return redirect()->route('allblogs');

       
    }
}
