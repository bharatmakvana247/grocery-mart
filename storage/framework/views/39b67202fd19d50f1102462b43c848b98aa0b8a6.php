
<?php $__env->startSection('frontend.title'); ?>
    Dashboard
<?php $__env->stopSection(); ?>
<?php $__env->startSection('frontend.content'); ?>
    <!-- top Products -->
    

    <div class="ads-grid">
        <div class="container">
            <!-- tittle heading -->
            <h3 class="tittle-w3l">Our Top Products
                <span class="heading-style">
                    <i></i>
                    <i></i>
                    <i></i>
                </span>
            </h3>
            <!-- //tittle heading -->
            <!-- product left -->
            <?php echo $__env->make('frontend.pages.Dashboard.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- //product left -->
            <!-- product right -->
            <div class="agileinfo-ads-display col-md-9">
                <div class="wrapper">
                    <!-- first section (nuts) -->
                    <?php if(sizeof($category_products) > 0): ?>
                        <?php $__currentLoopData = $category_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category_products): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if(sizeof($category_products['product_list']) > 0): ?>
                                <div class="product-sec1">
                                    <h3 class="heading-tittle"><?php echo e($category_products->category_name); ?></h3>
                                    <?php $__currentLoopData = $category_products['product_list']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="col-md-4 product-men">
                                            <div class="men-pro-item simpleCart_shelfItem">
                                                <div class="men-thumb-item">
                                                    <img src="<?php echo e(url("storage/productImage/$product->product_image")); ?>"
                                                        alt="<?php echo e($product->product_image); ?>">
                                                    <div class="men-cart-pro">
                                                        <div class="inner-men-cart-pro">
                                                            <a href="single.html" class="link-product-add-cart">Quick
                                                                View</a>
                                                        </div>
                                                    </div>

                                                    
                                                    <?php
                                                        $date = new DateTime();
                                                        $date->modify('this week');
                                                        $week_dates = [];
                                                        for ($i = 0; $i < 7; $i++) {
                                                            $week_dates[] = $date->format('Y-m-d');
                                                            $date->modify('+1 day');
                                                        }
                                                        $product_date = $product->updated_at->format('Y-m-d');
                                                        // Check if the current date exists in the week list array
                                                        if (in_array($product_date, $week_dates)) {
                                                            echo '<span class="product-new-top" style="background:#FFC107">New</span>';
                                                        } else {
                                                            echo '<span class="product-new-top" style="background:#fc636b">Old</span>';
                                                        }
                                                    ?>

                                                </div>
                                                <div class="item-info-product ">
                                                    <h4>
                                                        <a href="single.html"><?php echo e($product->product_name); ?></a>
                                                    </h4>
                                                    <div class="info-product-price">
                                                        <span class="item_price">&#8377;
                                                            <?php echo e(number_format($product->product_price, 2)); ?> </span>
                                                        <del>&#8377;<?php echo e(number_format($product->close_price, 2)); ?></del>
                                                    </div>
                                                    <div
                                                        class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                                        <form action="#" method="post">
                                                            <fieldset>
                                                                <input type="hidden" name="cmd" value="_cart" />
                                                                <input type="hidden" name="add" value="1" />
                                                                <input type="hidden" name="business" value=" " />
                                                                <input type="hidden" name="item_name"
                                                                    value="Almonds, 100g" />
                                                                <input type="hidden" name="amount" value="149.00" />
                                                                <input type="hidden" name="discount_amount"
                                                                    value="1.00" />
                                                                <input type="hidden" name="currency_code" value="USD" />
                                                                <input type="hidden" name="return" value=" " />
                                                                <input type="hidden" name="cancel_return" value=" " />
                                                                <input type="submit" name="submit" value="Add to cart"
                                                                    class="button" />
                                                            </fieldset>
                                                        </form>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <div class="clearfix"></div>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>

                    <!-- second section (nuts special) -->
                    <div class="product-sec1 product-sec2">
                        <div class="col-xs-7 effect-bg">
                            <h3 class="">Pure Energy</h3>
                            <h6>Enjoy our all healthy Products</h6>
                            <p>Get Extra 10% Off</p>
                        </div>
                        <h3 class="w3l-nut-middle">Nuts & Dry Fruits</h3>
                        <div class="col-xs-5 bg-right-nut">
                            <img src="<?php echo e(asset('assets/front/images/nut1.png')); ?>" alt="">
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- special offers -->
    <?php echo $__env->make('frontend.pages.Dashboard.specialOffers', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('frontend.styles'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('frontend.scripts'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel_panel\resources\views/frontend/home.blade.php ENDPATH**/ ?>