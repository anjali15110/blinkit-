<!DOCTYPE html>
<html lang="en">
<head>
  <title>blinkit</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?= view('include/head');?>
</head>
<body>
	
	<?= view('include/header');?>
	
	<section>
		<div class="containerdetail container-sm ">
			<div style="border-bottom: 1px solid #f1f3f4;">
				<div class="row">
					<div class="col-md-6 ps-0">
					<div style="border-right: 1px solid #f1f3f4;">
						<div class="row">
							<div class="col-md-12">
							<div class="detailimage">
								<?php
									$productimages = $productdetail['productimg'];
									$images = explode(',', $productimages);
								?>
								<img src="<?= base_url('admin/product_image/').$images[0];?>" width="100%" id="zoom" class="categories_image"/>
								<div id="preview-zoom"></div>

								<div id="window-zoom" style="display:none;"></div>

							</div>
							</div>
							<div class="col-md-12">
							<div class="alldetailimage">
								<div class="owl-carousel owl-theme" id="detailslider">
									<?php
										$productimages = $productdetail['productimg'];
										$images = explode(',', $productimages);
										//print_r($images);
										
									?>
									<?php
										foreach($images as $proimage){
									?>
									<div class="item">
										<div class="details_image">
											<img src="<?= base_url('admin/product_image/').$proimage;?>"/>
										</div>
									</div>
									<?php
										}
									?>
								</div>
							</div>
							</div>
						</div>
				
						<div class="productdetail">
							<h4>Product Details</h4>
							<p><?= $productdetail['features']; ?></p>
							<h2>Description</h2>
							<p><?= $productdetail['description']; ?></p>
							<h2>Disclaimer</h2>
							<p><?= $productdetail['disclaimer']; ?></p>
						</div>
						</div>
					</div>
					<div class="col-md-6 pe-0">
						<div class="details">
							<input type="hidden" class="productid" value="<?= $productdetail['id']; ?>"/>
							<p class="link"><a><span>Home / Chips & Crips / </span><?= $productdetail['product_name'] ?>  (<?= $productdetail['unit'] ?>)</a></p>
							<h4><b><span class="product"><?= $productdetail['product_name'] ?> </span>(<?= $productdetail['unit'] ?>)</b></h4>
							<span class="time"><b><i class="fa-regular fa-clock"></i> 12 MINS</b></span>
							<p class="viewall"><a href="<?= base_url('/listone/').$subdetail['categoryid']; ?>" >View all by <?= $subdetail['sub_name']; ?> </a></p><hr>
							<div class="d-flex justify-content-between quantityprice">
								<div>
									<p class="text-secondary mb-0"><b><?= $productdetail['unit'] ?></b></p>
									<p><i class="fa-solid fa-indian-rupee-sign" style="fot-size:10px;"></i> <b class="price"><?= $productdetail['price'] ?></b></p>
								</div>
								<div style="position: relative;">
									<button class="addcart"><span> <i class="fa-solid fa-cart-shopping"></i> </span>Add</button>
								</div>
							</div>
							<h5>Why shop from blinkit?</h5>
							<div class="d-flex blinkit">
								<div>
									<img src="<?= base_url('images/superfast_delivery.png');?>"/>
								</div>
								<div>
									<p class="mb-0">Superfast Delivery</p>
									<p class="mb-0">Get your order delivered to your doorstep at the earliest from dark stores near you.</p>
								</div>
							</div>
							<div class="d-flex blinkit">
								<div>
									<img src="<?= base_url('images/best_prices_offers.png');?>"/>
								</div>
								<div>
									<p class="mb-0">Best Prices & Offers</p>
									<p class="mb-0">Best price destination with offers directly from the manufacturers.</p>
								</div>
							</div>
							<div class="d-flex blinkit">
								<div>
									<img src="<?= base_url('images/wide_assortment.png');?>"/>
								</div>
								<div>
									<p class="mb-0">Wide Assortment</p>
									<p class="mb-0">Choose from 5000+ products across food, personal care, household & other categories.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<?= view('include/footer');?>
	<?= view('include/foot');?>
 
 <script>
	$(document).ready(function(){
		$('#detailslider').owlCarousel({
			loop:false,
			// margin:20,
			nav:true,
			navText: ['<i class="fa-solid fa-angle-left fa-lg"></i>','<i class="fa-solid fa-angle-right fa-lg"></i>'],
			responsive:{
				0:{
					items:4
				},
				600:{
					items:5
				},
				1000:{
					items:6
				}
			}
		});
		
		$('.details_image img').click(function(){
			var image = $(this).attr('src');
			//console.log(image);
			$('.detailimage img').attr('src', image);
		});
		
	
	 $(".detailimage img").imagezoomsl();
	 
	 });
	 

		var loctoken = '';
		var rand = Math.floor(Math.random() * 10000000);
		
		$('.addcart').click(function(){
			var add = $(this).closest('.containerdetail');
			var id = $(add).find('.productid').val();
			//console.log(id);
			var quantity = 1;
			var name = $(add).find('.product').text();
			var price = $(add).find('.price').text();
			var total = $(add).find('.price').text();
			var image = $(add).find('.categories_image').attr('src');
			var getlocstr = localStorage.getItem("addtocart");
			if(getlocstr != ''){
				loctoken = getlocstr;
			}else{
				var loctoken = rand;
				localStorage.setItem("addtocart", loctoken);
			}
			
			var obj = {
				product_id : id,
				product_image : image,
				product_name : name,
				price : price,
				quantity : quantity,
				total_price : total,
				localstrval : loctoken
			}
			
			console.log(obj);
			
			$.ajax({
				url : '<?php echo base_url('/insertcart'); ?>',
				type : 'POST',
				data : obj,
				success : function(response){
					console.log('success');
				}
			})
			
	});

	
 </script>

</body>
</html>