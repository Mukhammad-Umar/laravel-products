

<?php $__env->startSection('css'); ?>

    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/styles/cart.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/styles/cart_responsive.css')); ?>">
    <style>
        .listbuttonremove{
	    margin: 10px;
        } 
    </style>
<?php $__env->stopSection(); ?> 

<?php $__env->startSection('main'); ?>

<div class="cart_section">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="cart_container">
                    
                    <?php
                    //  print_r($carts);
                    ?>

                    <!-- Cart Items -->
                    <div class="cart_items">
                        <ul class="cart_items_list">

                            <?php echo $__env->make('product.cart-standard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                           
                        </ul>
                    </div>
                    <!-- Cart Buttons -->
                    <div class="cart_buttons d-flex flex-row align-items-start justify-content-start">
                        <div class="cart_buttons_inner ml-sm-auto d-flex flex-row align-items-start justify-content-start flex-wrap">
                            <div class="button button_clear trans_200"><a href="">clear</a></div>
                            <form name="form_clearall" method="post" action="<?php echo e(route('clearall')); ?>" style="display:none;">
                                    <?php echo e(csrf_field()); ?>

                            </form> 
                        </div>
                    </div>                            
                </div>
            </div>
        </div>
    </div>
</div>                  

<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>

<script>
    $(document).ready(function () {
        $('.button_clear').click(function(){
            //form_clearall.submit();
            BaseRecord.clearall();
            return false;
        });
        $('.listbuttonremove').click(function(){
            BaseRecord.removeone($(this).attr('id'));
            return false;
        });
    });
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('product.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/laravel-products/resources/views/product/cart.blade.php ENDPATH**/ ?>