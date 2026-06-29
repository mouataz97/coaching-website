<?php if (isset($component)) { $__componentOriginal69dc84650370d1d4dc1b42d016d7226b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal69dc84650370d1d4dc1b42d016d7226b = $attributes; } ?>
<?php $component = App\View\Components\GuestLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('guest-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\GuestLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="max-w-4xl mx-auto px-6 py-20">
        <h1 class="text-5xl font-bold text-blue-950 dark:text-white">
            <?php echo e(__('app.contact')); ?>

        </h1>

        <form class="mt-10 bg-white dark:bg-slate-800 p-10 rounded-3xl shadow transition-colors duration-300">
            <input
                class="w-full border border-gray-300 dark:border-slate-600 rounded-xl p-4 mb-5 bg-white dark:bg-slate-900 text-gray-900 dark:text-white placeholder:text-gray-400 dark:placeholder:text-slate-500 transition-colors duration-300"
                placeholder="<?php echo e(__('app.name')); ?>">
            <input
                class="w-full border border-gray-300 dark:border-slate-600 rounded-xl p-4 mb-5 bg-white dark:bg-slate-900 text-gray-900 dark:text-white placeholder:text-gray-400 dark:placeholder:text-slate-500 transition-colors duration-300"
                placeholder="<?php echo e(__('app.email_placeholder')); ?>">
            <textarea
                class="w-full border border-gray-300 dark:border-slate-600 rounded-xl p-4 bg-white dark:bg-slate-900 text-gray-900 dark:text-white placeholder:text-gray-400 dark:placeholder:text-slate-500 transition-colors duration-300"
                rows="5"
                placeholder="<?php echo e(__('app.message_placeholder')); ?>"></textarea>
            <button class="mt-6 bg-blue-950 dark:bg-rose-600 text-white px-8 py-3 rounded-full hover:bg-blue-900 dark:hover:bg-rose-700 transition-colors duration-300">
                <?php echo e(__('app.send_message')); ?>

            </button>
        </form>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal69dc84650370d1d4dc1b42d016d7226b)): ?>
<?php $attributes = $__attributesOriginal69dc84650370d1d4dc1b42d016d7226b; ?>
<?php unset($__attributesOriginal69dc84650370d1d4dc1b42d016d7226b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal69dc84650370d1d4dc1b42d016d7226b)): ?>
<?php $component = $__componentOriginal69dc84650370d1d4dc1b42d016d7226b; ?>
<?php unset($__componentOriginal69dc84650370d1d4dc1b42d016d7226b); ?>
<?php endif; ?><?php /**PATH D:\Coding\Xampp\htdocs\coaching-website\resources\views/website/contact.blade.php ENDPATH**/ ?>