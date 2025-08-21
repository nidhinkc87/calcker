<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index, follow">
    <meta name="author" content="CalcPro">
    
    <!-- SEO Meta Tags -->
    <title>@yield('title', 'Free GST Calculator Online - Calculate GST Instantly | CalcPro')</title>
    <meta name="description" content="@yield('meta_description', 'Free online GST calculator for India. Calculate GST instantly with our easy-to-use tool. Supports all GST rates (5%, 12%, 18%, 28%). Perfect for businesses and individuals.')">
    <meta name="keywords" content="@yield('meta_keywords', 'GST calculator, GST calculation, goods and services tax, India GST, free calculator, tax calculator, CGST, SGST, IGST')">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('og_title', 'Free GST Calculator Online - Calculate GST Instantly | CalcPro')">
    <meta property="og:description" content="@yield('og_description', 'Free online GST calculator for India. Calculate GST instantly with our easy-to-use tool. Supports all GST rates.')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="CalcPro">
    <meta property="og:locale" content="en_IN">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('twitter_title', 'Free GST Calculator Online - Calculate GST Instantly')">
    <meta name="twitter:description" content="@yield('twitter_description', 'Free online GST calculator for India. Calculate GST instantly with our easy-to-use tool.')">
    
    <!-- Structured Data -->
    @yield('structured_data')
    
    @if(app()->environment('production'))
    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-F3LVEKJEN9"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-F3LVEKJEN9');
    </script>
    @endif
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700" rel="stylesheet" />
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    @stack('styles')
</head>
<body class="font-sans antialiased bg-gray-50 flex flex-col min-h-screen">
    @include('partials.header')
    
    <main class="flex-grow">
        @yield('content')
    </main>
    
    @include('partials.footer')
    
    @stack('scripts')
</body>
</html>