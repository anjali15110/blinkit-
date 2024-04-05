<?php
	// echo '<pre>';
	// print_r($bookdata);
	// echo '</pre>';
	// echo '<pre>';
	// print_r($userdata);
	// echo '</pre>';
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
	
	<?= view('include/header');?>
	
	<section>
		<div>
			<h3 class="text-center mt-4"><?= $userdata[0]['Name']; ?></h3>
			<table class="mx-auto table-bordered bookedtable">
				<thead>
					<tr>
						<th>Product</th>
						<th class="text-center">Quantity</th>
						<th class="text-center">Total Price</th>
					</tr>
				</thead>
				<tbody class="bookdata">
					<?php
						foreach($bookdata as $book){
					?>	
						<tr>
							<td><?= $book['productname'] ?></td>
							<td class="text-center"><?= $book['quantity'] ?></td>
							<td class="text-center"><?= $book['total'] ?></td>
						</tr>
					<?php
						}
					?>
				</tbody>
			</table>
		</div>
	</section>
	
	<?= view('include/footer');?>
	<?= view('include/foot');?>
	
	<script>
		$(window).on('load', function(){
			var local = localStorage.getItem('addtocart');
			//console.log(local);
			$.ajax({
			url : '<?= base_url('/deletecart'); ?>',
			type : 'POST',
			data : {data : local},
			success : function(response)
				{
					console.log(response);
				}
			})
		});
	</script>

</body>
</html>