<x-app-layout>


<div class="max-w-4xl mx-auto px-6 py-20">


<h1 class="text-5xl font-bold">

{{ __('app.contact') }}

</h1>


<form class="mt-10 bg-white p-10 rounded-3xl shadow">


<input
class="w-full border rounded-xl p-4 mb-5"
placeholder="{{ __('app.name') }}">


<input
class="w-full border rounded-xl p-4 mb-5"
placeholder="{{ __('app.email_placeholder') }}">


<textarea
class="w-full border rounded-xl p-4"
placeholder="{{ __('app.message_placeholder') }}">
</textarea>


<button
class="mt-6 bg-[#14213d] text-white px-8 py-3 rounded-full">

{{ __('app.send_message') }}

</button>


</form>


</div>


</x-app-layout>