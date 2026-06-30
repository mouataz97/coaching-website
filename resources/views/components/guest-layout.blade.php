<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'AuraCare') }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Inline script: apply saved theme BEFORE page paint to prevent flash --}}
    <script>
        (function () {
            if (localStorage.theme === 'dark' ||
                (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark');
            }
        })();
    </script>
</head>

<body class="font-[Cairo] bg-rose-50 text-gray-900 dark:bg-slate-900 dark:text-slate-100 transition-colors duration-300">

    <header class="bg-white dark:bg-slate-800 shadow transition-colors duration-300 fixed top-0 left-0 right-0 z-50">

        <div class="max-w-7xl mx-auto px-6 py-5 flex justify-between items-center">

            <a href="/" class="text-3xl max-sm:text-2xl font-bold text-red-900 dark:text-white">
                Aura<span class="text-rose-500">Care</span>
            </a>

            {{-- Desktop nav (always visible on lg:+) --}}
            <nav class="hidden lg:flex items-center gap-6 text-gray-700 dark:text-slate-300">
                <a href="/" class="hover:text-rose-500 transition-colors">{{ __('app.home') }}</a>
                <a href="/about" class="hover:text-rose-500 transition-colors">{{ __('app.about') }}</a>
                <a href="/services" class="hover:text-rose-500 transition-colors">{{ __('app.services') }}</a>
                <a href="/certificates" class="hover:text-rose-500 transition-colors">{{ __('app.certificates') }}</a>
                <a href="/contact" class="hover:text-rose-500 transition-colors">{{ __('app.contact') }}</a>
            </nav>

            <div class="flex items-center gap-2 max-sm:gap-1">

                @php $langs = ['ar' => 'العربية', 'fr' => 'FR']; @endphp
                <div class="flex gap-1">
                    @foreach($langs as $code => $label)
                        @if(app()->getLocale() != $code)
                            <a href="/lang/{{ $code }}" class="px-3 max-sm:px-2 py-1.5 max-sm:py-1 rounded-lg text-xs font-semibold
                                {{ $code == 'ar' ? 'bg-red-600 dark:bg-slate-700 text-white' : 'bg-rose-500 text-white' }}
                                hover:opacity-80 transition">{{ $label }}</a>
                        @endif
                    @endforeach
                </div>

                <button
                    onclick="toggleDark()"
                    role="switch"
                    aria-checked="false"
                    title="Toggle Dark / Light Mode"
                    class="theme-toggle relative inline-flex items-center w-[52px] max-sm:w-[44px] h-[28px] max-sm:h-[24px] rounded-full bg-rose-400 dark:bg-blue-600 transition-colors duration-300 cursor-pointer focus:outline-none focus:ring-2 focus:ring-rose-400 focus:ring-offset-2 shrink-0">
                    <span class="sr-only">Toggle Theme</span>
                    <span
                        data-thumb
                        style="transform: translateX(0)"
                        class="inline-flex items-center justify-center w-[22px] max-sm:w-[18px] h-[22px] max-sm:h-[18px] rounded-full bg-white shadow-md transition-transform duration-300">
                        <svg data-sun class="w-3.5 max-sm:w-3 h-3.5 max-sm:h-3 text-amber-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                            <circle cx="12" cy="12" r="4"></circle>
                            <path d="M12 2v2M12 20v2M4.22 4.22l1.42 1.42M18.36 18.36l1.42 1.42M2 12h2M20 12h2M4.22 19.78l1.42-1.42M18.36 5.64l1.42-1.42"></path>
                        </svg>
                        <svg data-moon class="w-3.5 max-sm:w-3 h-3.5 max-sm:h-3 text-slate-700 hidden" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                        </svg>
                    </span>
                </button>

            </div>
        </div>

        {{-- Mobile only: hamburger + dropdown (completely hidden on lg:+) --}}
        <div class="lg:hidden" x-data="{ mobileOpen: false }">
            <div class="px-6 pb-3">
                <button @click="mobileOpen = !mobileOpen" class="p-2 max-sm:p-1.5 rounded-md text-gray-700 dark:text-slate-300 hover:bg-gray-100 dark:hover:bg-slate-700 focus:outline-none">
                    <svg class="w-6 h-6 max-sm:w-5 max-sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': mobileOpen, 'inline-flex': !mobileOpen }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !mobileOpen, 'inline-flex': mobileOpen }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <div :class="{ 'block': mobileOpen, 'hidden': !mobileOpen }" class="border-t border-gray-200 dark:border-slate-700 px-6 py-4 space-y-3 bg-rose-50 dark:bg-slate-900">
                <a href="/" class="block text-gray-700 dark:text-slate-300 hover:text-rose-500 transition-colors">{{ __('app.home') }}</a>
                <a href="/about" class="block text-gray-700 dark:text-slate-300 hover:text-rose-500 transition-colors">{{ __('app.about') }}</a>
                <a href="/services" class="block text-gray-700 dark:text-slate-300 hover:text-rose-500 transition-colors">{{ __('app.services') }}</a>
                <a href="/certificates" class="block text-gray-700 dark:text-slate-300 hover:text-rose-500 transition-colors">{{ __('app.certificates') }}</a>
                <a href="/contact" class="block text-gray-700 dark:text-slate-300 hover:text-rose-500 transition-colors">{{ __('app.contact') }}</a>
            </div>
        </div>
    </header>

    <main class="pt-20">
        {{ $slot }}
    </main>

    <footer class="bg-red-600 dark:bg-slate-950 text-white mt-20 transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-6 py-10">
            <h2 class="text-2xl font-bold">AuraCare</h2>
            <p class="mt-3 text-gray-300">{{ __('app.footer_text') }}</p>
            <div class="flex gap-4 mt-6">
                <a href="https://facebook.com" target="_blank" rel="noopener noreferrer" class="hover:opacity-80 transition-opacity" aria-label="Facebook">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                </a>
                <a href="https://wa.me/1234567890" target="_blank" rel="noopener noreferrer" class="hover:opacity-80 transition-opacity" aria-label="WhatsApp">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                </a>
                <a href="https://instagram.com" target="_blank" rel="noopener noreferrer" class="hover:opacity-80 transition-opacity" aria-label="Instagram">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                </a>
            </div>
        </div>
    </footer>

    <script>
        // Track: 52px wide, thumb: 22px, gap: 4px each side
        // LTR — light: translateX( 4px)  dark: translateX(26px)
        // RTL — light: translateX(-4px)  dark: translateX(-26px)
        // In RTL the flex container flows right→left, so the thumb starts on the
        // right side; we negate the values to keep it inside the track correctly.

        function isRTL() {
            return document.documentElement.getAttribute('dir') === 'rtl';
        }

        function thumbPos(active) {
            // active = true → dark side (far end), false → light side (near end)
            const sign = isRTL() ? -1 : 1;
            return active ? sign * 26 + 'px' : sign * 4 + 'px';
        }

        function syncToggle(el, isDark) {
            if (!el) return;
            const thumb = el.querySelector('[data-thumb]');
            const sun   = el.querySelector('[data-sun]');
            const moon  = el.querySelector('[data-moon]');
            if (isDark) {
                if (thumb) thumb.style.transform = 'translateX(' + thumbPos(true) + ')';
                el.setAttribute('aria-checked', 'true');
                if (sun)  sun.classList.add('hidden');
                if (moon) moon.classList.remove('hidden');
            } else {
                if (thumb) thumb.style.transform = 'translateX(' + thumbPos(false) + ')';
                el.setAttribute('aria-checked', 'false');
                if (sun)  sun.classList.remove('hidden');
                if (moon) moon.classList.add('hidden');
            }
        }

        function syncThemeUI(isDark) {
            document.querySelectorAll('.theme-toggle').forEach(function (el) {
                syncToggle(el, isDark);
            });
        }

        function toggleDark() {
            const html = document.documentElement;
            html.classList.toggle('dark');
            const isDark = html.classList.contains('dark');
            localStorage.theme = isDark ? 'dark' : 'light';
            syncThemeUI(isDark);
        }

        // Sync switch state immediately on DOMContentLoaded
        document.addEventListener('DOMContentLoaded', () => {
            const isDark = document.documentElement.classList.contains('dark');
            syncThemeUI(isDark);
        });
    </script>

</body>
</html>