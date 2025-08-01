<!DOCTYPE html>
<html lang="pt-BR">
<head>
	 @include('partials.head')
	 @vite(['resources/css/app.css', 'resources/js/app.js'])
	 @fluxAppearance
	 @livewireStyles
	 <meta charset="utf-8" />
	 <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	 <title>{{ $title ?? config('app.name') }}</title>
	 <link rel="icon" href="/images/logo-icon.svg" type="image/svg+xml">
	 <link rel="icon" href="/images/logo-icon.svg" sizes="any">
	 <link rel="apple-touch-icon" href="/apple-touch-icon.png">
	 <link rel="preconnect" href="https://fonts.bunny.net">
	 <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

	 <meta name="theme-color" content="#ffffff">
	 
	 <style>
		/* Cores customizadas para navegação */
		.nav-button {
			transition: all 0.3s ease;
		}
		
		.nav-button:hover {
			background-color: #694ef1 !important;
			color: white !important;
		}
		
		.nav-button-active {
			background-color: #694ef1 !important;
			color: white !important;
		}
		
		.bg-primary {
			background-color: #694ef1 !important;
		}
		
		.bg-primary-60 {
			background-color: rgba(4, 4, 32, 0.8) !important;
			transition: background-color 0.5s ease-in-out !important;
		}
		
		.bg-dark-1-60 {
			background-color: rgba(4, 4, 32, 0.9) !important;
			transition: background-color 0.5s ease-in-out !important;
		}
		
		.bg-test-legal {
			background-color: rgba(4, 4, 32, 0.9) !important;
			transition: background-color 0.5s ease-in-out !important;
		}
		
		.bg-black\/20 {
			background-color: rgba(0, 0, 0, 0.2) !important;
			transition: background-color 0.5s ease-in-out !important;
		}
		
		.bg-black-20 {
			background-color: rgba(0, 0, 0, 0.2) !important;
			transition: background-color 0.5s ease-in-out !important;
		}
		
		.nav-scrolled {
			background-color: rgba(0, 0, 0, 0.4) !important;
			transition: background-color 0.5s ease-in-out !important;
		}
		
		.bg-transparent {
			background-color: transparent !important;
			transition: background-color 0.5s ease-in-out !important;
		}
		
		.text-primary {
			color: #694ef1 !important;
		}
		
		.hover\:bg-primary:hover {
			background-color: #694ef1 !important;
		}
		
		.hover\:text-primary:hover {
			color: #694ef1 !important;
		}
	</style>
</head>
<body class="font-sans antialiased {{ isset($darkBackground) && $darkBackground ? 'bg-primary' : 'bg-white'}}">

<x-nav/>


{{ $slot }}

<x-footer/>

</body>
</html>
