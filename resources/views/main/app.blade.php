<!DOCTYPE html>
<html lang="en" class="">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Secret Message')</title>
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
</head>
<body class="bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-gray-100 min-h-screen flex flex-col">

<!-- Header -->
<header class="bg-white dark:bg-gray-800 shadow px-4 py-3 flex items-center justify-between">
    <div class="flex items-center space-x-2">
        @hasSection('logo')
            @yield('logo')
        @else
            <div class="w-8 h-8 rounded-full bg-orange-500"></div>
        @endif
        <span class="text-lg font-bold">@yield('logo-text', 'LOGO')</span>
    </div>
    <button id="themeToggle"
            class="bg-gray-200 dark:bg-gray-700 p-2 rounded shadow hover:bg-gray-300 dark:hover:bg-gray-600 transition"
            aria-label="Toggle Theme">
    </button>
</header>

<!-- Main Container -->
<main class="flex-1 w-full flex flex-col md:flex-row md:items-start">

    <!-- Top Ad on mobile / Left Ad on desktop -->
    <div class="p-4 w-full md:w-[20%] order-1 md:order-1">
        <div class="bg-gray-200 dark:bg-gray-700 text-center text-gray-700 dark:text-gray-200 p-3 rounded-lg shadow-inner">
            @yield('left-side', '<span class="text-sm">🪧 Ad #1 (Top on Mobile / Left on Desktop)</span>')
        </div>
    </div>


    <!-- Content -->
    <div class="w-full md:w-[60%]  px-4 md:px-0 order-2 md:order-2 flex flex-col items-center">
        @yield('content', 'Error 404')
    </div>

    <!-- Bottom Ad on mobile / Right Ad on desktop -->
    <div class="p-4 w-full md:w-[20%] order-3 md:order-3">
        <div class="bg-gray-200 dark:bg-gray-700 text-center text-gray-700 dark:text-gray-200 p-3 rounded-lg shadow-inner">
            @yield('right-side', '<span class="text-sm">🪧 Ad #2 (Bottom on Mobile / Right on Desktop)</span>')
        </div>
    </div>
</main>

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
