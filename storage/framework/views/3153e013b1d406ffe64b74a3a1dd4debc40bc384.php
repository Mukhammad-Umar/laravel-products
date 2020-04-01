

<?php $__env->startSection('css'); ?>

    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/styles/product.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/styles/product_responsive.css')); ?>">

<?php $__env->stopSection(); ?>
  
<?php $__env->startSection('main'); ?>

    <div class="super_container_inner">
        <div class="super_overlay"></div>

		<!-- Product -->

		<div class="product">
			<div class="container">
				<?php if($errors->any()): ?>
					<?php $__env->startComponent('product.components.alert'); ?>
							<?php $__env->slot('type'); ?>
								danger
							<?php $__env->endSlot(); ?>
						<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<?php echo e($error); ?><br>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					<?php echo $__env->renderComponent(); ?>
				<?php endif; ?>
				<div class="row">

					<?php
					/*
						if($errors->any()){
							$errors_str = '';
							foreach($errors->all() as $error){
								$errors_str .= $error . '\n';
							}
							echo '<script> alert("'. $errors_str .'"); </script>';
						}
					*/
					?>

                    <!-- Product Info --> 

					<!-- Product image <div class="col-lg-6 product_image"><img src="" />... -->
					<div class="col-lg-6 product_image">
                       <img src="<?php echo e(asset('public/images/' . $product->image)); ?>" /> 
					</div>

					<div class="col-lg-6 product_col">
						<div class="product_info">
                            <!-- Product name <div class="product_name"></div> -->
							<div class="product_name"><?php echo e($product->name); ?></div>
							<div class="product_category">В <a href="#">Катагории</a></div>
							<div class="product_rating_container d-flex flex-row align-items-center justify-content-start">
								<div class="rating_r rating_r_4 product_rating"><i></i><i></i><i></i><i></i><i></i></div>
								<div class="product_reviews">4.7 из (3514)</div>
								<div class="product_reviews_link"><a href="#">Отзывы</a></div>
							</div>
                            <!-- Product price <div class="product_price"></div> -->
							<div class="product_price"><?php echo e($product->price); ?></div>
							<div class="product_size">
								<div class="product_size_title">Выберите Размер</div>
								<ul class="d-flex flex-row align-items-start justify-content-start">
									<li>
										<input type="radio" id="radio_1" disabled name="product_radio" class="regular_radio radio_1">
										<label for="radio_1">XS</label>
									</li>
									<li>
										<input type="radio" id="radio_2" name="product_radio" class="regular_radio radio_2" checked>
										<label for="radio_2">S</label>
									</li>
									<li>
										<input type="radio" id="radio_3" name="product_radio" class="regular_radio radio_3">
										<label for="radio_3">M</label>
									</li>
									<li>
										<input type="radio" id="radio_4" name="product_radio" class="regular_radio radio_4">
										<label for="radio_4">L</label>
									</li>
									<li>
										<input type="radio" id="radio_5" name="product_radio" class="regular_radio radio_5">
										<label for="radio_5">XL</label>
									</li>
									<li>
										<input type="radio" id="radio_6" disabled name="product_radio" class="regular_radio radio_6">
										<label for="radio_6">XXL</label>
									</li>
								</ul>
							</div>
							<div class="product_text">
								<p>Удобная и недорогая одежда отличного качества от мировых брендов. Может быть вполне уместна как для повседневного ношения, так и для неформальных меропрятий праздничного характера. В изготовлении использованы только экологически чистые материалы (хлопок, лен, шерсть), которые не только отлично носятся, но и без особо труда поддаются стирке и чистке даже в домашних условиях.</p>
							</div>
							<div class="product_buttons">
								<div class="text-right d-flex flex-row align-items-start justify-content-start">
									<div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
										<div><div><img src="<?php echo e(asset('public/images/cart.svg')); ?>" class="svg" alt=""><div>+</div></div></div>
									</div>
								</div>
								<form name="form_tocart" method="post" action="<?php echo e(route('tocart')); ?>" style="display:none;">
											<?php echo e(csrf_field()); ?>

									<input type="hidden" name="name" value="<?php echo e($product->name); ?>" />
									<input type="hidden" name="price" value="<?php echo e($product->price); ?>" />
									<input type="hidden" name="image" value="<?php echo e($product->image); ?>" />
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
			$('.product_cart').click(function(){
				form_tocart.submit();
			});
		});
	</script>

	<?php $__env->stopSection(); ?>
<?php echo $__env->make('product.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/laravel-products/resources/views/product/product.blade.php ENDPATH**/ ?>