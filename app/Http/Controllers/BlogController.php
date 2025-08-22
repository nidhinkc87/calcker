<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $query = Blog::where('is_published', true);

        // Search functionality
        if ($request->has('search') && $request->search != '') {
            $searchTerm = $request->search;
            $query->where(function($q) use ($searchTerm) {
                $q->where('title', 'like', '%' . $searchTerm . '%')
                  ->orWhere('content', 'like', '%' . $searchTerm . '%')
                  ->orWhere('excerpt', 'like', '%' . $searchTerm . '%')
                  ->orWhere('tags', 'like', '%' . $searchTerm . '%');
            });
        }

        // Get paginated results
        $blogs = $query->orderBy('created_at', 'desc')->paginate(9);

        return view('blog.index', compact('blogs'));
    }

    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)->where('is_published', true)->firstOrFail();
        $relatedBlogs = Blog::where('id', '!=', $blog->id)
                            ->where('is_published', true)
                            ->orderBy('created_at', 'desc')
                            ->limit(3)
                            ->get();
        
        return view('blog.show', compact('blog', 'relatedBlogs'));
    }
}