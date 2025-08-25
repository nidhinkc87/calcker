@extends('layouts.app')

@section('title', 'Free NPS Calculator India - National Pension System Calculator 2025 | CalcPro')

@section('meta_description', 'Calculate your NPS pension, maturity amount & tax benefits with our free National Pension System calculator. Plan your retirement with NPS Tier I & Tier II calculations.')

@section('meta_keywords', 'NPS calculator, National Pension System calculator, NPS pension calculator, retirement calculator India, NPS maturity calculator, pension planning, NPS tax benefits')

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
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">Understanding NPS (National Pension System)</h2>
                    <div class="prose prose-lg max-w-none text-gray-600">
                        <p class="mb-6">
                            The National Pension System (NPS) is a government-sponsored pension scheme that helps you build a retirement corpus through systematic investments. It offers tax benefits and flexible investment options to secure your financial future.
                        </p>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 my-8">
                            <div>
                                <h3 class="text-xl font-semibold text-gray-800 mb-4">Key Features</h3>
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
                                <h3 class="text-xl font-semibold text-gray-800 mb-4">Tax Benefits</h3>
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