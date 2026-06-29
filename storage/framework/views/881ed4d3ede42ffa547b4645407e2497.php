<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>"
    dir="<?php echo e(app()->getLocale() == 'ar' ? 'rtl' : 'ltr'); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo e(config('app.name', 'AuraCare')); ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap" rel="stylesheet">
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>

    
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

    <header class="bg-white dark:bg-slate-800 shadow transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-6 py-5 flex justify-between items-center">

            
            <a href="/" class="text-3xl font-bold text-red-900 dark:text-white">
                Aura<span class="text-rose-500">Care</span>
            </a>

            
            <div class="flex items-center gap-6">

                <nav class="flex items-center gap-6 text-gray-700 dark:text-slate-300">
                    <a href="/" class="hover:text-rose-500 transition-colors"><?php echo e(__('app.home')); ?></a>
                    <a href="/about" class="hover:text-rose-500 transition-colors"><?php echo e(__('app.about')); ?></a>
                    <a href="/services" class="hover:text-rose-500 transition-colors"><?php echo e(__('app.services')); ?></a>
                    <a href="/certificates" class="hover:text-rose-500 transition-colors"><?php echo e(__('app.certificates')); ?></a>
                    <a href="/contact" class="hover:text-rose-500 transition-colors"><?php echo e(__('app.contact')); ?></a>
                </nav>

                
                <?php if(app()->getLocale() == 'ar'): ?>
                    <a href="/lang/fr" class="px-4 py-2 rounded-lg bg-rose-500 text-white text-sm hover:bg-rose-600 transition">FR</a>
                <?php else: ?>
                    <a href="/lang/ar" class="px-4 py-2 rounded-lg bg-blue-950 dark:bg-slate-700 text-white text-sm hover:bg-blue-900 dark:hover:bg-slate-600 transition">العربية</a>
                <?php endif; ?>

                
                <button
                    id="theme-toggle-switch"
                    onclick="toggleDark()"
                    role="switch"
                    aria-checked="false"
                    title="Toggle Dark / Light Mode"
                    class="relative inline-flex items-center w-[52px] h-[28px] rounded-full bg-rose-400 dark:bg-blue-600 transition-colors duration-300 cursor-pointer focus:outline-none focus:ring-2 focus:ring-rose-400 focus:ring-offset-2">
                    <span class="sr-only">Toggle Theme</span>
                    <span
                        id="theme-toggle-thumb"
                        style="transform: translateX(0)"
                        class="inline-flex items-center justify-center w-[22px] h-[22px] rounded-full bg-white shadow-md transition-transform duration-300">
                        
                        <svg id="sun-icon" class="w-3.5 h-3.5 text-amber-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                            <circle cx="12" cy="12" r="4"></circle>
                            <path d="M12 2v2M12 20v2M4.22 4.22l1.42 1.42M18.36 18.36l1.42 1.42M2 12h2M20 12h2M4.22 19.78l1.42-1.42M18.36 5.64l1.42-1.42"></path>
                        </svg>
                        
                        <svg id="moon-icon" class="w-3.5 h-3.5 text-slate-700 hidden" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                        </svg>
                    </span>
                </button>

            </div>
        </div>
    </header>

    <main>
        <?php echo e($slot); ?>

    </main>

    <footer class="bg-blue-950 dark:bg-slate-950 text-white mt-20 transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-6 py-10">
            <h2 class="text-2xl font-bold">AuraCare</h2>
            <p class="mt-3 text-gray-300"><?php echo e(__('app.footer_text')); ?></p>
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

        function syncThemeUI(isDark) {
            const thumb    = document.getElementById('theme-toggle-thumb');
            const btn      = document.getElementById('theme-toggle-switch');
            const sunIcon  = document.getElementById('sun-icon');
            const moonIcon = document.getElementById('moon-icon');

            if (isDark) {
                if (thumb)    thumb.style.transform = 'translateX(' + thumbPos(true) + ')';
                if (btn)      btn.setAttribute('aria-checked', 'true');
                if (sunIcon)  sunIcon.classList.add('hidden');
                if (moonIcon) moonIcon.classList.remove('hidden');
            } else {
                if (thumb)    thumb.style.transform = 'translateX(' + thumbPos(false) + ')';
                if (btn)      btn.setAttribute('aria-checked', 'false');
                if (sunIcon)  sunIcon.classList.remove('hidden');
                if (moonIcon) moonIcon.classList.add('hidden');
            }
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
</html><?php /**PATH D:\Coding\Xampp\htdocs\coaching-website\resources\views/components/guest-layout.blade.php ENDPATH**/ ?>