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
	
	<div class="container-scroller" style="background: #eeeeee8f!important;">
		<div class="container-fluid page-body-wrapper" style="background: white;">
			<div class="card" style="margin: 40px auto; width: 80%; flex:none; background-color: #fff; margin-bottom:0; border:none!important">
				<div class="grid-margin stretch-card">
					<div class="card-body">
						<input type="hidden" id="localstore" />
						
						<!--<img src="<?= base_url('images/heavy.jpg'); ?>" width="100%"/>-->
						<!--<?php
							if($cart == null){
						?>
							<h3 class="text-center my">You don't have any items in your cart</h3>
							<p class="text-center text-secondary">Your favourite items are just a click away</p>
							<div class="cartimage">
								<img src="<?= base_url('images/cartimage.jpg') ?>" width="100%" />
							</div>
						<?php						
							}
						?>-->
						<h4 class="card-title mb-4">My Cart</h4>
                  
					<div class="table-responsive">
						<table class="table table-striped carttable">
							<thead>
								<tr>
								  <th>
									 Product Image
								  </th>
								  <th>
									Product Name
								  </th>
								  <th>
									Price
								  </th>
								  <th>
									Quantity
								  </th>
								  <th>
									Total Price
								  </th>
								  <th>
									Delete
								  </th>
								</tr>
							</thead>
							
							<tbody id="databody">	
								
							</tbody>
							
						</table>
						
						<div class="totalline">
							<p class="totalprices">Total : <i class='fa-solid fa-indian-rupee-sign' style='font-size: 18px; padding-right:3px;'></i> </p>
							<p class="subtotal"> </p>
						</div>
						
						<div class="text-center text-light my-0" style="background: #4f9b4f!important;"><button class="book py-3" style="text-decoration:none; background: #4f9b4f!important; width: 100%;"><h5 class="mb-0 ">Book</h5></button></div>
						
					</div>
				</div>
			</div>
		</div>
	</div>	
  </div>
	
	<?= view('include/foot');?>
	
	<script>
		$(window).on('load', function(){
			var data = localStorage.getItem("addtocart");
			//var cartdata = $("#localstore").val(data);
			//console.log(data);
				
			$.ajax({
			url : '<?= base_url('/cartshow'); ?>',
			type : 'POST',
			data : {cart : data},
			success : function(response)
				{
					var sum = 0;
					var resp = JSON.parse(response);
					resp.cart.forEach(x => {
						sum += parseInt(x.total_price); 
						//console.log(x, "asdfasd");
						var trel = "<tr class='tr'><td><img src='" + x.product_image + "' class='product_image'/> <input type='hidden' class='productid' value='"+x.product_id+"'/></td><td class='product_name top'>"+x.product_name+" <input type='hidden' id='hiddenprice' value='"+x.price+"'/></td><td class='cartprice top text-center'><i class='fa-solid fa-indian-rupee-sign' style='font-size: 13px;'></i> "+x.price+"</td><td class='top text-center'><input type='number' min='1' max='10' class='quantities' value='"+x.quantity+"'/></td><td class='total top text-center'>"+x.total_price+"</td><td class='top text-center'><a class='text-danger'   href='<?php echo base_url('/cartdelete/'); ?>"+x.cart_id+"'><i class='fa-regular fa-circle-xmark'></i></a></td></tr>";
						$("#databody").append(trel);
					});
					$('.subtotal').html(sum);
					//console.log(sum, "sum");
				}
			});

			
		});
		
		$(document).ready(function(){
			$(document).on('change', '.quantities', function(){
				var quantity = parseInt($(this).val());
				//console.log(quantity);
				var el = $(this).closest('tr');
				var id = $(el).find('.productid').val();
				var total = $(el).find('#hiddenprice').val();
				var total_price = quantity * total;
				var totalprice = $(el).find('.total').html(total_price);
				
				var sum = 0;
				$('.total').each(function() {
					var tt = sum += parseFloat($(this).html());
					$('.subtotal').html(tt);
				});
				
				$.ajax({
					url : '<?= base_url('/update_cart') ?>',
					type : 'POST',
					data : {
						'product_id' : id,
						'total_price' : total_price,
						'quantity' : quantity
					},
					success : function(response){
						//console.log(response);
					}	
				});
			});	
			
			$('.book').on('click', function(){
				var data = localStorage.getItem("addtocart");
				$.ajax({
				url : '<?= base_url('/bookdata'); ?>',
				type : 'POST',
				data : {book : data},
				success : function(response)
					{
						if(response == 1){
							window.location.href = "<?php echo base_url('/userlogin'); ?>";
						}else{
							window.location.href = "<?php echo base_url('/bookproduct/'); ?>"+response;
							// $('#databody').hide();
						}
					}
				});
			});
					
		});
		
	</script>
 
</body>
</html>