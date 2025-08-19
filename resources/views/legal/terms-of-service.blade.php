@extends('layouts.app')

@section('title', 'Terms of Service | CalcPro')
@section('description', 'Read our terms of service to understand the rules and guidelines for using CalcPro financial calculators and tools.')

@section('content')
<div class="bg-gradient-to-b from-blue-50 to-white py-12">
    <div class="container mx-auto px-4 max-w-4xl">
        <!-- Page Header -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Terms of Service</h1>
            <p class="text-xl text-gray-600">Simple rules for using our free tools</p>
            <p class="text-sm text-gray-500 mt-4">Effective Date: {{ date('F d, Y') }}</p>
        </div>

        <!-- Content -->
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8 md:p-12">
            <div class="prose prose-lg max-w-none text-gray-700">
                <!-- Welcome Section -->
                <section class="mb-10">
                    <p class="text-xl leading-relaxed">
                        Welcome to CalcPro! These terms explain the rules for using our website and calculators. We've kept them simple and straightforward. By using our tools, you agree to these terms.
                    </p>
                </section>

                <!-- Acceptance of Terms -->
                <section class="mb-10">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">Using Our Service</h2>
                    <p class="mb-4">
                        When you access CalcPro, you're agreeing to:
                    </p>
                    <ul class="list-disc pl-6 space-y-2">
                        <li>Use our calculators responsibly and legally</li>
                        <li>Provide accurate information when using our tools</li>
                        <li>Respect our intellectual property rights</li>
                        <li>Follow all applicable laws in your jurisdiction</li>
                    </ul>
                </section>

                <!-- Our Free Service -->
                <section class="mb-10">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">Our Free Service</h2>
                    <div class="bg-blue-50 p-6 rounded-lg mb-4">
                        <p class="font-semibold mb-2">What We Provide:</p>
                        <ul class="list-disc pl-6 space-y-1">
                            <li>Free GST and VAT calculators</li>
                            <li>Educational financial content and guides</li>
                            <li>Regular updates and improvements</li>
                            <li>A clean, user-friendly interface</li>
                        </ul>
                    </div>
                    <p>
                        Our calculators are provided free of charge, supported by advertising. We strive to maintain accuracy, but remember that these tools are for informational purposes only.
                    </p>
                </section>

                <!-- Acceptable Use -->
                <section class="mb-10">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">Acceptable Use Policy</h2>
                    
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Do's - You Can:</h3>
                    <ul class="list-disc pl-6 space-y-2 mb-6">
                        <li>Use our calculators for personal or business calculations</li>
                        <li>Share our website with others who might find it helpful</li>
                        <li>Bookmark and return as often as you need</li>
                        <li>Provide feedback to help us improve</li>
                    </ul>

                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Don'ts - Please Don't:</h3>
                    <ul class="list-disc pl-6 space-y-2">
                        <li>Use automated scripts or bots to access our site</li>
                        <li>Attempt to hack, disrupt, or overload our servers</li>
                        <li>Copy our content without permission</li>
                        <li>Use our tools for any illegal activities</li>
                        <li>Misrepresent our calculations as professional tax advice</li>
                    </ul>
                </section>

                <!-- Disclaimer -->
                <section class="mb-10">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">Important Disclaimers</h2>
                    
                    <div class="bg-yellow-50 border-l-4 border-yellow-400 p-6 mb-6">
                        <h3 class="text-lg font-semibold mb-2">Calculator Accuracy</h3>
                        <p>
                            While we work hard to ensure our calculators are accurate, they're provided "as is" for informational purposes. Always verify important calculations with a qualified professional or official sources.
                        </p>
                    </div>

                    <div class="bg-yellow-50 border-l-4 border-yellow-400 p-6">
                        <h3 class="text-lg font-semibold mb-2">Not Professional Advice</h3>
                        <p>
                            CalcPro provides tools and information, not professional tax, legal, or financial advice. For important decisions, please consult with qualified professionals in your area.
                        </p>
                    </div>
                </section>

                <!-- Intellectual Property -->
                <section class="mb-10">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">Intellectual Property</h2>
                    <p class="mb-4">
                        Everything on CalcPro is protected by copyright and other intellectual property laws:
                    </p>
                    <ul class="list-disc pl-6 space-y-2">
                        <li>Our logo, design, and brand elements belong to us</li>
                        <li>Calculator formulas and implementations are our property</li>
                        <li>Blog content and guides are original works</li>
                        <li>You may share links but not copy our content wholesale</li>
                    </ul>
                    <p class="mt-4 text-sm bg-gray-50 p-4 rounded-lg">
                        <strong>Fair Use:</strong> You're welcome to reference our calculators in your work with proper attribution to CalcPro.
                    </p>
                </section>

                <!-- User Content -->
                <section class="mb-10">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">User Contributions</h2>
                    <p class="mb-4">
                        If you provide feedback, suggestions, or comments:
                    </p>
                    <ul class="list-disc pl-6 space-y-2">
                        <li>You grant us permission to use your ideas to improve our service</li>
                        <li>You confirm that your contributions don't violate others' rights</li>
                        <li>We may implement suggestions without compensation</li>
                        <li>We appreciate your input in making CalcPro better!</li>
                    </ul>
                </section>

                <!-- Privacy -->
                <section class="mb-10">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">Privacy and Data</h2>
                    <p>
                        Your privacy is important to us. Our <a href="{{ route('privacy.policy') }}" class="text-blue-600 hover:underline">Privacy Policy</a> explains how we handle your information. Key points:
                    </p>
                    <ul class="list-disc pl-6 space-y-2 mt-4">
                        <li>Calculator inputs are processed in your browser</li>
                        <li>We don't store your calculation data</li>
                        <li>We use cookies for analytics and advertising</li>
                        <li>You control your personal information</li>
                    </ul>
                </section>

                <!-- Third-Party Links -->
                <section class="mb-10">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">External Links and Ads</h2>
                    <p class="mb-4">
                        Our website may contain:
                    </p>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h4 class="font-semibold mb-2">Advertisements</h4>
                            <p class="text-sm">Provided by Google AdSense to keep our tools free. We don't control ad content.</p>
                        </div>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h4 class="font-semibold mb-2">External Links</h4>
                            <p class="text-sm">Links to helpful resources. We're not responsible for external content.</p>
                        </div>
                    </div>
                </section>

                <!-- Limitation of Liability -->
                <section class="mb-10">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">Limitation of Liability</h2>
                    <p class="mb-4">
                        To the maximum extent permitted by law:
                    </p>
                    <ul class="list-disc pl-6 space-y-2">
                        <li>CalcPro is provided "as is" without warranties</li>
                        <li>We're not liable for calculation errors or omissions</li>
                        <li>We're not responsible for decisions based on our tools</li>
                        <li>Our liability is limited to the amount you paid us (which is zero - it's free!)</li>
                    </ul>
                </section>

                <!-- Indemnification -->
                <section class="mb-10">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">Indemnification</h2>
                    <p>
                        You agree to protect CalcPro from any claims or damages resulting from your use of our service, violation of these terms, or infringement of any rights.
                    </p>
                </section>

                <!-- Changes to Terms -->
                <section class="mb-10">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">Updates to These Terms</h2>
                    <p>
                        We may update these terms occasionally. When we do:
                    </p>
                    <ul class="list-disc pl-6 space-y-2">
                        <li>We'll update the "Effective Date" at the top</li>
                        <li>Significant changes will be announced on our site</li>
                        <li>Continued use means you accept the new terms</li>
                        <li>Check back periodically for updates</li>
                    </ul>
                </section>

                <!-- Termination -->
                <section class="mb-10">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">Account Termination</h2>
                    <p>
                        Since CalcPro doesn't require accounts, there's nothing to terminate! However, we reserve the right to block access if someone violates these terms or attempts to harm our service.
                    </p>
                </section>

                <!-- Governing Law -->
                <section class="mb-10">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">Legal Stuff</h2>
                    <div class="bg-gray-50 p-6 rounded-lg">
                        <p class="mb-3"><strong>Governing Law:</strong> These terms are governed by the laws of the United States.</p>
                        <p class="mb-3"><strong>Dispute Resolution:</strong> Any disputes will be resolved through binding arbitration.</p>
                        <p><strong>Severability:</strong> If any part of these terms is invalid, the rest remains in effect.</p>
                    </div>
                </section>

                <!-- Contact Information -->
                <section class="mb-10">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">Questions or Concerns?</h2>
                    <p class="mb-4">
                        We're here to help! If you have questions about these terms:
                    </p>
                    <div class="bg-blue-50 p-6 rounded-lg">
                        <p class="mb-2"><strong>Email:</strong> legal@calcpro.com</p>
                        <p class="mb-2"><strong>Address:</strong> CalcPro Legal Team<br>123 Calculator Street<br>Tech City, TC 12345</p>
                        <p class="text-sm mt-4">We aim to respond within 48-72 hours.</p>
                    </div>
                </section>

                <!-- Final Message -->
                <section class="bg-gradient-to-r from-blue-50 to-indigo-50 p-6 rounded-lg text-center">
                    <p class="text-lg font-semibold text-gray-800 mb-2">Thank You!</p>
                    <p class="text-gray-700">
                        Thanks for taking the time to read our terms. We hope you find CalcPro helpful for all your calculation needs!
                    </p>
                </section>
            </div>
        </div>

        <!-- Quick Links -->
        <div class="mt-12 text-center">
            <p class="text-gray-600 mb-4">Related Pages:</p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="{{ route('privacy.policy') }}" class="text-blue-600 hover:underline">Privacy Policy</a>
                <span class="text-gray-400">•</span>
                <a href="#" class="text-blue-600 hover:underline">Cookie Policy</a>
                <span class="text-gray-400">•</span>
                <a href="{{ route('contact') }}" class="text-blue-600 hover:underline">Contact Us</a>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .prose h2 {
        margin-top: 0;
        margin-bottom: 1rem;
    }
    .prose h3 {
        margin-top: 1.5rem;
        margin-bottom: 0.75rem;
    }
    .prose ul {
        margin-bottom: 1.5rem;
    }
    .prose p {
        margin-bottom: 1rem;
    }
</style>
@endpush