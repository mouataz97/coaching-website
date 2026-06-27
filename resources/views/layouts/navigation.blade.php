<nav class="bg-white border-b shadow-sm">

<div class="max-w-7xl mx-auto px-6">

<div class="flex justify-between h-16 items-center">


<!-- Logo -->

<div>

<a href="{{ route('home') }}"
class="text-2xl font-bold text-green-600">

CoachCare

</a>

</div>



<!-- Menu -->

<div class="flex space-x-6">


<a href="{{ route('home') }}"
class="text-gray-700 hover:text-green-600">

{{ __('app.home') }}

</a>



<a href="{{ route('about') }}"
class="text-gray-700 hover:text-green-600">

{{ __('app.about') }}

</a>



<a href="{{ route('services') }}"
class="text-gray-700 hover:text-green-600">

{{ __('app.services') }}

</a>



<a href="{{ route('certificates') }}"
class="text-gray-700 hover:text-green-600">

{{ __('app.certificates') }}

</a>



<a href="{{ route('contact') }}"
class="text-gray-700 hover:text-green-600">

{{ __('app.contact') }}

</a>



</div>



<!-- User -->

<div class="flex items-center space-x-4">

<!-- Language Switcher -->
<div class="flex space-x-2">
    @if(app()->getLocale() === 'ar')
        <a href="{{ route('lang', 'fr') }}"
           class="px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700 transition">
            Français
        </a>
    @else
        <a href="{{ route('lang', 'ar') }}"
           class="px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700 transition">
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