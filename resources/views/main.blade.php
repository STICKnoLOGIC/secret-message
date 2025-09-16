<!DOCTYPE html>
<html lang="en" class="">
<head>
    <meta charset="UTF-8" />
    <title>Create Message</title>
    @vite('resources/css/app.css')

    <script>
        (function () {
            const savedTheme = localStorage.getItem('theme');
            document.documentElement.classList.toggle('dark', savedTheme === 'dark');
        })();
    </script>
</head>
<body class="bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-gray-100 min-h-screen flex flex-col">

@php
    // This URL can be passed from the controller or Blade data
    $newTabUrl = route('preview.random', ['id' => uniqid()]);
@endphp

<!-- Header -->
<header class="bg-white dark:bg-gray-800 shadow px-4 py-3 flex items-center justify-between">
    <div class="flex items-center space-x-2">
        <div class="w-8 h-8 rounded-full bg-orange-500"></div>
        <span class="text-lg font-bold">LOGO</span>
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
            <span class="text-sm">🪧 Ad #1 (Top on Mobile / Left on Desktop)</span>
        </div>
    </div>

    <!-- Form -->
    <div class="w-full md:w-[60%] px-4 md:px-0 order-2 md:order-2 flex flex-col items-center">
        <form id="createForm"
              method="POST"
              action="{{ route('messages.store') }}"
              class="bg-white dark:bg-gray-800 mt-4 p-6 rounded-xl shadow-md space-y-6 w-full max-w-xl">

            @csrf

            <label for="message" class="block font-semibold text-gray-700 dark:text-gray-200 mb-1">
                Message <span class="text-sm text-gray-500 dark:text-gray-400">(max 150 characters)</span>
            </label>
            <textarea id="message" name="message" maxlength="150" rows="3"
                      class="w-full p-3 rounded-lg border border-gray-300 dark:border-gray-700 bg-gray-50 dark:bg-gray-700 text-gray-900 dark:text-gray-100 focus:ring-2 focus:ring-orange-500 resize-none"
                      required
                      pattern=".*\S.*"
                      title="Please enter a valid message (text only)."></textarea>

            <label for="limit" class="block font-semibold text-gray-700 dark:text-gray-200 mb-1">
                Limit <span class="text-sm text-gray-500 dark:text-gray-400">(how many people can open this, default: 1)</span>
            </label>
            <input type="number" id="limit" name="limit" value="1" min="1"
                   class="w-24 p-2 rounded-lg border border-gray-300 dark:border-gray-700 bg-gray-50 dark:bg-gray-700 text-gray-900 dark:text-gray-100 focus:ring-2 focus:ring-orange-500 transition"
                   required>

            <div class="text-sm text-gray-500 dark:text-gray-400 font-semibold">
                ⏳ 1 day expiration
            </div>

            <button type="submit"  onclick="window.open('{{ $newTabUrl }}', '_blank');"
                    class="w-full bg-orange-500 hover:bg-orange-600 text-white font-bold py-3 px-4 rounded-lg shadow-md transition">
                CREATE
            </button>
        </form>
    </div>

    <!-- Bottom Ad on mobile / Right Ad on desktop -->
    <div class="p-4 w-full md:w-[20%] order-3 md:order-3">
        <div class="bg-gray-200 dark:bg-gray-700 text-center text-gray-700 dark:text-gray-200 p-3 rounded-lg shadow-inner">
            <span class="text-sm">🪧 Ad #2 (Bottom on Mobile / Right on Desktop)</span>
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

</body>
</html>
