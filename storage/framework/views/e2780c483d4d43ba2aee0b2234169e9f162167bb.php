<div class="side-bar col-md-3">
    <div class="search-hotel">
        <h3 class="agileits-sear-head">Search Here..</h3>
        <form action="#" method="post">
            <input type="search" placeholder="Product name..." name="search" required="">
            <input type="submit" value=" ">
        </form>
    </div>
    <!-- price range -->
    <div class="range">
        <h3 class="agileits-sear-head">Price range</h3>
        <ul class="dropdown-menu6">
            <li>

                <div id="slider-range"></div>
                <input type="text" id="amount" style="border: 0; color: #ffffff; font-weight: normal;" />
            </li>
        </ul>
    </div>
    <!-- //price range -->
    <!-- food preference -->
    <?php if(sizeof($category_list) > 0): ?>
        <div class="left-side">
            <h3 class="agileits-sear-head">Category</h3>
            <ul>
                <?php $__currentLoopData = $category_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li>
                        
                        <input type='checkbox' id='checkallusers' value='<?php echo e($list->category_id); ?>' name="category_list">
                        <span class="span"><?php echo e($list->category_name); ?></span>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <!-- //food preference -->
    <!-- discounts -->
    <div class="left-side">
        <h3 class="agileits-sear-head">Discount</h3>
        <ul>
            <li>
                <input type="checkbox" class="checked">
                <span class="span">5% or More</span>
            </li>
            <li>
                <input type="checkbox" class="checked">
                <span class="span">10% or More</span>
            </li>
            <li>
                <input type="checkbox" class="checked">
                <span class="span">20% or More</span>
            </li>
            <li>
                <input type="checkbox" class="checked">
                <span class="span">30% or More</span>
            </li>
            <li>
                <input type="checkbox" class="checked">
                <span class="span">50% or More</span>
            </li>
            <li>
                <input type="checkbox" class="checked">
                <span class="span">60% or More</span>
            </li>
        </ul>
    </div>
    <!-- //discounts -->
    <!-- reviews -->
    <div class="customer-rev left-side">
        <h3 class="agileits-sear-head">Customer Review</h3>
        <ul>
            <li>
                <a href="#">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <span>5.0</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                    <span>4.0</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                    <span>3.5</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                    <span>3.0</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                    <span>2.5</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- //reviews -->
    <!-- cuisine -->

    <!-- //cuisine -->
    <!-- deals -->
    <div class="deal-leftmk left-side">
        <h3 class="agileits-sear-head">Special Deals</h3>
        <div class="special-sec1">
            <div class="col-xs-4 img-deals">
                <img src="<?php echo e(asset('assets/front/images/d2.jpg')); ?>" alt="">
            </div>
            <div class="col-xs-8 img-deal1">
                <h3>Lay's Potato Chips</h3>
                <a href="single.html">$18.00</a>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="special-sec1">
            <div class="col-xs-4 img-deals">
                <img src="<?php echo e(asset('assets/front/images/d1.jpg')); ?>" alt="">
            </div>
            <div class="col-xs-8 img-deal1">
                <h3>Bingo Mad Angles</h3>
                <a href="single.html">$9.00</a>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="special-sec1">
            <div class="col-xs-4 img-deals">
                <img src="<?php echo e(asset('assets/front/images/d4.jpg')); ?>" alt="">
            </div>
            <div class="col-xs-8 img-deal1">
                <h3>Tata Salt</h3>
                <a href="single.html">$15.00</a>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="special-sec1">
            <div class="col-xs-4 img-deals">
                <img src="<?php echo e(asset('assets/front/images/d5.jpg')); ?>" alt="">
            </div>
            <div class="col-xs-8 img-deal1">
                <h3>Gujarat Dry Fruit</h3>
                <a href="single.html">$525.00</a>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="special-sec1">
            <div class="col-xs-4 img-deals">
                <img src="<?php echo e(asset('assets/front/images/d3.jpg')); ?>" alt="">
            </div>
            <div class="col-xs-8 img-deal1">
                <h3>Cadbury Dairy Milk</h3>
                <a href="single.html">$149.00</a>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- //deals -->
</div>
<?php $__env->startSection('frontend.scripts'); ?>
    <script>
        // $("#category_product").change(function() {
        // $("input:checkbox #category_product").change(function() {
        //     alert("check");
        // });

        $(document).ready(function() {
            $("input[name = category_list]").change(function() {
                // alert("jaymin");
                alert($(this).val());
                // $("#checkallusers").change(function() {
                //     var checked = $(this).is(':checked'); // Checkbox state
                //     

                //     // Get the value of the checked checkbox with the name "category_list[]"

            });
        });
    </script>
<?php $__env->stopSection(); ?>
<?php /**PATH D:\grocery-mart\resources\views/frontend/pages/product/sidebar.blade.php ENDPATH**/ ?>