<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">


<title>
Aura Wellness
</title>


@vite(['resources/css/app.css','resources/js/app.js'])


</head>


<body class="bg-white text-gray-900">


<header class="border-b bg-white">


<div class="max-w-7xl mx-auto px-6 py-6 flex justify-between items-center">


<a href="/"
class="text-3xl font-bold text-blue-900">

Aura

<span class="text-rose-500">
Wellness
</span>

</a>



<nav class="space-x-8 hidden md:block">


<a href="/" class="hover:text-rose-500">
{{ __('messages.home') }}
</a>


<a href="/about" class="hover:text-rose-500">
About
</a>


<a href="/services" class="hover:text-rose-500">
Services
</a>


<a href="/certificates" class="hover:text-rose-500">
Certificates
</a>


<a href="/contact" class="hover:text-rose-500">
Contact
</a>



</nav>



<x-button href="/contact">

Book Now

</x-button>


</div>


</header>



{{ $slot }}




<footer class="mt-20 bg-blue-950 text-white">


<div class="max-w-7xl mx-auto px-6 py-12 grid md:grid-cols-3 gap-10">


<div>

<h2 class="text-2xl font-bold">

Aura Wellness

</h2>


<p class="mt-4 text-gray-300">

Helping women achieve strength,
health and confidence.

</p>


</div>



<div>

<h3 class="font-bold">

Navigation

</h3>


<p class="mt-3">
Services
</p>

<p>
Certificates
</p>

<p>
Contact
</p>


</div>



<div>

<h3 class="font-bold">

Contact

</h3>


<p class="mt-3">
Phone: +212 XXX
</p>


<p>
Email: info@aurawellness.com
</p>


</div>



</div>



<div class="border-t border-gray-700 text-center py-5 text-gray-400">

© 2026 Aura Wellness

</div>


</footer>


</body>

</html>