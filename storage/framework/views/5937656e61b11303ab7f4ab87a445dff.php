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
    <div class="max-w-6xl mx-auto px-6 py-20">
        <h1 class="text-5xl font-bold text-blue-950 dark:text-white">
            <?php echo e(__('app.certifications')); ?>

        </h1>

        <div class="mt-10 grid md:grid-cols-3 gap-8">
            <div class="bg-white dark:bg-slate-800 p-8 rounded-3xl shadow transition-colors duration-300">
                <p class="text-gray-900 dark:text-white font-semibold"><?php echo e(__('app.medical_certification')); ?></p>
            </div>

            <div class="bg-white dark:bg-slate-800 p-8 rounded-3xl shadow transition-colors duration-300">
                <p class="text-gray-900 dark:text-white font-semibold"><?php echo e(__('app.training_certificate')); ?></p>
            </div>

            <div class="bg-white dark:bg-slate-800 p-8 rounded-3xl shadow transition-colors duration-300">
                <p class="text-gray-900 dark:text-white font-semibold"><?php echo e(__('app.wellness_qualification')); ?></p>
            </div>
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
<?php endif; ?><?php /**PATH D:\Coding\Xampp\htdocs\coaching-website\resources\views/website/certificates.blade.php ENDPATH**/ ?>