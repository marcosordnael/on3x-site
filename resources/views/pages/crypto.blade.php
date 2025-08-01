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


    <!--Favicon-->
    <link rel="apple-touch-icon" sizes="57x57" href="images/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="images/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="images/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicons/favicon-16x16.png">
    <link rel="shortcut icon" href="images/favicons/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicons/favicon.png" type="image/x-icon">
    <!-- Stylesheets -->
    @vite(['resources/css/app.css', 'resources/css/theme.css'])
    @vite(['resources/js/app.js'])
</head>

<body class="relative overflow-x-hidden text-base antialiased bg-white dark:bg-dark-300 font-Inter"
    data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">
    @include('components.header.guest')
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