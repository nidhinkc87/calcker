@extends('layouts.app')

@section('title', 'Income Tax Calculator India 2024-25 - Old vs New Tax Regime Calculator')
@section('meta_description', 'Free Income Tax Calculator for India FY 2024-25. Compare Old vs New Tax Regime, calculate tax liability, deductions under 80C, HRA exemption. Latest tax slabs and rates.')
@section('meta_keywords', 'income tax calculator India, tax calculator 2024-25, old vs new tax regime, income tax slabs, tax liability calculator, 80C deduction, HRA calculator, India tax calculator')

@section('structured_data')
<script type="application/ld+json">
{
    "@{{ "" }}context": "https://schema.org",
    "@type": "WebApplication",
    "name": "Income Tax Calculator India 2024-25",
    "applicationCategory": "FinanceApplication",
    "operatingSystem": "All",
    "offers": {
        "@type": "Offer",
        "price": "0",
        "priceCurrency": "INR"
    },
    "description": "Calculate income tax for India FY 2024-25. Compare Old vs New Tax Regime with latest tax slabs, deductions, and exemptions",
    "url": "{{ url('/income-tax-calculator') }}",
    "publisher": {
        "@type": "Organization",
        "name": "{{ config('app.name') }}"
    }
}
</script>

<script type="application/ld+json">
{
    "@{{ "" }}context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [{
        "@type": "Question",
        "name": "What is the difference between Old and New Tax Regime in India?",
        "acceptedAnswer": {
            "@type": "Answer",
            "text": "The Old Tax Regime allows various deductions like 80C, HRA, medical insurance with lower tax slabs. The New Tax Regime offers higher basic exemption limits with reduced tax rates but fewer deductions allowed."
        }
    }, {
        "@type": "Question",
        "name": "Which tax regime is better - Old or New?",
        "acceptedAnswer": {
            "@type": "Answer",
            "text": "It depends on your deductions. If you have significant deductions (above ₹1.5 lakhs annually), Old Regime may be better. For those with fewer deductions, New Regime often results in lower tax liability."
        }
    }, {
        "@type": "Question",
        "name": "What are the tax slabs for FY 2024-25?",
        "acceptedAnswer": {
            "@type": "Answer",
            "text": "New Regime: 0% up to ₹3L, 5% for ₹3-7L, 10% for ₹7-10L, 15% for ₹10-12L, 20% for ₹12-15L, 30% above ₹15L. Old Regime: 0% up to ₹2.5L, 5% for ₹2.5-5L, 20% for ₹5-10L, 30% above ₹10L."
        }
    }]
}
</script>
@endsection

@section('content')
<div class="bg-gradient-to-b from-blue-50 to-white py-12">
    <div class="container mx-auto px-4 max-w-7xl">
        <!-- Page Header -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Income Tax Calculator India</h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Calculate your income tax for FY 2024-25 instantly. Compare Old vs New Tax Regime and find out which option saves you more tax.
            </p>
        </div>

        <!-- Main Content Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            <!-- Calculator Section -->
            <div class="lg:col-span-2">
                <!-- Fiscal Year Selector -->
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 mb-6">
                    <div class="flex items-center justify-between">
                        <label class="text-sm font-semibold text-gray-700">Financial Year:</label>
                        <select id="financialYear" class="px-4 py-2 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none">
                            <option value="2024-25" selected>2024-25 (AY 2025-26)</option>
                            <option value="2025-26">2025-26 (AY 2026-27)</option>
                        </select>
                    </div>
                </div>

                <!-- Calculator Form -->
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
                    <form id="taxCalculatorForm">
                        <!-- Basic Information Section -->
                        <div class="mb-8">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4 pb-2 border-b border-gray-200">Basic Information</h3>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <!-- Salary Income -->
                                <div>
                                    <label for="salaryIncome" class="block text-sm font-semibold text-gray-700 mb-2">
                                        Yearly Income from Salary <span class="text-red-500">*</span>
                                    </label>
                                    <div class="relative">
                                        <span class="absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-500 text-lg">₹</span>
                                        <input type="number" id="salaryIncome" 
                                               class="w-full pl-10 pr-4 py-4 text-lg border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all"
                                               placeholder="500000" min="0" step="1">
                                    </div>
                                </div>
                                
                                <!-- Age Group -->
                                <div>
                                    <label for="age" class="block text-sm font-semibold text-gray-700 mb-2">
                                        Age Group
                                    </label>
                                    <select id="age" 
                                            class="w-full px-4 py-4 text-lg border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none appearance-none bg-white transition-all">
                                        <option value="below60">Less than 60</option>
                                        <option value="60to80">60-80</option>
                                        <option value="above80">Above 80</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Additional Income Section -->
                        <div class="mb-8">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4 pb-2 border-b border-gray-200">Additional Income</h3>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <!-- Interest Income -->
                                <div>
                                    <label for="interestIncome" class="block text-sm font-semibold text-gray-700 mb-2">
                                        Interest from Savings/FD
                                    </label>
                                    <div class="relative">
                                        <span class="absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-500 text-lg">₹</span>
                                        <input type="number" id="interestIncome" 
                                               class="w-full pl-10 pr-4 py-4 text-lg border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all"
                                               placeholder="0" min="0" step="1">
                                    </div>
                                </div>
                                
                                <!-- Rental Income -->
                                <div>
                                    <label for="rentalIncome" class="block text-sm font-semibold text-gray-700 mb-2">
                                        Rental Income
                                    </label>
                                    <div class="relative">
                                        <span class="absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-500 text-lg">₹</span>
                                        <input type="number" id="rentalIncome" 
                                               class="w-full pl-10 pr-4 py-4 text-lg border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all"
                                               placeholder="0" min="0" step="1">
                                    </div>
                                </div>
                                
                                <!-- Municipal Tax -->
                                <div>
                                    <label for="municipalTax" class="block text-sm font-semibold text-gray-700 mb-2">
                                        Municipal Tax Paid
                                    </label>
                                    <div class="relative">
                                        <span class="absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-500 text-lg">₹</span>
                                        <input type="number" id="municipalTax" 
                                               class="w-full pl-10 pr-4 py-4 text-lg border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all"
                                               placeholder="0" min="0" step="1">
                                    </div>
                                </div>
                                
                                <!-- Housing Loan Interest -->
                                <div>
                                    <label for="housingLoanInterest" class="block text-sm font-semibold text-gray-700 mb-2">
                                        Housing Loan Interest
                                    </label>
                                    <div class="relative">
                                        <span class="absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-500 text-lg">₹</span>
                                        <input type="number" id="housingLoanInterest" 
                                               class="w-full pl-10 pr-4 py-4 text-lg border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all"
                                               placeholder="0" min="0" step="1">
                                    </div>
                                </div>
                                
                                <!-- Other Income -->
                                <div>
                                    <label for="otherIncome" class="block text-sm font-semibold text-gray-700 mb-2">
                                        Other Income
                                    </label>
                                    <div class="relative">
                                        <span class="absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-500 text-lg">₹</span>
                                        <input type="number" id="otherIncome" 
                                               class="w-full pl-10 pr-4 py-4 text-lg border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all"
                                               placeholder="0" min="0" step="1">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Deductions & Exemptions Section -->
                        <div class="mb-8">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4 pb-2 border-b border-gray-200">Deductions & Exemptions</h3>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <!-- HRA Exemption -->
                                <div>
                                    <label for="hraExemption" class="block text-sm font-semibold text-gray-700 mb-2">
                                        HRA and Other Exemptions
                                    </label>
                                    <div class="relative">
                                        <span class="absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-500 text-lg">₹</span>
                                        <input type="number" id="hraExemption" 
                                               class="w-full pl-10 pr-4 py-4 text-lg border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all"
                                               placeholder="0" min="0" step="1">
                                    </div>
                                </div>
                                
                                <!-- Section 80C -->
                                <div>
                                    <label for="section80c" class="block text-sm font-semibold text-gray-700 mb-2">
                                        80C Investments (PF, PPF, Insurance)
                                    </label>
                                    <div class="relative">
                                        <span class="absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-500 text-lg">₹</span>
                                        <input type="number" id="section80c" 
                                               class="w-full pl-10 pr-4 py-4 text-lg border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all"
                                               placeholder="0" min="0" step="1" max="150000">
                                    </div>
                                    <p class="text-xs text-gray-500 mt-1">Maximum limit: ₹1,50,000</p>
                                </div>
                                
                                <!-- NPS Contribution -->
                                <div>
                                    <label for="npsContribution" class="block text-sm font-semibold text-gray-700 mb-2">
                                        NPS Contributions (80CCD(1B))
                                    </label>
                                    <div class="relative">
                                        <span class="absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-500 text-lg">₹</span>
                                        <input type="number" id="npsContribution" 
                                               class="w-full pl-10 pr-4 py-4 text-lg border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all"
                                               placeholder="0" min="0" step="1" max="50000">
                                    </div>
                                    <p class="text-xs text-gray-500 mt-1">Maximum limit: ₹50,000</p>
                                </div>
                                
                                <!-- Medical Insurance -->
                                <div>
                                    <label for="medicalInsurance" class="block text-sm font-semibold text-gray-700 mb-2">
                                        Medical Insurance Premium (80D)
                                    </label>
                                    <div class="relative">
                                        <span class="absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-500 text-lg">₹</span>
                                        <input type="number" id="medicalInsurance" 
                                               class="w-full pl-10 pr-4 py-4 text-lg border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all"
                                               placeholder="0" min="0" step="1">
                                    </div>
                                </div>
                                
                                <!-- Education Loan Interest -->
                                <div>
                                    <label for="educationLoanInterest" class="block text-sm font-semibold text-gray-700 mb-2">
                                        Education Loan Interest (80E)
                                    </label>
                                    <div class="relative">
                                        <span class="absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-500 text-lg">₹</span>
                                        <input type="number" id="educationLoanInterest" 
                                               class="w-full pl-10 pr-4 py-4 text-lg border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all"
                                               placeholder="0" min="0" step="1">
                                    </div>
                                </div>
                                
                                <!-- Charitable Donations -->
                                <div>
                                    <label for="charitableDonations" class="block text-sm font-semibold text-gray-700 mb-2">
                                        Charitable Donations (80G)
                                    </label>
                                    <div class="relative">
                                        <span class="absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-500 text-lg">₹</span>
                                        <input type="number" id="charitableDonations" 
                                               class="w-full pl-10 pr-4 py-4 text-lg border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all"
                                               placeholder="0" min="0" step="1">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Calculate Button -->
                        <button type="button" onclick="calculateTax()" 
                                class="w-full bg-gradient-to-r from-blue-600 to-blue-700 text-white font-semibold py-4 px-6 rounded-xl hover:from-blue-700 hover:to-blue-800 transform hover:scale-[1.02] transition-all text-lg shadow-md">
                            Calculate Income Tax
                        </button>
                    </form>
                </div>

                <!-- Results Section -->
                <div id="calculationResults" class="hidden mt-8">
                    <!-- Income Summary -->
                    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 mb-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4">Income Summary</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="space-y-3">
                                <h4 class="font-medium text-gray-700 mb-2">Income Sources</h4>
                                <div class="flex justify-between py-1">
                                    <span class="text-gray-600 text-sm">Salary Income:</span>
                                    <span id="summaryBasicSalary" class="font-medium text-sm">₹0</span>
                                </div>
                                <div class="flex justify-between py-1">
                                    <span class="text-gray-600 text-sm">Interest Income:</span>
                                    <span id="summaryInterestIncome" class="font-medium text-sm">₹0</span>
                                </div>
                                <div class="flex justify-between py-1">
                                    <span class="text-gray-600 text-sm">Rental Income:</span>
                                    <span id="summaryRentalIncome" class="font-medium text-sm">₹0</span>
                                </div>
                                <div class="flex justify-between py-1">
                                    <span class="text-gray-600 text-sm">Other Income:</span>
                                    <span id="summaryOtherIncome" class="font-medium text-sm">₹0</span>
                                </div>
                                <div class="flex justify-between py-2 border-t font-semibold">
                                    <span class="text-gray-700">Total Gross Income:</span>
                                    <span id="summaryTotalIncome" class="text-blue-600">₹0</span>
                                </div>
                            </div>
                            <div class="space-y-3">
                                <h4 class="font-medium text-gray-700 mb-2">Deductions (Old Regime)</h4>
                                <div class="flex justify-between py-1">
                                    <span class="text-gray-600 text-sm">Standard Deduction:</span>
                                    <span class="font-medium text-sm">₹75,000</span>
                                </div>
                                <div class="flex justify-between py-1">
                                    <span class="text-gray-600 text-sm">HRA & Exemptions:</span>
                                    <span id="summaryHRA" class="font-medium text-sm">₹0</span>
                                </div>
                                <div class="flex justify-between py-1">
                                    <span class="text-gray-600 text-sm">80C Investments:</span>
                                    <span id="summary80C" class="font-medium text-sm">₹0</span>
                                </div>
                                <div class="flex justify-between py-1">
                                    <span class="text-gray-600 text-sm">NPS (80CCD1B):</span>
                                    <span id="summaryNPS" class="font-medium text-sm">₹0</span>
                                </div>
                                <div class="flex justify-between py-1">
                                    <span class="text-gray-600 text-sm">Other Deductions:</span>
                                    <span id="summaryOtherDeductions" class="font-medium text-sm">₹0</span>
                                </div>
                                <div class="flex justify-between py-2 border-t font-semibold">
                                    <span class="text-gray-700">Total Deductions:</span>
                                    <span id="summaryTotalDeductions" class="text-orange-600">₹0</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Detailed Tax Calculation Breakup -->
                    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 mb-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4">Detailed Tax Calculation</h3>
                        
                        <!-- Tax Slab Breakup Toggle -->
                        <div class="mb-4">
                            <button onclick="toggleSlabBreakup()" id="slabBreakupToggle" 
                                    class="text-blue-600 hover:text-blue-700 font-medium text-sm underline">
                                View Detailed Slab-wise Calculation
                            </button>
                        </div>

                        <!-- Slab Breakup Details (Hidden by default) -->
                        <div id="slabBreakupDetails" class="hidden mb-6 p-4 bg-gray-50 rounded-xl">
                            <h4 class="font-medium text-gray-700 mb-3">Tax Slab-wise Calculation</h4>
                            <div id="oldSlabBreakup" class="mb-4">
                                <h5 class="text-sm font-medium text-orange-600 mb-2">Old Tax Regime</h5>
                                <div id="oldSlabDetails" class="space-y-1 text-xs"></div>
                            </div>
                            <div id="newSlabBreakup">
                                <h5 class="text-sm font-medium text-blue-600 mb-2">New Tax Regime</h5>
                                <div id="newSlabDetails" class="space-y-1 text-xs"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Regime Comparison Cards -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                        <!-- Old Regime Card -->
                        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
                                <span class="w-2 h-2 bg-orange-500 rounded-full mr-2"></span>
                                Old Tax Regime
                            </h3>
                            <div class="space-y-3">
                                <div class="flex justify-between items-center py-2 border-b border-gray-100">
                                    <span class="text-gray-600">Gross Income</span>
                                    <span id="oldGrossIncome" class="font-medium">₹0</span>
                                </div>
                                <div class="flex justify-between items-center py-2 border-b border-gray-100">
                                    <span class="text-gray-600">Total Deductions</span>
                                    <span id="oldTotalDeductions" class="font-medium">₹0</span>
                                </div>
                                <div class="flex justify-between items-center py-2 border-b border-gray-100">
                                    <span class="text-gray-600">Taxable Income</span>
                                    <span id="oldTaxableIncome" class="font-medium">₹0</span>
                                </div>
                                <div class="flex justify-between items-center py-2 border-b border-gray-100">
                                    <span class="text-gray-600">Tax on Taxable Income</span>
                                    <span id="oldBasicTax" class="font-medium">₹0</span>
                                </div>
                                <div class="flex justify-between items-center py-2 border-b border-gray-100">
                                    <span class="text-gray-600">Less: Rebate u/s 87A</span>
                                    <span id="oldRebate" class="font-medium text-green-600">-₹0</span>
                                </div>
                                <div class="flex justify-between items-center py-2 border-b border-gray-100">
                                    <span class="text-gray-600">Income Tax After Rebate</span>
                                    <span id="oldIncomeTax" class="font-medium">₹0</span>
                                </div>
                                <div class="flex justify-between items-center py-2 border-b border-gray-100">
                                    <span class="text-gray-600">Add: Surcharge</span>
                                    <span id="oldSurcharge" class="font-medium">₹0</span>
                                </div>
                                <div class="flex justify-between items-center py-2 border-b border-gray-100">
                                    <span class="text-gray-600">Add: Health & Education Cess (4%)</span>
                                    <span id="oldCess" class="font-medium">₹0</span>
                                </div>
                                <div class="flex justify-between items-center pt-4">
                                    <span class="text-lg font-semibold">Total Tax Payable</span>
                                    <span id="oldTotalTax" class="text-2xl font-bold text-orange-600">₹0</span>
                                </div>
                            </div>
                        </div>

                        <!-- New Regime Card -->
                        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
                                <span class="w-2 h-2 bg-blue-500 rounded-full mr-2"></span>
                                New Tax Regime
                            </h3>
                            <div class="space-y-3">
                                <div class="flex justify-between items-center py-2 border-b border-gray-100">
                                    <span class="text-gray-600">Gross Income</span>
                                    <span id="newGrossIncome" class="font-medium">₹0</span>
                                </div>
                                <div class="flex justify-between items-center py-2 border-b border-gray-100">
                                    <span class="text-gray-600">Less: Standard Deduction</span>
                                    <span id="newStandardDeduction" class="font-medium text-green-600">-₹75,000</span>
                                </div>
                                <div class="flex justify-between items-center py-2 border-b border-gray-100">
                                    <span class="text-gray-600">Taxable Income</span>
                                    <span id="newTaxableIncome" class="font-medium">₹0</span>
                                </div>
                                <div class="flex justify-between items-center py-2 border-b border-gray-100">
                                    <span class="text-gray-600">Tax on Taxable Income</span>
                                    <span id="newBasicTax" class="font-medium">₹0</span>
                                </div>
                                <div class="flex justify-between items-center py-2 border-b border-gray-100">
                                    <span class="text-gray-600">Less: Rebate u/s 87A</span>
                                    <span id="newRebate" class="font-medium text-green-600">-₹0</span>
                                </div>
                                <div class="flex justify-between items-center py-2 border-b border-gray-100">
                                    <span class="text-gray-600">Income Tax After Rebate</span>
                                    <span id="newIncomeTax" class="font-medium">₹0</span>
                                </div>
                                <div class="flex justify-between items-center py-2 border-b border-gray-100">
                                    <span class="text-gray-600">Add: Surcharge</span>
                                    <span id="newSurcharge" class="font-medium">₹0</span>
                                </div>
                                <div class="flex justify-between items-center py-2 border-b border-gray-100">
                                    <span class="text-gray-600">Add: Health & Education Cess (4%)</span>
                                    <span id="newCess" class="font-medium">₹0</span>
                                </div>
                                <div class="flex justify-between items-center pt-4">
                                    <span class="text-lg font-semibold">Total Tax Payable</span>
                                    <span id="newTotalTax" class="text-2xl font-bold text-blue-600">₹0</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tax Savings Analysis -->
                    <div class="bg-gradient-to-r from-green-50 to-emerald-50 border border-green-200 rounded-2xl p-6 mb-6">
                        <h3 class="font-semibold text-green-800 mb-3 text-lg">💡 Tax Savings Analysis</h3>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                            <div class="text-center">
                                <p class="text-sm text-gray-600">Old Regime Tax</p>
                                <p id="analysisOldTax" class="text-xl font-bold text-orange-600">₹0</p>
                            </div>
                            <div class="text-center">
                                <p class="text-sm text-gray-600">New Regime Tax</p>
                                <p id="analysisNewTax" class="text-xl font-bold text-blue-600">₹0</p>
                            </div>
                            <div class="text-center">
                                <p class="text-sm text-gray-600">Tax Savings</p>
                                <p id="analysisSavings" class="text-xl font-bold text-green-600">₹0</p>
                            </div>
                        </div>
                        <div class="text-center">
                            <p id="recommendationText" class="text-green-700 font-medium mb-2"></p>
                            <p id="savingsAmount" class="text-green-800 font-bold text-lg"></p>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex gap-4">
                        <button onclick="showTaxSlabs()" 
                                class="flex-1 bg-gray-100 hover:bg-gray-200 text-gray-700 font-medium py-3 px-6 rounded-xl transition-all">
                            View Tax Slabs
                        </button>
                        <button onclick="resetCalculator()" 
                                class="flex-1 bg-blue-100 hover:bg-blue-200 text-blue-700 font-medium py-3 px-6 rounded-xl transition-all">
                            Start Over
                        </button>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="lg:col-span-1 space-y-8">
                <!-- Key Features -->
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                    <h2 class="text-lg font-semibold text-gray-800 mb-4">Key Features</h2>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-gray-700">Compare Old vs New Tax Regime instantly</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-gray-700">Latest tax slabs for FY 2024-25</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-gray-700">All deductions under sections 80C, 80D, 80E</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-gray-700">Age-based tax calculations</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-gray-700">Surcharge and cess calculations</span>
                        </li>
                    </ul>
                </div>

                <!-- Quick Tax Saving Tips -->
                <div class="bg-blue-50 rounded-2xl shadow-sm border border-blue-100 p-6">
                    <h2 class="text-lg font-semibold text-gray-800 mb-4">Quick Tax Saving Tips</h2>
                    <div class="space-y-3 text-sm">
                        <div class="flex items-start">
                            <span class="text-blue-600 font-semibold mr-2">1.</span>
                            <span class="text-gray-700">Maximize your 80C investments up to ₹1.5 lakh</span>
                        </div>
                        <div class="flex items-start">
                            <span class="text-blue-600 font-semibold mr-2">2.</span>
                            <span class="text-gray-700">Invest additional ₹50,000 in NPS for extra deduction</span>
                        </div>
                        <div class="flex items-start">
                            <span class="text-blue-600 font-semibold mr-2">3.</span>
                            <span class="text-gray-700">Claim HRA exemption if you pay rent</span>
                        </div>
                        <div class="flex items-start">
                            <span class="text-blue-600 font-semibold mr-2">4.</span>
                            <span class="text-gray-700">Don't forget medical insurance premiums</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- FAQ Section -->
        <div class="mt-16">
            <h2 class="text-3xl font-bold text-gray-900 text-center mb-8">Frequently Asked Questions</h2>
            
            <div class="max-w-4xl mx-auto space-y-4">
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100">
                    <button class="w-full text-left p-6 hover:bg-gray-50 flex justify-between items-center rounded-2xl" onclick="toggleFAQ(1)">
                        <span class="font-semibold text-gray-800">What is the difference between Old and New Tax Regime?</span>
                        <svg class="w-5 h-5 text-gray-400 transform transition-transform" id="faq-icon-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div id="faq-content-1" class="hidden px-6 pb-6 text-gray-600">
                        <p>The Old Tax Regime allows various deductions and exemptions like Section 80C, HRA, medical insurance premiums, etc., but has lower basic exemption limits. The New Tax Regime offers higher basic exemption limits with reduced tax rates but allows fewer deductions. You need to choose the regime that results in lower tax liability based on your deductions.</p>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-sm border border-gray-100">
                    <button class="w-full text-left p-6 hover:bg-gray-50 flex justify-between items-center rounded-2xl" onclick="toggleFAQ(2)">
                        <span class="font-semibold text-gray-800">Can I switch between tax regimes every year?</span>
                        <svg class="w-5 h-5 text-gray-400 transform transition-transform" id="faq-icon-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div id="faq-content-2" class="hidden px-6 pb-6 text-gray-600">
                        <p>Yes, salaried individuals can choose between the old and new tax regime every year while filing their income tax return. However, individuals with business income can switch to the new regime but cannot revert back to the old regime in subsequent years unless they have no business income.</p>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-sm border border-gray-100">
                    <button class="w-full text-left p-6 hover:bg-gray-50 flex justify-between items-center rounded-2xl" onclick="toggleFAQ(3)">
                        <span class="font-semibold text-gray-800">What is Section 87A rebate?</span>
                        <svg class="w-5 h-5 text-gray-400 transform transition-transform" id="faq-icon-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div id="faq-content-3" class="hidden px-6 pb-6 text-gray-600">
                        <p>Section 87A provides a rebate of up to ₹12,500 for taxpayers with income up to ₹5 lakh in the old regime, and up to ₹25,000 for income up to ₹7 lakh in the new regime. This rebate effectively makes the tax liability zero for lower income groups.</p>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-sm border border-gray-100">
                    <button class="w-full text-left p-6 hover:bg-gray-50 flex justify-between items-center rounded-2xl" onclick="toggleFAQ(4)">
                        <span class="font-semibold text-gray-800">What are the latest income tax slabs for FY 2024-25?</span>
                        <svg class="w-5 h-5 text-gray-400 transform transition-transform" id="faq-icon-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div id="faq-content-4" class="hidden px-6 pb-6 text-gray-600">
                        <p><strong>New Regime:</strong> 0% up to ₹3L, 5% for ₹3-7L, 10% for ₹7-10L, 15% for ₹10-12L, 20% for ₹12-15L, 30% above ₹15L.</p>
                        <p class="mt-2"><strong>Old Regime:</strong> 0% up to ₹2.5L (₹3L for senior citizens, ₹5L for super senior citizens), 5% for ₹2.5-5L, 20% for ₹5-10L, 30% above ₹10L.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Disclaimer -->
        <div class="mt-12 bg-yellow-50 border border-yellow-200 rounded-xl p-4">
            <p class="text-sm text-gray-700">
                <strong>Disclaimer:</strong> This calculator provides estimates based on current tax slabs and rates for FY 2024-25. 
                Actual tax calculation may vary based on specific circumstances. Please consult a tax advisor for accurate calculations 
                and tax planning advice.
            </p>
        </div>
    </div>
</div>

<!-- Tax Slabs Modal -->
<div id="taxSlabsModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
    <div class="bg-white rounded-2xl p-8 max-w-4xl w-full mx-4 max-h-screen overflow-y-auto">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold text-gray-800">Income Tax Slabs FY 2024-25</h2>
            <button onclick="closeTaxSlabs()" class="text-gray-500 hover:text-gray-700">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        
        <div class="grid md:grid-cols-2 gap-8">
            <!-- Old Regime Slabs -->
            <div>
                <h3 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
                    <span class="w-2 h-2 bg-orange-500 rounded-full mr-2"></span>
                    Old Tax Regime
                </h3>
                <div class="space-y-4">
                    <div class="bg-gray-50 rounded-xl p-4">
                        <div class="font-medium text-gray-800 mb-2">Below 60 years</div>
                        <div class="text-sm text-gray-600 space-y-1">
                            <div>Up to ₹2,50,000: <span class="font-medium">0%</span></div>
                            <div>₹2,50,001 - ₹5,00,000: <span class="font-medium">5%</span></div>
                            <div>₹5,00,001 - ₹10,00,000: <span class="font-medium">20%</span></div>
                            <div>Above ₹10,00,000: <span class="font-medium">30%</span></div>
                        </div>
                    </div>
                    <div class="bg-gray-50 rounded-xl p-4">
                        <div class="font-medium text-gray-800 mb-2">60-80 years (Senior Citizen)</div>
                        <div class="text-sm text-gray-600 space-y-1">
                            <div>Up to ₹3,00,000: <span class="font-medium">0%</span></div>
                            <div>₹3,00,001 - ₹5,00,000: <span class="font-medium">5%</span></div>
                            <div>₹5,00,001 - ₹10,00,000: <span class="font-medium">20%</span></div>
                            <div>Above ₹10,00,000: <span class="font-medium">30%</span></div>
                        </div>
                    </div>
                    <div class="bg-gray-50 rounded-xl p-4">
                        <div class="font-medium text-gray-800 mb-2">Above 80 years (Super Senior)</div>
                        <div class="text-sm text-gray-600 space-y-1">
                            <div>Up to ₹5,00,000: <span class="font-medium">0%</span></div>
                            <div>₹5,00,001 - ₹10,00,000: <span class="font-medium">20%</span></div>
                            <div>Above ₹10,00,000: <span class="font-medium">30%</span></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- New Regime Slabs -->
            <div>
                <h3 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
                    <span class="w-2 h-2 bg-blue-500 rounded-full mr-2"></span>
                    New Tax Regime
                </h3>
                <div class="bg-gray-50 rounded-xl p-4">
                    <div class="font-medium text-gray-800 mb-2">All Age Groups</div>
                    <div class="text-sm text-gray-600 space-y-1">
                        <div>Up to ₹3,00,000: <span class="font-medium">0%</span></div>
                        <div>₹3,00,001 - ₹7,00,000: <span class="font-medium">5%</span></div>
                        <div>₹7,00,001 - ₹10,00,000: <span class="font-medium">10%</span></div>
                        <div>₹10,00,001 - ₹12,00,000: <span class="font-medium">15%</span></div>
                        <div>₹12,00,001 - ₹15,00,000: <span class="font-medium">20%</span></div>
                        <div>Above ₹15,00,000: <span class="font-medium">30%</span></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-8 p-4 bg-blue-50 rounded-xl">
            <p class="text-sm text-gray-700">
                <strong>Note:</strong> Surcharge and cess are applicable based on income levels. 
                Standard deduction of ₹75,000 is available for both regimes for salary income.
            </p>
        </div>
    </div>
</div>

@verbatim
<script>
// Tax calculation constants
const TAX_SLABS = {
    old: {
        below60: [
            { min: 0, max: 250000, rate: 0 },
            { min: 250000, max: 500000, rate: 0.05 },
            { min: 500000, max: 1000000, rate: 0.20 },
            { min: 1000000, max: Infinity, rate: 0.30 }
        ],
        senior: [
            { min: 0, max: 300000, rate: 0 },
            { min: 300000, max: 500000, rate: 0.05 },
            { min: 500000, max: 1000000, rate: 0.20 },
            { min: 1000000, max: Infinity, rate: 0.30 }
        ],
        superSenior: [
            { min: 0, max: 500000, rate: 0 },
            { min: 500000, max: 1000000, rate: 0.20 },
            { min: 1000000, max: Infinity, rate: 0.30 }
        ]
    },
    new: [
        { min: 0, max: 300000, rate: 0 },
        { min: 300000, max: 700000, rate: 0.05 },
        { min: 700000, max: 1000000, rate: 0.10 },
        { min: 1000000, max: 1200000, rate: 0.15 },
        { min: 1200000, max: 1500000, rate: 0.20 },
        { min: 1500000, max: Infinity, rate: 0.30 }
    ]
};

const STANDARD_DEDUCTION = 75000; // For both regimes
const REBATE_87A_OLD = { limit: 500000, amount: 12500 };
const REBATE_87A_NEW = { limit: 700000, amount: 25000 };

function calculateTax() {
    // Get input values
    const salaryIncome = parseFloat(document.getElementById('salaryIncome').value) || 0;
    const age = document.getElementById('age').value;
    const interestIncome = parseFloat(document.getElementById('interestIncome').value) || 0;
    const rentalIncome = parseFloat(document.getElementById('rentalIncome').value) || 0;
    const municipalTax = parseFloat(document.getElementById('municipalTax').value) || 0;
    const housingLoanInterest = parseFloat(document.getElementById('housingLoanInterest').value) || 0;
    const otherIncome = parseFloat(document.getElementById('otherIncome').value) || 0;
    
    // Deductions
    const hraExemption = parseFloat(document.getElementById('hraExemption').value) || 0;
    const section80c = Math.min(parseFloat(document.getElementById('section80c').value) || 0, 150000);
    const npsContribution = Math.min(parseFloat(document.getElementById('npsContribution').value) || 0, 50000);
    const medicalInsurance = parseFloat(document.getElementById('medicalInsurance').value) || 0;
    const educationLoanInterest = parseFloat(document.getElementById('educationLoanInterest').value) || 0;
    const charitableDonations = parseFloat(document.getElementById('charitableDonations').value) || 0;

    if (salaryIncome <= 0) {
        alert('Please enter a valid salary income');
        return;
    }

    // Calculate gross income
    const grossIncome = salaryIncome + interestIncome + (rentalIncome - municipalTax - housingLoanInterest) + otherIncome;

    // Old regime calculation
    const oldDeductions = hraExemption + section80c + npsContribution + medicalInsurance + educationLoanInterest + charitableDonations + STANDARD_DEDUCTION;
    const oldTaxableIncome = Math.max(0, grossIncome - oldDeductions);
    
    let oldSlabs;
    if (age === 'below60') oldSlabs = TAX_SLABS.old.below60;
    else if (age === '60to80') oldSlabs = TAX_SLABS.old.senior;
    else oldSlabs = TAX_SLABS.old.superSenior;
    
    const oldTaxDetails = calculateTaxAmount(oldTaxableIncome, oldSlabs);
    let oldIncomeTax = oldTaxDetails.tax;
    
    // Apply Section 87A rebate for old regime
    if (oldTaxableIncome <= REBATE_87A_OLD.limit) {
        oldIncomeTax = Math.max(0, oldIncomeTax - REBATE_87A_OLD.amount);
    }
    
    const oldSurcharge = calculateSurcharge(oldTaxableIncome, oldIncomeTax);
    const oldCess = (oldIncomeTax + oldSurcharge) * 0.04; // 4% health and education cess
    const oldTotalTax = oldIncomeTax + oldSurcharge + oldCess;

    // New regime calculation
    const newTaxableIncome = Math.max(0, grossIncome - STANDARD_DEDUCTION);
    const newTaxDetails = calculateTaxAmount(newTaxableIncome, TAX_SLABS.new);
    let newIncomeTax = newTaxDetails.tax;
    
    // Apply Section 87A rebate for new regime
    if (newTaxableIncome <= REBATE_87A_NEW.limit) {
        newIncomeTax = Math.max(0, newIncomeTax - REBATE_87A_NEW.amount);
    }
    
    const newSurcharge = calculateSurcharge(newTaxableIncome, newIncomeTax);
    const newCess = (newIncomeTax + newSurcharge) * 0.04;
    const newTotalTax = newIncomeTax + newSurcharge + newCess;

    // Display results
    displayResults(grossIncome, oldDeductions, oldTaxableIncome, oldIncomeTax, oldSurcharge, oldCess, oldTotalTax,
                  newTaxableIncome, newIncomeTax, newSurcharge, newCess, newTotalTax);
}

function calculateTaxAmount(income, slabs) {
    let tax = 0;
    let previousMax = 0;
    
    for (const slab of slabs) {
        if (income > slab.min) {
            const taxableInSlab = Math.min(income, slab.max) - slab.min;
            tax += taxableInSlab * slab.rate;
            previousMax = slab.max;
        }
        if (income <= slab.max) break;
    }
    
    return { tax: Math.round(tax) };
}

function calculateSurcharge(income, tax) {
    if (income > 10000000) { // Above 1 crore
        return Math.min(tax * 0.15, tax * 0.25); // 15% surcharge, maximum 25% of tax
    } else if (income > 5000000) { // Above 50 lakh
        return Math.min(tax * 0.10, tax * 0.25); // 10% surcharge, maximum 25% of tax
    }
    return 0;
}

function displayResults(grossIncome, oldDeductions, oldTaxableIncome, oldIncomeTax, oldSurcharge, oldCess, oldTotalTax,
                       newTaxableIncome, newIncomeTax, newSurcharge, newCess, newTotalTax) {
    
    // Get input values for summary
    const salaryIncome = parseFloat(document.getElementById('salaryIncome').value) || 0;
    const interestIncome = parseFloat(document.getElementById('interestIncome').value) || 0;
    const rentalIncome = parseFloat(document.getElementById('rentalIncome').value) || 0;
    const otherIncome = parseFloat(document.getElementById('otherIncome').value) || 0;
    const hraExemption = parseFloat(document.getElementById('hraExemption').value) || 0;
    const section80c = Math.min(parseFloat(document.getElementById('section80c').value) || 0, 150000);
    const npsContribution = Math.min(parseFloat(document.getElementById('npsContribution').value) || 0, 50000);
    const medicalInsurance = parseFloat(document.getElementById('medicalInsurance').value) || 0;
    const educationLoanInterest = parseFloat(document.getElementById('educationLoanInterest').value) || 0;
    const charitableDonations = parseFloat(document.getElementById('charitableDonations').value) || 0;
    const municipalTax = parseFloat(document.getElementById('municipalTax').value) || 0;
    const housingLoanInterest = parseFloat(document.getElementById('housingLoanInterest').value) || 0;

    // Calculate rebates
    const oldBasicTax = calculateTaxAmount(oldTaxableIncome, getOldSlabs()).tax;
    const newBasicTax = calculateTaxAmount(newTaxableIncome, TAX_SLABS.new).tax;
    const oldRebate = oldTaxableIncome <= REBATE_87A_OLD.limit ? Math.min(oldBasicTax, REBATE_87A_OLD.amount) : 0;
    const newRebate = newTaxableIncome <= REBATE_87A_NEW.limit ? Math.min(newBasicTax, REBATE_87A_NEW.amount) : 0;

    // Update income summary
    document.getElementById('summaryBasicSalary').textContent = formatCurrency(salaryIncome);
    document.getElementById('summaryInterestIncome').textContent = formatCurrency(interestIncome);
    document.getElementById('summaryRentalIncome').textContent = formatCurrency(Math.max(0, rentalIncome - municipalTax - housingLoanInterest));
    document.getElementById('summaryOtherIncome').textContent = formatCurrency(otherIncome);
    document.getElementById('summaryTotalIncome').textContent = formatCurrency(grossIncome);
    
    document.getElementById('summaryHRA').textContent = formatCurrency(hraExemption);
    document.getElementById('summary80C').textContent = formatCurrency(section80c);
    document.getElementById('summaryNPS').textContent = formatCurrency(npsContribution);
    document.getElementById('summaryOtherDeductions').textContent = formatCurrency(medicalInsurance + educationLoanInterest + charitableDonations);
    document.getElementById('summaryTotalDeductions').textContent = formatCurrency(oldDeductions);

    // Update old regime values
    document.getElementById('oldGrossIncome').textContent = formatCurrency(grossIncome);
    document.getElementById('oldTotalDeductions').textContent = formatCurrency(oldDeductions);
    document.getElementById('oldTaxableIncome').textContent = formatCurrency(oldTaxableIncome);
    document.getElementById('oldBasicTax').textContent = formatCurrency(oldBasicTax);
    document.getElementById('oldRebate').textContent = formatCurrency(oldRebate);
    document.getElementById('oldIncomeTax').textContent = formatCurrency(oldIncomeTax);
    document.getElementById('oldSurcharge').textContent = formatCurrency(oldSurcharge);
    document.getElementById('oldCess').textContent = formatCurrency(oldCess);
    document.getElementById('oldTotalTax').textContent = formatCurrency(oldTotalTax);

    // Update new regime values
    document.getElementById('newGrossIncome').textContent = formatCurrency(grossIncome);
    document.getElementById('newTaxableIncome').textContent = formatCurrency(newTaxableIncome);
    document.getElementById('newBasicTax').textContent = formatCurrency(newBasicTax);
    document.getElementById('newRebate').textContent = formatCurrency(newRebate);
    document.getElementById('newIncomeTax').textContent = formatCurrency(newIncomeTax);
    document.getElementById('newSurcharge').textContent = formatCurrency(newSurcharge);
    document.getElementById('newCess').textContent = formatCurrency(newCess);
    document.getElementById('newTotalTax').textContent = formatCurrency(newTotalTax);

    // Update tax savings analysis
    document.getElementById('analysisOldTax').textContent = formatCurrency(oldTotalTax);
    document.getElementById('analysisNewTax').textContent = formatCurrency(newTotalTax);
    document.getElementById('analysisSavings').textContent = formatCurrency(Math.abs(oldTotalTax - newTotalTax));

    // Show recommendation
    const savings = Math.abs(oldTotalTax - newTotalTax);
    const betterRegime = oldTotalTax < newTotalTax ? 'Old' : 'New';
    
    document.getElementById('recommendationText').textContent = 
        `${betterRegime} Tax Regime is recommended for you based on your income and deductions.`;
    document.getElementById('savingsAmount').textContent = 
        `You can save ₹${formatNumber(savings)} annually by choosing the ${betterRegime} Tax Regime.`;

    // Store calculation details for slab breakup
    window.taxCalculationDetails = {
        oldTaxableIncome: oldTaxableIncome,
        newTaxableIncome: newTaxableIncome,
        oldSlabs: getOldSlabs(),
        newSlabs: TAX_SLABS.new
    };

    // Show results section
    document.getElementById('calculationResults').classList.remove('hidden');
    
    // Scroll to results
    document.getElementById('calculationResults').scrollIntoView({ behavior: 'smooth', block: 'nearest' });
}

function getOldSlabs() {
    const age = document.getElementById('age').value;
    if (age === 'below60') return TAX_SLABS.old.below60;
    else if (age === '60to80') return TAX_SLABS.old.senior;
    else return TAX_SLABS.old.superSenior;
}

function toggleSlabBreakup() {
    const breakupDetails = document.getElementById('slabBreakupDetails');
    const toggleButton = document.getElementById('slabBreakupToggle');
    
    if (breakupDetails.classList.contains('hidden')) {
        // Show breakup details
        breakupDetails.classList.remove('hidden');
        toggleButton.textContent = 'Hide Detailed Slab-wise Calculation';
        
        // Populate slab breakup details
        populateSlabBreakup();
    } else {
        // Hide breakup details
        breakupDetails.classList.add('hidden');
        toggleButton.textContent = 'View Detailed Slab-wise Calculation';
    }
}

function populateSlabBreakup() {
    if (!window.taxCalculationDetails) return;
    
    const { oldTaxableIncome, newTaxableIncome, oldSlabs, newSlabs } = window.taxCalculationDetails;
    
    // Populate old regime slab breakup
    const oldSlabDetails = document.getElementById('oldSlabDetails');
    oldSlabDetails.innerHTML = '';
    let oldRunningTotal = 0;
    
    for (const slab of oldSlabs) {
        if (oldTaxableIncome > slab.min) {
            const taxableInSlab = Math.min(oldTaxableIncome, slab.max) - slab.min;
            const taxInSlab = taxableInSlab * slab.rate;
            oldRunningTotal += taxInSlab;
            
            const slabDiv = document.createElement('div');
            slabDiv.className = 'flex justify-between py-1 border-b border-gray-200';
            slabDiv.innerHTML = `
                <span class="text-gray-600">₹${formatNumber(slab.min + 1)} - ₹${slab.max === Infinity ? '∞' : formatNumber(slab.max)} (${(slab.rate * 100)}%):</span>
                <span class="font-medium">₹${formatNumber(Math.round(taxInSlab))}</span>
            `;
            oldSlabDetails.appendChild(slabDiv);
        }
        if (oldTaxableIncome <= slab.max) break;
    }
    
    // Add total row for old regime
    const oldTotalDiv = document.createElement('div');
    oldTotalDiv.className = 'flex justify-between pt-2 font-semibold border-t border-gray-300';
    oldTotalDiv.innerHTML = `
        <span class="text-gray-700">Total Tax:</span>
        <span class="text-orange-600">₹${formatNumber(Math.round(oldRunningTotal))}</span>
    `;
    oldSlabDetails.appendChild(oldTotalDiv);
    
    // Populate new regime slab breakup
    const newSlabDetails = document.getElementById('newSlabDetails');
    newSlabDetails.innerHTML = '';
    let newRunningTotal = 0;
    
    for (const slab of newSlabs) {
        if (newTaxableIncome > slab.min) {
            const taxableInSlab = Math.min(newTaxableIncome, slab.max) - slab.min;
            const taxInSlab = taxableInSlab * slab.rate;
            newRunningTotal += taxInSlab;
            
            const slabDiv = document.createElement('div');
            slabDiv.className = 'flex justify-between py-1 border-b border-gray-200';
            slabDiv.innerHTML = `
                <span class="text-gray-600">₹${formatNumber(slab.min + 1)} - ₹${slab.max === Infinity ? '∞' : formatNumber(slab.max)} (${(slab.rate * 100)}%):</span>
                <span class="font-medium">₹${formatNumber(Math.round(taxInSlab))}</span>
            `;
            newSlabDetails.appendChild(slabDiv);
        }
        if (newTaxableIncome <= slab.max) break;
    }
    
    // Add total row for new regime
    const newTotalDiv = document.createElement('div');
    newTotalDiv.className = 'flex justify-between pt-2 font-semibold border-t border-gray-300';
    newTotalDiv.innerHTML = `
        <span class="text-gray-700">Total Tax:</span>
        <span class="text-blue-600">₹${formatNumber(Math.round(newRunningTotal))}</span>
    `;
    newSlabDetails.appendChild(newTotalDiv);
}

function formatCurrency(amount) {
    return '₹' + formatNumber(Math.round(amount));
}

function formatNumber(num) {
    return num.toLocaleString('en-IN');
}

function showTaxSlabs() {
    document.getElementById('taxSlabsModal').classList.remove('hidden');
    document.getElementById('taxSlabsModal').classList.add('flex');
}

function closeTaxSlabs() {
    document.getElementById('taxSlabsModal').classList.add('hidden');
    document.getElementById('taxSlabsModal').classList.remove('flex');
}

function resetCalculator() {
    document.getElementById('taxCalculatorForm').reset();
    document.getElementById('calculationResults').classList.add('hidden');
    window.scrollTo({ top: 0, behavior: 'smooth' });
}

function toggleFAQ(id) {
    const content = document.getElementById(`faq-content-${id}`);
    const icon = document.getElementById(`faq-icon-${id}`);
    
    if (content.classList.contains('hidden')) {
        content.classList.remove('hidden');
        icon.classList.add('rotate-180');
    } else {
        content.classList.add('hidden');
        icon.classList.remove('rotate-180');
    }
}

// Close modal when clicking outside
document.getElementById('taxSlabsModal').addEventListener('click', function(e) {
    if (e.target === this) {
        closeTaxSlabs();
    }
});
</script>
@endverbatim
@endsection