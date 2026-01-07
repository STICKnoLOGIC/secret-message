<!DOCTYPE html>
<html lang="en" class="">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Basic SEO -->
    <title>@yield('title', config('app.name', 'Laravel'))</title>
    <meta name="description" content="{{ config('app.desc', 'Ssh! It\'s our little secret') }}">
    <link rel="canonical" href="https://secret.sticknologic.is-a.dev">

    <!-- Open Graph / Facebook / LinkedIn / Threads / Instagram / Reddit -->
    <meta property="og:title" content="{{ config('app.name', 'Laravel') }}">
    <meta property="og:description" content="{{ config('app.desc', 'Ssh! It\'s our little secret') }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ request()->fullUrl() }}">
    <meta property="og:site_name" content="{{ config('app.name', 'Laravel') }}">
    <meta property="og:image" content="{{ asset('images/og.png') }}">
    <meta property="og:image:width" content="1280">
    <meta property="og:image:height" content="640">
    <meta property="og:locale" content="en_US">

    <!-- Twitter / X / Bluesky -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title', config('app.name', 'Laravel'))">
    <meta name="twitter:description" content="{{ config('app.desc', 'Ssh! It\'s our little secret') }}">
    <meta name="twitter:image" content="{{ asset('images/og.png') }}">
    <meta name="twitter:site" content="@{{ config('app.author', 'STICKnolOGIC') }}">
    <meta name="twitter:creator" content="@{{ config('app.author', 'STICKnolOGIC') }}">

    <link rel="icon" type="image/svg+xml" href="{{ asset('images/favicon.svg') }}">
    <link rel="alternate icon" href="{{ asset('images/favicon.png') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script>
        (function () {
            const savedTheme = localStorage.getItem('theme') || 'light';
            if (savedTheme === 'dark') {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark');
            }
        })();
    </script>
    @yield('head-script')
</head>
<body class="bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-gray-100 min-h-screen flex flex-col">

<!-- Header -->
<header class="sticky top-0 z-10 bg-white dark:bg-gray-800 shadow px-4 py-3 flex items-center justify-between">
    <a href="{{ route('demo.main') }}">
        <div class="flex items-center space-x-2">
            @hasSection('logo')
                @yield('logo')
            @else
                <img src="{{ asset('images/icon-light.svg') }}" class="block dark:hidden h-6" alt="icon light">
                <img src="{{ asset('images/icon-dark.svg') }}" class="hidden dark:block h-6" alt="icon dark">
            @endif
            <span class="text-lg font-bold">
            @yield('logo-text')
            </span>
        </div>
    </a>
    <button id="themeToggle"
            class="bg-gray-200 dark:bg-gray-700 p-2 rounded shadow hover:bg-gray-300 hover:cursor-pointer dark:hover:bg-gray-600 transition"
            aria-label="Toggle Theme">
    </button>
</header>

<!-- Main Container -->
<main class="flex-1 w-full flex flex-col md:flex-row md:items-start">

    <!-- Top Ad on mobile / Left Ad on desktop -->
    <div class="lg:sticky lg:top-12 p-4 w-full md:w-[25%] order-1 md:order-1">
        @hasSection('left-side')
            @yield('left-side')
        @else
            <div class="bg-gray-200 dark:bg-gray-700 text-center text-gray-700 dark:text-gray-200 p-3 rounded-lg shadow-inner">
                <span class="text-sm">🪧 Ad #1 (Top on Mobile / Left on Desktop)</span>
            </div>
        @endif
    </div>


    <!-- Content -->
    <div class="w-full md:w-[50%]  px-4 md:px-0 order-2 md:order-2 flex flex-col items-center">
        @yield('content', 'Error 404')
    </div>

    <!-- Bottom Ad on mobile / Right Ad on desktop -->
    <div class="lg:sticky lg:top-12 p-4 w-full md:w-[25%] order-3 md:order-3">
        @hasSection('right-side')
            @yield('right-side')
        @else
            <div class="bg-gray-200 dark:bg-gray-700 text-center text-gray-700 dark:text-gray-200 p-3 rounded-lg shadow-inner">
                <span class="text-sm">🪧 Ad #2 (Bottom on Mobile / Right on Desktop)</span>
            </div>
        @endif
    </div>
</main>
<br>
<footer class="w-full flex flex-col md:flex-row md:items-start p-4 border-t gap-2 lg:gap-16 border-amber-600 items-center justify-center">
    <a class="text-orange-500 dark:text-orange-400"
       href="{{ route('legal.tos') }}">Terms of Services</a>
    <a class="text-orange-500 dark:text-orange-400"
       href="{{ route('legal.privacy') }}">Privacy Policy</a>
    <a class="text-orange-500 dark:text-orange-400"
       href="{{ route('legal.dmca') }}">DMCA</a>
    <br>
</footer>

<!-- Theme Toggle Script -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const themeBtn = document.getElementById('themeToggle');
        const sunText = '☀️';
        const moonText = '🌙';
        const isDark = document.documentElement.classList.contains('dark');
        themeBtn.textContent = isDark ? sunText : moonText;


        themeBtn.addEventListener('click', () => {
            const darkNow = document.documentElement.classList.toggle('dark');
            localStorage.setItem('theme', darkNow ? 'dark' : 'light');
            themeBtn.textContent = darkNow ? sunText : moonText;
        });
    });
</script>

@yield('body-script')

</body>
</html>
