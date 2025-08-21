@extends('layouts.app')

@section('title', 'Free EPS Pension Calculator India - Calculate Employee Pension Scheme Benefits | CalcPro')
@section('meta_description', 'Calculate your EPS pension amount instantly with our free Employee Pension Scheme calculator. Compare Higher Pension Scheme vs 15K capped pension. Accurate calculations for retirement planning.')
@section('meta_keywords', 'EPS pension calculator, employee pension scheme calculator, EPS calculator India, retirement pension calculator, EPFO pension calculator, pension amount calculator, higher pension scheme calculator')

@section('structured_data')
<script type="application/ld+json">
{
    "@{{ "" }}context": "https://schema.org",
    "@{{ "" }}type": "WebApplication",
    "name": "EPS Pension Calculator",
    "applicationCategory": "FinanceApplication",
    "operatingSystem": "All",
    "offers": {
        "@{{ "" }}type": "Offer",
        "price": "0",
        "priceCurrency": "INR"
    },
    "description": "Free EPS pension calculator to estimate your retirement benefits under Employee Pension Scheme. Compare higher pension vs 15K capped pension schemes.",
    "url": "{{ url('/free-eps-pension-calculator') }}",
    "publisher": {
        "@{{ "" }}type": "Organization",
        "name": "{{ config('app.name') }}"
    }
}
</script>

<script type="application/ld+json">
{
    "@{{ "" }}context": "https://schema.org",
    "@{{ "" }}type": "FAQPage",
    "mainEntity": [{
        "@{{ "" }}type": "Question",
        "name": "What is EPS (Employee Pension Scheme)?",
        "acceptedAnswer": {
            "@{{ "" }}type": "Answer",
            "text": "The Employee Pension Scheme (EPS) is a social security scheme managed by EPFO that provides pension benefits to employees in the organized sector after retirement at age 58. Under EPS, 8.33% of the employer's EPF contribution goes towards pension benefits."
        }
    }, {
        "@{{ "" }}type": "Question",
        "name": "How is EPS pension calculated?",
        "acceptedAnswer": {
            "@{{ "" }}type": "Answer",
            "text": "EPS pension is calculated using the formula: (Pensionable salary × Pensionable service) / 70. The pensionable salary is the average salary of the last 60 months, and pensionable service is the number of years of contribution to EPS."
        }
    }, {
        "@{{ "" }}type": "Question",
        "name": "What is the difference between Higher Pension Scheme and 15K capped pension?",
        "acceptedAnswer": {
            "@{{ "" }}type": "Answer",
            "text": "In the 15K capped scheme, pension contributions are calculated on a maximum salary of ₹15,000 per month. In the Higher Pension Scheme, contributions are based on actual salary without any cap, resulting in higher pension benefits but also higher contributions."
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
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">EPS Pension Calculator</h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Calculate your Employee Pension Scheme benefits instantly. Compare Higher Pension Scheme with 15K capped pension to make informed retirement planning decisions.
            </p>
        </div>

        <!-- Main Content Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            <!-- Calculator Section -->
            <div class="lg:col-span-2">
                <!-- Calculator Form -->
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
                    <form id="epsPensionCalculator">
                        <!-- All Input Fields in Zoho Order -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <!-- Employee PF Contribution -->
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">
                                    Employee PF Contribution (Rs.)
                                </label>
                                <div class="relative">
                                    <span class="absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-500">₹</span>
                                    <input type="number" 
                                           id="employeePF" 
                                           class="w-full pl-10 pr-4 py-4 text-lg border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all"
                                           placeholder="0"
                                           step="100"
                                           min="0"
                                           required>
                                </div>
                            </div>

                            <!-- Employer PF Contribution -->
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">
                                    Employer PF Contribution (Rs.)
                                </label>
                                <div class="relative">
                                    <span class="absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-500">₹</span>
                                    <input type="number" 
                                           id="employerPF" 
                                           class="w-full pl-10 pr-4 py-4 text-lg border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all"
                                           placeholder="0"
                                           step="100"
                                           min="0"
                                           required>
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <!-- EPS Contribution -->
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">
                                    EPS Contribution (Rs.)
                                </label>
                                <div class="relative">
                                    <span class="absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-500">₹</span>
                                    <input type="number" 
                                           id="epsContribution" 
                                           class="w-full pl-10 pr-4 py-4 text-lg border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all"
                                           placeholder="0"
                                           step="100"
                                           min="0"
                                           required>
                                </div>
                            </div>

                            <!-- Monthly Salary -->
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">
                                    Monthly Salary (Basic + DA) (Rs.)
                                </label>
                                <div class="relative">
                                    <span class="absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-500">₹</span>
                                    <input type="number" 
                                           id="monthlySalary" 
                                           class="w-full pl-10 pr-4 py-4 text-lg border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all"
                                           placeholder="50000"
                                           step="1000"
                                           min="0"
                                           required>
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <!-- Expected Salary Growth -->
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">
                                    Expected Yearly Salary Growth (%)
                                </label>
                                <div class="relative">
                                    <input type="number" 
                                           id="salaryGrowth" 
                                           class="w-full pr-10 px-4 py-4 text-lg border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all"
                                           placeholder="8"
                                           step="0.5"
                                           min="0"
                                           max="30"
                                           value="8">
                                    <span class="absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-500 text-lg">%</span>
                                </div>
                            </div>

                            <!-- Date of First Joining Service -->
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">
                                    Date of First Joining Service
                                </label>
                                <input type="date" 
                                       id="startDate" 
                                       class="w-full px-4 py-4 text-lg border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all"
                                       required>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <!-- Date of Retirement -->
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">
                                    Date of Retirement
                                </label>
                                <input type="date" 
                                       id="retirementDate" 
                                       class="w-full px-4 py-4 text-lg border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all"
                                       required>
                            </div>
                        </div>

                        <!-- Calculate Button -->
                        <button type="button" 
                                onclick="calculateEPSPension()" 
                                class="w-full bg-gradient-to-r from-blue-600 to-blue-700 text-white font-semibold py-4 px-6 rounded-xl hover:from-blue-700 hover:to-blue-800 transform hover:scale-[1.02] transition-all text-lg shadow-md">
                            Calculate Pension
                        </button>
                    </form>
                </div>

                <!-- Results Section -->
                <div id="results" class="hidden mt-8">
                    <!-- Pension and Withdrawal Summary -->
                    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 mb-6">
                        <h3 class="text-xl font-semibold text-gray-800 mb-6">Pension and Withdrawal Summary</h3>
                        
                        <div class="overflow-x-auto">
                            <table class="w-full">
                                <thead>
                                    <tr class="border-b-2 border-gray-200">
                                        <th class="text-left py-4 px-4 font-semibold text-gray-700"></th>
                                        <th class="text-center py-4 px-4 font-semibold text-blue-600">Higher Pension Scheme</th>
                                        <th class="text-center py-4 px-4 font-semibold text-blue-600">15K Capped Scheme</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="border-b">
                                        <td class="py-4 px-4 font-medium text-gray-700">Monthly Pension Amount</td>
                                        <td class="py-4 px-4 text-center font-semibold text-lg" id="higherPension">₹0</td>
                                        <td class="py-4 px-4 text-center font-semibold text-lg" id="cappedPension">₹0</td>
                                    </tr>
                                    <tr class="border-b">
                                        <td class="py-4 px-4 font-medium text-gray-700">EPF Withdrawal Amount</td>
                                        <td class="py-4 px-4 text-center font-semibold text-lg" id="higherEPF">₹0</td>
                                        <td class="py-4 px-4 text-center font-semibold text-lg" id="cappedEPF">₹0</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- EPS Corpus Amount -->
                    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 mb-6">
                        <h3 class="text-xl font-semibold text-gray-800 mb-6">EPS Corpus Amount</h3>
                        
                        <div class="overflow-x-auto">
                            <table class="w-full">
                                <thead>
                                    <tr class="border-b-2 border-gray-200">
                                        <th class="text-left py-4 px-4 font-semibold text-gray-700"></th>
                                        <th class="text-center py-4 px-4 font-semibold text-blue-600">Higher Pension Scheme</th>
                                        <th class="text-center py-4 px-4 font-semibold text-blue-600">15K Capped Scheme</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="border-b">
                                        <td class="py-4 px-4 font-medium text-gray-700">Initial EPS Contribution</td>
                                        <td class="py-4 px-4 text-center font-semibold" id="higherInitialEPS">₹0</td>
                                        <td class="py-4 px-4 text-center font-semibold" id="cappedInitialEPS">₹0</td>
                                    </tr>
                                    <tr class="border-b">
                                        <td class="py-4 px-4 font-medium text-gray-700">Latter EPS Contribution</td>
                                        <td class="py-4 px-4 text-center font-semibold" id="higherLatterEPS">₹0</td>
                                        <td class="py-4 px-4 text-center font-semibold" id="cappedLatterEPS">₹0</td>
                                    </tr>
                                    <tr class="bg-blue-50 border-b">
                                        <td class="py-4 px-4 font-bold text-gray-800">Total EPS Contribution</td>
                                        <td class="py-4 px-4 text-center font-bold text-blue-600 text-lg" id="higherTotalEPS">₹0</td>
                                        <td class="py-4 px-4 text-center font-bold text-blue-600 text-lg" id="cappedTotalEPS">₹0</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- EPF Corpus Amount -->
                    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 mb-6">
                        <h3 class="text-xl font-semibold text-gray-800 mb-6">EPF Corpus Amount</h3>
                        
                        <div class="overflow-x-auto">
                            <table class="w-full">
                                <thead>
                                    <tr class="border-b-2 border-gray-200">
                                        <th class="text-left py-4 px-4 font-semibold text-gray-700"></th>
                                        <th class="text-center py-4 px-4 font-semibold text-blue-600">Higher Pension Scheme</th>
                                        <th class="text-center py-4 px-4 font-semibold text-blue-600">15K Capped Scheme</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="border-b">
                                        <td class="py-4 px-4 font-medium text-gray-700">EPF Employee Contribution</td>
                                        <td class="py-4 px-4 text-center font-semibold" id="higherEmployeeContrib">₹0</td>
                                        <td class="py-4 px-4 text-center font-semibold" id="cappedEmployeeContrib">₹0</td>
                                    </tr>
                                    <tr class="border-b">
                                        <td class="py-4 px-4 font-medium text-gray-700">EPF Employer Contribution</td>
                                        <td class="py-4 px-4 text-center font-semibold" id="higherEmployerContrib">₹0</td>
                                        <td class="py-4 px-4 text-center font-semibold" id="cappedEmployerContrib">₹0</td>
                                    </tr>
                                    <tr class="bg-blue-50 border-b">
                                        <td class="py-4 px-4 font-bold text-gray-800">Total EPF Amount</td>
                                        <td class="py-4 px-4 text-center font-bold text-blue-600 text-lg" id="higherTotalEPF">₹0</td>
                                        <td class="py-4 px-4 text-center font-bold text-blue-600 text-lg" id="cappedTotalEPF">₹0</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Summary -->
                    <div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-2xl p-6">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">Calculation Summary</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <p class="text-gray-600 mb-2">Years of Service: <span id="serviceYears" class="font-semibold text-gray-800">0 years</span></p>
                                <p class="text-gray-600 mb-2">Average Salary (Last 60 months): <span id="avgSalary" class="font-semibold text-gray-800">₹0</span></p>
                            </div>
                            <div>
                                <p class="text-gray-600 mb-2">Total Retirement Corpus (Higher): <span id="totalRetirementHigher" class="font-bold text-green-600">₹0</span></p>
                                <p class="text-gray-600 mb-2">Total Retirement Corpus (15K Capped): <span id="totalRetirementCapped" class="font-bold text-green-600">₹0</span></p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Information Section -->
                <div class="mt-12">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">Understanding EPS (Employee Pension Scheme)</h2>
                    <div class="prose prose-lg max-w-none text-gray-600">
                        <p class="mb-6">
                            The Employee Pension Scheme (EPS) is a social security initiative by the Government of India, managed by the Employees' Provident Fund Organisation (EPFO). It provides pension benefits to employees working in the organized sector upon retirement, disability, or to their family members in case of death.
                        </p>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 my-8">
                            <div>
                                <h3 class="text-xl font-semibold text-gray-800 mb-4">Key Features of EPS</h3>
                                <ul class="space-y-3">
                                    <li class="flex items-start">
                                        <span class="text-blue-500 mr-3 mt-1">•</span>
                                        <div>
                                            <strong class="text-gray-800">Contribution Rate:</strong>
                                            <span class="text-gray-600"> 8.33% of employer's EPF contribution</span>
                                        </div>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-blue-500 mr-3 mt-1">•</span>
                                        <div>
                                            <strong class="text-gray-800">Retirement Age:</strong>
                                            <span class="text-gray-600"> 58 years (can be extended to 60)</span>
                                        </div>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-blue-500 mr-3 mt-1">•</span>
                                        <div>
                                            <strong class="text-gray-800">Minimum Service:</strong>
                                            <span class="text-gray-600"> 10 years for pension eligibility</span>
                                        </div>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-blue-500 mr-3 mt-1">•</span>
                                        <div>
                                            <strong class="text-gray-800">Maximum Pension:</strong>
                                            <span class="text-gray-600"> Based on pensionable salary and service</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            
                            <div>
                                <h3 class="text-xl font-semibold text-gray-800 mb-4">Types of Pension Benefits</h3>
                                <ul class="space-y-3">
                                    <li class="flex items-start">
                                        <span class="text-blue-500 mr-3 mt-1">•</span>
                                        <div>
                                            <strong class="text-gray-800">Superannuation Pension:</strong>
                                            <span class="text-gray-600"> Monthly pension after retirement</span>
                                        </div>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-blue-500 mr-3 mt-1">•</span>
                                        <div>
                                            <strong class="text-gray-800">Disability Pension:</strong>
                                            <span class="text-gray-600"> In case of permanent disability</span>
                                        </div>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-blue-500 mr-3 mt-1">•</span>
                                        <div>
                                            <strong class="text-gray-800">Widow/Widower Pension:</strong>
                                            <span class="text-gray-600"> For spouse after member's death</span>
                                        </div>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-blue-500 mr-3 mt-1">•</span>
                                        <div>
                                            <strong class="text-gray-800">Child Pension:</strong>
                                            <span class="text-gray-600"> For children up to 25 years of age</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="bg-blue-50 border-l-4 border-blue-500 p-6 rounded-r-lg mt-8">
                            <h4 class="text-lg font-semibold text-gray-800 mb-2">Higher Pension Scheme vs 15K Capped</h4>
                            <p class="text-gray-600 mb-3">
                                Since September 2014, EPS contributions are capped at a salary of ₹15,000. However, employees can opt for the Higher Pension Scheme where contributions are based on actual salary, leading to higher pension benefits but also higher contributions from both employee and employer.
                            </p>
                            <ul class="space-y-2 text-sm text-gray-600">
                                <li>• <strong>15K Capped:</strong> EPS contribution = 8.33% of ₹15,000 = ₹1,250/month maximum</li>
                                <li>• <strong>Higher Pension:</strong> EPS contribution = 8.33% of actual salary (no cap)</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- FAQ Section -->
                <div class="mt-16">
                    <h2 class="text-3xl font-bold text-gray-900 mb-8">Frequently Asked Questions</h2>
                    
                    <div class="space-y-4">
                        <div class="bg-white rounded-2xl shadow-sm border border-gray-100">
                            <button class="w-full text-left p-6 hover:bg-gray-50 flex justify-between items-center rounded-2xl" onclick="toggleFAQ(1)">
                                <span class="font-semibold text-gray-800">What is the eligibility criteria for EPS pension?</span>
                                <svg class="w-5 h-5 text-gray-400 transform transition-transform" id="faq-icon-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <div id="faq-content-1" class="hidden px-6 pb-6 text-gray-600">
                                <p>To be eligible for EPS pension, you must have completed at least 10 years of eligible service. The pension becomes payable from the age of 58 years. If you have less than 10 years of service, you can withdraw your EPS contributions as a lump sum.</p>
                            </div>
                        </div>

                        <div class="bg-white rounded-2xl shadow-sm border border-gray-100">
                            <button class="w-full text-left p-6 hover:bg-gray-50 flex justify-between items-center rounded-2xl" onclick="toggleFAQ(2)">
                                <span class="font-semibold text-gray-800">Can I withdraw EPS amount before retirement?</span>
                                <svg class="w-5 h-5 text-gray-400 transform transition-transform" id="faq-icon-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <div id="faq-content-2" class="hidden px-6 pb-6 text-gray-600">
                                <p>EPS amount cannot be withdrawn before retirement if you have more than 10 years of service. However, if you have less than 10 years of service and are unemployed for more than 2 months, you can withdraw the corpus. For 10+ years of service, you'll receive a monthly pension after age 58.</p>
                            </div>
                        </div>

                        <div class="bg-white rounded-2xl shadow-sm border border-gray-100">
                            <button class="w-full text-left p-6 hover:bg-gray-50 flex justify-between items-center rounded-2xl" onclick="toggleFAQ(3)">
                                <span class="font-semibold text-gray-800">How is the pension amount calculated under EPS?</span>
                                <svg class="w-5 h-5 text-gray-400 transform transition-transform" id="faq-icon-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <div id="faq-content-3" class="hidden px-6 pb-6 text-gray-600">
                                <p>The pension amount is calculated using the formula: Monthly Pension = (Pensionable Salary × Pensionable Service) / 70. The pensionable salary is the average monthly salary drawn during the last 60 months of service, and pensionable service is the number of years of eligible service.</p>
                            </div>
                        </div>

                        <div class="bg-white rounded-2xl shadow-sm border border-gray-100">
                            <button class="w-full text-left p-6 hover:bg-gray-50 flex justify-between items-center rounded-2xl" onclick="toggleFAQ(4)">
                                <span class="font-semibold text-gray-800">What happens to EPS if I change jobs?</span>
                                <svg class="w-5 h-5 text-gray-400 transform transition-transform" id="faq-icon-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <div id="faq-content-4" class="hidden px-6 pb-6 text-gray-600">
                                <p>EPS account is portable and continues even when you change jobs. You need to transfer your EPS account to your new employer using Form 13. Your service period gets accumulated across different employments, ensuring continuity of your pension benefits.</p>
                            </div>
                        </div>

                        <div class="bg-white rounded-2xl shadow-sm border border-gray-100">
                            <button class="w-full text-left p-6 hover:bg-gray-50 flex justify-between items-center rounded-2xl" onclick="toggleFAQ(5)">
                                <span class="font-semibold text-gray-800">Is there any tax on EPS pension?</span>
                                <svg class="w-5 h-5 text-gray-400 transform transition-transform" id="faq-icon-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <div id="faq-content-5" class="hidden px-6 pb-6 text-gray-600">
                                <p>Yes, EPS pension is taxable as per your income tax slab. The pension amount is added to your total income and taxed accordingly. However, you can claim standard deduction and other applicable deductions while filing your income tax return.</p>
                            </div>
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
                            <span class="text-gray-700">Compare Higher Pension vs 15K Capped schemes</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-gray-700">Calculate monthly pension amount</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-gray-700">Estimate EPF and EPS corpus</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-gray-700">Factor in salary growth projections</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-gray-700">Accurate calculations as per EPFO rules</span>
                        </li>
                    </ul>
                </div>

                <!-- Important Note -->
                <div class="bg-yellow-50 rounded-2xl shadow-sm border border-yellow-200 p-6">
                    <h2 class="text-lg font-semibold text-gray-800 mb-3">Important Note</h2>
                    <p class="text-sm text-gray-700 mb-3">
                        This calculator provides estimates based on current EPS rules and your inputs. Actual pension amounts may vary based on:
                    </p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li>• Changes in government policies</li>
                        <li>• Actual salary increments</li>
                        <li>• Service breaks or gaps</li>
                        <li>• Early or delayed retirement</li>
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
                The actual pension amount may vary based on various factors including changes in EPFO rules, actual salary progression, 
                and service continuity. For precise calculations, please refer to your EPFO passbook or consult with EPFO officials.
            </p>
        </div>
    </div>
</div>

<script>
// Set default dates
document.addEventListener('DOMContentLoaded', function() {
    // Set start date to current date minus 5 years
    const startDate = new Date();
    startDate.setFullYear(startDate.getFullYear() - 5);
    document.getElementById('startDate').value = startDate.toISOString().split('T')[0];
    
    // Set retirement date to current date plus 30 years
    const retirementDate = new Date();
    retirementDate.setFullYear(retirementDate.getFullYear() + 30);
    document.getElementById('retirementDate').value = retirementDate.toISOString().split('T')[0];
});

function calculateEPSPension() {
    // Get input values
    const employeePF = parseFloat(document.getElementById('employeePF').value) || 0;
    const employerPF = parseFloat(document.getElementById('employerPF').value) || 0;
    const epsContribution = parseFloat(document.getElementById('epsContribution').value) || 0;
    const monthlySalary = parseFloat(document.getElementById('monthlySalary').value) || 0;
    const salaryGrowth = parseFloat(document.getElementById('salaryGrowth').value) || 0;
    const startDate = new Date(document.getElementById('startDate').value);
    const retirementDate = new Date(document.getElementById('retirementDate').value);
    
    // Validation
    if (!employeePF || !employerPF || !epsContribution || !monthlySalary || !startDate || !retirementDate) {
        alert('Please fill all required fields');
        return;
    }
    
    // Calculate years of service
    const serviceYears = Math.floor((retirementDate - startDate) / (365.25 * 24 * 60 * 60 * 1000));
    
    if (serviceYears < 0) {
        alert('Retirement date must be after start date');
        return;
    }
    
    // Calculate total months and annual growth rate
    const totalMonths = serviceYears * 12;
    const annualGrowthRate = salaryGrowth / 100;
    const monthlyGrowthRate = Math.pow(1 + annualGrowthRate, 1/12) - 1;
    
    // Calculate future value with compound growth
    const futureValue = (payment, rate, periods) => {
        if (rate === 0) return payment * periods;
        return payment * (Math.pow(1 + rate, periods) - 1) / rate;
    };
    
    // Calculate average salary of last 60 months
    let salaryAtRetirement = monthlySalary * Math.pow(1 + annualGrowthRate, serviceYears);
    let totalLast60Months = 0;
    for (let i = 0; i < 60; i++) {
        totalLast60Months += salaryAtRetirement / Math.pow(1 + monthlyGrowthRate, i);
    }
    const avgSalaryLast60Months = totalLast60Months / 60;
    
    // Calculate for Higher Pension Scheme
    const higherPensionableSalary = avgSalaryLast60Months;
    const higherMonthlyPension = (higherPensionableSalary * serviceYears) / 70;
    
    // Calculate for 15K Capped Scheme
    const cappedPensionableSalary = Math.min(avgSalaryLast60Months, 15000);
    const cappedMonthlyPension = (cappedPensionableSalary * serviceYears) / 70;
    
    // Interest rate assumption
    const interestRate = 0.075; // 7.5% per year as per Zoho
    const monthlyInterestRate = interestRate / 12;
    
    // Calculate corpus amounts using user inputs and compound interest
    const higherEmployeeCorpus = futureValue(employeePF, monthlyInterestRate, totalMonths);
    const higherEmployerCorpus = futureValue(employerPF, monthlyInterestRate, totalMonths);
    const higherEPSCorpus = futureValue(epsContribution, monthlyInterestRate, totalMonths);
    
    // For 15K capped scheme (assuming different contribution pattern)
    const cappedEmployeeCorpus = higherEmployeeCorpus; // Same employee contribution
    const cappedEmployerCorpus = futureValue(Math.min(employerPF, 1250), monthlyInterestRate, totalMonths); // Capped employer
    const cappedEPSCorpus = futureValue(Math.min(epsContribution, 1250), monthlyInterestRate, totalMonths); // Capped EPS
    
    // EPS breakdown (Initial vs Latter - simplified split)
    const splitRatio = 0.6; // 60% initial, 40% latter
    const higherInitialEPS = higherEPSCorpus * splitRatio;
    const higherLatterEPS = higherEPSCorpus * (1 - splitRatio);
    const cappedInitialEPS = cappedEPSCorpus * splitRatio;
    const cappedLatterEPS = cappedEPSCorpus * (1 - splitRatio);
    
    // Total calculations
    const higherTotalEPF = higherEmployeeCorpus + higherEmployerCorpus;
    const cappedTotalEPF = cappedEmployeeCorpus + cappedEmployerCorpus;
    const higherTotalRetirement = higherTotalEPF + higherEPSCorpus;
    const cappedTotalRetirement = cappedTotalEPF + cappedEPSCorpus;
    
    // Update results - Pension and Withdrawal Summary
    document.getElementById('higherPension').textContent = formatCurrency(higherMonthlyPension);
    document.getElementById('cappedPension').textContent = formatCurrency(cappedMonthlyPension);
    document.getElementById('higherEPF').textContent = formatCurrency(higherTotalEPF);
    document.getElementById('cappedEPF').textContent = formatCurrency(cappedTotalEPF);
    
    // Update results - EPS Corpus Amount
    document.getElementById('higherInitialEPS').textContent = formatCurrency(higherInitialEPS);
    document.getElementById('higherLatterEPS').textContent = formatCurrency(higherLatterEPS);
    document.getElementById('higherTotalEPS').textContent = formatCurrency(higherEPSCorpus);
    document.getElementById('cappedInitialEPS').textContent = formatCurrency(cappedInitialEPS);
    document.getElementById('cappedLatterEPS').textContent = formatCurrency(cappedLatterEPS);
    document.getElementById('cappedTotalEPS').textContent = formatCurrency(cappedEPSCorpus);
    
    // Update results - EPF Corpus Amount
    document.getElementById('higherEmployeeContrib').textContent = formatCurrency(higherEmployeeCorpus);
    document.getElementById('higherEmployerContrib').textContent = formatCurrency(higherEmployerCorpus);
    document.getElementById('higherTotalEPF').textContent = formatCurrency(higherTotalEPF);
    document.getElementById('cappedEmployeeContrib').textContent = formatCurrency(cappedEmployeeCorpus);
    document.getElementById('cappedEmployerContrib').textContent = formatCurrency(cappedEmployerCorpus);
    document.getElementById('cappedTotalEPF').textContent = formatCurrency(cappedTotalEPF);
    
    // Update summary
    document.getElementById('serviceYears').textContent = serviceYears + ' years';
    document.getElementById('avgSalary').textContent = formatCurrency(avgSalaryLast60Months);
    document.getElementById('totalRetirementHigher').textContent = formatCurrency(higherTotalRetirement);
    document.getElementById('totalRetirementCapped').textContent = formatCurrency(cappedTotalRetirement);
    
    // Show results
    document.getElementById('results').classList.remove('hidden');
    document.getElementById('results').scrollIntoView({ behavior: 'smooth', block: 'nearest' });
}

function formatCurrency(amount) {
    return '₹' + Math.round(amount).toLocaleString('en-IN');
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
</script>
@endsection