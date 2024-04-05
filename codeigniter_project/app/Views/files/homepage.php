<?php
 //print_r($curdmodel);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>blinkit</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?= view('include/head');?>
</head>
<body>
	
	
	<?=view('include/header');?>
	<section>
		<div class="containers">
			<img src="<?= base_url('images/Group-33704.webp');?>" width="100%"/>
			
			<div class="owl-carousel owl-theme" id="main">
				<div class="item">
					<div class="mainimage px-2">
						<img src="<?= base_url('images/category2/Magazines-WEB.jpg');?>" width="100%"/>										
					</div>
				</div>
				<div class="item">
					<div class="mainimage px-2">				
						<img src="<?= base_url('images/category2/beauty-WEB.jpg');?>" width="100%"/>					
					</div>
				</div>
				<div class="item">
					<div class="mainimage px-2">				
						<img src="<?= base_url('images/category2/electronics-WEB.jpg');?>" width="100%"/>					
					</div>
				</div>
				<div class="item">
					<div class="mainimage px-2">				
						<img src="<?= base_url('images/category2/pharmacy-WEB.jpg');?>" width="100%"/>					
					</div>
				</div>
			</div>
			
			
			<div class="category">
				<?php
					foreach($category as $categories){
					
					$encode = data_encode($categories['cid']);
				?>
				<div class="categoryimage">
					<a href="<?= base_url('/listone/').$encode; ?>"><img src="<?= base_url('admin/cat_images/'.$categories['category_image']);?>" width="100%"/></a>
				</div>
				<?php
					}
				?>
			</div>	
			
		</div>
	</section>
	
	<section>
		<div class="containers">
			<div style="padding:15px">
					<div class="categories">
					<div class="d-flex justify-content-between">
						<div>
							<h4 class="mb-3">Dairy, Bread & Eggs</h4>
						</div>
						<div>
							<h6 class="mb-3 text-success"><a href="<?= base_url('/listtwo/').'1' ; ?>">See all</a></h6>
						</div>
					</div>	
					
					<div class="owl-carousel owl-theme" id="categoryslider">
					<?php
						foreach($catonedata as $catoneproduct)
						{
						$explode = $catoneproduct['productimg'];
						$image = explode(',', $explode);
						$mainimage = $image[0];
						$productid = data_encode($catoneproduct['id']);
					?>
						<div class="item">
							<div class="categories_detail mb-3">
								<div>
									<div><a href="<?= base_url('/detail/').$productid; ?>">
									<input type="text" class="productid" value="<?= $catoneproduct['id']; ?>"/>
									<div class="categories_image">
										<img src="<?= base_url('admin/product_image/').$mainimage; ?>" width="100%"/>
									</div>
									<span class="time"><i class="fa-regular fa-clock"></i> 13 MINS</span>
									<p class="product"><?= $catoneproduct['product_name']; ?></p>
									<span id="quantity"><?= $catoneproduct['unit']; ?></span></a>
									</div>
									<div class="d-flex justify-content-between">
										<div class="price"><i class="fa-solid fa-indian-rupee-sign"></i><?= $catoneproduct['price']; ?></div></a>
										<div style="position: relative;">
											<button class="addcart"><span> <i class="fa-solid fa-cart-shopping"></i> </span>Add</button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php
							}
						?>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section>
		<div class="containers">
			<div style="padding:15px">
				<div class="categories">
					<div class="d-flex justify-content-between">
						<div>
							<h4 class="mb-3">Fruits & Vegetables</h4>
						</div>
						<div>
							<h6 class="mb-3 text-success"><a href="<?= base_url('/listtwo/').'2' ; ?>">See all</a></h6>
						</div>
					</div>
					<div class="owl-carousel owl-theme" id="categoryslider_two">

					<?php
						foreach($cattwodata as $cattwoproduct)
						{
						$explode = $cattwoproduct['productimg'];
						$image = explode(',', $explode);
						$mainimage = $image[0];
						$productid = data_encode($cattwoproduct['id']);
					?>
						<div class="item">
							<div class="categories_detail mb-3 pt-0">
								<div><a href="<?= base_url('/detail/').$productid; ?>">
									<input type="text" class="productid" value="<?= $cattwoproduct['id']; ?>"/>
									<div class="categories_image">
										<img src="<?= base_url('admin/product_image/').$mainimage; ?>" width="100%"/>
									</div>
									<span class="time"><i class="fa-regular fa-clock"></i> 13 MINS</span>
									<p class="product"><?= $cattwoproduct['product_name']; ?></p>
									<span class="quantity"><?= $cattwoproduct['unit']; ?></span></a>
									<div class="d-flex justify-content-between">
										<div class="price"><i class="fa-solid fa-indian-rupee-sign"></i><?= $cattwoproduct['price']; ?></div>
										<div style="position: relative;">
											<button class="addcart"><span> <i class="fa-solid fa-cart-shopping"></i> </span>Add</button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php
							}
						?>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<?= view('include/footer');?>
	<?= view('include/foot');?>
 
 <script>
	$(document).ready(function(){
		var loctoken = '';
		var rand = Math.floor(Math.random() * 10000000);
	
		$('#main').owlCarousel({
			loop:true,
			margin:20,
			nav:true,
			responsive:{
				0:{
					items:2
				},
				600:{
					items:3
				},
				1000:{
					items:3.6
				}
			}
		});
		
		$('#categoryslider').owlCarousel({
			loop:false,
			margin:20,
			nav:true,
			responsive:{
				0:{
					items:2
				},
				600:{
					items:4
				},
				1000:{
					items:6.4
				}
			}
		});
		
		$('#categoryslider_two').owlCarousel({
			loop:false,
			margin:20,
			nav:true,
			responsive:{
				0:{
					items:2
				},
				600:{
					items:4
				},
				1000:{
					items:6.4
				}
			}
		});
		
		$('.addcart').click(function(){
			var add = $(this).closest('.categories_detail');
			var id = $(add).find('.productid').val();
			//console.log(id);
			var quantity = 1;
			var name = $(add).find('.product').text();
			var price = $(add).find('.price').text();
			var total = $(add).find('.price').text();
			var image = $(add).find('.categories_image img').attr('src');
			var getlocstr = localStorage.getItem("addtocart");
			//console.log(getlocstr);loctoken
			if(getlocstr != ''){
				loctoken = getlocstr;
			}else{
				var loctoken = rand;
				//console.log(localstrval);
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
			
			//console.log(obj);
			
			$.ajax({
				url : '<?php echo base_url('/insertcart'); ?>',
				type : 'POST',
				data : obj,
				success : function(response){
					console.log('success');
				}
			})
			
			
			});
		
	});
 </script>

</body>
</html>