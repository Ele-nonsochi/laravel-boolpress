<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('admin.posts.home', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* $data = $request->all();

        $newPost = Post::create($data);
        $newPost->save();
        return redirect()->route('admin.posts.index'); */
        $post = new Post();
        $post->fill($request->all());
        //prendo nella colonna user prendo l'id del utente loggato
        $post->user_id = Auth::user()->id;
        $post->save();
        return redirect()->route("admin.posts.index");
    }

   /*  public function api()
    {
        $posts = Post::all();

        return $posts;
    } */

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        /* $post = Post::findOrFail($id);
        return view('admin.post.edit', compact('post')); */
        return view('admin.posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $data = $request->all();
        $post->update($data);
        return redirect()->route('admin.posts.show', $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        /* $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->route('admin.posts.index'); */
        $post->delete();
        return redirect()->route('admin.posts.index');
    }
}
 