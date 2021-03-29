<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

use Illuminate\Support\Facades\DB;

class homecontroller extends Controller
{
    public function index() {
        $posts = Post::orderBy('id', 'DESC')->get();
        return view('admin')->with('posts',$posts);
    }

    public function create() {
        $posts= new Post();
        return view('add-post');
    }

    public function store(Request $request) {
        $posts= new Post();
        $posts->title = $request->input('title');
        $posts->description = $request->input('description');
        $posts->save();
        return redirect('/')->with('post_created', 'post has been created successfully');
    }

    public function delete($id) {
        Post::where('id', $id)->delete();
        return redirect('/')->with('delete_post', 'Post has been deleted successfully!');
    }

    public function edit($id) {
        $post = Post::find($id);
        return view('editPost', compact('post'));
    }

    public function editPost(Request $request,$id) {
        $post = Post::findOrFail($id);
        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->update();
        return redirect('/')->with('edit-post', 'post updated successfully!');
    }

}
