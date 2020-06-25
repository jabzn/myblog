<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreatePostRequest;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::with('category', 'tags')
            ->paginate(10);

        return view('admin.posts.index', 
            compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $post = new Post;
        $categories = Category::all();

        return view('admin.posts.create', 
            compact('post', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePostRequest $request)
    {
        $validatedData         = $request->validated();
        $validatedData['slug'] = Str::slug($validatedData['title'], '-');

        if ($request->file('image')) {
            $image     = $request->file('image');
            $fileName  = $image->getClientOriginalName();
            $path      = $request->file('image')->storeAs('images', $fileName, 'public');
            $validatedData['image'] = $fileName;
        }

        $post = Post::create($validatedData);

        //  I'm gonna make it clean this, later! After i learned about Vue.Js!
        if ($post) {
            $tagNames = explode(',', $request->get('tags'));
            $tagIds   = [];
            foreach($tagNames as $tagName) {
                $tag = Tag::firstOrCreate(['name' => $tagName]);
                if ($tag) {
                    $tagIds[] = $tag->id;
                }
            }
            $post->tags()->sync($tagIds);
        }

        return redirect()->route('admin.posts.show', $post);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('admin.posts.show', 
            compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = Category::all();
        
        return view('admin.posts.edit', 
            compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(CreatePostRequest $request, Post $post)
    {
        $editedPost         = $request->validated();
        $editedPost['slug'] = Str::slug($editedPost['title'], '-');

        if ($request->file('image')) {
            $image     = $request->file('image');
            $fileName  = $image->getClientOriginalName();
            $path      = $request->file('image')->storeAs('images', $fileName, 'public');
            $editedPost['image'] = $fileName;
        }

        $post->update($editedPost);

        if ($post) {
            $tagNames = explode(',', $request->get('tags'));
            $tagIds   = [];
            foreach($tagNames as $tagName) {
                $tag = Tag::firstOrCreate(['name' => $tagName]);
                if ($tag) {
                    $tagIds[] = $tag->id;
                }
            }
            $post->tags()->sync($tagIds);
        }
        
        return redirect()->route('admin.posts.show', $post);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('admin.posts');
    }
}
