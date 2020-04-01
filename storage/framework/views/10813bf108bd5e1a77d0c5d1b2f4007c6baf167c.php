<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-xl-4 col-md-6">
        <a href="<?php echo e(route('product', [$product->id])); ?>"> <!-- ?page=product --> 
            <div class="product"> 
                <!-- image - img src -->
                <div class="product_image"><img src="<?php echo e(asset('public/images/' . $product->image)); ?>" alt=""></div> 
                <div class="product_content">
                    <div class="product_info d-flex flex-row align-items-start justify-content-start">
                        <div>
                            <div>
                                <!-- name - <a href="#">...</a> -->
                                <div class="product_name"><a href="#"><?php echo e($product->name); ?></a></div> 
                            </div>
                        </div>
                        <div class="ml-auto text-right">
                            <!-- price - <span style="font-size: 0.8em;">...</span> -->
                            <div class="product_price text-right"><span style="font-size: 0.8em;"><?php echo e($product->price); ?></span></div> 
                        </div>
                    </div>
                    <div class="product_buttons">
                        <div class="text-right d-flex flex-row align-items-start justify-content-start">
                            <div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
                                <div><div><img src="<?php echo e(asset('public/images/cart.svg')); ?>" class="svg" alt=""><div>+</div></div></div> <!-- product cart -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH /var/www/html/laravel-products/resources/views/product/brick-standard.blade.php ENDPATH**/ ?>