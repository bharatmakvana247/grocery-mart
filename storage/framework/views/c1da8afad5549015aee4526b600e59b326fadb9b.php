<script src="<?php echo e(asset('assets/front/js/jquery-2.1.4.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/front/js/jquery.magnific-popup.js')); ?>"></script>
<script>
    $(document).ready(function() {
        $('.popup-with-zoom-anim').magnificPopup({
            type: 'inline',
            fixedContentPos: false,
            fixedBgPos: true,
            overflowY: 'auto',
            closeBtnInside: true,
            preloader: false,
            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-zoom-in'
        });

    });
</script>
<script src="<?php echo e(asset('assets/front/js/minicart.js')); ?>"></script>
<script>
    paypalm.minicartk
        .render(); //use only unique class names other than paypal1.minicart1.Also Replace same class name in css and minicart.min.js

    paypalm.minicartk.cart.on('checkout', function(evt) {
        var items = this.items(),
            len = items.length,
            total = 0,
            i;

        for (i = 0; i < len; i++) {
            total += items[i].get('quantity');
        }

        if (total < 3) {
            alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
            evt.preventDefault();
        }
    });
</script>
<script>
    window.onload = function() {
        document.getElementById("password1").onchange = validatePassword;
        document.getElementById("password2").onchange = validatePassword;
    }

    function validatePassword() {
        var pass2 = document.getElementById("password2").value;
        var pass1 = document.getElementById("password1").value;
        if (pass1 != pass2)
            document.getElementById("password2").setCustomValidity("Passwords Don't Match");
        else
            document.getElementById("password2").setCustomValidity('');
    }
</script>
<script src="<?php echo e(asset('assets/front/js/SmoothScroll.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/front/js/move-top.js')); ?>"></script>
<script src="<?php echo e(asset('assets/front/js/easing.js')); ?>"></script>
<script>
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event) {
            event.preventDefault();

            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 1000);
        });
    });
</script>
<script>
    $(document).ready(function() {
        /*
        var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear' 
        };
        */
        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
</script>
<script src="<?php echo e(asset('assets/front/js/imagezoom.js')); ?>"></script>
<script src="<?php echo e(asset('assets/front/js/jquery.flexslider.js')); ?>"></script>
<script>
    $(window).load(function() {
        $('.flexslider').flexslider({
            animation: "slide",
            controlNav: "thumbnails"
        });
    });
</script>
<script src="<?php echo e(asset('assets/front/js/jquery.flexisel.js')); ?>"></script>
<script>
    $(window).load(function() {
        $("#flexiselDemo1").flexisel({
            visibleItems: 3,
            animationSpeed: 1000,
            autoPlay: true,
            autoPlaySpeed: 3000,
            pauseOnHover: true,
            enableResponsiveBreakpoints: true,
            responsiveBreakpoints: {
                portrait: {
                    changePoint: 480,
                    visibleItems: 1
                },
                landscape: {
                    changePoint: 640,
                    visibleItems: 2
                },
                tablet: {
                    changePoint: 768,
                    visibleItems: 2
                }
            }
        });

    });
</script>
<script src="<?php echo e(asset('assets/front/js/bootstrap.js')); ?>"></script>
<?php /**PATH D:\grocery-mart\resources\views/frontend/theme/footerScript.blade.php ENDPATH**/ ?>