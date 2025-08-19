@extends('layouts.app')

@section('title', 'Free VAT Calculator UK - Calculate VAT Online | CalcPro')
@section('description', 'Free online VAT calculator for UK businesses. Calculate Value Added Tax instantly with our easy-to-use tool. Supports all UK VAT rates (0%, 5%, 20%). Perfect for businesses and individuals.')
@section('keywords', 'VAT calculator UK, free VAT calculator, value added tax calculator, VAT calculation online, UK tax calculator, VAT rate calculator 2024, British VAT calculator')
@section('og_title', 'Free VAT Calculator UK - Calculate VAT Online Instantly')
@section('og_description', 'Calculate Value Added Tax (VAT) instantly with our free online calculator for UK businesses. Supports all UK VAT rates. Perfect for businesses and individuals.')
@section('twitter_title', 'Free VAT Calculator UK')
@section('twitter_description', 'Calculate VAT instantly with our free online calculator. Supports all UK VAT rates.')

@push('structured_data')
<script type="application/ld+json">
{
  "@{{ '@' }}context": "https://schema.org",
  "@{{ '@' }}type": "WebApplication",
  "name": "Free VAT Calculator UK",
  "description": "Free online VAT calculator for UK businesses. Calculate Value Added Tax instantly with support for all UK VAT rates.",
  "url": "{{ url()->current() }}",
  "applicationCategory": "FinanceApplication",
  "operatingSystem": "Any",
  "permissions": "browser",
  "offers": {
    "@{{ '@' }}type": "Offer",
    "price": "0",
    "priceCurrency": "GBP"
  },
  "featureList": [
    "Calculate VAT for all UK rates (0%, 5%, 20%)",
    "Add or remove VAT calculations",
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
      "name": "What is VAT and how is it calculated in the UK?",
      "acceptedAnswer": {
        "@{{ '@' }}type": "Answer",
        "text": "VAT (Value Added Tax) is an indirect tax levied on most goods and services in the UK. It's calculated as a percentage of the transaction value. The standard rate is 20%, with reduced rates of 5% and 0% for specific items."
      }
    },
    {
      "@{{ '@' }}type": "Question",
      "name": "What are the current VAT rates in the UK?",
      "acceptedAnswer": {
        "@{{ '@' }}type": "Answer",
        "text": "The UK has three VAT rates: 0% (zero-rated items like most food and books), 5% (reduced rate for items like domestic fuel and children's car seats), and 20% (standard rate for most goods and services)."
      }
    },
    {
      "@{{ '@' }}type": "Question",
      "name": "When do I need to register for VAT in the UK?",
      "acceptedAnswer": {
        "@{{ '@' }}type": "Answer",
        "text": "You must register for VAT if your annual turnover exceeds £85,000. You can also voluntarily register for VAT even if your turnover is below this threshold."
      }
    },
    {
      "@{{ '@' }}type": "Question",
      "name": "Is this VAT calculator free to use?",
      "acceptedAnswer": {
        "@{{ '@' }}type": "Answer",
        "text": "Yes, our VAT calculator is completely free to use. You can calculate VAT for any amount and any applicable rate without any charges or registration requirements."
      }
    },
    {
      "@{{ '@' }}type": "Question",
      "name": "Can I use this calculator for business purposes?",
      "acceptedAnswer": {
        "@{{ '@' }}type": "Answer",
        "text": "Absolutely! Our VAT calculator is designed for both personal and business use. It's perfect for invoicing, pricing calculations, and tax planning for UK businesses of all sizes."
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
      "name": "Free VAT Calculator UK",
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
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Free VAT Calculator UK</h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Calculate Value Added Tax (VAT) instantly with our free online VAT calculator for UK businesses. Perfect for businesses, freelancers, and individuals to compute accurate VAT amounts for all tax rates.
            </p>
        </div>

        <!-- Main Content Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            <!-- Calculator Section -->
            <div class="lg:col-span-2">
                <!-- Calculator Form -->
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
                    <form id="vat-calculator-form">
                        <!-- First Row: Amount and VAT Rate -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <!-- Amount Input -->
                            <div>
                                <label for="amount" class="block text-sm font-semibold text-gray-700 mb-2">
                                    Enter Amount (£)
                                </label>
                                <div class="relative">
                                    <span class="absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-500 text-lg">£</span>
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

                            <!-- VAT Rate Selection -->
                            <div>
                                <label for="vat-rate" class="block text-sm font-semibold text-gray-700 mb-2">
                                    VAT Rate (%)
                                </label>
                                <select 
                                    id="vat-rate" 
                                    name="vat_rate" 
                                    class="w-full px-4 py-4 text-lg border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none appearance-none bg-white transition-all"
                                >
                                    <option value="0">0% (Zero-rated)</option>
                                    <option value="5">5% (Reduced Rate)</option>
                                    <option value="20" selected>20% (Standard Rate)</option>
                                </select>
                            </div>
                        </div>

                        <!-- Second Row: VAT Action Type -->
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">
                                VAT Calculation Type
                            </label>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <label class="relative cursor-pointer">
                                    <input 
                                        type="radio" 
                                        name="vat_action" 
                                        value="add" 
                                        checked
                                        class="peer sr-only"
                                    >
                                    <div class="px-4 py-4 text-center border-2 border-gray-300 rounded-xl peer-checked:border-blue-500 peer-checked:bg-blue-50 hover:border-gray-400 transition-all">
                                        <p class="font-medium">Add VAT</p>
                                        <p class="text-xs text-gray-500 mt-1">Add VAT to net amount</p>
                                    </div>
                                </label>
                                <label class="relative cursor-pointer">
                                    <input 
                                        type="radio" 
                                        name="vat_action" 
                                        value="remove"
                                        class="peer sr-only"
                                    >
                                    <div class="px-4 py-4 text-center border-2 border-gray-300 rounded-xl peer-checked:border-blue-500 peer-checked:bg-blue-50 hover:border-gray-400 transition-all">
                                        <p class="font-medium">Remove VAT</p>
                                        <p class="text-xs text-gray-500 mt-1">Remove VAT from gross amount</p>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <!-- Results Section -->
                        <div class="mt-8 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-xl p-8">
                            <h3 class="text-xl font-bold text-gray-800 mb-6">Calculation Results</h3>
                            
                            <div class="space-y-4">
                                <div class="flex justify-between items-center pb-4 border-b border-blue-100">
                                    <span class="text-gray-600 font-medium">Net Amount (Excluding VAT)</span>
                                    <span class="text-2xl font-bold text-gray-800" id="net-amount">£0.00</span>
                                </div>
                                
                                <div class="flex justify-between items-center pb-4 border-b border-blue-100">
                                    <span class="text-gray-600 font-medium">VAT Amount</span>
                                    <span class="text-2xl font-bold text-gray-800" id="vat-amount">£0.00</span>
                                </div>
                                
                                <div class="flex justify-between items-center pt-2">
                                    <span class="text-gray-800 font-bold text-lg">Total Amount (Including VAT)</span>
                                    <span class="text-3xl font-bold text-blue-600" id="total-amount">£0.00</span>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Information Section -->
                <div class="mt-12">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">What is VAT (Value Added Tax)?</h2>
                    <div class="prose prose-lg max-w-none text-gray-600">
                        <p class="mb-6">
                            Value Added Tax (VAT) is an indirect tax levied on most goods and services sold in the UK. It's a consumption tax that's ultimately paid by the end consumer, but collected by businesses at each stage of the supply chain.
                        </p>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 my-8">
                            <div>
                                <h3 class="text-xl font-semibold text-gray-800 mb-4">UK VAT Rates</h3>
                                <ul class="space-y-3">
                                    <li class="flex items-start">
                                        <span class="text-blue-500 mr-3 mt-1">•</span>
                                        <div>
                                            <strong class="text-gray-800">Standard Rate (20%):</strong>
                                            <span class="text-gray-600"> Most goods and services</span>
                                        </div>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-blue-500 mr-3 mt-1">•</span>
                                        <div>
                                            <strong class="text-gray-800">Reduced Rate (5%):</strong>
                                            <span class="text-gray-600"> Domestic fuel, sanitary products, children's car seats</span>
                                        </div>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-blue-500 mr-3 mt-1">•</span>
                                        <div>
                                            <strong class="text-gray-800">Zero Rate (0%):</strong>
                                            <span class="text-gray-600"> Most food, books, newspapers, children's clothes</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            
                            <div>
                                <h3 class="text-xl font-semibold text-gray-800 mb-4">VAT Registration</h3>
                                <ul class="space-y-3">
                                    <li class="flex items-start">
                                        <span class="text-blue-500 mr-3 mt-1">•</span>
                                        <div>
                                            <strong class="text-gray-800">Mandatory:</strong>
                                            <span class="text-gray-600"> Annual turnover over £85,000</span>
                                        </div>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-blue-500 mr-3 mt-1">•</span>
                                        <div>
                                            <strong class="text-gray-800">Voluntary:</strong>
                                            <span class="text-gray-600"> Can register with lower turnover</span>
                                        </div>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-blue-500 mr-3 mt-1">•</span>
                                        <div>
                                            <strong class="text-gray-800">Benefits:</strong>
                                            <span class="text-gray-600"> Reclaim VAT on business purchases</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="bg-blue-50 border-l-4 border-blue-500 p-6 rounded-r-lg mt-8">
                            <h4 class="text-lg font-semibold text-gray-800 mb-2">How to Use This VAT Calculator</h4>
                            <ol class="list-decimal list-inside space-y-2 text-gray-600">
                                <li>Enter the amount you want to calculate VAT for</li>
                                <li>Select the applicable VAT rate (0%, 5%, or 20%)</li>
                                <li>Choose whether to add VAT to a net amount or remove VAT from a gross amount</li>
                                <li>The calculator will instantly show the VAT amount and total</li>
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
                            <button class="w-full text-left p-6 focus:outline-none rounded-lg hover:bg-gray-50 transition-colors duration-200" onclick="toggleFAQ('vat-faq-1')">
                                <div class="flex justify-between items-center">
                                    <h3 class="text-lg font-semibold text-gray-800">What is VAT and how is it calculated in the UK?</h3>
                                    <svg id="vat-faq-1-icon" class="w-5 h-5 text-gray-500 transform transition-transform duration-300 ease-in-out" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </div>
                            </button>
                            <div id="vat-faq-1" class="overflow-hidden transition-all duration-300 ease-in-out max-h-0">
                                <div class="px-6 pb-6">
                                    <p class="text-gray-600">VAT (Value Added Tax) is an indirect tax levied on most goods and services in the UK. It's calculated as a percentage of the transaction value. The standard rate is 20%, with reduced rates of 5% and 0% for specific items.</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- FAQ Item 2 -->
                        <div class="bg-white border border-gray-200 rounded-lg overflow-hidden">
                            <button class="w-full text-left p-6 focus:outline-none rounded-lg hover:bg-gray-50 transition-colors duration-200" onclick="toggleFAQ('vat-faq-2')">
                                <div class="flex justify-between items-center">
                                    <h3 class="text-lg font-semibold text-gray-800">What are the current VAT rates in the UK?</h3>
                                    <svg id="vat-faq-2-icon" class="w-5 h-5 text-gray-500 transform transition-transform duration-300 ease-in-out" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </div>
                            </button>
                            <div id="vat-faq-2" class="overflow-hidden transition-all duration-300 ease-in-out max-h-0">
                                <div class="px-6 pb-6">
                                    <p class="text-gray-600">The UK has three VAT rates: 0% (zero-rated items like most food and books), 5% (reduced rate for items like domestic fuel and children's car seats), and 20% (standard rate for most goods and services).</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- FAQ Item 3 -->
                        <div class="bg-white border border-gray-200 rounded-lg overflow-hidden">
                            <button class="w-full text-left p-6 focus:outline-none rounded-lg hover:bg-gray-50 transition-colors duration-200" onclick="toggleFAQ('vat-faq-3')">
                                <div class="flex justify-between items-center">
                                    <h3 class="text-lg font-semibold text-gray-800">When do I need to register for VAT in the UK?</h3>
                                    <svg id="vat-faq-3-icon" class="w-5 h-5 text-gray-500 transform transition-transform duration-300 ease-in-out" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </div>
                            </button>
                            <div id="vat-faq-3" class="overflow-hidden transition-all duration-300 ease-in-out max-h-0">
                                <div class="px-6 pb-6">
                                    <p class="text-gray-600">You must register for VAT if your annual turnover exceeds £85,000. You can also voluntarily register for VAT even if your turnover is below this threshold, which can be beneficial if you make regular VAT-able purchases.</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- FAQ Item 4 -->
                        <div class="bg-white border border-gray-200 rounded-lg overflow-hidden">
                            <button class="w-full text-left p-6 focus:outline-none rounded-lg hover:bg-gray-50 transition-colors duration-200" onclick="toggleFAQ('vat-faq-4')">
                                <div class="flex justify-between items-center">
                                    <h3 class="text-lg font-semibold text-gray-800">Is this VAT calculator free to use?</h3>
                                    <svg id="vat-faq-4-icon" class="w-5 h-5 text-gray-500 transform transition-transform duration-300 ease-in-out" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </div>
                            </button>
                            <div id="vat-faq-4" class="overflow-hidden transition-all duration-300 ease-in-out max-h-0">
                                <div class="px-6 pb-6">
                                    <p class="text-gray-600">Yes, our VAT calculator is completely free to use. You can calculate VAT for any amount and any applicable rate without any charges or registration requirements.</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- FAQ Item 5 -->
                        <div class="bg-white border border-gray-200 rounded-lg overflow-hidden">
                            <button class="w-full text-left p-6 focus:outline-none rounded-lg hover:bg-gray-50 transition-colors duration-200" onclick="toggleFAQ('vat-faq-5')">
                                <div class="flex justify-between items-center">
                                    <h3 class="text-lg font-semibold text-gray-800">Can I use this calculator for business purposes?</h3>
                                    <svg id="vat-faq-5-icon" class="w-5 h-5 text-gray-500 transform transition-transform duration-300 ease-in-out" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </div>
                            </button>
                            <div id="vat-faq-5" class="overflow-hidden transition-all duration-300 ease-in-out max-h-0">
                                <div class="px-6 pb-6">
                                    <p class="text-gray-600">Absolutely! Our VAT calculator is designed for both personal and business use. It's perfect for invoicing, pricing calculations, and tax planning for UK businesses of all sizes.</p>
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
                            <a href="{{ route('gst.calculator') }}" class="flex items-center justify-between group">
                                <span class="group-hover:translate-x-1 transition-transform">GST Calculator (India)</span>
                                <svg class="w-5 h-5 opacity-50 group-hover:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Blog Section -->
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6 pb-4 border-b border-gray-100">Latest VAT Insights</h2>
                    
                    <div class="space-y-6">
                        @forelse($vatBlogs as $blog)
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
                        <p class="text-gray-500 text-center py-4">No VAT articles available at the moment.</p>
                        @endforelse
                    </div>

                    @if($vatBlogs->count() > 0)
                    <div class="mt-8 pt-6 border-t border-gray-100">
                        <a href="{{ route('blog.index', ['search' => 'VAT']) }}" class="inline-flex items-center text-blue-600 hover:text-blue-700 font-medium transition-colors">
                            View all VAT articles
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
    // VAT Calculator Logic
    document.addEventListener('DOMContentLoaded', function() {
        const amountInput = document.getElementById('amount');
        const vatRateSelect = document.getElementById('vat-rate');
        const vatActionInputs = document.querySelectorAll('input[name="vat_action"]');
        
        // Result elements
        const netAmountEl = document.getElementById('net-amount');
        const vatAmountEl = document.getElementById('vat-amount');
        const totalAmountEl = document.getElementById('total-amount');

        function formatCurrency(amount) {
            return new Intl.NumberFormat('en-GB', {
                style: 'currency',
                currency: 'GBP',
                minimumFractionDigits: 2
            }).format(amount);
        }

        function calculateVAT() {
            const amount = parseFloat(amountInput.value) || 0;
            const vatRate = parseFloat(vatRateSelect.value) || 0;
            const vatAction = document.querySelector('input[name="vat_action"]:checked').value;

            let netAmount, vatAmount, totalAmount;

            if (vatAction === 'add') {
                // Add VAT to net amount
                netAmount = amount;
                vatAmount = (amount * vatRate) / 100;
                totalAmount = amount + vatAmount;
            } else {
                // Remove VAT from gross amount
                totalAmount = amount;
                netAmount = amount / (1 + vatRate / 100);
                vatAmount = totalAmount - netAmount;
            }

            // Update display with formatted currency
            netAmountEl.textContent = formatCurrency(netAmount);
            vatAmountEl.textContent = formatCurrency(vatAmount);
            totalAmountEl.textContent = formatCurrency(totalAmount);
        }

        // Add event listeners
        amountInput.addEventListener('input', calculateVAT);
        vatRateSelect.addEventListener('change', calculateVAT);
        vatActionInputs.forEach(input => {
            input.addEventListener('change', calculateVAT);
        });

        // Initial calculation
        calculateVAT();
    });

    // FAQ Toggle functionality (reuse from GST calculator)
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