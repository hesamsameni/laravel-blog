<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(){
        $posts = Post::latest()->get();
        return view('posts/index' , compact('posts'));
    }
    public function show(Post $post){
        return view("posts/show" , compact('post'));
}
public function create(){
    return view("posts/create");
}
public function store(Request $request){

    $this->validate(request(),[
        'postTitle' => 'required',
        'postBody' => 'required',
        'postCategory' => 'required'
    ]);
    $post = new Post;
    $post->title = $request->input('postTitle', 'default');
    $post->body = $request->input('postBody','default');
    $post->category = $request->input('postCategory','default');
        $post->save();

    return redirect('posts');
}
}
