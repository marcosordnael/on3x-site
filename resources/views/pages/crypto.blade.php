<!DOCTYPE html>
<html lang="zxx" class="dark" style="--marquee-elements: 6;">

<head>
    <meta charset="utf-8">
    <title>ON3X</title>

    <!--Meta For No Index-->
    <meta name="robots" content="noindex, Nofollow, Noimageindex">

    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- PWA Meta Tags -->
    <meta name="theme-color" content="#3b82f6">
    <meta name="msapplication-TileColor" content="#3b82f6">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

    <!-- Favicon -->
    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <link rel="manifest" href="/site.webmanifest">
    <!-- Stylesheets -->
    @vite(['resources/css/app.css'])
    @vite(['resources/js/app.js'])
</head>

<body class="relative overflow-x-hidden text-base antialiased bg-white dark:bg-dark-300 font-Inter min-h-screen"
    data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">
    @include('components.header.header')
    @include('components.sections.crypto-hero')
    @include('components.sections.crypto-about')
    @include('components.sections.crypto-process')
    @include('components.sections.crypto-services')
    @include('components.sections.crypto-team')
    @include('components.sections.crypto-timeline')
    @include('components.sections.crypto-market')
    @include('components.sections.crypto-blog')
    @include('components.sections.crypto-client')
    @include('components.footer.footer')
</body>
</html>