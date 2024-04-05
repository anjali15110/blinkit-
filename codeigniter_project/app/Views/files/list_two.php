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
	
	<section class="listsection">
		<div class="containers">
			<div class="categories">
				<div class="categoryname">
				
					<h5 class="mb-3"><?= $catdata[0]['category_name']; ?></h5>
				</div>
				<div class="listbg">
					<div class=" mb-3 pt-0 listtwo">
					
					<?php
						foreach($products as $product){
						$explode = $product['productimg'];
						//print_r($explode);
						$image = explode(',', $explode);
						//print_r($explode);
						$mainimage = $image[0];
						
						$productid = data_encode($product['id']);
					?>
						<div class="listtwoimage">
						<a href="<?= base_url('/detail/').$productid; ?>">
							<input type="hidden" class="productid" value="<?= $product['id']; ?>"/>
							<div class="categories_image">
								<img src="<?= base_url('admin/product_image/').$mainimage; ?>" width="100%"/>
							</div>
							<span class="time"><i class="fa-regular fa-clock"></i> 13 MINS</span>
							<p class="product"><?= $product['product_name']; ?></p>
							<span class="quantity"><?= $product['unit']; ?></span></a>
							<div class="d-flex justify-content-between">
								<div class="price"><i class="fa-solid fa-indian-rupee-sign"></i> <?= $product['price']?></div>
								<div style="position: relative;">
									<button class="addcart"><span> <i class="fa-solid fa-cart-shopping"></i> </span>Add</button>
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
		
		$('.addcart').click(function(){
			var add = $(this).closest('.listtwoimage');
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