@extends('layouts.app')

@section('title', 'HMRC Furlough Claim Calculator - Calculate Your Coronavirus Job Retention Grant')
@section('meta_description', 'Free HMRC furlough claim calculator for UK businesses. Calculate your Coronavirus Job Retention Scheme grant including wages, National Insurance and pension contributions.')
@section('meta_keywords', 'HMRC furlough calculator, furlough claim calculator, coronavirus job retention scheme, CJRS calculator, furlough grant calculator, UK furlough payment calculator')

@section('structured_data')
<script type="application/ld+json">
{
    "@{{ "" }}context": "https://schema.org",
    "@type": "WebApplication",
    "name": "HMRC Furlough Claim Calculator",
    "applicationCategory": "FinanceApplication",
    "operatingSystem": "All",
    "offers": {
        "@type": "Offer",
        "price": "0",
        "priceCurrency": "GBP"
    },
    "description": "Calculate your HMRC Coronavirus Job Retention Scheme grant including wages, National Insurance and pension contributions",
    "url": "{{ url('/furlough-claim-calculator') }}",
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
        "name": "What is the Coronavirus Job Retention Scheme?",
        "acceptedAnswer": {
            "@type": "Answer",
            "text": "The Coronavirus Job Retention Scheme (CJRS) allowed employers to claim grants to cover part of the wages of furloughed employees during the COVID-19 pandemic."
        }
    }, {
        "@type": "Question",
        "name": "How much can I claim for furloughed employees?",
        "acceptedAnswer": {
            "@type": "Answer",
            "text": "The government contribution varied over time, from 80% of wages (up to £2,500/month) initially, to 70% in September 2021 and 60% in October 2021."
        }
    }, {
        "@type": "Question",
        "name": "Can I claim for National Insurance and pension contributions?",
        "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, employers could claim for employer National Insurance contributions and minimum automatic enrolment pension contributions on the furlough grant."
        }
    }]
}
</script>
@endsection

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">HMRC Furlough Claim Calculator</h1>
    
    <div class="grid lg:grid-cols-3 gap-8">
        <!-- Calculator Section -->
        <div class="lg:col-span-2">
            <div class="bg-white rounded-lg shadow-md p-6">
                <p class="text-gray-600 mb-6">Calculate your Coronavirus Job Retention Scheme (CJRS) grant claim. Enter employee details below to calculate wages, National Insurance and pension contributions.</p>
                
                <form id="furloughCalculator" class="space-y-6">
                    <!-- Pay Period -->
                    <div>
                        <label for="payPeriod" class="block text-sm font-medium text-gray-700 mb-2">
                            Pay Period
                        </label>
                        <select id="payPeriod" 
                                class="w-full px-4 py-4 text-lg border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all">
                            <option value="weekly">Weekly</option>
                            <option value="2weeks">2 Weeks (Fortnightly)</option>
                            <option value="4weeks">4 Weeks</option>
                            <option value="monthly" selected>Monthly</option>
                        </select>
                    </div>

                    <!-- Gross Pay -->
                    <div>
                        <label for="grossPay" class="block text-sm font-medium text-gray-700 mb-2">
                            Employee's Gross Pay (£)
                            <span class="text-gray-500 text-xs ml-1">(Regular pay before tax)</span>
                        </label>
                        <input type="number" 
                               id="grossPay" 
                               class="w-full px-4 py-4 text-lg border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all"
                               placeholder="0.00"
                               step="0.01"
                               min="0">
                    </div>

                    <!-- Claim Period -->
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label for="claimStartDate" class="block text-sm font-medium text-gray-700 mb-2">
                                Claim Start Date
                            </label>
                            <input type="date" 
                                   id="claimStartDate" 
                                   class="w-full px-4 py-4 text-lg border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all">
                        </div>
                        <div>
                            <label for="claimEndDate" class="block text-sm font-medium text-gray-700 mb-2">
                                Claim End Date
                            </label>
                            <input type="date" 
                                   id="claimEndDate" 
                                   class="w-full px-4 py-4 text-lg border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all">
                        </div>
                    </div>

                    <!-- First Pay Day -->
                    <div>
                        <label for="firstPayDay" class="block text-sm font-medium text-gray-700 mb-2">
                            First Pay Day Within Claim Period
                            <span class="text-gray-500 text-xs ml-1">(Used for accurate period calculations)</span>
                        </label>
                        <input type="date" 
                               id="firstPayDay" 
                               class="w-full px-4 py-4 text-lg border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all">
                    </div>

                    <!-- Government Contribution Period -->
                    <div>
                        <label for="contributionPeriod" class="block text-sm font-medium text-gray-700 mb-2">
                            Government Contribution Period
                        </label>
                        <select id="contributionPeriod" 
                                class="w-full px-4 py-4 text-lg border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all">
                            <option value="80">March 2020 - June 2021 (80%)</option>
                            <option value="70">July 2021 (70%)</option>
                            <option value="70">August 2021 (70%)</option>
                            <option value="60">September 2021 (60%)</option>
                            <option value="60">October 2021 (60%)</option>
                        </select>
                    </div>

                    <!-- Additional Options -->
                    <div class="space-y-3 bg-gray-50 p-4 rounded-md">
                        <h3 class="font-semibold text-gray-700 mb-2">Additional Claims</h3>
                        <label class="flex items-center space-x-3 cursor-pointer">
                            <input type="checkbox" 
                                   id="includeNI" 
                                   class="w-5 h-5 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                            <span class="text-sm text-gray-700">Include Employer National Insurance Contributions</span>
                        </label>
                        <label class="flex items-center space-x-3 cursor-pointer">
                            <input type="checkbox" 
                                   id="includePension" 
                                   class="w-5 h-5 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                            <span class="text-sm text-gray-700">Include Employer Pension Contributions (3%)</span>
                        </label>
                    </div>

                    <!-- Calculate Button -->
                    <button type="button" 
                            onclick="calculateFurlough()" 
                            class="w-full bg-blue-600 text-white font-semibold py-4 px-6 rounded-xl hover:bg-blue-700 transition-all text-lg">
                        Calculate Furlough Claim
                    </button>
                </form>

                <!-- Results Section -->
                <div id="results" class="mt-8 p-6 bg-blue-50 rounded-lg hidden">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Furlough Claim Breakdown</h3>
                    
                    <div class="space-y-3">
                        <div class="bg-white p-4 rounded-md">
                            <div class="flex justify-between mb-2">
                                <span class="text-gray-600">Claim Period:</span>
                                <span id="resultClaimPeriod" class="font-medium">-</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Total Days:</span>
                                <span id="resultTotalDays" class="font-medium">-</span>
                            </div>
                        </div>

                        <div class="bg-white p-4 rounded-md">
                            <div class="flex justify-between mb-2">
                                <span class="text-gray-600">Employee Gross Pay:</span>
                                <span id="resultGrossPay" class="font-medium">£0.00</span>
                            </div>
                            <div class="flex justify-between mb-2">
                                <span class="text-gray-600">Government Contribution Rate:</span>
                                <span id="resultContributionRate" class="font-medium">-</span>
                            </div>
                            <div class="flex justify-between text-lg font-semibold">
                                <span>Furlough Grant (Wages):</span>
                                <span id="resultFurloughGrant" class="text-blue-600">£0.00</span>
                            </div>
                        </div>

                        <div id="niContribution" class="bg-white p-4 rounded-md hidden">
                            <div class="flex justify-between">
                                <span class="text-gray-600">Employer NI Contribution:</span>
                                <span id="resultNIContribution" class="font-medium">£0.00</span>
                            </div>
                        </div>

                        <div id="pensionContribution" class="bg-white p-4 rounded-md hidden">
                            <div class="flex justify-between">
                                <span class="text-gray-600">Employer Pension Contribution (3%):</span>
                                <span id="resultPensionContribution" class="font-medium">£0.00</span>
                            </div>
                        </div>

                        <div class="border-t pt-4 mt-4">
                            <div class="flex justify-between text-xl">
                                <span class="font-bold text-blue-600">Total Claim Amount:</span>
                                <span id="resultTotalClaim" class="font-bold text-blue-600">£0.00</span>
                            </div>
                        </div>

                        <!-- View Breakup Details Button -->
                        <div class="mt-4 text-center">
                            <button type="button" 
                                    onclick="toggleBreakupDetails()" 
                                    id="breakupToggle"
                                    class="text-blue-600 hover:text-blue-700 font-medium text-sm underline">
                                View Breakup Details
                            </button>
                        </div>

                        <!-- Detailed Breakup Section (Hidden by default) -->
                        <div id="breakupDetails" class="mt-4 p-4 bg-gray-50 rounded-md hidden">
                            <h4 class="font-semibold text-gray-800 mb-3">Detailed Calculation Breakup</h4>
                            
                            <div class="space-y-2 text-sm">
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Pay Period:</span>
                                    <span id="detailPayPeriod">-</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600">First Pay Day:</span>
                                    <span id="detailFirstPayDay">-</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Furlough Days:</span>
                                    <span id="detailFurloughDays">-</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Daily Rate:</span>
                                    <span id="detailDailyRate">£0.00</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Gross Furlough Pay:</span>
                                    <span id="detailGrossFurloughPay">£0.00</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Government Contribution (before cap):</span>
                                    <span id="detailGovContributionBeforeCap">£0.00</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Maximum Grant Applicable:</span>
                                    <span id="detailMaxGrant">£0.00</span>
                                </div>
                                <div class="flex justify-between font-medium">
                                    <span class="text-gray-700">Furlough Grant (after cap):</span>
                                    <span id="detailFurloughGrantAfterCap">£0.00</span>
                                </div>
                                
                                <div id="niBreakup" class="mt-3 pt-3 border-t hidden">
                                    <div class="flex justify-between">
                                        <span class="text-gray-600">NI Threshold:</span>
                                        <span id="detailNIThreshold">£0.00</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-gray-600">NI-able Amount:</span>
                                        <span id="detailNIableAmount">£0.00</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-gray-600">NI Rate:</span>
                                        <span>13.8%</span>
                                    </div>
                                    <div class="flex justify-between font-medium">
                                        <span class="text-gray-700">NI Contribution:</span>
                                        <span id="detailNIContribution">£0.00</span>
                                    </div>
                                </div>
                                
                                <div id="pensionBreakup" class="mt-3 pt-3 border-t hidden">
                                    <div class="flex justify-between">
                                        <span class="text-gray-600">Pension Threshold:</span>
                                        <span id="detailPensionThreshold">£0.00</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-gray-600">Pensionable Amount:</span>
                                        <span id="detailPensionableAmount">£0.00</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-gray-600">Pension Rate:</span>
                                        <span>3%</span>
                                    </div>
                                    <div class="flex justify-between font-medium">
                                        <span class="text-gray-700">Pension Contribution:</span>
                                        <span id="detailPensionContribution">£0.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Info Section -->
        <div class="lg:col-span-1">
            <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                <h2 class="text-lg font-semibold text-gray-800 mb-3">Government Contribution Rates</h2>
                <div class="space-y-2 text-sm">
                    <div class="flex justify-between">
                        <span class="text-gray-600">Mar 2020 - Jun 2021:</span>
                        <span class="font-medium">80% (max £2,500/month)</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-600">Jul - Aug 2021:</span>
                        <span class="font-medium">70% (max £2,187.50/month)</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-600">Sep - Oct 2021:</span>
                        <span class="font-medium">60% (max £1,875/month)</span>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-lg font-semibold text-gray-800 mb-4">Important Information</h2>
                <div class="space-y-4 text-sm">
                    <div>
                        <h3 class="font-medium text-gray-700 mb-1">Eligibility Requirements:</h3>
                        <ul class="list-disc list-inside text-gray-600 space-y-1">
                            <li>Employee on payroll by 19 March 2020</li>
                            <li>Minimum 3 consecutive weeks furlough</li>
                            <li>Written agreement with employee</li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="font-medium text-gray-700 mb-1">What Can Be Claimed:</h3>
                        <ul class="list-disc list-inside text-gray-600 space-y-1">
                            <li>Regular wages (not discretionary payments)</li>
                            <li>Employer NI contributions</li>
                            <li>Minimum pension contributions</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Educational Content -->
    <div class="mt-12 grid md:grid-cols-2 gap-8">
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">About the Furlough Scheme</h2>
            <p class="text-gray-600 mb-3">The Coronavirus Job Retention Scheme (CJRS) was introduced by the UK government to support employers affected by COVID-19. The scheme allowed employers to claim grants to cover part of their employees' wages while they were on furlough.</p>
            <p class="text-gray-600">The scheme ran from March 2020 to September 2021, with the government contribution rate gradually decreasing from 80% to 60% of wages.</p>
        </div>

        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">How to Calculate Your Claim</h2>
            <ol class="list-decimal list-inside text-gray-600 space-y-2">
                <li>Enter the employee's regular gross pay</li>
                <li>Select the pay period (weekly, monthly, etc.)</li>
                <li>Choose the claim period dates</li>
                <li>Select the applicable government contribution rate</li>
                <li>Include NI and pension if applicable</li>
                <li>The calculator will show your total claim amount</li>
            </ol>
        </div>
    </div>

    <!-- Disclaimer -->
    <div class="mt-8 p-4 bg-yellow-50 border border-yellow-200 rounded-md">
        <p class="text-sm text-gray-700">
            <strong>Disclaimer:</strong> This calculator provides estimates based on the HMRC Coronavirus Job Retention Scheme guidance. The scheme has now closed. For historical calculations and record-keeping purposes only. Always consult official HMRC guidance or a qualified accountant for accurate calculations.
        </p>
    </div>
</div>

@verbatim
<script>
// Constants for calculations
const NI_RATE = 0.138; // 13.8%
const PENSION_RATE = 0.03; // 3%
const NI_THRESHOLD_MONTHLY = 737; // Secondary threshold
const NI_THRESHOLD_WEEKLY = 170;
const PENSION_THRESHOLD_MONTHLY = 520; // Qualifying earnings threshold
const PENSION_THRESHOLD_WEEKLY = 120;

// Maximum grants per contribution rate
const MAX_GRANTS = {
    80: { monthly: 2500, weekly: 576.92 },
    70: { monthly: 2187.50, weekly: 504.81 },
    60: { monthly: 1875, weekly: 432.69 }
};

function calculateFurlough() {
    // Get input values
    const payPeriod = document.getElementById('payPeriod').value;
    const grossPay = parseFloat(document.getElementById('grossPay').value) || 0;
    const startDate = new Date(document.getElementById('claimStartDate').value);
    const endDate = new Date(document.getElementById('claimEndDate').value);
    const firstPayDay = new Date(document.getElementById('firstPayDay').value);
    const contributionRate = parseInt(document.getElementById('contributionPeriod').value);
    const includeNI = document.getElementById('includeNI').checked;
    const includePension = document.getElementById('includePension').checked;

    // Validate dates
    if (!startDate || !endDate || startDate > endDate) {
        alert('Please enter valid claim period dates');
        return;
    }
    
    if (!firstPayDay || firstPayDay < startDate || firstPayDay > endDate) {
        alert('First pay day must be within the claim period');
        return;
    }

    // Calculate days in claim period
    const totalDays = Math.ceil((endDate - startDate) / (1000 * 60 * 60 * 24)) + 1;

    // Convert gross pay to monthly equivalent for calculations
    let monthlyPay = grossPay;
    let payPeriodDays = 30;
    
    switch(payPeriod) {
        case 'weekly':
            monthlyPay = grossPay * 52 / 12;
            payPeriodDays = 7;
            break;
        case '2weeks':
            monthlyPay = grossPay * 26 / 12;
            payPeriodDays = 14;
            break;
        case '4weeks':
            monthlyPay = grossPay * 13 / 12;
            payPeriodDays = 28;
            break;
    }

    // Calculate furlough grant
    const maxGrant = payPeriod === 'monthly' ? MAX_GRANTS[contributionRate].monthly : MAX_GRANTS[contributionRate].weekly;
    const furloughAmount = grossPay * (contributionRate / 100);
    const actualFurloughGrant = Math.min(furloughAmount, maxGrant);

    // Calculate for partial period if needed
    const claimPeriodGrant = (actualFurloughGrant / payPeriodDays) * totalDays;

    // Calculate NI contribution if applicable
    let niContribution = 0;
    if (includeNI) {
        const niThreshold = payPeriod === 'monthly' ? NI_THRESHOLD_MONTHLY : NI_THRESHOLD_WEEKLY;
        const niableAmount = Math.max(0, actualFurloughGrant - niThreshold);
        niContribution = niableAmount * NI_RATE;
        niContribution = (niContribution / payPeriodDays) * totalDays;
    }

    // Calculate pension contribution if applicable
    let pensionContribution = 0;
    if (includePension) {
        const pensionThreshold = payPeriod === 'monthly' ? PENSION_THRESHOLD_MONTHLY : PENSION_THRESHOLD_WEEKLY;
        const pensionableAmount = Math.max(0, actualFurloughGrant - pensionThreshold);
        pensionContribution = pensionableAmount * PENSION_RATE;
        pensionContribution = (pensionContribution / payPeriodDays) * totalDays;
    }

    // Calculate total claim
    const totalClaim = claimPeriodGrant + niContribution + pensionContribution;

    // Calculate daily rate for breakup details
    const dailyRate = grossPay / payPeriodDays;
    const grossFurloughPay = dailyRate * totalDays;
    const govContributionBeforeCap = grossFurloughPay * (contributionRate / 100);

    // Display results
    document.getElementById('resultClaimPeriod').textContent = 
        startDate.toLocaleDateString('en-GB') + ' - ' + endDate.toLocaleDateString('en-GB');
    document.getElementById('resultTotalDays').textContent = totalDays + ' days';
    document.getElementById('resultGrossPay').textContent = '£' + grossPay.toFixed(2);
    document.getElementById('resultContributionRate').textContent = contributionRate + '%';
    document.getElementById('resultFurloughGrant').textContent = '£' + claimPeriodGrant.toFixed(2);
    
    // Show/hide additional contributions
    if (includeNI) {
        document.getElementById('niContribution').classList.remove('hidden');
        document.getElementById('resultNIContribution').textContent = '£' + niContribution.toFixed(2);
    } else {
        document.getElementById('niContribution').classList.add('hidden');
    }
    
    if (includePension) {
        document.getElementById('pensionContribution').classList.remove('hidden');
        document.getElementById('resultPensionContribution').textContent = '£' + pensionContribution.toFixed(2);
    } else {
        document.getElementById('pensionContribution').classList.add('hidden');
    }
    
    document.getElementById('resultTotalClaim').textContent = '£' + totalClaim.toFixed(2);
    
    // Store breakup details for toggle functionality
    window.furloughBreakup = {
        payPeriod: payPeriod,
        firstPayDay: firstPayDay.toLocaleDateString('en-GB'),
        totalDays: totalDays,
        dailyRate: dailyRate,
        grossFurloughPay: grossFurloughPay,
        govContributionBeforeCap: govContributionBeforeCap,
        maxGrant: maxGrant,
        claimPeriodGrant: claimPeriodGrant,
        niThreshold: payPeriod === 'monthly' ? NI_THRESHOLD_MONTHLY : NI_THRESHOLD_WEEKLY,
        niableAmount: Math.max(0, actualFurloughGrant - (payPeriod === 'monthly' ? NI_THRESHOLD_MONTHLY : NI_THRESHOLD_WEEKLY)),
        niContribution: niContribution,
        pensionThreshold: payPeriod === 'monthly' ? PENSION_THRESHOLD_MONTHLY : PENSION_THRESHOLD_WEEKLY,
        pensionableAmount: Math.max(0, actualFurloughGrant - (payPeriod === 'monthly' ? PENSION_THRESHOLD_MONTHLY : PENSION_THRESHOLD_WEEKLY)),
        pensionContribution: pensionContribution,
        includeNI: includeNI,
        includePension: includePension
    };
    
    // Show results section
    document.getElementById('results').classList.remove('hidden');
    
    // Scroll to results
    document.getElementById('results').scrollIntoView({ behavior: 'smooth', block: 'nearest' });
}

function toggleBreakupDetails() {
    const breakupDetails = document.getElementById('breakupDetails');
    const toggleButton = document.getElementById('breakupToggle');
    
    if (breakupDetails.classList.contains('hidden')) {
        // Show breakup details
        breakupDetails.classList.remove('hidden');
        toggleButton.textContent = 'Hide Breakup Details';
        
        // Populate breakup details
        populateBreakupDetails();
    } else {
        // Hide breakup details
        breakupDetails.classList.add('hidden');
        toggleButton.textContent = 'View Breakup Details';
    }
}

function populateBreakupDetails() {
    const breakup = window.furloughBreakup;
    if (!breakup) return;
    
    // Get period display name
    const periodNames = {
        'weekly': 'Weekly',
        '2weeks': '2 Weeks (Fortnightly)',
        '4weeks': '4 Weeks',
        'monthly': 'Monthly'
    };
    
    document.getElementById('detailPayPeriod').textContent = periodNames[breakup.payPeriod];
    document.getElementById('detailFirstPayDay').textContent = breakup.firstPayDay;
    document.getElementById('detailFurloughDays').textContent = breakup.totalDays + ' days';
    document.getElementById('detailDailyRate').textContent = '£' + breakup.dailyRate.toFixed(2);
    document.getElementById('detailGrossFurloughPay').textContent = '£' + breakup.grossFurloughPay.toFixed(2);
    document.getElementById('detailGovContributionBeforeCap').textContent = '£' + breakup.govContributionBeforeCap.toFixed(2);
    document.getElementById('detailMaxGrant').textContent = '£' + breakup.maxGrant.toFixed(2);
    document.getElementById('detailFurloughGrantAfterCap').textContent = '£' + breakup.claimPeriodGrant.toFixed(2);
    
    // Show/hide NI breakup
    if (breakup.includeNI) {
        document.getElementById('niBreakup').classList.remove('hidden');
        document.getElementById('detailNIThreshold').textContent = '£' + breakup.niThreshold.toFixed(2);
        document.getElementById('detailNIableAmount').textContent = '£' + breakup.niableAmount.toFixed(2);
        document.getElementById('detailNIContribution').textContent = '£' + breakup.niContribution.toFixed(2);
    } else {
        document.getElementById('niBreakup').classList.add('hidden');
    }
    
    // Show/hide pension breakup
    if (breakup.includePension) {
        document.getElementById('pensionBreakup').classList.remove('hidden');
        document.getElementById('detailPensionThreshold').textContent = '£' + breakup.pensionThreshold.toFixed(2);
        document.getElementById('detailPensionableAmount').textContent = '£' + breakup.pensionableAmount.toFixed(2);
        document.getElementById('detailPensionContribution').textContent = '£' + breakup.pensionContribution.toFixed(2);
    } else {
        document.getElementById('pensionBreakup').classList.add('hidden');
    }
}

// Set default dates
document.addEventListener('DOMContentLoaded', function() {
    const today = new Date();
    const lastMonth = new Date(today);
    lastMonth.setMonth(lastMonth.getMonth() - 1);
    
    document.getElementById('claimStartDate').value = lastMonth.toISOString().split('T')[0];
    document.getElementById('claimEndDate').value = today.toISOString().split('T')[0];
    
    // Set first pay day to the start of the claim period by default
    document.getElementById('firstPayDay').value = lastMonth.toISOString().split('T')[0];
});
</script>
@endverbatim
@endsection