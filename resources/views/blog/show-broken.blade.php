@extends('layouts.app')

@section('title')
@if($blog->slug === 'common-gst-mistakes-how-to-avoid-them')
Common GST Mistakes & How to Avoid Them | Ensure Compliance in 2025
@else
{{ $blog->title }} | CalcPro Blog
@endif
@endsection

@section('meta_description')
@if($blog->slug === 'common-gst-mistakes-how-to-avoid-them')
Discover the 13 most common GST mistakes Indian businesses make—from delayed filings and incorrect ITC claims to invoice errors & reverse charge. Learn how to avoid them with practical tips and stay compliant.
@else
{{ $blog->excerpt ?? Str::limit(strip_tags($blog->content), 150) }}
@endif
@endsection

@section('meta_keywords')
@if($blog->slug === 'common-gst-mistakes-how-to-avoid-them')
GST Mistakes, GST Compliance, Tax Tips, GSTR-1, GSTR-3B, ITC Claims, GST Filing, Indian Tax, GST Returns, Tax Errors
@else
{{ $blog->tags }}
@endif
@endsection

@section('structured_data')
@if($blog->slug === 'common-gst-mistakes-how-to-avoid-them')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Article",
    "headline": "{{ $blog->title }}",
    "description": "{{ $blog->excerpt }}",
    "author": {
        "@type": "Organization",
        "name": "CalcPro"
    },
    "publisher": {
        "@type": "Organization",
        "name": "CalcPro",
        "logo": {
            "@type": "ImageObject",
            "url": "{{ url('/favicon.ico') }}"
        }
    },
    "datePublished": "{{ $blog->created_at->toISOString() }}",
    "dateModified": "{{ $blog->updated_at->toISOString() }}",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ url()->current() }}"
    },
    "image": {
        "@type": "ImageObject",
        "url": "{{ url($blog->featured_image) }}",
        "width": 800,
        "height": 400
    },
    "articleSection": "{{ $blog->category }}",
    "keywords": "{{ $blog->tags }}"
}
</script>

<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [{
        "@type": "Question",
        "name": "What are the most common GST mistakes?",
        "acceptedAnswer": {
            "@type": "Answer",
            "text": "The most common GST mistakes include late filing of returns, incorrect ITC claims, manual data entry errors, mismatches between GSTR-1 and GSTR-3B, and ignoring reverse charge mechanism requirements."
        }
    }, {
        "@type": "Question",
        "name": "How can I avoid GST filing penalties?",
        "acceptedAnswer": {
            "@type": "Answer",
            "text": "To avoid GST filing penalties, maintain a GST calendar with deadlines, automate reminders using software, assign clear responsibilities to team members, and file returns on time even if no business activity occurred."
        }
    }, {
        "@type": "Question",
        "name": "What is the difference between GSTR-1 and GSTR-3B?",
        "acceptedAnswer": {
            "@type": "Answer",
            "text": "GSTR-1 contains detailed sales information while GSTR-3B is a summary return. Discrepancies between these returns often trigger compliance notices, so monthly reconciliation is essential."
        }
    }]
}
</script>
@else
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Article",
    "headline": "{{ $blog->title }}",
    "description": "{{ $blog->excerpt }}",
    "author": {
        "@type": "Organization",
        "name": "CalcPro"
    },
    "publisher": {
        "@type": "Organization",
        "name": "CalcPro",
        "logo": {
            "@type": "ImageObject",
            "url": "{{ url('/favicon.ico') }}"
        }
    },
    "datePublished": "{{ $blog->created_at->toISOString() }}",
    "dateModified": "{{ $blog->updated_at->toISOString() }}",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ url()->current() }}"
    },
    "image": {
        "@type": "ImageObject",
        "url": "{{ $blog->featured_image ? url($blog->featured_image) : url('/favicon.ico') }}",
        "width": 800,
        "height": 400
    },
    "articleSection": "{{ $blog->category ?? 'Blog' }}",
    "keywords": "{{ $blog->tags ?? 'blog, article' }}"
}
</script>
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

        <!-- Related Articles -->
        @if($relatedBlogs->count() > 0)
        <div class="mt-16">
            <h2 class="text-3xl font-bold text-gray-900 mb-8">Related Articles</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($relatedBlogs as $relatedBlog)
                <article class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-lg transition-shadow">
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-3">
                            <time datetime="{{ $relatedBlog->created_at->format('Y-m-d') }}">
                                {{ $relatedBlog->created_at->format('M d, Y') }}
                            </time>
                        </div>
                        
                        <h3 class="text-lg font-bold text-gray-900 mb-3 line-clamp-2">
                            <a href="{{ route('blog.show', $relatedBlog->slug) }}" class="hover:text-blue-600 transition-colors">
                                {{ $relatedBlog->title }}
                            </a>
                        </h3>
                        
                        <p class="text-gray-600 text-sm line-clamp-3 mb-4">
                            {{ $relatedBlog->excerpt ?? Str::limit(strip_tags($relatedBlog->content), 100) }}
                        </p>
                        
                        <a href="{{ route('blog.show', $relatedBlog->slug) }}" class="inline-flex items-center text-blue-600 hover:text-blue-700 font-medium text-sm transition-colors">
                            Read More
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </article>
                @endforeach
            </div>
        </div>
        @endif

        <!-- CTA Section -->
        <div class="mt-16 bg-gradient-to-r from-blue-600 to-indigo-600 rounded-2xl p-8 text-white text-center">
            <h2 class="text-3xl font-bold mb-4">Try Our Financial Calculators</h2>
            <p class="text-xl mb-8 opacity-90">Make accurate calculations for GST, VAT, and more</p>
            <div class="flex flex-wrap gap-4 justify-center">
                <a href="{{ route('gst.calculator') }}" class="px-6 py-3 bg-white text-blue-600 font-semibold rounded-lg hover:bg-gray-100 transition-colors">
                    GST Calculator
                </a>
                <a href="{{ route('vat.calculator') }}" class="px-6 py-3 bg-white text-blue-600 font-semibold rounded-lg hover:bg-gray-100 transition-colors">
                    VAT Calculator
                </a>
            </div>
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
    .prose h2 {
        margin-top: 2rem;
        margin-bottom: 1rem;
        font-size: 1.875rem;
        font-weight: 700;
    }
    .prose h3 {
        margin-top: 1.5rem;
        margin-bottom: 0.75rem;
        font-size: 1.5rem;
        font-weight: 600;
    }
    .prose p {
        margin-bottom: 1.25rem;
        line-height: 1.75;
    }
    .prose ul, .prose ol {
        margin-bottom: 1.25rem;
        padding-left: 1.5rem;
    }
    .prose li {
        margin-bottom: 0.5rem;
    }
</style>
@endpush