@extends('layouts.app')

@section('title', 'Blog - Financial Tips, Tax Guides & Calculator Tutorials | CalcPro')
@section('description', 'Read our latest articles on financial planning, tax calculations, GST, VAT, and more. Expert tips and guides to help you make better financial decisions.')
@section('keywords', 'financial blog, tax guides, GST articles, VAT tutorials, calculator guides, financial planning tips')

@section('content')
<div class="bg-gradient-to-b from-blue-50 to-white py-12">
    <div class="container mx-auto px-4 max-w-7xl">
        <!-- Page Header -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Financial Insights & Guides</h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Expert articles on tax calculations, financial planning, and using our calculators effectively
            </p>
        </div>

        <!-- Search Bar -->
        <div class="max-w-2xl mx-auto mb-12">
            <form action="{{ route('blog.index') }}" method="GET" class="relative">
                <input 
                    type="text" 
                    name="search" 
                    value="{{ request('search') }}"
                    placeholder="Search articles..."
                    class="w-full px-6 py-4 pr-12 text-lg border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all"
                >
                <button type="submit" class="absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-500 hover:text-blue-600 transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </button>
            </form>
            
            @if(request('search'))
            <div class="mt-4 text-center">
                <p class="text-gray-600">
                    Showing results for "<strong>{{ request('search') }}</strong>"
                    <a href="{{ route('blog.index') }}" class="ml-2 text-blue-600 hover:underline">Clear search</a>
                </p>
            </div>
            @endif
        </div>

        <!-- Blog Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
            @forelse($blogs as $blog)
            <article class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-lg transition-shadow">
                @if($blog->featured_image)
                <a href="{{ route('blog.show', $blog->slug) }}" class="block">
                    <img 
                        src="{{ $blog->featured_image }}" 
                        alt="{{ $blog->title }}"
                        class="w-full h-48 object-cover hover:scale-105 transition-transform duration-300"
                    >
                </a>
                @else
                <a href="{{ route('blog.show', $blog->slug) }}" class="block">
                    <div class="w-full h-48 bg-gradient-to-br from-blue-100 to-indigo-100 flex items-center justify-center">
                        <svg class="w-16 h-16 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                        </svg>
                    </div>
                </a>
                @endif
                
                <div class="p-6">
                    <div class="flex items-center text-sm text-gray-500 mb-3">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        <time datetime="{{ $blog->created_at->format('Y-m-d') }}">
                            {{ $blog->created_at->format('F d, Y') }}
                        </time>
                        @if($blog->category)
                        <span class="mx-2">•</span>
                        <span class="text-blue-600">{{ $blog->category }}</span>
                        @endif
                    </div>
                    
                    <h2 class="text-xl font-bold text-gray-900 mb-3 line-clamp-2">
                        <a href="{{ route('blog.show', $blog->slug) }}" class="hover:text-blue-600 transition-colors">
                            {{ $blog->title }}
                        </a>
                    </h2>
                    
                    <p class="text-gray-600 mb-4 line-clamp-3">
                        {{ $blog->excerpt ?? Str::limit(strip_tags($blog->content), 150) }}
                    </p>
                    
                    @if($blog->tags)
                    <div class="flex flex-wrap gap-2 mb-4">
                        @foreach(explode(',', $blog->tags) as $tag)
                        <span class="px-3 py-1 bg-gray-100 text-gray-600 text-xs rounded-full">
                            {{ trim($tag) }}
                        </span>
                        @endforeach
                    </div>
                    @endif
                    
                    <a href="{{ route('blog.show', $blog->slug) }}" class="inline-flex items-center text-blue-600 hover:text-blue-700 font-medium transition-colors">
                        Read More
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </article>
            @empty
            <div class="col-span-full text-center py-12">
                <svg class="w-16 h-16 text-gray-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                </svg>
                <h3 class="text-xl font-semibold text-gray-600 mb-2">No articles found</h3>
                <p class="text-gray-500">
                    @if(request('search'))
                        Try searching with different keywords
                    @else
                        Check back soon for new content
                    @endif
                </p>
            </div>
            @endforelse
        </div>

        <!-- Pagination -->
        @if($blogs->hasPages())
        <div class="flex justify-center">
            {{ $blogs->withQueryString()->links() }}
        </div>
        @endif

        <!-- Categories Section -->
        <div class="mt-16 bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Popular Categories</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <a href="{{ route('blog.index', ['search' => 'GST']) }}" class="group">
                    <div class="p-4 bg-gray-50 rounded-lg hover:bg-blue-50 transition-colors">
                        <h3 class="font-semibold text-gray-800 group-hover:text-blue-600">GST Guides</h3>
                        <p class="text-sm text-gray-600 mt-1">Tips for Indian businesses</p>
                    </div>
                </a>
                <a href="{{ route('blog.index', ['search' => 'VAT']) }}" class="group">
                    <div class="p-4 bg-gray-50 rounded-lg hover:bg-blue-50 transition-colors">
                        <h3 class="font-semibold text-gray-800 group-hover:text-blue-600">VAT Tutorials</h3>
                        <p class="text-sm text-gray-600 mt-1">UK tax calculations</p>
                    </div>
                </a>
                <a href="{{ route('blog.index', ['search' => 'Tax']) }}" class="group">
                    <div class="p-4 bg-gray-50 rounded-lg hover:bg-blue-50 transition-colors">
                        <h3 class="font-semibold text-gray-800 group-hover:text-blue-600">Tax Planning</h3>
                        <p class="text-sm text-gray-600 mt-1">Optimize your taxes</p>
                    </div>
                </a>
                <a href="{{ route('blog.index', ['search' => 'Calculator']) }}" class="group">
                    <div class="p-4 bg-gray-50 rounded-lg hover:bg-blue-50 transition-colors">
                        <h3 class="font-semibold text-gray-800 group-hover:text-blue-600">Calculator Guides</h3>
                        <p class="text-sm text-gray-600 mt-1">How to use our tools</p>
                    </div>
                </a>
            </div>
        </div>

        <!-- Newsletter Signup -->
        <div class="mt-16 bg-gradient-to-r from-blue-600 to-indigo-600 rounded-2xl p-8 text-white text-center">
            <h2 class="text-3xl font-bold mb-4">Stay Updated</h2>
            <p class="text-xl mb-8 opacity-90">Get the latest tax tips and financial guides delivered to your inbox</p>
            <form class="max-w-md mx-auto">
                <div class="flex gap-4">
                    <input 
                        type="email" 
                        placeholder="Enter your email"
                        class="flex-1 px-4 py-3 rounded-lg text-gray-900 focus:outline-none focus:ring-2 focus:ring-white"
                        required
                    >
                    <button type="submit" class="px-6 py-3 bg-white text-blue-600 font-semibold rounded-lg hover:bg-gray-100 transition-colors">
                        Subscribe
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    .line-clamp-3 {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
</style>
@endpush