<?php
	//print_r($categorydata);
	//print_r($productdata);
	//echo $productdata[0]['id'];
	
?>

<!DOCTYPE html>
<html lang="en">


<head>
  <?=view('admin/include/admin_head');?>
</head>
<body>
  <div class="container-scroller" style="background: #eeeeee8f!important;">
    <?=view('admin/include/admin_nav');?>
	
    <div class="container-fluid page-body-wrapper">
	  
	  <?=view('admin/include/admin_sidebar');?>
	  
	  <div class="card-body" style="margin: 40px auto; width: 70%; flex:none;">
		<div class="grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
				
                  <form action="<?= base_url('/webadmin/addproduct')?>" method="post" enctype="multipart/form-data">
				  <h4 class="card-title">Product Form</h4>
					<div class="form-group">
                      <label for="category_name">Category name</label>
						<select class="form-control bg-light" name="category" id="category" required>
							<option value="">Select Category</option>
								<?php
									foreach($categorydata as $catname){
								?>
									<option value="<?= $catname['cid'];?>" <?= $catname['selected'] ? 'selected' : '' ?>><?= $catname['category_name'];?> </option>
								<?php
									}
								?>
						</select>
                    </div>
					<div class="form-group">
                      <label for="subcat">Sub Category</label>
						<select class="form-control bg-light" name="subcat" id="subcat" required>
							<option value="">Select Subcategory</option>
								
						</select>
                    </div>
                    <div class="form-group">
                      <label for="product_name">Product name</label>
                      <input type="text" class="form-control" name="product_name" placeholder="Product name" id="product_name" required>
                    </div>
					<div class="form-group">
                      <label for="price">Price</label>
                      <input type="text" class="form-control" name="price" placeholder="Product price" id="price" required>
                    </div>
					<div class="form-group">
                      <label for="unit">Unit</label>
                      <input type="text" class="form-control" name="unit" placeholder="Unit" id="unit" required>
                    </div>
					<div class="form-group">
						<label for="product_img">File upload</label>
						<input type="file" name="productimg[]" class="form-control" id="productimg" multiple required>
                    </div>
					<div class="form-group">
                      <label for="features">Key features</label>
                      <!--<input type="text" class="form-control" name="features" placeholder="Features" id="features">-->
					  <textarea id="features" name="features"  required class="form-control rounded-0 bg-light"></textarea>  
						<script>
							$( 'textarea#features' ).ckeditor();
							var data = $( 'textarea#features' ).val();
							$( 'textarea#features' ).val(data);
						</script>
                    </div>
					<div class="form-group">
                      <label for="description">Description</label>
                      <input type="text" class="form-control" name="description" placeholder="Description" id="description" required>
                    </div>
					<div class="form-group">
                      <label for="disclaimer">Disclaimer</label>
                      <input type="text" class="form-control" name="disclaimer" placeholder="Disclaimer" id="disclaimer" required>
                    </div>
                    
					<button type="submit" class="btn btn-primary mr-2">Submit</button>
					</form>
				</div>
              </div>
            </div>
	  </div>
	  
	  
      
    </div>
	
  </div>

  <?=view('admin/include/admin_foot');?>
  
  <script>
	$(document).ready(function(){
		$('#category').change(function(){
			var catid = $(this).val();
			//console.log(catid);
			$("#subcat").html("<option value=''>---select---</option>")
			
			$.ajax({
				url : '<?php echo base_url('/webadmin/productsubcat') ?>',
				type : 'POST',
				data : {
					category : catid
				},
				success : function(response){
					var resp = JSON.parse(response);
					//var el = '';
					resp.forEach((item) => {
						$("#subcat").append("<option value='"+item.id+"'>"+item.sub_name+"</option>")
					})
					
					//console.log(resp);
				}
				
			})
		})
	})
  </script>
  
</body>


</html>
