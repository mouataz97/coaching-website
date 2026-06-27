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


<header class="bg-white shadow">

<div class="max-w-7xl mx-auto px-6 py-5 flex justify-between items-center">


<a href="/"
class="text-3xl font-bold text-blue-900">

Aura<span class="text-rose-500">Care</span>

</a>



<nav class="space-x-6">


<a href="/" class="hover:text-rose-500">
{{ __('app.home') }}
</a>


<a href="/about" class="hover:text-rose-500">
{{ __('app.about') }}
</a>


<a href="/services" class="hover:text-rose-500">
{{ __('app.services') }}
</a>


<a href="/certificates" class="hover:text-rose-500">
{{ __('app.certificates') }}
</a>


<a href="/contact" class="hover:text-rose-500">
{{ __('app.contact') }}
</a>

<div class="flex gap-3">

@if(app()->getLocale() === 'ar')
    <a href="/lang/fr"
       class="text-sm px-3 py-1 bg-rose-500 text-white rounded hover:bg-rose-600 transition">
        Français
    </a>
@else
    <a href="/lang/ar"
       class="text-sm px-3 py-1 bg-rose-500 text-white rounded hover:bg-rose-600 transition">
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