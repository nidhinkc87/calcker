<header class="bg-white border-b border-gray-200">
    <nav class="container mx-auto px-4">
        <div class="flex items-center justify-between h-16">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="/" class="flex items-center space-x-2">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                    </svg>
                    <span class="text-xl font-bold text-gray-900">CalcPro</span>
                </a>
            </div>

            <!-- Navigation Menu -->
            <div class="hidden md:flex items-center space-x-8">
                <!-- Finance Dropdown -->
                <div class="relative group">
                    <button class="flex items-center space-x-1 text-gray-700 hover:text-blue-600 font-medium transition-colors">
                        <span>Finance</span>
                        <svg class="w-4 h-4 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    
                    <!-- Dropdown Menu -->
                    <div class="absolute left-0 mt-2 w-56 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform group-hover:translate-y-0 translate-y-1">
                        <div class="bg-white rounded-lg shadow-lg border border-gray-200 py-2">
                            <a href="{{ route('gst.calculator') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition-colors">
                                <div class="flex items-center space-x-3">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                    </svg>
                                    <span>GST Calculator (India)</span>
                                </div>
                            </a>
                            <a href="{{ route('vat.calculator') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition-colors">
                                <div class="flex items-center space-x-3">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                    </svg>
                                    <span>VAT Calculator (UK)</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Other Menu Items -->
                <a href="{{ route('blog.index') }}" class="text-gray-700 hover:text-blue-600 font-medium transition-colors">Blogs</a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button id="mobile-menu-button" class="text-gray-700 hover:text-blue-600 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden pb-4">
            <div class="space-y-2 pt-2">
                <div class="border-t border-gray-200 pt-2">
                    <button class="w-full text-left px-4 py-2 text-gray-700 font-medium">Finance</button>
                    <div class="pl-8 space-y-2">
                        <a href="{{ route('gst.calculator') }}" class="block py-2 text-sm text-gray-600 hover:text-blue-600">GST Calculator (India)</a>
                        <a href="{{ route('vat.calculator') }}" class="block py-2 text-sm text-gray-600 hover:text-blue-600">VAT Calculator (UK)</a>
                    </div>
                </div>
                <a href="{{ route('blog.index') }}" class="block px-4 py-2 text-gray-700 font-medium hover:text-blue-600">Blogs</a>
            </div>
        </div>
    </nav>
</header>

<script>
    // Mobile menu toggle
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
        const mobileMenu = document.getElementById('mobile-menu');
        mobileMenu.classList.toggle('hidden');
    });
</script>