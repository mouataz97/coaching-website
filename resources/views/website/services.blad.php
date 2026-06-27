<x-app-layout>

<div class="max-w-6xl mx-auto px-6 py-20">


<h1 class="text-5xl font-bold text-center">

{{ __('app.services') }}

</h1>


<div class="grid md:grid-cols-3 gap-8 mt-12">


@foreach([
    __('app.personal_training'),
    __('app.wellness_coaching_service'),
    __('app.body_mobility')
] as $service)


<div class="bg-white rounded-3xl p-8 shadow">


<h2 class="text-xl font-bold">

{{$service}}

</h2>


<p class="mt-4 text-gray-600">

{{ __('app.professional_support') }}

</p>


</div>


@endforeach


</div>


</div>

</x-app-layout>