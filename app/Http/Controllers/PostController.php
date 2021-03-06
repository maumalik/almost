<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with(['user','likes'])->orderBy('id', 'desc')->paginate(5);
        return view('pages.index',['posts'=>$posts]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'body' => 'required',
        ]);
            
        $request->user()->posts()->create([
            'body' => $request->body
        ]);

        return back();

    }
}
