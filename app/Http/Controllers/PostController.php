<?php

namespace App\Http\Controllers;
use App\Models\post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $post = new post();
        $post->title = request('title');
        $post->content = request('content');
        $post->save(); 
        return redirect('/posts');
    }

    /**
     * Display the specified resource.
     */
    public function showpost()
    {
        $posts = post::all();
        return view('posts' , compact('posts'));
    }
    public function addpost () {
        return view('addposts');

    }
    public function backtopost () {
        return redirect()->route('viewpost');

    }

    public function welcomepage () {
        return view('welcome');
    }
    public function editpostform (string $id) {
        $post = Post::find($id);
        return view('editpostform', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
      $request->validate([
        'title' => 'required|max:255',
        'body' => 'required',
      ]);
      $post = Post::find($id);
      $post->update($request->all());
      return redirect()->route('viewpost')
        ->with('success', 'Post updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('viewpost')
          ->with('success', 'Post deleted successfully');
      }
}
