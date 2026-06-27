<!DOCTYPE html>
<html lang="{{app()->getLocale()}}"
dir="{{app()->getLocale() == 'ar' ? 'rtl':'ltr'}}">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description"
content="Professional women wellness coaching, training and health support">

<title>Aura Wellness</title>


@vite(['resources/css/app.css','resources/js/app.js'])

</head>



<body class="bg-white text-gray-900">


<header class="bg-white shadow-md">

<div class="max-w-7xl mx-auto px-10 py-6 flex justify-between items-center gap-8">


<a href="/"
class="text-3xl font-bold text-blue-900 whitespace-nowrap">

Aura<span class="text-rose-500">Care</span>

</a>



<nav class="flex items-center justify-between flex-1">

<div class="flex space-x-20">

<a href="/" class="text-gray-700 hover:text-rose-500 font-medium transition duration-300 whitespace-nowrap">
{{ __('app.home') }}
</a>


<a href="/about" class="text-gray-700 hover:text-rose-500 font-medium transition duration-300 whitespace-nowrap">
{{ __('app.about') }}
</a>


<a href="/services" class="text-gray-700 hover:text-rose-500 font-medium transition duration-300 whitespace-nowrap">
{{ __('app.services') }}
</a>


<a href="/certificates" class="text-gray-700 hover:text-rose-500 font-medium transition duration-300 whitespace-nowrap">
{{ __('app.certificates') }}
</a>


<a href="/contact" class="text-gray-700 hover:text-rose-500 font-medium transition duration-300 whitespace-nowrap">
{{ __('app.contact') }}
</a>

</div>

<!-- Language Switcher -->
<div class="flex items-center ml-auto pl-4">

@if(app()->getLocale() === 'ar')
    <a href="/lang/fr"
       class="inline-flex items-center gap-2 px-4 py-2 bg-gradient-to-r from-rose-500 to-rose-600 text-white font-semibold rounded-lg shadow-md hover:shadow-lg hover:from-rose-600 hover:to-rose-700 transform hover:scale-105 transition duration-300">
        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10.5 1.5H3.75A2.25 2.25 0 001.5 3.75v12.5A2.25 2.25 0 003.75 18.5h12.5a2.25 2.25 0 002.25-2.25V9.5M10.5 1.5v16M10.5 1.5a6 6 0 100 12 6 6 0 000-12z"></path>
        </svg>
        Français
    </a>
@else
    <a href="/lang/ar"
       class="inline-flex items-center gap-2 px-4 py-2 bg-gradient-to-r from-blue-600 to-blue-700 text-white font-semibold rounded-lg shadow-md hover:shadow-lg hover:from-blue-700 hover:to-blue-800 transform hover:scale-105 transition duration-300">
        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10.5 1.5H3.75A2.25 2.25 0 001.5 3.75v12.5A2.25 2.25 0 003.75 18.5h12.5a2.25 2.25 0 002.25-2.25V9.5M10.5 1.5v16M10.5 1.5a6 6 0 100 12 6 6 0 000-12z"></path>
        </svg>
        العربية
    </a>
@endif

</div>

</nav>


</div>


</header>




<main>

{{ $slot }}

</main>





<footer class="bg-blue-950 text-white mt-20">


<div class="max-w-7xl mx-auto px-6 py-10">


<h2 class="text-2xl font-bold">
{{ __('app.footer_brand') }}
</h2>


<p class="mt-3 text-gray-300">

{{ __('app.footer_about') }}

</p>


</div>


</footer>



</body>


</html>