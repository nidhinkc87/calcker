@extends('layouts.app')

@section('title', 'Privacy Policy | CalcPro')
@section('description', 'Read our privacy policy to understand how CalcPro collects, uses, and protects your personal information when you use our financial calculators and tools.')

@section('content')
<div class="bg-gradient-to-b from-blue-50 to-white py-12">
    <div class="container mx-auto px-4 max-w-4xl">
        <!-- Page Header -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Privacy Policy</h1>
            <p class="text-xl text-gray-600">Your privacy matters to us</p>
            <p class="text-sm text-gray-500 mt-4">Last updated: {{ date('F d, Y') }}</p>
        </div>

        <!-- Content -->
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8 md:p-12">
            <div class="prose prose-lg max-w-none text-gray-700">
                <!-- Welcome Section -->
                <section class="mb-10">
                    <p class="text-xl leading-relaxed">
                        Welcome to CalcPro! We're committed to protecting your privacy and being transparent about how we handle your information. This policy explains what data we collect, how we use it, and your rights regarding your personal information.
                    </p>
                </section>

                <!-- Information We Collect -->
                <section class="mb-10">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">What Information We Collect</h2>
                    
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Information You Provide</h3>
                    <ul class="list-disc pl-6 space-y-2 mb-4">
                        <li>Calculator inputs (like amounts and rates) - processed locally in your browser</li>
                        <li>Email address - only if you subscribe to our newsletter</li>
                        <li>Name and contact details - only if you reach out to us</li>
                    </ul>

                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Information Collected Automatically</h3>
                    <ul class="list-disc pl-6 space-y-2">
                        <li>Browser type and version</li>
                        <li>Device information (desktop/mobile)</li>
                        <li>Pages you visit and time spent</li>
                        <li>Referring website (how you found us)</li>
                        <li>General location (country/region, not precise location)</li>
                    </ul>
                </section>

                <!-- How We Use Information -->
                <section class="mb-10">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">How We Use Your Information</h2>
                    <p class="mb-4">We use the collected information to:</p>
                    <ul class="list-disc pl-6 space-y-2">
                        <li>Provide and improve our calculator tools</li>
                        <li>Send newsletters (only if you've subscribed)</li>
                        <li>Respond to your questions and support requests</li>
                        <li>Analyze usage patterns to enhance user experience</li>
                        <li>Ensure our website's security and functionality</li>
                        <li>Display relevant advertisements through Google AdSense</li>
                    </ul>
                </section>

                <!-- Cookies and Tracking -->
                <section class="mb-10">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">Cookies and Similar Technologies</h2>
                    <p class="mb-4">
                        We use cookies to improve your experience on our site. Here's what you should know:
                    </p>
                    
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Essential Cookies</h3>
                    <p class="mb-4">These are necessary for the website to function properly, like remembering your calculator preferences during a session.</p>
                    
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Analytics Cookies</h3>
                    <p class="mb-4">We use Google Analytics to understand how visitors use our site. This helps us improve our calculators and content.</p>
                    
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Advertising Cookies</h3>
                    <p class="mb-4">Google AdSense may place cookies to show you relevant ads. These help keep our tools free for everyone to use.</p>
                    
                    <p class="bg-blue-50 p-4 rounded-lg">
                        <strong>Managing Cookies:</strong> You can control cookies through your browser settings. Note that disabling cookies may affect some features of our calculators.
                    </p>
                </section>

                <!-- Third-Party Services -->
                <section class="mb-10">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">Third-Party Services</h2>
                    <p class="mb-4">We work with trusted partners to provide our services:</p>
                    
                    <div class="space-y-4">
                        <div class="border-l-4 border-blue-500 pl-4">
                            <h4 class="font-semibold">Google Analytics</h4>
                            <p class="text-sm">Helps us understand website usage and improve our services.</p>
                        </div>
                        
                        <div class="border-l-4 border-blue-500 pl-4">
                            <h4 class="font-semibold">Google AdSense</h4>
                            <p class="text-sm">Displays relevant advertisements to support our free tools.</p>
                        </div>
                        
                        <div class="border-l-4 border-blue-500 pl-4">
                            <h4 class="font-semibold">Cloudflare</h4>
                            <p class="text-sm">Provides security and performance optimization for our website.</p>
                        </div>
                    </div>
                    
                    <p class="mt-4 text-sm">
                        These services have their own privacy policies. We encourage you to review them.
                    </p>
                </section>

                <!-- Data Security -->
                <section class="mb-10">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">How We Protect Your Data</h2>
                    <p class="mb-4">Your security is important to us. We implement several measures to keep your information safe:</p>
                    <ul class="list-disc pl-6 space-y-2">
                        <li>SSL encryption for all data transmission</li>
                        <li>Regular security updates and monitoring</li>
                        <li>Limited access to personal information</li>
                        <li>Calculator data processed locally in your browser (not sent to our servers)</li>
                    </ul>
                </section>

                <!-- Your Rights -->
                <section class="mb-10">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">Your Privacy Rights</h2>
                    <p class="mb-4">You have several rights regarding your personal information:</p>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h4 class="font-semibold mb-2">Access Your Data</h4>
                            <p class="text-sm">Request a copy of the information we have about you.</p>
                        </div>
                        
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h4 class="font-semibold mb-2">Update Information</h4>
                            <p class="text-sm">Correct any inaccurate personal information.</p>
                        </div>
                        
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h4 class="font-semibold mb-2">Delete Your Data</h4>
                            <p class="text-sm">Request removal of your personal information.</p>
                        </div>
                        
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h4 class="font-semibold mb-2">Opt-Out</h4>
                            <p class="text-sm">Unsubscribe from newsletters or marketing communications.</p>
                        </div>
                    </div>
                </section>

                <!-- Children's Privacy -->
                <section class="mb-10">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">Children's Privacy</h2>
                    <p>
                        CalcPro is designed for general audiences and is not directed at children under 13. We don't knowingly collect personal information from children. If you believe a child has provided us with personal information, please contact us, and we'll promptly remove it.
                    </p>
                </section>

                <!-- International Users -->
                <section class="mb-10">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">International Users</h2>
                    <p>
                        CalcPro is accessible worldwide. If you're accessing our site from outside the United States, please be aware that your information may be transferred to and processed in countries with different privacy laws than your own. By using our calculators, you consent to this transfer and processing.
                    </p>
                </section>

                <!-- Changes to Policy -->
                <section class="mb-10">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">Updates to This Policy</h2>
                    <p>
                        We may update this privacy policy occasionally to reflect changes in our practices or legal requirements. When we make significant changes, we'll notify you by updating the date at the top of this page. We encourage you to review this policy periodically.
                    </p>
                </section>

                <!-- Contact Us -->
                <section class="mb-10">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">Get in Touch</h2>
                    <p class="mb-4">
                        Have questions about our privacy practices? We're here to help! You can reach us at:
                    </p>
                    <div class="bg-blue-50 p-6 rounded-lg">
                        <p class="mb-2"><strong>Email:</strong> privacy@calcpro.com</p>
                        <p class="mb-2"><strong>Address:</strong> CalcPro Privacy Team<br>123 Calculator Street<br>Tech City, TC 12345</p>
                        <p class="text-sm mt-4">We typically respond within 48 hours.</p>
                    </div>
                </section>

                <!-- Final Note -->
                <section class="bg-gray-50 p-6 rounded-lg">
                    <p class="text-center text-gray-700">
                        <strong>Thank you for trusting CalcPro!</strong><br>
                        We're committed to providing free, accurate financial calculators while respecting your privacy.
                    </p>
                </section>
            </div>
        </div>

        <!-- Quick Links -->
        <div class="mt-12 text-center">
            <p class="text-gray-600 mb-4">Related Pages:</p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="{{ route('terms.service') }}" class="text-blue-600 hover:underline">Terms of Service</a>
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