<x-guest-layout>
    <div class="max-w-5xl mx-auto px-6 py-20">
        <h1 class="text-5xl font-serif font-bold text-blue-950 dark:text-white">
            {{ __('app.about_your_coach') }}
        </h1>

        <p class="mt-8 text-lg text-gray-600 dark:text-slate-300 leading-relaxed">
            {{ __('app.dedicated_coach') }}
        </p>

        <div class="mt-12 bg-white dark:bg-slate-800 p-10 rounded-3xl shadow transition-colors duration-300">
            <h2 class="text-2xl font-bold text-gray-900 dark:text-white">{{ __('app.mission') }}</h2>
            <p class="mt-4 text-gray-600 dark:text-slate-300">{{ __('app.mission_desc') }}</p>
        </div>
    </div>
</x-guest-layout>