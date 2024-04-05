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
	
	<section class="listnav">
		<div class="container">
			<nav>
				<ul>
					<?php
						foreach($categories as $categories){
							$cid = data_encode($categories['cid']);
					?>
						
						<li><a href="<?= base_url('/listone/').$cid; ?>"><?= $categories['category_name'] ?></a></li>
					<?php
						}
					?>
				</ul>
			</nav>
		</div>
	</section>
	
	<section class="listsection">
		<div class="">
			<div class="row mx-0">
				<div class="col-md-3 col-sm-2 px-0">
					<?php
						foreach($subcategory as $subcategory){
						$catid = data_encode($catdata['cid']);
					?>
						<div class="subcategory">
							<a href="<?= base_url('/listone/').$catid.'/'.$subcategory['id'] ?>" >
							<div class="subimage">
								<img src="<?= base_url('admin/sub_images/'.$subcategory['sub_image']);?>" width="100%"/>
							</div>
							<span style="font-weight:500;"><?= $subcategory['sub_name']?></span>
							</a>
						</div>
					<?php
						}
					?>
				</div>
				<div class="col-md-9 col-sm-10 px-0">
					<div>
						<div class="categories">
							<div class="d-flex justify-content-between">
								<div style="padding-left:10px;">
									<h5 class="mb-3"><b><?= $catdata['category_name']; ?></b></h5>
								</div>
								<div>
									 <div class="dropdown">
										<button type="button" class="btn dropdown-toggle text-success" data-bs-toggle="dropdown" style="border: 1px solid #e6e7e9; margin-top: -8px;">
										  Relevance
										</button>
										<ul class="dropdown-menu">
										  <li><a class="dropdown-item" href="#">Link 1</a></li>
										  <li><a class="dropdown-item" href="#">Link 2</a></li>
										  <li><a class="dropdown-item" href="#">Link 3</a></li>
										</ul>
									  </div>
								</div>
							</div>
							<div class="listbg">
								<div class=" mb-3 pt-0" style="padding: 0 17px; padding-bottom: 11px;">
									<div class="row">
									<?php
										foreach($products as $product){
										$explode = $product['productimg'];
										//print_r($explode);
										$image = explode(',', $explode);
										//print_r($explode);
										$mainimage = $image[0];
										
										$productid = data_encode($product['id']);
									?>
										<div class="col-md-3 col-sm-4 lists">
											<a href="<?= base_url('/detail/').$productid; ?>">
											<div class="listtwoimage">
											<input type="hidden" class="productid" value="<?= $product['id']; ?>"/>
												<div class="categories_image">
													<img src="<?= base_url('admin/product_image/').$mainimage; ?>" width="100%"/>
												</div>
												<span class="time"><i class="fa-regular fa-clock"></i> 13 MINS</span>
												<p class="product"><?= $product['product_name']?></p>
												<span class="quantity"><?= $product['unit']?></span></a>
												<div class="d-flex justify-content-between">
													<div class="price"><i class="fa-solid fa-indian-rupee-sign"></i> <?= $product['price']?></div>
													<div style="position: relative;">
														<button class="addcart"><span> <i class="fa-solid fa-cart-shopping"></i> </span>Add</button>
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
		
		$('.addcart').click(function(){
			var add = $(this).closest('.lists');
			var id = $(add).find('.productid').val();
			//console.log(id);
			var quantity = 1;
			var name = $(add).find('.product').text();
			var price = $(add).find('.price').text();
			var total = $(add).find('.price').text();
			var image = $(add).find('.categories_image img').attr('src');
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
	});
 </script>

</body>
</html>