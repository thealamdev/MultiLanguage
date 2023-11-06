<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Translate;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::with('translate')->get();
        return view('postIndex', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $post = Post::create([
            'slug' => Str::slug($request->title['en']),
            'status' => $request->status,
        ]);

        foreach ($request->title as $key => $lan) {
            Translate::create([
                'translate_type' => Post::class,
                'translate_id' => $post->id,
                'title' => $lan,
                'local' => $key
            ]);
        }

        return redirect(route('post.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
