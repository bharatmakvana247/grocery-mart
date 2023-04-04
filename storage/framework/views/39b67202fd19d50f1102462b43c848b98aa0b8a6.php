
<?php $__env->startSection('frontend.title'); ?>
    Dashboard
<?php $__env->stopSection(); ?>
<?php $__env->startSection('frontend.Content'); ?>
    <!-- top Products -->
    <?php echo $__env->make('frontend.pages.Dashboard.topProducts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- special offers -->
    <?php echo $__env->make('frontend.pages.Dashboard.specialOffers', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('frontend.styles'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('frontend.scripts'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel_panel\resources\views/frontend/home.blade.php ENDPATH**/ ?>