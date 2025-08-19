<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GSTCalculatorController extends Controller
{
    public function index()
    {
        // Get blogs with GST tag
        $gstBlogs = \App\Models\Blog::where('tags', 'like', '%GST%')
                    ->orderBy('created_at', 'desc')
                    ->limit(5)
                    ->get();
        
        return view('gst-calculator', compact('gstBlogs'));
    }
}