<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VATCalculatorController extends Controller
{
    public function index()
    {
        // Get blogs with VAT tag
        $vatBlogs = \App\Models\Blog::where('tags', 'like', '%VAT%')
                    ->orderBy('created_at', 'desc')
                    ->limit(5)
                    ->get();
        
        return view('vat-calculator', compact('vatBlogs'));
    }
}