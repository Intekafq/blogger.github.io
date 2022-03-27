<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    public function show_post()
    {
        $posts = Post::paginate(3);
        return view('welcome' , compact('posts'));
    }

  
    public function show(Request $request)
    {
      
        // $userid = $request->user()->id;
        $posts = Post::where('user_id',Auth()->user())->get();
    
        return view('singlepost',compact('posts'));
    }
    
}
