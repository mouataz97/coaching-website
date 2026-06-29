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
    <div class="max-w-5xl mx-auto px-6 py-20">
        <h1 class="text-5xl font-serif font-bold text-blue-950 dark:text-white">
            <?php echo e(__('app.about_your_coach')); ?>

        </h1>

        <p class="mt-8 text-lg text-gray-600 dark:text-slate-300 leading-relaxed">
            <?php echo e(__('app.dedicated_coach')); ?>

        </p>

        <div class="mt-12 bg-white dark:bg-slate-800 p-10 rounded-3xl shadow transition-colors duration-300">
            <h2 class="text-2xl font-bold text-gray-900 dark:text-white"><?php echo e(__('app.mission')); ?></h2>
            <p class="mt-4 text-gray-600 dark:text-slate-300"><?php echo e(__('app.mission_desc')); ?></p>
        </div>
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
<?php endif; ?><?php /**PATH D:\Coding\Xampp\htdocs\coaching-website\resources\views/website/about.blade.php ENDPATH**/ ?>