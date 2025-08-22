@extends('layouts.app')

@section('title')
@if($blog->slug === 'common-gst-mistakes-how-to-avoid-them')
Common GST Mistakes & How to Avoid Them | Ensure Compliance in 2025
@elseif($blog->slug === 'e-invoicing-under-gst-complete-implementation-guide-2025')
E-Invoicing Under GST India – Step-by-Step Implementation Guide 2025
@else
{{ $blog->title }} | CalcPro Blog
@endif
@endsection

@section('meta_description')
@if($blog->slug === 'common-gst-mistakes-how-to-avoid-them')
Discover the 13 most common GST mistakes Indian businesses make—from delayed filings and incorrect ITC claims to invoice errors & reverse charge. Learn how to avoid them with practical tips and stay compliant.
@elseif($blog->slug === 'e-invoicing-under-gst-complete-implementation-guide-2025')
Comprehensive guide to GST e-Invoicing in India. Learn applicability, exemptions, reporting timelines, penalties, and a step-by-step process for compliance in 2025.
@else
{{ $blog->excerpt ?? Str::limit(strip_tags($blog->content), 150) }}
@endif
@endsection

@section('meta_keywords')
@if($blog->slug === 'common-gst-mistakes-how-to-avoid-them')
GST Mistakes, GST Compliance, Tax Tips, GSTR-1, GSTR-3B, ITC Claims, GST Filing, Indian Tax, GST Returns, Tax Errors
@elseif($blog->slug === 'e-invoicing-under-gst-complete-implementation-guide-2025')
E-Invoicing under GST, GST e-invoice process, IRP, IRN, GST compliance 2025, GST reporting deadlines, GST e-invoice guide
@else
{{ $blog->tags }}
@endif
@endsection

@section('content')
<div class="bg-gradient-to-b from-blue-50 to-white py-12">
    <div class="container mx-auto px-4 max-w-4xl">
        <!-- Breadcrumb -->
        <nav class="flex items-center text-sm text-gray-600 mb-8">
            <a href="{{ route('blog.index') }}" class="hover:text-blue-600">Blogs</a>
            <svg class="w-4 h-4 mx-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
            @if($blog->category)
            <span>{{ $blog->category }}</span>
            @endif
        </nav>

        <!-- Article -->
        <article>
            <!-- Header -->
            <header class="mb-8">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">{{ $blog->title }}</h1>
                
                <div class="flex items-center text-gray-600 mb-6">
                    <time datetime="{{ $blog->created_at->format('Y-m-d') }}">
                        {{ $blog->created_at->format('F d, Y') }}
                    </time>
                    @if($blog->category)
                    <span class="mx-2">•</span>
                    <span class="text-blue-600">{{ $blog->category }}</span>
                    @endif
                    @if($blog->author)
                    <span class="mx-2">•</span>
                    <span>By {{ $blog->author }}</span>
                    @endif
                </div>

                @if($blog->excerpt)
                <p class="text-xl text-gray-600 leading-relaxed">{{ $blog->excerpt }}</p>
                @endif
            </header>

            <!-- Featured Image -->
            @if($blog->featured_image)
            <img 
                src="{{ $blog->featured_image }}" 
                alt="{{ $blog->title }}"
                class="w-full rounded-xl shadow-sm mb-8"
            >
            @endif

            <!-- Content -->
            <div class="prose prose-lg max-w-none text-gray-700 mb-12">
                {!! $blog->content !!}
            </div>

            <!-- Tags -->
            @if($blog->tags)
            <div class="flex flex-wrap gap-2 mb-12 pb-12 border-b border-gray-200">
                @foreach(explode(',', $blog->tags) as $tag)
                <a href="{{ route('blog.index', ['search' => trim($tag)]) }}" class="px-4 py-2 bg-gray-100 text-gray-700 rounded-full hover:bg-blue-100 hover:text-blue-700 transition-colors">
                    {{ trim($tag) }}
                </a>
                @endforeach
            </div>
            @endif
        </article>

        <!-- CTA Section -->
        <div class="mt-16 bg-gradient-to-r from-blue-600 to-indigo-600 rounded-2xl p-8 text-white text-center">
            <h2 class="text-3xl font-bold mb-4">Try Our Financial Calculators</h2>
            <p class="text-xl mb-8 opacity-90">Make accurate calculations for GST, VAT, and more</p>
            <div class="flex flex-wrap gap-4 justify-center">
                <a href="{{ route('gst.calculator') }}" class="px-6 py-3 bg-white text-blue-600 font-semibold rounded-lg hover:bg-gray-100 transition-colors">
                    GST Calculator
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .prose {
        max-width: none;
    }
    .prose h1 {
        font-size: 2.25rem;
        font-weight: 800;
        line-height: 1.2;
        margin-bottom: 1.5rem;
        color: #1f2937;
    }
    .prose h2 {
        font-size: 1.875rem;
        font-weight: 700;
        line-height: 1.3;
        margin-top: 2.5rem;
        margin-bottom: 1rem;
        color: #1f2937;
    }
    .prose h3 {
        font-size: 1.5rem;
        font-weight: 600;
        line-height: 1.4;
        margin-top: 2rem;
        margin-bottom: 0.75rem;
        color: #374151;
    }
    .prose p {
        font-size: 1.125rem;
        line-height: 1.75;
        margin-bottom: 1.5rem;
        color: #374151;
    }
    .prose p strong {
        font-weight: 600;
        color: #1f2937;
    }
    .prose ul {
        margin-top: 1rem;
        margin-bottom: 1.5rem;
        padding-left: 1.5rem;
    }
    .prose ol {
        margin-top: 1rem;
        margin-bottom: 1.5rem;
        padding-left: 1.5rem;
    }
    .prose li {
        margin-bottom: 0.75rem;
        line-height: 1.7;
        color: #374151;
    }
    .prose li p {
        margin-bottom: 0.5rem;
    }
    .prose blockquote {
        border-left: 4px solid #3b82f6;
        padding-left: 1rem;
        margin: 1.5rem 0;
        font-style: italic;
        color: #6b7280;
    }
    .prose code {
        background-color: #f3f4f6;
        padding: 0.25rem 0.5rem;
        border-radius: 0.25rem;
        font-size: 0.875rem;
        color: #1f2937;
    }
    .prose pre {
        background-color: #1f2937;
        color: #f9fafb;
        padding: 1rem;
        border-radius: 0.5rem;
        overflow-x: auto;
        margin: 1.5rem 0;
    }
    .prose table {
        width: 100%;
        margin: 1.5rem 0;
        border-collapse: collapse;
    }
    .prose th,
    .prose td {
        border: 1px solid #e5e7eb;
        padding: 0.75rem;
        text-align: left;
    }
    .prose th {
        background-color: #f9fafb;
        font-weight: 600;
    }
    .prose a {
        color: #3b82f6;
        text-decoration: underline;
        font-weight: 500;
    }
    .prose a:hover {
        color: #1d4ed8;
    }
    
    /* Specific spacing fixes */
    .prose .content-section {
        margin-bottom: 2rem;
    }
    
    .prose h2:first-child {
        margin-top: 0;
    }
    
    .prose p:last-child {
        margin-bottom: 0;
    }
</style>
@endpush