@extends('layouts.app')

@section('title', 'Free GST Calculator Online India - Calculate GST Instantly | CalcPro')
@section('description', 'Free online GST calculator for India. Calculate Goods and Services Tax (GST) instantly. Supports all GST rates - 5%, 12%, 18%, 28%. Easy CGST, SGST, IGST calculation for businesses and individuals.')
@section('keywords', 'GST calculator India, free GST calculator, goods and services tax calculator, GST calculation online, CGST SGST calculator, India tax calculator, GST rate calculator 2024')
@section('og_title', 'Free GST Calculator Online India - Calculate GST Instantly')
@section('og_description', 'Calculate Goods and Services Tax (GST) instantly with our free online calculator. Supports all GST rates in India. Perfect for businesses and individuals.')
@section('twitter_title', 'Free GST Calculator Online India')
@section('twitter_description', 'Calculate GST instantly with our free online calculator. Supports all GST rates in India.')

@push('structured_data')
<script type="application/ld+json">
{
  "@{{ '@' }}context": "https://schema.org",
  "@{{ '@' }}type": "WebApplication",
  "name": "Free GST Calculator",
  "description": "Free online GST calculator for India. Calculate Goods and Services Tax instantly with support for all GST rates.",
  "url": "{{ url()->current() }}",
  "applicationCategory": "FinanceApplication",
  "operatingSystem": "Any",
  "permissions": "browser",
  "offers": {
    "@{{ '@' }}type": "Offer",
    "price": "0",
    "priceCurrency": "INR"
  },
  "featureList": [
    "Calculate GST for all rates (0%, 5%, 12%, 18%, 28%)",
    "CGST and SGST breakdown",
    "Tax inclusive and exclusive calculations",
    "Instant results",
    "Mobile responsive"
  ],
  "provider": {
    "@{{ '@' }}type": "Organization",
    "name": "CalcPro",
    "url": "{{ url('/') }}"
  }
}
</script>

<script type="application/ld+json">
{
  "@{{ '@' }}context": "https://schema.org",
  "@{{ '@' }}type": "FAQPage",
  "mainEntity": [
    {
      "@{{ '@' }}type": "Question",
      "name": "What is GST and how is it calculated?",
      "acceptedAnswer": {
        "@{{ '@' }}type": "Answer",
        "text": "GST (Goods and Services Tax) is an indirect tax levied on the supply of goods and services in India. It's calculated as a percentage of the transaction value. For example, if you buy goods worth ₹1000 with 18% GST, the GST amount would be ₹180."
      }
    },
    {
      "@{{ '@' }}type": "Question",
      "name": "What are the different GST rates in India?",
      "acceptedAnswer": {
        "@{{ '@' }}type": "Answer",
        "text": "India has five GST rate slabs: 0% (essential items), 5% (common items), 12% (standard items), 18% (most services and products), and 28% (luxury items and sin goods)."
      }
    },
    {
      "@{{ '@' }}type": "Question",
      "name": "What is the difference between CGST and SGST?",
      "acceptedAnswer": {
        "@{{ '@' }}type": "Answer",
        "text": "CGST (Central GST) is collected by the Central Government, while SGST (State GST) is collected by the State Government. Together, CGST + SGST = Total GST for intra-state transactions. Each is typically half of the total GST rate."
      }
    },
    {
      "@{{ '@' }}type": "Question",
      "name": "Is this GST calculator free to use?",
      "acceptedAnswer": {
        "@{{ '@' }}type": "Answer",
        "text": "Yes, our GST calculator is completely free to use. You can calculate GST for any amount and any applicable rate without any charges or registration requirements."
      }
    },
    {
      "@{{ '@' }}type": "Question",
      "name": "Can I use this calculator for business purposes?",
      "acceptedAnswer": {
        "@{{ '@' }}type": "Answer",
        "text": "Absolutely! Our GST calculator is designed for both personal and business use. It's perfect for invoicing, pricing calculations, and tax planning for businesses of all sizes."
      }
    }
  ]
}
</script>

<script type="application/ld+json">
{
  "@{{ '@' }}context": "https://schema.org",
  "@{{ '@' }}type": "BreadcrumbList",
  "itemListElement": [
    {
      "@{{ '@' }}type": "ListItem",
      "position": 1,
      "name": "Home",
      "item": "{{ url('/') }}"
    },
    {
      "@{{ '@' }}type": "ListItem",
      "position": 2,
      "name": "Free GST Calculator",
      "item": "{{ url()->current() }}"
    }
  ]
}
</script>
@endpush

@section('content')
<div class="bg-gradient-to-b from-blue-50 to-white py-12">
    <div class="container mx-auto px-4 max-w-7xl">
        <!-- Page Header -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Free GST Calculator Online</h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Calculate Goods and Services Tax (GST) instantly with our free online GST calculator for India. Perfect for businesses, freelancers, and individuals to compute accurate GST amounts for all tax rates.
            </p>
        </div>

        <!-- Main Content Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            <!-- Calculator Section -->
            <div class="lg:col-span-2">
                <!-- Calculator Form -->
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
                    <form id="gst-calculator-form">
                        <!-- First Row: Amount and GST Rate -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <!-- Amount Input -->
                            <div>
                                <label for="amount" class="block text-sm font-semibold text-gray-700 mb-2">
                                    Enter Amount (₹)
                                </label>
                                <div class="relative">
                                    <span class="absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-500 text-lg">₹</span>
                                    <input 
                                        type="number" 
                                        id="amount" 
                                        name="amount" 
                                        class="w-full pl-10 pr-4 py-4 text-lg border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all"
                                        placeholder="0.00"
                                        step="0.01"
                                        min="0"
                                        required
                                    >
                                </div>
                            </div>

                            <!-- GST Rate Selection -->
                            <div>
                                <label for="gst-rate" class="block text-sm font-semibold text-gray-700 mb-2">
                                    GST Rate (%)
                                </label>
                                <select 
                                    id="gst-rate" 
                                    name="gst_rate" 
                                    class="w-full px-4 py-4 text-lg border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none appearance-none bg-white transition-all"
                                >
                                    <option value="0">0% (Exempted)</option>
                                    <option value="5">5% (Essential Items)</option>
                                    <option value="12">12% (Standard Items)</option>
                                    <option value="18" selected>18% (Standard Services)</option>
                                    <option value="28">28% (Luxury Items)</option>
                                </select>
                            </div>
                        </div>

                        <!-- Second Row: Tax Type Selection -->
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">
                                Tax Type
                            </label>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <label class="relative cursor-pointer">
                                    <input 
                                        type="radio" 
                                        name="tax_type" 
                                        value="exclusive" 
                                        checked
                                        class="peer sr-only"
                                    >
                                    <div class="px-4 py-4 text-center border-2 border-gray-300 rounded-xl peer-checked:border-blue-500 peer-checked:bg-blue-50 hover:border-gray-400 transition-all">
                                        <p class="font-medium">Exclusive of Tax</p>
                                        <p class="text-xs text-gray-600 mt-1">Add GST to amount</p>
                                    </div>
                                </label>
                                <label class="relative cursor-pointer">
                                    <input 
                                        type="radio" 
                                        name="tax_type" 
                                        value="inclusive"
                                        class="peer sr-only"
                                    >
                                    <div class="px-4 py-4 text-center border-2 border-gray-300 rounded-xl peer-checked:border-blue-500 peer-checked:bg-blue-50 hover:border-gray-400 transition-all">
                                        <p class="font-medium">Inclusive of Tax</p>
                                        <p class="text-xs text-gray-600 mt-1">GST included in amount</p>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <!-- Results Section -->
                        <div class="mt-8 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-xl p-8">
                            <h2 class="text-xl font-bold text-gray-800 mb-6">Calculation Results</h2>
                            
                            <div class="space-y-4">
                                <div class="flex justify-between items-center pb-4 border-b border-blue-100">
                                    <span class="text-gray-600 font-medium">Original Amount</span>
                                    <span class="text-2xl font-bold text-gray-800" id="original-amount">₹0.00</span>
                                </div>
                                
                                <div class="flex justify-between items-center pb-4 border-b border-blue-100">
                                    <span class="text-gray-600 font-medium">GST Amount</span>
                                    <span class="text-2xl font-bold text-gray-800" id="gst-amount">₹0.00</span>
                                </div>
                                
                                <div class="flex justify-between items-center pt-2">
                                    <span class="text-gray-800 font-bold text-lg">Total Amount</span>
                                    <span class="text-3xl font-bold text-blue-600" id="total-amount">₹0.00</span>
                                </div>
                            </div>

                            <!-- GST Breakdown -->
                            <div class="mt-6 grid grid-cols-2 gap-4 p-4 bg-white/50 rounded-lg">
                                <div class="text-center">
                                    <p class="text-sm text-gray-600 mb-1">CGST @ <span id="cgst-rate">9</span>%</p>
                                    <p class="text-lg font-semibold text-gray-800" id="cgst-amount">₹0.00</p>
                                </div>
                                <div class="text-center">
                                    <p class="text-sm text-gray-600 mb-1">SGST @ <span id="sgst-rate">9</span>%</p>
                                    <p class="text-lg font-semibold text-gray-800" id="sgst-amount">₹0.00</p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Information Section -->
                <div class="mt-12">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">What is GST (Goods and Services Tax)?</h2>
                    <div class="prose prose-lg max-w-none text-gray-600">
                        <p class="mb-6">
                            The Goods and Services Tax (GST) is a comprehensive, multi-stage, destination-based tax system implemented in India on July 1, 2017. GST replaced multiple cascading taxes levied by the central and state governments, creating a unified tax structure across the country.
                        </p>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 my-8">
                            <div>
                                <h3 class="text-xl font-semibold text-gray-800 mb-4">Types of GST</h3>
                                <ul class="space-y-3">
                                    <li class="flex items-start">
                                        <span class="text-blue-500 mr-3 mt-1">•</span>
                                        <div>
                                            <strong class="text-gray-800">CGST:</strong>
                                            <span class="text-gray-600"> Central Goods and Services Tax</span>
                                        </div>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-blue-500 mr-3 mt-1">•</span>
                                        <div>
                                            <strong class="text-gray-800">SGST:</strong>
                                            <span class="text-gray-600"> State Goods and Services Tax</span>
                                        </div>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-blue-500 mr-3 mt-1">•</span>
                                        <div>
                                            <strong class="text-gray-800">IGST:</strong>
                                            <span class="text-gray-600"> Integrated Goods and Services Tax</span>
                                        </div>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-blue-500 mr-3 mt-1">•</span>
                                        <div>
                                            <strong class="text-gray-800">UTGST:</strong>
                                            <span class="text-gray-600"> Union Territory Goods and Services Tax</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            
                            <div>
                                <h3 class="text-xl font-semibold text-gray-800 mb-4">GST Rate Structure</h3>
                                <ul class="space-y-3">
                                    <li class="flex items-start">
                                        <span class="text-blue-500 mr-3 mt-1">•</span>
                                        <div>
                                            <strong class="text-gray-800">0%:</strong>
                                            <span class="text-gray-600"> Essential items like milk, fruits, vegetables</span>
                                        </div>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-blue-500 mr-3 mt-1">•</span>
                                        <div>
                                            <strong class="text-gray-800">5%:</strong>
                                            <span class="text-gray-600"> Common use items like sugar, tea, coffee</span>
                                        </div>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-blue-500 mr-3 mt-1">•</span>
                                        <div>
                                            <strong class="text-gray-800">12%:</strong>
                                            <span class="text-gray-600"> Standard rate items like mobile phones</span>
                                        </div>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-blue-500 mr-3 mt-1">•</span>
                                        <div>
                                            <strong class="text-gray-800">18%:</strong>
                                            <span class="text-gray-600"> Most services and products</span>
                                        </div>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-blue-500 mr-3 mt-1">•</span>
                                        <div>
                                            <strong class="text-gray-800">28%:</strong>
                                            <span class="text-gray-600"> Luxury items and sin goods</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="bg-blue-50 border-l-4 border-blue-500 p-6 rounded-r-lg mt-8">
                            <h4 class="text-lg font-semibold text-gray-800 mb-2">How to Use This GST Calculator</h4>
                            <ol class="list-decimal list-inside space-y-2 text-gray-600">
                                <li>Enter the amount for which you want to calculate GST</li>
                                <li>Select the applicable GST rate (0%, 5%, 12%, 18%, or 28%) based on your product/service category</li>
                                <li>Choose whether the amount is exclusive or inclusive of GST</li>
                                <li>The calculator will instantly show the GST amount, CGST, SGST breakdown, and total amount</li>
                            </ol>
                        </div>
                    </div>
                </div>

                <!-- FAQ Section -->
                <div class="mt-16">
                    <h2 class="text-3xl font-bold text-gray-900 mb-8">Frequently Asked Questions (FAQ)</h2>
                    <div class="space-y-4">
                        <!-- FAQ Item 1 -->
                        <div class="bg-white border border-gray-200 rounded-lg overflow-hidden">
                            <button class="w-full text-left p-6 focus:outline-none rounded-lg hover:bg-gray-50 transition-colors duration-200" onclick="toggleFAQ('faq-1')">
                                <div class="flex justify-between items-center">
                                    <h3 class="text-lg font-semibold text-gray-800">What is GST and how is it calculated?</h3>
                                    <svg id="faq-1-icon" class="w-5 h-5 text-gray-500 transform transition-transform duration-300 ease-in-out" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </div>
                            </button>
                            <div id="faq-1" class="overflow-hidden transition-all duration-300 ease-in-out max-h-0">
                                <div class="px-6 pb-6">
                                    <p class="text-gray-600">GST (Goods and Services Tax) is an indirect tax levied on the supply of goods and services in India. It's calculated as a percentage of the transaction value. For example, if you buy goods worth ₹1000 with 18% GST, the GST amount would be ₹180.</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- FAQ Item 2 -->
                        <div class="bg-white border border-gray-200 rounded-lg overflow-hidden">
                            <button class="w-full text-left p-6 focus:outline-none rounded-lg hover:bg-gray-50 transition-colors duration-200" onclick="toggleFAQ('faq-2')">
                                <div class="flex justify-between items-center">
                                    <h3 class="text-lg font-semibold text-gray-800">What are the different GST rates in India?</h3>
                                    <svg id="faq-2-icon" class="w-5 h-5 text-gray-500 transform transition-transform duration-300 ease-in-out" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </div>
                            </button>
                            <div id="faq-2" class="overflow-hidden transition-all duration-300 ease-in-out max-h-0">
                                <div class="px-6 pb-6">
                                    <p class="text-gray-600">India has five GST rate slabs: 0% (essential items), 5% (common items), 12% (standard items), 18% (most services and products), and 28% (luxury items and sin goods).</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- FAQ Item 3 -->
                        <div class="bg-white border border-gray-200 rounded-lg overflow-hidden">
                            <button class="w-full text-left p-6 focus:outline-none rounded-lg hover:bg-gray-50 transition-colors duration-200" onclick="toggleFAQ('faq-3')">
                                <div class="flex justify-between items-center">
                                    <h3 class="text-lg font-semibold text-gray-800">What is the difference between CGST and SGST?</h3>
                                    <svg id="faq-3-icon" class="w-5 h-5 text-gray-500 transform transition-transform duration-300 ease-in-out" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </div>
                            </button>
                            <div id="faq-3" class="overflow-hidden transition-all duration-300 ease-in-out max-h-0">
                                <div class="px-6 pb-6">
                                    <p class="text-gray-600">CGST (Central GST) is collected by the Central Government, while SGST (State GST) is collected by the State Government. Together, CGST + SGST = Total GST for intra-state transactions. Each is typically half of the total GST rate.</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- FAQ Item 4 -->
                        <div class="bg-white border border-gray-200 rounded-lg overflow-hidden">
                            <button class="w-full text-left p-6 focus:outline-none rounded-lg hover:bg-gray-50 transition-colors duration-200" onclick="toggleFAQ('faq-4')">
                                <div class="flex justify-between items-center">
                                    <h3 class="text-lg font-semibold text-gray-800">Is this GST calculator free to use?</h3>
                                    <svg id="faq-4-icon" class="w-5 h-5 text-gray-500 transform transition-transform duration-300 ease-in-out" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </div>
                            </button>
                            <div id="faq-4" class="overflow-hidden transition-all duration-300 ease-in-out max-h-0">
                                <div class="px-6 pb-6">
                                    <p class="text-gray-600">Yes, our GST calculator is completely free to use. You can calculate GST for any amount and any applicable rate without any charges or registration requirements.</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- FAQ Item 5 -->
                        <div class="bg-white border border-gray-200 rounded-lg overflow-hidden">
                            <button class="w-full text-left p-6 focus:outline-none rounded-lg hover:bg-gray-50 transition-colors duration-200" onclick="toggleFAQ('faq-5')">
                                <div class="flex justify-between items-center">
                                    <h3 class="text-lg font-semibold text-gray-800">Can I use this calculator for business purposes?</h3>
                                    <svg id="faq-5-icon" class="w-5 h-5 text-gray-500 transform transition-transform duration-300 ease-in-out" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </div>
                            </button>
                            <div id="faq-5" class="overflow-hidden transition-all duration-300 ease-in-out max-h-0">
                                <div class="px-6 pb-6">
                                    <p class="text-gray-600">Absolutely! Our GST calculator is designed for both personal and business use. It's perfect for invoicing, pricing calculations, and tax planning for businesses of all sizes.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="lg:col-span-1">
                <!-- Quick Tools -->
                <div class="bg-gradient-to-br from-blue-600 to-indigo-600 rounded-2xl p-6 text-white mb-8">
                    <h3 class="text-xl font-bold mb-4">More Financial Tools</h3>
                    <ul class="space-y-3">
                        <li>
                            <a href="{{ route('vat.calculator') }}" class="flex items-center justify-between group">
                                <span class="group-hover:translate-x-1 transition-transform">VAT Calculator (UK)</span>
                                <svg class="w-5 h-5 opacity-50 group-hover:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center justify-between group">
                                <span class="group-hover:translate-x-1 transition-transform">Income Tax Calculator</span>
                                <svg class="w-5 h-5 opacity-50 group-hover:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Blog Section -->
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6 pb-4 border-b border-gray-100">Latest GST Insights</h2>
                    
                    <div class="space-y-6">
                        @forelse($gstBlogs as $blog)
                        <!-- Blog Item -->
                        <article class="group cursor-pointer">
                            <a href="{{ route('blog.show', $blog->slug) }}">
                                <h3 class="font-semibold text-gray-800 mb-2 group-hover:text-blue-600 transition-colors">
                                    {{ $blog->title }}
                                </h3>
                                <p class="text-sm text-gray-600 mb-2 line-clamp-2">
                                    {{ $blog->excerpt ?? Str::limit(strip_tags($blog->content), 100) }}
                                </p>
                                <div class="flex items-center text-xs text-gray-500">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                    <span>{{ $blog->created_at->format('F d, Y') }}</span>
                                </div>
                            </a>
                        </article>
                        @empty
                        <p class="text-gray-500 text-center py-4">No GST articles available at the moment.</p>
                        @endforelse
                    </div>

                    @if($gstBlogs->count() > 0)
                    <div class="mt-8 pt-6 border-t border-gray-100">
                        <a href="{{ route('blog.index', ['search' => 'GST']) }}" class="inline-flex items-center text-blue-600 hover:text-blue-700 font-medium transition-colors">
                            View all GST articles
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    // GST Calculator Logic
    document.addEventListener('DOMContentLoaded', function() {
        const amountInput = document.getElementById('amount');
        const gstRateSelect = document.getElementById('gst-rate');
        const taxTypeInputs = document.querySelectorAll('input[name="tax_type"]');
        
        // Result elements
        const originalAmountEl = document.getElementById('original-amount');
        const gstAmountEl = document.getElementById('gst-amount');
        const totalAmountEl = document.getElementById('total-amount');
        const cgstRateEl = document.getElementById('cgst-rate');
        const sgstRateEl = document.getElementById('sgst-rate');
        const cgstAmountEl = document.getElementById('cgst-amount');
        const sgstAmountEl = document.getElementById('sgst-amount');

        function formatCurrency(amount) {
            return new Intl.NumberFormat('en-IN', {
                style: 'currency',
                currency: 'INR',
                minimumFractionDigits: 2
            }).format(amount);
        }

        function calculateGST() {
            const amount = parseFloat(amountInput.value) || 0;
            const gstRate = parseFloat(gstRateSelect.value) || 0;
            const taxType = document.querySelector('input[name="tax_type"]:checked').value;

            let originalAmount, gstAmount, totalAmount;

            if (taxType === 'exclusive') {
                // Tax is added to the amount
                originalAmount = amount;
                gstAmount = (amount * gstRate) / 100;
                totalAmount = amount + gstAmount;
            } else {
                // Tax is included in the amount
                totalAmount = amount;
                originalAmount = amount / (1 + gstRate / 100);
                gstAmount = totalAmount - originalAmount;
            }

            // Calculate CGST and SGST (each is half of total GST)
            const cgstRate = gstRate / 2;
            const sgstRate = gstRate / 2;
            const cgstAmount = gstAmount / 2;
            const sgstAmount = gstAmount / 2;

            // Update display with formatted currency
            originalAmountEl.textContent = formatCurrency(originalAmount);
            gstAmountEl.textContent = formatCurrency(gstAmount);
            totalAmountEl.textContent = formatCurrency(totalAmount);
            
            cgstRateEl.textContent = cgstRate.toFixed(1);
            sgstRateEl.textContent = sgstRate.toFixed(1);
            cgstAmountEl.textContent = formatCurrency(cgstAmount);
            sgstAmountEl.textContent = formatCurrency(sgstAmount);
        }

        // Add event listeners
        amountInput.addEventListener('input', calculateGST);
        gstRateSelect.addEventListener('change', calculateGST);
        taxTypeInputs.forEach(input => {
            input.addEventListener('change', calculateGST);
        });

        // Initial calculation
        calculateGST();
    });

    // FAQ Toggle functionality
    function toggleFAQ(faqId) {
        const faqContent = document.getElementById(faqId);
        const faqIcon = document.getElementById(faqId + '-icon');
        
        if (faqContent.style.maxHeight === '0px' || faqContent.style.maxHeight === '') {
            // Show the FAQ - expand
            faqContent.style.maxHeight = faqContent.scrollHeight + 'px';
            faqIcon.style.transform = 'rotate(180deg)';
        } else {
            // Hide the FAQ - collapse
            faqContent.style.maxHeight = '0px';
            faqIcon.style.transform = 'rotate(0deg)';
        }
    }
</script>
@endpush