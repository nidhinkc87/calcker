@extends('layouts.app')

@section('title', 'Free HRA Exemption Calculator India - Calculate House Rent Allowance Tax Exemption | CalcPro')

@section('meta_description', 'Calculate your HRA tax exemption instantly with our free House Rent Allowance calculator. Compare exemptions for metro vs non-metro cities. Accurate calculations for income tax planning.')

@section('meta_keywords', 'HRA exemption calculator, house rent allowance calculator, HRA calculator India, income tax calculator, HRA exemption limit, metro non-metro HRA, tax exemption calculator')

@section('content')
<div class="bg-gradient-to-b from-blue-50 to-white py-12">
    <div class="container mx-auto px-4 max-w-7xl">
        <!-- Page Header -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">HRA Exemption Calculator</h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Calculate your House Rent Allowance (HRA) tax exemption instantly. Find out how much HRA is exempt from income tax and plan your taxes better.
            </p>
        </div>

        <!-- Main Content Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            <!-- Calculator Section -->
            <div class="lg:col-span-2">
                <!-- Calculator Form -->
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
                    <form id="hraCalculator">
                        <!-- Input Fields -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <!-- Basic Pay -->
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">
                                    Basic Pay (Annual) <span class="text-red-500">*</span>
                                </label>
                                <div class="relative">
                                    <span class="absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-500">₹</span>
                                    <input type="number" 
                                           id="basicPay" 
                                           class="w-full pl-10 pr-4 py-4 text-lg border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all"
                                           placeholder="600000"
                                           step="1000"
                                           min="0"
                                           required>
                                </div>
                            </div>

                            <!-- Dearness Allowance -->
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">
                                    Dearness Allowance (Annual)
                                </label>
                                <div class="relative">
                                    <span class="absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-500">₹</span>
                                    <input type="number" 
                                           id="dearnessAllowance" 
                                           class="w-full pl-10 pr-4 py-4 text-lg border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all"
                                           placeholder="0"
                                           step="1000"
                                           min="0"
                                           value="0">
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <!-- HRA Received -->
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">
                                    House Rent Allowance (Annual) <span class="text-red-500">*</span>
                                </label>
                                <div class="relative">
                                    <span class="absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-500">₹</span>
                                    <input type="number" 
                                           id="hraReceived" 
                                           class="w-full pl-10 pr-4 py-4 text-lg border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all"
                                           placeholder="180000"
                                           step="1000"
                                           min="0"
                                           required>
                                </div>
                            </div>

                            <!-- Rent Paid -->
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">
                                    Total Rent Paid (Annual) <span class="text-red-500">*</span>
                                </label>
                                <div class="relative">
                                    <span class="absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-500">₹</span>
                                    <input type="number" 
                                           id="rentPaid" 
                                           class="w-full pl-10 pr-4 py-4 text-lg border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all"
                                           placeholder="240000"
                                           step="1000"
                                           min="0"
                                           required>
                                </div>
                            </div>
                        </div>

                        <!-- City Type -->
                        <div class="mb-8">
                            <label class="block text-sm font-semibold text-gray-700 mb-4">
                                City Type <span class="text-red-500">*</span>
                            </label>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="relative">
                                    <input type="radio" id="metro" name="cityType" value="metro" class="peer sr-only" checked>
                                    <label for="metro" class="flex items-center justify-center px-6 py-4 bg-white border-2 border-gray-300 rounded-xl cursor-pointer hover:bg-gray-50 peer-checked:border-blue-500 peer-checked:bg-blue-50 transition-all">
                                        <div class="text-center">
                                            <div class="text-lg font-semibold text-gray-900 mb-1">Metro City</div>
                                            <div class="text-sm text-gray-600">Delhi, Mumbai, Chennai, Kolkata</div>
                                        </div>
                                    </label>
                                </div>
                                <div class="relative">
                                    <input type="radio" id="nonMetro" name="cityType" value="non-metro" class="peer sr-only">
                                    <label for="nonMetro" class="flex items-center justify-center px-6 py-4 bg-white border-2 border-gray-300 rounded-xl cursor-pointer hover:bg-gray-50 peer-checked:border-blue-500 peer-checked:bg-blue-50 transition-all">
                                        <div class="text-center">
                                            <div class="text-lg font-semibold text-gray-900 mb-1">Non-Metro City</div>
                                            <div class="text-sm text-gray-600">All other cities</div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- Calculate Button -->
                        <button type="button" 
                                onclick="calculateHRA()" 
                                class="w-full bg-gradient-to-r from-blue-600 to-blue-700 text-white font-semibold py-4 px-6 rounded-xl hover:from-blue-700 hover:to-blue-800 transform hover:scale-[1.02] transition-all text-lg shadow-md">
                            Calculate HRA Exemption
                        </button>
                    </form>
                </div>

                <!-- Results Section -->
                <div id="results" class="hidden mt-8">
                    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
                        <h3 class="text-2xl font-bold text-gray-800 mb-6">HRA Exemption Results</h3>
                        
                        <!-- Main Results -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                            <div class="bg-green-50 rounded-xl p-6 text-center border border-green-200">
                                <div class="text-3xl font-bold text-green-600 mb-2" id="exemptedAmount">₹0</div>
                                <div class="text-green-800 font-semibold">HRA Exempted</div>
                                <div class="text-green-600 text-sm mt-1">Tax Free Amount</div>
                            </div>
                            <div class="bg-red-50 rounded-xl p-6 text-center border border-red-200">
                                <div class="text-3xl font-bold text-red-600 mb-2" id="taxableAmount">₹0</div>
                                <div class="text-red-800 font-semibold">HRA Taxable</div>
                                <div class="text-red-600 text-sm mt-1">Added to Income</div>
                            </div>
                        </div>

                        <!-- Calculation Breakdown -->
                        <div class="bg-gray-50 rounded-xl p-6">
                            <h4 class="text-lg font-semibold text-gray-800 mb-4">Calculation Details</h4>
                            <div class="space-y-3 text-sm">
                                <div class="flex justify-between">
                                    <span class="text-gray-600">1. Actual HRA Received:</span>
                                    <span class="font-semibold" id="actualHRA">₹0</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600">2. Rent Paid - 10% of (Basic + DA):</span>
                                    <span class="font-semibold" id="excessRent">₹0</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600" id="salaryPercentageLabel">3. 50% of (Basic + DA) - Metro:</span>
                                    <span class="font-semibold" id="salaryPercentage">₹0</span>
                                </div>
                                <hr class="border-gray-300">
                                <div class="flex justify-between text-lg font-bold">
                                    <span class="text-gray-800">HRA Exemption (Least of above):</span>
                                    <span class="text-green-600" id="finalExemption">₹0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Information Section -->
                <div class="mt-12">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">Understanding HRA Exemption</h2>
                    <div class="prose prose-lg max-w-none text-gray-600">
                        <p class="mb-6">
                            House Rent Allowance (HRA) is a component of salary that helps employees meet their accommodation expenses. The Income Tax Act provides partial or complete tax exemption on HRA, making it a valuable tax-saving tool for salaried individuals.
                        </p>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 my-8">
                            <div>
                                <h3 class="text-xl font-semibold text-gray-800 mb-4">Calculation Rules</h3>
                                <ul class="space-y-3">
                                    <li class="flex items-start">
                                        <span class="text-blue-500 mr-3 mt-1">•</span>
                                        <div>
                                            <strong class="text-gray-800">Actual HRA received</strong>
                                            <span class="text-gray-600 block text-sm">The HRA component in your salary</span>
                                        </div>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-blue-500 mr-3 mt-1">•</span>
                                        <div>
                                            <strong class="text-gray-800">Excess rent over 10% of salary</strong>
                                            <span class="text-gray-600 block text-sm">Rent paid minus 10% of basic salary</span>
                                        </div>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-blue-500 mr-3 mt-1">•</span>
                                        <div>
                                            <strong class="text-gray-800">50% or 40% of salary</strong>
                                            <span class="text-gray-600 block text-sm">Based on metro or non-metro city</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            
                            <div>
                                <h3 class="text-xl font-semibold text-gray-800 mb-4">Metro vs Non-Metro</h3>
                                <ul class="space-y-3">
                                    <li class="flex items-start">
                                        <span class="text-blue-500 mr-3 mt-1">•</span>
                                        <div>
                                            <strong class="text-gray-800">Metro Cities:</strong>
                                            <span class="text-gray-600 block text-sm">Delhi, Mumbai, Chennai, Kolkata - 50% exemption</span>
                                        </div>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-blue-500 mr-3 mt-1">•</span>
                                        <div>
                                            <strong class="text-gray-800">Non-Metro Cities:</strong>
                                            <span class="text-gray-600 block text-sm">All other cities - 40% exemption</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="bg-blue-50 border-l-4 border-blue-500 p-6 rounded-r-lg mt-8">
                            <h4 class="text-lg font-semibold text-gray-800 mb-2">Important Notes</h4>
                            <ul class="space-y-2 text-sm text-gray-600">
                                <li>• You must be staying in a rented accommodation to claim HRA exemption</li>
                                <li>• Rent receipts are required as proof for claiming exemption</li>
                                <li>• If rent exceeds ₹1 lakh annually, landlord's PAN is mandatory</li>
                                <li>• HRA and home loan interest can be claimed simultaneously</li>
                            </ul>
                        </div>
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
                            <span class="text-gray-700">Instant HRA exemption calculation</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-gray-700">Metro vs Non-metro comparison</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-gray-700">Detailed calculation breakdown</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-gray-700">Tax planning insights</span>
                        </li>
                    </ul>
                </div>

                <!-- Important Note -->
                <div class="bg-yellow-50 rounded-2xl shadow-sm border border-yellow-200 p-6">
                    <h2 class="text-lg font-semibold text-gray-800 mb-3">Important Note</h2>
                    <p class="text-sm text-gray-700 mb-3">
                        This calculator provides estimates based on current income tax rules. Actual exemption may vary based on:
                    </p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li>• Actual rent paid vs HRA received</li>
                        <li>• City of residence classification</li>
                        <li>• Other salary components</li>
                        <li>• Changes in tax laws</li>
                    </ul>
                </div>

                <!-- Related Calculators -->
                <div class="bg-gradient-to-br from-blue-600 to-indigo-600 rounded-2xl p-6 text-white">
                    <h3 class="text-xl font-bold mb-4">Related Calculators</h3>
                    <ul class="space-y-3">
                        <li>
                            <a href="{{ route('income.tax.calculator') }}" class="flex items-center justify-between group">
                                <span class="group-hover:translate-x-1 transition-transform">Income Tax Calculator</span>
                                <svg class="w-5 h-5 opacity-50 group-hover:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('gst.calculator') }}" class="flex items-center justify-between group">
                                <span class="group-hover:translate-x-1 transition-transform">GST Calculator</span>
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
                The actual HRA exemption may vary based on various factors including changes in income tax rules, actual rent paid, 
                and other components of salary. For precise calculations, please consult with a tax advisor.
            </p>
        </div>
    </div>
</div>

<script>
function calculateHRA() {
    // Get input values
    const basicPay = parseFloat(document.getElementById('basicPay').value) || 0;
    const dearnessAllowance = parseFloat(document.getElementById('dearnessAllowance').value) || 0;
    const hraReceived = parseFloat(document.getElementById('hraReceived').value) || 0;
    const rentPaid = parseFloat(document.getElementById('rentPaid').value) || 0;
    const cityType = document.querySelector('input[name="cityType"]:checked').value;
    
    // Validation
    if (!basicPay || !hraReceived || !rentPaid) {
        alert('Please fill all required fields');
        return;
    }
    
    // Calculate total salary (Basic + DA)
    const totalSalary = basicPay + dearnessAllowance;
    
    // Calculate the three components for HRA exemption
    const actualHRA = hraReceived;
    const tenPercentSalary = totalSalary * 0.1;
    const excessRent = Math.max(0, rentPaid - tenPercentSalary);
    const salaryPercentage = cityType === 'metro' ? totalSalary * 0.5 : totalSalary * 0.4;
    
    // HRA exemption is the least of the three
    const hraExemption = Math.min(actualHRA, excessRent, salaryPercentage);
    const hraTaxable = hraReceived - hraExemption;
    
    // Update results
    document.getElementById('exemptedAmount').textContent = formatCurrency(hraExemption);
    document.getElementById('taxableAmount').textContent = formatCurrency(hraTaxable);
    
    // Update breakdown
    document.getElementById('actualHRA').textContent = formatCurrency(actualHRA);
    document.getElementById('excessRent').textContent = formatCurrency(excessRent);
    document.getElementById('salaryPercentage').textContent = formatCurrency(salaryPercentage);
    document.getElementById('finalExemption').textContent = formatCurrency(hraExemption);
    
    // Update label for salary percentage
    const percentageLabel = cityType === 'metro' ? '3. 50% of (Basic + DA) - Metro:' : '3. 40% of (Basic + DA) - Non-Metro:';
    document.getElementById('salaryPercentageLabel').textContent = percentageLabel;
    
    // Show results
    document.getElementById('results').classList.remove('hidden');
    document.getElementById('results').scrollIntoView({ behavior: 'smooth', block: 'nearest' });
}

function formatCurrency(amount) {
    return '₹' + Math.round(amount).toLocaleString('en-IN');
}
</script>
@endsection