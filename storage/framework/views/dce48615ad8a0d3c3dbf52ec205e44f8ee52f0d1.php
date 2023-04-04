<!DOCTYPE html>
<html lang="zxx">

<?php echo $__env->make('frontend.theme.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body>
    <div class="header-most-top">
        <p>Grocery Mart</p>
    </div>

    
    <?php echo $__env->make('frontend.theme.headerNavbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- navigation -->
    <?php echo $__env->make('frontend.theme.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- banner -->
    <?php echo $__env->make('frontend.theme.banner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- //banner -->

    <?php echo $__env->yieldContent('frontend.Content'); ?>

    <!-- News Letter -->
    <?php echo $__env->make('frontend.theme.newsLetter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Footer -->
    <?php echo $__env->make('frontend.theme.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <?php echo $__env->make('frontend.theme.footerScript', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>

</html>
<?php /**PATH D:\laravel_panel\resources\views/frontend/layouts/master.blade.php ENDPATH**/ ?>