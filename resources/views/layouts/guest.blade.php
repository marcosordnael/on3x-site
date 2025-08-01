<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gradient-to-br from-primary-50 via-white to-primary-100 dark:from-dark-300 dark:via-dark-200 dark:to-dark-100 min-h-screen">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
        <!-- Logo -->
        <div class="mb-8">
            <a href="/" class="flex items-center">
                <img src="/images/logo.svg" alt="{{ config('app.name') }}" class="h-12 w-auto dark:hidden">
                <img src="/images/logo-dark.svg" alt="{{ config('app.name') }}" class="h-12 w-auto hidden dark:block">
            </a>
        </div>

        <!-- Auth Card -->
        <div class="w-full sm:max-w-md mt-6 px-8 py-10 bg-white dark:bg-dark-200 shadow-xl rounded-2xl border border-gray-100 dark:border-borderColour-dark relative overflow-hidden">
            <!-- Background decoration -->
            <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-primary-100/30 to-primary-200/20 rounded-full -translate-y-16 translate-x-16 dark:from-primary-200/10 dark:to-primary-300/5"></div>
            <div class="absolute bottom-0 left-0 w-24 h-24 bg-gradient-to-tr from-primary-50/40 to-primary-100/30 rounded-full translate-y-12 -translate-x-12 dark:from-primary-100/5 dark:to-primary-200/10"></div>
            
            <!-- Content -->
            <div class="relative z-10">
                {{ $slot }}
            </div>
        </div>

        <!-- Footer -->
        <div class="mt-8 text-center">
            <p class="text-sm text-gray-600 dark:text-gray-400">
                © {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
            </p>
        </div>
    </div>
</body>
</html>
