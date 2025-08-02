<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        @include('partials.head')
    </head>
    <body class="bg-white dark:bg-dark-300 min-h-screen antialiased relative">
        <!-- Subtle Background Gradient -->
        <div class="absolute inset-0 bg-gradient-to-br from-gray-50 to-gray-100 dark:from-gray-900 dark:to-black"></div>

        <!-- Grid Background -->
        <div class="absolute top-0 max-w-[1612px] left-1/2 -translate-x-1/2 max-lg:hidden opacity-20">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                width="1612"
                height="520"
                viewBox="0 0 1612 520"
                fill="none"
            >
                <path
                    d="M512.445 510.118H499.088M512.445 510.118L519.706 519M512.445 510.118H525.736M512.445 510.118L504.794 500.659M499.088 510.118L506.674 519M499.088 510.118H485.796M499.088 510.118L491.113 500.659M506.674 519H519.706M506.674 519H493.706M519.706 519H532.674M525.736 510.118L532.674 519"
                    stroke="url(#paint0_linear_101_805)"
                    stroke-width="0.5"
                    stroke-miterlimit="10"
                />
                <defs>
                    <linearGradient
                        id="paint0_linear_101_805"
                        x1="806"
                        y1="-1"
                        x2="806"
                        y2="519"
                        gradientUnits="userSpaceOnUse"
                    >
                        <stop
                            stop-color="#333333"
                            class="dark:stop-color-white"
                        />
                        <stop
                            stop-color="#666666"
                            offset="0.582692"
                            class="dark:stop-color-gray-400"
                            stop-opacity="0"
                        />
                    </linearGradient>
                </defs>
            </svg>
        </div>

        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 relative z-10">
            <!-- Logo -->
            <div class="mb-8">
                <a href="{{ route('home') }}" class="flex items-center" wire:navigate>
                    <img src="/images/logo.svg" alt="{{ config('app.name') }}" class="h-12 w-auto dark:hidden">
                    <img src="/images/logo-dark.svg" alt="{{ config('app.name') }}" class="h-12 w-auto hidden dark:block">
                </a>
            </div>

            <!-- Auth Card -->
            <div class="w-full sm:max-w-md mt-6 px-8 py-10 bg-white/95 dark:bg-gray-900/95 backdrop-blur-xl shadow-2xl rounded-2xl border border-gray-200/50 dark:border-gray-700/50 relative overflow-hidden">
                <!-- Background decoration - minimal black/white -->
                <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-gray-100/20 to-gray-200/10 rounded-full -translate-y-16 translate-x-16 dark:from-gray-700/5 dark:to-gray-600/3"></div>
                <div class="absolute bottom-0 left-0 w-24 h-24 bg-gradient-to-tr from-gray-50/30 to-gray-100/20 rounded-full translate-y-12 -translate-x-12 dark:from-gray-800/3 dark:to-gray-700/5"></div>
                
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
        @fluxScripts
    </body>
</html>
