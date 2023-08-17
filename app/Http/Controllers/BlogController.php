<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogStoreRequest;
use App\Models\Blog;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{




    public function index()
    {
        // $allblogs = Blog::all();
        $allblogs = Blog::with('users')->get();

        return response()->json([
            'results' => $allblogs
        ], 200);

        // return view('admin.allblogs',compact('allblogs'));
    }

    public function show($id)
    {

        $blog = Blog::find($id);

        if (!$blog) {
            return response()->json([
                'message' => 'user not found'
            ], 404);
        }

        return response()->json([
            'blogs' => $blog
        ], 200);

        // return view('admin.individual', compact('blog'));
    }

    public function store(BlogStoreRequest $request,$id )
    {

       


        $imagePath = $request->file('image')->store('public/upload');
        $cleanedPath = str_replace('public/', '', $imagePath);
        $imageUrl = config('app.url') . '/storage/' . $cleanedPath;

        
      $user = User::find($id);
    
        if($user){


            Blog::insert([
                'user_id' => $user->id,
                'user_name' => $user->name,
                'title' => $request->title,
                'description' => $request->description,
                // 'image' => $request->file('image')->store('upload'),
                'image' => $imageUrl,
                'thumbnail' => $request->thumbnail,
                'meta_description' => $request->meta_description,
                'meta_title' => $request->meta_title,
                'meta_keywords' => $request->meta_keywords
    
    
    
            ]);
        }else{

            return response()->json([
                'message' => 'No user found'
            ], 200);

        }
        
        


      
        // return redirect()->route('blogs');
        // } catch (\Exception $e) {
        //     return response()->json([], 500);
        // }
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

        return response()->json([
            'message' => 'blog succesfully deleted'
        ], 200);
    }
}
