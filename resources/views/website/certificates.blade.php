<x-guest-layout>
    <div class="max-w-6xl mx-auto px-6 py-20">
        <h1 class="text-5xl font-bold text-blue-950 dark:text-white">
            {{ __('app.certifications') }}
        </h1>

        <div class="mt-10 grid md:grid-cols-3 gap-8">
            <div class="bg-white dark:bg-slate-800 p-8 rounded-3xl shadow transition-colors duration-300">
                <p class="text-gray-900 dark:text-white font-semibold">{{ __('app.medical_certification') }}</p>
            </div>

            <div class="bg-white dark:bg-slate-800 p-8 rounded-3xl shadow transition-colors duration-300">
                <p class="text-gray-900 dark:text-white font-semibold">{{ __('app.training_certificate') }}</p>
            </div>

            <div class="bg-white dark:bg-slate-800 p-8 rounded-3xl shadow transition-colors duration-300">
                <p class="text-gray-900 dark:text-white font-semibold">{{ __('app.wellness_qualification') }}</p>
            </div>
        </div>
    </div>
</x-guest-layout>