<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PageController extends Controller
{
    // Homepage
    public function home()
    {
        $posts = Post::latest()->paginate(9); // 9 per page
        return view('home', compact('posts'));
    }

    // About page
    public function about()
    {
        return view('about');
    }

    // Services page
    public function services()
    {
        return view('services');
    }

    // Contact page
    public function contact()
    {
        return view('contact');
    }

    // All posts
    public function posts()
    {
        $posts = Post::latest()->paginate(12);
        return view('posts.index', compact('posts'));
    }

    // Single post
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    // Posts by category
    public function category($category)
    {
        $posts = Post::where('category', $category)->latest()->paginate(12);
        return view('posts.index', compact('posts', 'category'));
    }
}
