<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $latestPosts = Post::latest()->paginate(8);

        return view('welcome', [
            'latestPosts'  => $latestPosts,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $post->load('category', 'tags');

        $related = Post::whereHas('tags', function ($query) use ($post) {
            return $query->whereIn('name', $post->tags->pluck('name'));
        })
            ->where('id', '!=', $post->id)
            ->take(3)
            ->get();

        return view('posts.show-post', [
            'post'    => $post,
            'related' => $related
        ]);
    }

    public function showPostsByCategory(Category $category)
    {
        $category->load('posts')->paginate(8);

        return view('posts.show-category', [
            'category' => $category
        ]);
    }

    public function showPostsbyTag(Tag $tag)
    {
        $tag->load('posts')->paginate(8);

        return view('posts.show-tag', [
            'tag' => $tag
        ]);
    }

    public function search(Request $request)
    {
        $search = $request->search;

        $posts = Post::where('title', 'like', "%" . $search . "%")
            ->paginate(10);

        return view('search-result', [
            'posts' => $posts
        ]);
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
}
