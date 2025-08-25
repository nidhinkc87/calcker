@extends('layouts.app')

@section('title', 'Free NPS Calculator India - National Pension System Calculator 2025 | CalcPro')

@section('meta_description', 'Calculate your NPS pension, maturity amount & tax benefits with our free National Pension System calculator. Plan your retirement with NPS Tier I & Tier II calculations for 2025.')

@section('meta_keywords', 'NPS calculator, National Pension System calculator, NPS pension calculator, retirement calculator India, NPS maturity calculator, pension planning, NPS tax benefits, PFRDA calculator')

@push('head')
<!-- Open Graph Meta Tags -->
<meta property="og:title" content="Free NPS Calculator India - National Pension System Calculator 2025 | CalcPro">
<meta property="og:description" content="Calculate your NPS pension, maturity amount & tax benefits with our free National Pension System calculator. Plan your retirement with accurate NPS calculations.">
<meta property="og:type" content="website">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:image" content="{{ asset('images/nps-calculator-og.jpg') }}">
<meta property="og:site_name" content="CalcPro">
<meta property="og:locale" content="en_IN">

<!-- Twitter Card Meta Tags -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Free NPS Calculator India - National Pension System Calculator 2025">
<meta name="twitter:description" content="Calculate your NPS pension, maturity amount & tax benefits with our free National Pension System calculator.">
<meta name="twitter:image" content="{{ asset('images/nps-calculator-twitter.jpg') }}">

<!-- Additional SEO Meta Tags -->
<meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
<meta name="author" content="CalcPro">
<meta name="generator" content="Laravel">
<link rel="canonical" href="{{ url()->current() }}">

<!-- Structured Data - Calculator JSON-LD -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebApplication",
  "name": "NPS Calculator",
  "description": "Free National Pension System (NPS) calculator to calculate pension amount, maturity value, and tax benefits for retirement planning in India",
  "url": "{{ url()->current() }}",
  "applicationCategory": "FinanceApplication",
  "operatingSystem": "Web Browser",
  "offers": {
    "@type": "Offer",
    "price": "0",
    "priceCurrency": "INR"
  },
  "creator": {
    "@type": "Organization",
    "name": "CalcPro",
    "url": "{{ url('/') }}"
  },
  "featureList": [
    "Calculate NPS maturity amount",
    "Estimate monthly pension from NPS",
    "Calculate tax benefits under Section 80C and 80CCD",
    "Plan retirement corpus with NPS",
    "Compare lump sum vs annuity options"
  ]
}
</script>

<!-- Structured Data - BreadcrumbList JSON-LD -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "name": "Home",
      "item": "{{ url('/') }}"
    },
    {
      "@type": "ListItem",
      "position": 2,
      "name": "Finance Calculators",
      "item": "{{ url('/') }}#finance"
    },
    {
      "@type": "ListItem",
      "position": 3,
      "name": "NPS Calculator",
      "item": "{{ url()->current() }}"
    }
  ]
}
</script>

<!-- Structured Data - FAQPage JSON-LD -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "What is NPS (National Pension System)?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "NPS is a government-sponsored pension scheme that helps you build a retirement corpus through systematic investments. It offers tax benefits and flexible investment options regulated by PFRDA."
      }
    },
    {
      "@type": "Question",
      "name": "What is the minimum investment in NPS?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The minimum monthly contribution in NPS is ₹500 and minimum annual contribution is ₹6,000. The maximum annual contribution is ₹24,00,000."
      }
    },
    {
      "@type": "Question",
      "name": "What are the tax benefits of NPS?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "NPS offers tax benefits under Section 80C (up to ₹1.5 lakh), Section 80CCD(1B) (additional ₹50,000), and Section 80CCD(2) for employer contributions."
      }
    },
    {
      "@type": "Question",
      "name": "When can I withdraw from NPS?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "You can withdraw from NPS at retirement age (60-75 years). Minimum 40% must be used to purchase annuity, rest can be withdrawn as lump sum."
      }
    }
  ]
}
</script>

<!-- Structured Data - HowTo JSON-LD -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "HowTo",
  "name": "How to Calculate NPS Pension Using NPS Calculator",
  "description": "Step-by-step guide to calculate your National Pension System (NPS) pension and maturity amount",
  "step": [
    {
      "@type": "HowToStep",
      "name": "Enter Monthly Investment",
      "text": "Enter your monthly NPS contribution amount (minimum ₹500, maximum ₹2,00,000)"
    },
    {
      "@type": "HowToStep",
      "name": "Set Expected Return",
      "text": "Choose expected annual return rate between 5% to 15% based on your risk appetite"
    },
    {
      "@type": "HowToStep",
      "name": "Enter Age Details",
      "text": "Input your current age (18-65) and planned retirement age (60-75 years)"
    },
    {
      "@type": "HowToStep",
      "name": "Set Annuity Parameters",
      "text": "Choose annuity purchase percentage (minimum 40%) and expected annuity return (4-10%)"
    },
    {
      "@type": "HowToStep",
      "name": "Calculate Results",
      "text": "Click calculate to get your NPS maturity amount, monthly pension, and tax benefits"
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
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">NPS Calculator</h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Calculate your National Pension System (NPS) returns, maturity amount, and monthly pension. Plan your retirement with accurate NPS calculations.
            </p>
        </div>

        <!-- Main Content Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            <!-- Calculator Section -->
            <div class="lg:col-span-2">
                <!-- Calculator Form -->
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
                    <form id="npsCalculator">
                        <!-- Input Fields -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <!-- Monthly Investment -->
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">
                                    Monthly Investment <span class="text-red-500">*</span>
                                </label>
                                <div class="relative">
                                    <span class="absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-500">₹</span>
                                    <input type="number" 
                                           id="monthlyInvestment" 
                                           class="w-full pl-10 pr-4 py-4 text-lg border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all"
                                           placeholder="5000"
                                           step="500"
                                           min="500"
                                           max="200000"
                                           value="5000"
                                           required>
                                </div>
                                <div class="text-xs text-gray-500 mt-1">Min: ₹500, Max: ₹2,00,000</div>
                            </div>

                            <!-- Expected Return -->
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">
                                    Expected Annual Return <span class="text-red-500">*</span>
                                </label>
                                <div class="relative">
                                    <input type="number" 
                                           id="expectedReturn" 
                                           class="w-full pl-4 pr-10 py-4 text-lg border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all"
                                           placeholder="10"
                                           step="0.5"
                                           min="5"
                                           max="15"
                                           value="10"
                                           required>
                                    <span class="absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-500">%</span>
                                </div>
                                <div class="text-xs text-gray-500 mt-1">Range: 5% - 15%</div>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <!-- Current Age -->
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">
                                    Current Age <span class="text-red-500">*</span>
                                </label>
                                <div class="relative">
                                    <input type="number" 
                                           id="currentAge" 
                                           class="w-full pl-4 pr-12 py-4 text-lg border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all"
                                           placeholder="30"
                                           step="1"
                                           min="18"
                                           max="65"
                                           value="30"
                                           required>
                                    <span class="absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-500">years</span>
                                </div>
                                <div class="text-xs text-gray-500 mt-1">Range: 18 - 65 years</div>
                            </div>

                            <!-- Retirement Age -->
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">
                                    Retirement Age <span class="text-red-500">*</span>
                                </label>
                                <div class="relative">
                                    <input type="number" 
                                           id="retirementAge" 
                                           class="w-full pl-4 pr-12 py-4 text-lg border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all"
                                           placeholder="60"
                                           step="1"
                                           min="60"
                                           max="75"
                                           value="60"
                                           required>
                                    <span class="absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-500">years</span>
                                </div>
                                <div class="text-xs text-gray-500 mt-1">Range: 60 - 75 years</div>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <!-- Annuity Percentage -->
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">
                                    Annuity Purchase (%) <span class="text-red-500">*</span>
                                </label>
                                <div class="relative">
                                    <input type="number" 
                                           id="annuityPercentage" 
                                           class="w-full pl-4 pr-10 py-4 text-lg border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all"
                                           placeholder="40"
                                           step="5"
                                           min="40"
                                           max="100"
                                           value="40"
                                           required>
                                    <span class="absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-500">%</span>
                                </div>
                                <div class="text-xs text-gray-500 mt-1">Min 40% mandatory for annuity</div>
                            </div>

                            <!-- Annuity Return Rate -->
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">
                                    Expected Annuity Return <span class="text-red-500">*</span>
                                </label>
                                <div class="relative">
                                    <input type="number" 
                                           id="annuityReturn" 
                                           class="w-full pl-4 pr-10 py-4 text-lg border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all"
                                           placeholder="6"
                                           step="0.5"
                                           min="4"
                                           max="10"
                                           value="6"
                                           required>
                                    <span class="absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-500">%</span>
                                </div>
                                <div class="text-xs text-gray-500 mt-1">Range: 4% - 10%</div>
                            </div>
                        </div>

                        <!-- Calculate Button -->
                        <button type="button" 
                                onclick="calculateNPS()" 
                                class="w-full bg-gradient-to-r from-blue-600 to-blue-700 text-white font-semibold py-4 px-6 rounded-xl hover:from-blue-700 hover:to-blue-800 transform hover:scale-[1.02] transition-all text-lg shadow-md">
                            Calculate NPS Returns
                        </button>
                    </form>
                </div>

                <!-- Results Section -->
                <div id="results" class="hidden mt-8">
                    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
                        <h3 class="text-2xl font-bold text-gray-800 mb-6">NPS Calculation Results</h3>
                        
                        <!-- Main Results Grid -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                            <div class="bg-green-50 rounded-xl p-6 text-center border border-green-200">
                                <div class="text-3xl font-bold text-green-600 mb-2" id="maturityAmount">₹0</div>
                                <div class="text-green-800 font-semibold">Total Maturity Amount</div>
                                <div class="text-green-600 text-sm mt-1">At Retirement</div>
                            </div>
                            <div class="bg-blue-50 rounded-xl p-6 text-center border border-blue-200">
                                <div class="text-3xl font-bold text-blue-600 mb-2" id="monthlyPension">₹0</div>
                                <div class="text-blue-800 font-semibold">Monthly Pension</div>
                                <div class="text-blue-600 text-sm mt-1">From Annuity</div>
                            </div>
                        </div>

                        <!-- Additional Results -->
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-8">
                            <div class="bg-gray-50 rounded-xl p-4 text-center">
                                <div class="text-2xl font-bold text-gray-600 mb-1" id="totalInvestment">₹0</div>
                                <div class="text-gray-700 font-semibold text-sm">Total Investment</div>
                            </div>
                            <div class="bg-gray-50 rounded-xl p-4 text-center">
                                <div class="text-2xl font-bold text-gray-600 mb-1" id="interestEarned">₹0</div>
                                <div class="text-gray-700 font-semibold text-sm">Interest Earned</div>
                            </div>
                            <div class="bg-gray-50 rounded-xl p-4 text-center">
                                <div class="text-2xl font-bold text-gray-600 mb-1" id="lumpSumAmount">₹0</div>
                                <div class="text-gray-700 font-semibold text-sm">Lump Sum Withdrawal</div>
                            </div>
                        </div>

                        <!-- Calculation Breakdown -->
                        <div class="bg-gray-50 rounded-xl p-6">
                            <h4 class="text-lg font-semibold text-gray-800 mb-4">Investment Breakdown</h4>
                            <div class="space-y-3 text-sm">
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Investment Period:</span>
                                    <span class="font-semibold" id="investmentPeriod">0 years</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Monthly Contribution:</span>
                                    <span class="font-semibold" id="monthlyContribution">₹0</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Annual Contribution:</span>
                                    <span class="font-semibold" id="annualContribution">₹0</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Annuity Purchase Amount:</span>
                                    <span class="font-semibold" id="annuityAmount">₹0</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Tax Benefit (Annual):</span>
                                    <span class="font-semibold text-green-600" id="taxBenefit">₹0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Information Section -->
                <div class="mt-12">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">Understanding NPS (National Pension System) in India 2025</h2>
                    <div class="prose prose-lg max-w-none text-gray-600">
                        <p class="mb-6">
                            The National Pension System (NPS) is a government-sponsored pension scheme that helps you build a retirement corpus through systematic investments. It offers tax benefits and flexible investment options to secure your financial future.
                        </p>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 my-8">
                            <div>
                                <h3 class="text-xl font-semibold text-gray-800 mb-4">Key Features of NPS</h3>
                                <ul class="space-y-3">
                                    <li class="flex items-start">
                                        <span class="text-blue-500 mr-3 mt-1">•</span>
                                        <div>
                                            <strong class="text-gray-800">Market-linked returns</strong>
                                            <span class="text-gray-600 block text-sm">Professional fund management</span>
                                        </div>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-blue-500 mr-3 mt-1">•</span>
                                        <div>
                                            <strong class="text-gray-800">Low cost structure</strong>
                                            <span class="text-gray-600 block text-sm">Minimal management fees</span>
                                        </div>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-blue-500 mr-3 mt-1">•</span>
                                        <div>
                                            <strong class="text-gray-800">Flexible contributions</strong>
                                            <span class="text-gray-600 block text-sm">Start with ₹500 per month</span>
                                        </div>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-blue-500 mr-3 mt-1">•</span>
                                        <div>
                                            <strong class="text-gray-800">Portable across jobs</strong>
                                            <span class="text-gray-600 block text-sm">Single account for lifetime</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            
                            <div>
                                <h3 class="text-xl font-semibold text-gray-800 mb-4">NPS Tax Benefits Under Section 80C & 80CCD</h3>
                                <ul class="space-y-3">
                                    <li class="flex items-start">
                                        <span class="text-blue-500 mr-3 mt-1">•</span>
                                        <div>
                                            <strong class="text-gray-800">Section 80C:</strong>
                                            <span class="text-gray-600 block text-sm">Up to ₹1.5 lakh deduction</span>
                                        </div>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-blue-500 mr-3 mt-1">•</span>
                                        <div>
                                            <strong class="text-gray-800">Section 80CCD(1B):</strong>
                                            <span class="text-gray-600 block text-sm">Additional ₹50,000 deduction</span>
                                        </div>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-blue-500 mr-3 mt-1">•</span>
                                        <div>
                                            <strong class="text-gray-800">Section 80CCD(2):</strong>
                                            <span class="text-gray-600 block text-sm">Employer contribution benefits</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="bg-blue-50 border-l-4 border-blue-500 p-6 rounded-r-lg mt-8">
                            <h4 class="text-lg font-semibold text-gray-800 mb-2">Important Points</h4>
                            <ul class="space-y-2 text-sm text-gray-600">
                                <li>• Minimum 40% of corpus must be used to purchase annuity</li>
                                <li>• Premature withdrawal allowed after 3 years (with conditions)</li>
                                <li>• Partial withdrawal permitted for specific purposes</li>
                                <li>• Exit age is flexible between 60-75 years</li>
                                <li>• Regulated by PFRDA (Pension Fund Regulatory Authority)</li>
                            </ul>
                        </div>

                        <!-- FAQ Section -->
                        <div class="mt-12">
                            <h2 class="text-2xl font-bold text-gray-900 mb-8">Frequently Asked Questions About NPS Calculator</h2>
                            <div class="space-y-6">
                                <div class="bg-white border border-gray-200 rounded-lg p-6">
                                    <h3 class="text-lg font-semibold text-gray-800 mb-3">How accurate is the NPS calculator?</h3>
                                    <p class="text-gray-600">Our NPS calculator provides highly accurate estimates based on current PFRDA guidelines and compound interest calculations. However, actual returns may vary based on market performance and fund management.</p>
                                </div>
                                
                                <div class="bg-white border border-gray-200 rounded-lg p-6">
                                    <h3 class="text-lg font-semibold text-gray-800 mb-3">What is the maximum contribution limit for NPS?</h3>
                                    <p class="text-gray-600">The maximum annual contribution to NPS is ₹24,00,000 (₹2,00,000 per month). However, tax benefits are available up to ₹2,00,000 annually under various sections.</p>
                                </div>
                                
                                <div class="bg-white border border-gray-200 rounded-lg p-6">
                                    <h3 class="text-lg font-semibold text-gray-800 mb-3">Can I change my NPS contribution amount?</h3>
                                    <p class="text-gray-600">Yes, you can increase or decrease your NPS contribution at any time. However, maintain the minimum annual contribution of ₹6,000 to keep your account active.</p>
                                </div>

                                <div class="bg-white border border-gray-200 rounded-lg p-6">
                                    <h3 class="text-lg font-semibold text-gray-800 mb-3">What happens to my NPS if I change jobs?</h3>
                                    <p class="text-gray-600">NPS is completely portable. Your account remains active and you can continue contributions regardless of job changes. Your PRAN (Permanent Retirement Account Number) stays the same throughout your career.</p>
                                </div>

                                <div class="bg-white border border-gray-200 rounded-lg p-6">
                                    <h3 class="text-lg font-semibold text-gray-800 mb-3">Is NPS better than PPF for retirement planning?</h3>
                                    <p class="text-gray-600">NPS offers market-linked returns with potentially higher growth compared to PPF's fixed returns. However, PPF has guaranteed returns and complete tax-free withdrawals. Consider your risk appetite and retirement goals when choosing.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="lg:col-span-1 space-y-8">
                <!-- Key Features -->
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                    <h2 class="text-lg font-semibold text-gray-800 mb-4">Calculator Features</h2>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-gray-700">Accurate NPS maturity calculation</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-gray-700">Monthly pension estimation</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-gray-700">Tax benefits calculation</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-gray-700">Flexible annuity options</span>
                        </li>
                    </ul>
                </div>

                <!-- Investment Limits -->
                <div class="bg-yellow-50 rounded-2xl shadow-sm border border-yellow-200 p-6">
                    <h2 class="text-lg font-semibold text-gray-800 mb-3">Investment Limits</h2>
                    <div class="space-y-3 text-sm text-gray-700">
                        <div class="flex justify-between">
                            <span>Minimum Monthly:</span>
                            <span class="font-semibold">₹500</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Maximum Monthly:</span>
                            <span class="font-semibold">₹2,00,000</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Minimum Annual:</span>
                            <span class="font-semibold">₹6,000</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Entry Age:</span>
                            <span class="font-semibold">18-65 years</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Exit Age:</span>
                            <span class="font-semibold">60-75 years</span>
                        </div>
                    </div>
                </div>

                <!-- Related Calculators -->
                <div class="bg-gradient-to-br from-blue-600 to-indigo-600 rounded-2xl p-6 text-white">
                    <h3 class="text-xl font-bold mb-4">Related Calculators</h3>
                    <ul class="space-y-3">
                        <li>
                            <a href="{{ route('eps.pension.calculator') }}" class="flex items-center justify-between group">
                                <span class="group-hover:translate-x-1 transition-transform">EPS Pension Calculator</span>
                                <svg class="w-5 h-5 opacity-50 group-hover:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('income.tax.calculator') }}" class="flex items-center justify-between group">
                                <span class="group-hover:translate-x-1 transition-transform">Income Tax Calculator</span>
                                <svg class="w-5 h-5 opacity-50 group-hover:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Disclaimer -->
        <div class="mt-12 bg-gray-100 border border-gray-200 rounded-xl p-4">
            <p class="text-sm text-gray-700">
                <strong>Disclaimer:</strong> This calculator provides approximate calculations based on the information provided. 
                The actual NPS returns may vary based on market conditions, fund performance, changes in NPS rules, and other factors. 
                For investment decisions, please consult with a financial advisor.
            </p>
        </div>
    </div>
</div>

<script>
function calculateNPS() {
    // Get input values
    const monthlyInvestment = parseFloat(document.getElementById('monthlyInvestment').value) || 0;
    const expectedReturn = parseFloat(document.getElementById('expectedReturn').value) || 0;
    const currentAge = parseFloat(document.getElementById('currentAge').value) || 0;
    const retirementAge = parseFloat(document.getElementById('retirementAge').value) || 0;
    const annuityPercentage = parseFloat(document.getElementById('annuityPercentage').value) || 0;
    const annuityReturn = parseFloat(document.getElementById('annuityReturn').value) || 0;
    
    // Validation
    if (!monthlyInvestment || !expectedReturn || !currentAge || !retirementAge || !annuityPercentage || !annuityReturn) {
        alert('Please fill all required fields');
        return;
    }
    
    if (retirementAge <= currentAge) {
        alert('Retirement age must be greater than current age');
        return;
    }
    
    // Calculate investment period and total contributions
    const investmentPeriod = retirementAge - currentAge;
    const totalMonths = investmentPeriod * 12;
    const annualInvestment = monthlyInvestment * 12;
    const totalInvestment = monthlyInvestment * totalMonths;
    
    // Calculate maturity amount using compound interest formula for SIP
    const monthlyRate = expectedReturn / 100 / 12;
    const maturityAmount = monthlyInvestment * (((Math.pow(1 + monthlyRate, totalMonths) - 1) / monthlyRate) * (1 + monthlyRate));
    
    const interestEarned = maturityAmount - totalInvestment;
    
    // Calculate annuity and lump sum
    const annuityAmount = (maturityAmount * annuityPercentage) / 100;
    const lumpSumAmount = maturityAmount - annuityAmount;
    
    // Calculate monthly pension from annuity
    const monthlyPension = (annuityAmount * annuityReturn / 100) / 12;
    
    // Calculate tax benefit (assuming 30% tax bracket on max ₹2 lakh per year)
    const maxTaxBenefit = Math.min(annualInvestment, 200000) * 0.3;
    
    // Update results
    document.getElementById('maturityAmount').textContent = formatCurrency(maturityAmount);
    document.getElementById('monthlyPension').textContent = formatCurrency(monthlyPension);
    document.getElementById('totalInvestment').textContent = formatCurrency(totalInvestment);
    document.getElementById('interestEarned').textContent = formatCurrency(interestEarned);
    document.getElementById('lumpSumAmount').textContent = formatCurrency(lumpSumAmount);
    
    // Update breakdown
    document.getElementById('investmentPeriod').textContent = investmentPeriod + ' years';
    document.getElementById('monthlyContribution').textContent = formatCurrency(monthlyInvestment);
    document.getElementById('annualContribution').textContent = formatCurrency(annualInvestment);
    document.getElementById('annuityAmount').textContent = formatCurrency(annuityAmount);
    document.getElementById('taxBenefit').textContent = formatCurrency(maxTaxBenefit);
    
    // Show results
    document.getElementById('results').classList.remove('hidden');
    document.getElementById('results').scrollIntoView({ behavior: 'smooth', block: 'nearest' });
}

function formatCurrency(amount) {
    return '₹' + Math.round(amount).toLocaleString('en-IN');
}

// Input validation on blur (less aggressive)
document.getElementById('monthlyInvestment').addEventListener('blur', function() {
    const value = parseInt(this.value);
    if (value && value < 500) this.value = 500;
    if (value && value > 200000) this.value = 200000;
});

document.getElementById('expectedReturn').addEventListener('blur', function() {
    const value = parseFloat(this.value);
    if (value && value < 5) this.value = 5;
    if (value && value > 15) this.value = 15;
});

document.getElementById('currentAge').addEventListener('blur', function() {
    const value = parseInt(this.value);
    if (value && value < 18) this.value = 18;
    if (value && value > 65) this.value = 65;
});

document.getElementById('retirementAge').addEventListener('blur', function() {
    const value = parseInt(this.value);
    const currentAge = parseInt(document.getElementById('currentAge').value) || 18;
    if (value && value < Math.max(60, currentAge + 1)) this.value = Math.max(60, currentAge + 1);
    if (value && value > 75) this.value = 75;
});

document.getElementById('annuityPercentage').addEventListener('blur', function() {
    const value = parseInt(this.value);
    if (value && value < 40) this.value = 40;
    if (value && value > 100) this.value = 100;
});

document.getElementById('annuityReturn').addEventListener('blur', function() {
    const value = parseFloat(this.value);
    if (value && value < 4) this.value = 4;
    if (value && value > 10) this.value = 10;
});
</script>
@endsection