<x-guest-layout>

<section class="bg-rose-100 dark:bg-slate-800 transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-6 py-24 grid md:grid-cols-2 gap-16 items-center">

        <div>
            <p class="text-rose-500 font-semibold text-lg">{{ __('app.womens_wellness') }}</p>

            <h1 class="mt-5 text-6xl font-bold text-blue-950 dark:text-white">
                {{ __('app.your_body') }}<br>
                {{ __('app.your_strength') }}<br>
                {{ __('app.your_confidence') }}
            </h1>

            <p class="mt-6 text-lg text-gray-600 dark:text-slate-300">{{ __('app.personal_coaching') }}</p>

            <div class="mt-8">
                <a href="/contact"
                   class="inline-block bg-blue-950 dark:bg-rose-600 text-white px-8 py-4 rounded-lg shadow hover:bg-blue-900 dark:hover:bg-rose-700 transition-colors duration-300">
                    {{ __('app.start_consultation') }}
                </a>
            </div>
        </div>

        <div class="bg-white dark:bg-slate-700 rounded-3xl shadow-xl p-12 transition-colors duration-300">
            <div class="h-96 bg-rose-100 dark:bg-rose-900/40 rounded-3xl flex items-center justify-center">
                <h2 class="text-3xl font-bold text-blue-950 dark:text-white">{{ __('app.wellness') }}</h2>
            </div>
        </div>

    </div>
</section>

<section class="max-w-7xl mx-auto px-6 py-20">
    <h2 class="text-4xl font-bold text-center text-blue-950 dark:text-white">{{ __('app.our_expertise') }}</h2>

    <div class="grid md:grid-cols-3 gap-8 mt-12">

        <div class="p-8 rounded-xl shadow bg-white dark:bg-slate-800 transition-colors duration-300">
            <h3 class="text-xl font-bold text-gray-900 dark:text-white">{{ __('app.training') }}</h3>
            <p class="mt-4 text-gray-600 dark:text-slate-300">{{ __('app.training_desc') }}</p>
        </div>

        <div class="p-8 rounded-xl shadow bg-white dark:bg-slate-800 transition-colors duration-300">
            <h3 class="text-xl font-bold text-gray-900 dark:text-white">{{ __('app.chiropractic') }}</h3>
            <p class="mt-4 text-gray-600 dark:text-slate-300">{{ __('app.chiropractic_desc') }}</p>
        </div>

        <div class="p-8 rounded-xl shadow bg-white dark:bg-slate-800 transition-colors duration-300">
            <h3 class="text-xl font-bold text-gray-900 dark:text-white">{{ __('app.health_coaching') }}</h3>
            <p class="mt-4 text-gray-600 dark:text-slate-300">{{ __('app.health_coaching_desc') }}</p>
        </div>

    </div>
</section>

</x-guest-layout>