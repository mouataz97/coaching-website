<nav class="bg-white border-b shadow-sm">

<div class="max-w-7xl mx-auto px-6">

<div class="px-10 py-4 flex justify-between h-auto items-center gap-8">


<!-- Logo -->

<div>

<a href="{{ route('home') }}"
class="text-2xl font-bold text-green-600 whitespace-nowrap">

CoachCare

</a>

</div>



<!-- Menu -->

<div class="flex space-x-20">


<a href="{{ route('home') }}"
class="text-gray-700 hover:text-green-600 font-medium whitespace-nowrap">

{{ __('app.home') }}

</a>



<a href="{{ route('about') }}"
class="text-gray-700 hover:text-green-600 font-medium whitespace-nowrap">

{{ __('app.about') }}

</a>



<a href="{{ route('services') }}"
class="text-gray-700 hover:text-green-600 font-medium whitespace-nowrap">

{{ __('app.services') }}

</a>



<a href="{{ route('certificates') }}"
class="text-gray-700 hover:text-green-600 font-medium whitespace-nowrap">

{{ __('app.certificates') }}

</a>



<a href="{{ route('contact') }}"
class="text-gray-700 hover:text-green-600 font-medium whitespace-nowrap">

{{ __('app.contact') }}

</a>



</div>



<!-- User -->

<div class="flex items-center space-x-4 ml-auto">

<!-- Language Switcher -->
<div class="flex items-center">
    @if(app()->getLocale() === 'ar')
        <a href="{{ route('lang', 'fr') }}"
           class="inline-flex items-center gap-2 px-4 py-2 bg-gradient-to-r from-rose-500 to-rose-600 text-white font-semibold rounded-lg shadow-md hover:shadow-lg hover:from-rose-600 hover:to-rose-700 transform hover:scale-105 transition duration-300">
            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10.5 1.5H3.75A2.25 2.25 0 001.5 3.75v12.5A2.25 2.25 0 003.75 18.5h12.5a2.25 2.25 0 002.25-2.25V9.5M10.5 1.5v16M10.5 1.5a6 6 0 100 12 6 6 0 000-12z"></path>
            </svg>
            Français
        </a>
    @else
        <a href="{{ route('lang', 'ar') }}"
           class="inline-flex items-center gap-2 px-4 py-2 bg-gradient-to-r from-blue-600 to-blue-700 text-white font-semibold rounded-lg shadow-md hover:shadow-lg hover:from-blue-700 hover:to-blue-800 transform hover:scale-105 transition duration-300">
            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10.5 1.5H3.75A2.25 2.25 0 001.5 3.75v12.5A2.25 2.25 0 003.75 18.5h12.5a2.25 2.25 0 002.25-2.25V9.5M10.5 1.5v16M10.5 1.5a6 6 0 100 12 6 6 0 000-12z"></path>
            </svg>
            العربية
        </a>
    @endif
</div>

@auth


<a href="{{ route('dashboard') }}"
class="text-gray-700 hover:text-green-600">

{{ __('app.dashboard') }}

</a>


<form method="POST"
action="{{ route('logout') }}"
class="inline">


@csrf


<button class="text-red-600 hover:text-red-800">

{{ __('app.logout') }}

</button>


</form>


@else


<a href="{{ route('login') }}"
class="text-gray-700 hover:text-green-600">

{{ __('app.login') }}

</a>



<a href="{{ route('register') }}"
class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">

{{ __('app.register') }}

</a>



@endauth



</div>


</div>

</div>

</nav>