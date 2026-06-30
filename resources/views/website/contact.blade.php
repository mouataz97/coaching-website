<x-guest-layout>
    <div class="max-w-4xl mx-auto px-6 py-20">
        <h1 class="text-5xl font-bold text-blue-950 dark:text-white">
            {{ __('app.contact') }}
        </h1>

        <form class="mt-10 bg-white dark:bg-slate-800 p-10 rounded-3xl shadow transition-colors duration-300">
            <input
                class="w-full border border-gray-300 dark:border-slate-600 rounded-xl p-4 mb-5 bg-white dark:bg-slate-900 text-gray-900 dark:text-white placeholder:text-gray-400 dark:placeholder:text-slate-500 transition-colors duration-300"
                placeholder="{{ __('app.name') }}">
            <input
                class="w-full border border-gray-300 dark:border-slate-600 rounded-xl p-4 mb-5 bg-white dark:bg-slate-900 text-gray-900 dark:text-white placeholder:text-gray-400 dark:placeholder:text-slate-500 transition-colors duration-300"
                placeholder="{{ __('app.email_placeholder') }}">
            <textarea
                class="w-full border border-gray-300 dark:border-slate-600 rounded-xl p-4 bg-white dark:bg-slate-900 text-gray-900 dark:text-white placeholder:text-gray-400 dark:placeholder:text-slate-500 transition-colors duration-300"
                rows="5"
                placeholder="{{ __('app.message_placeholder') }}"></textarea>
            <button class="mt-6 bg-red-600 dark:bg-rose-600 text-white px-8 py-3 rounded-full hover:bg-red-700 dark:hover:bg-rose-700 transition-colors duration-300">
                {{ __('app.send_message') }}
            </button>
        </form>
    </div>
</x-guest-layout>