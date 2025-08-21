<footer class="bg-gray-900 text-gray-300 mt-16">
    <div class="container mx-auto px-4 py-12">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- Company Info -->
            <div>
                <div class="flex items-center space-x-2 mb-4">
                    <svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                    </svg>
                    <span class="text-xl font-bold text-white">CalcPro</span>
                </div>
                <p class="text-sm">
                    Your trusted partner for all financial calculations. Simple, accurate, and free tools for better financial decisions.
                </p>
            </div>

            <!-- Finance Tools -->
            <div>
                <h3 class="text-white font-semibold mb-4">Finance Tools</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="{{ route('gst.calculator') }}" class="hover:text-blue-400 transition-colors">GST Calculator (India)</a></li>
                    <li><a href="{{ route('vat.calculator') }}" class="hover:text-blue-400 transition-colors">VAT Calculator (UK)</a></li>
                </ul>
            </div>

            <!-- Resources -->
            <div>
                <h3 class="text-white font-semibold mb-4">Resources</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="{{ route('blog.index') }}" class="hover:text-blue-400 transition-colors">Blogs</a></li>
                </ul>
            </div>

            <!-- About -->
            <div>
                <h3 class="text-white font-semibold mb-4">About CalcPro</h3>
                <p class="text-sm">
                    Stay updated with the latest financial tools and tips from our comprehensive calculator suite.
                </p>
            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="border-t border-gray-800 mt-8 pt-8 text-sm text-center md:flex md:justify-between md:text-left">
            <p>&copy; 2025 CalcPro. All rights reserved.</p>
            <div class="mt-4 md:mt-0 space-x-6">
                <a href="{{ route('privacy.policy') }}" class="hover:text-blue-400 transition-colors">Privacy Policy</a>
                <a href="{{ route('terms.service') }}" class="hover:text-blue-400 transition-colors">Terms of Service</a>
                <a href="{{ route('contact') }}" class="hover:text-blue-400 transition-colors">Contact Us</a>
            </div>
        </div>
    </div>
</footer>