<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Tag;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $postsOnFooter = Post::latest()
            ->paginate(3);
        $popularPosts = Post::latest()
            ->paginate(4);
        $categories   = Category::all();
        $tags         = Tag::all();

        view()->share('postsOnFooter', $postsOnFooter);
        view()->share('popularPosts', $popularPosts);
        view()->share('categories', $categories);
        view()->share('tags', $tags);
    }
}
