<?php
	//print_r($update);
	// echo '<pre>';
	// print_r($categorydata);
	// echo '</pre>';
	//echo '<pre>';
	//print_r($productdatas);
	//echo '</pre>';
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
                  <form action="<?= base_url('/webadmin/editproduct')?>" method="POST" enctype="multipart/form-data">
				  <h4 class="card-title">Product Form</h4>
					<div class="form-group">
                      <label for="category_name">Category name</label>
						<select class="form-control bg-light" name="category">
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
							<?php
									 foreach($subcategorydata as $subdata){
								 ?>
									<option value="<?= $subdata['id'];?>" <?= $subdataz['selected'] ? 'selected' : '' ?>><?= $subdata['sub_name'];?> </option>
								 <?php
									 }
								 ?>	
						</select>
                    </div>
					<div>
						<input type="hidden" value="<?= $update['id']?>" name="id"/>
					</div>
                    <div class="form-group">
                      <label for="product_name">Product name</label>
                      <input type="text" class="form-control" name="product_name" placeholder="Product name" value="<?= $update['product_name'] ?>">
                    </div>
					<div class="form-group">
                      <label for="price">Price</label>
                      <input type="text" class="form-control" name="price" placeholder="Product price" value="<?= $update['price'] ?>">
                    </div>
					<div class="form-group">
                      <label for="unit">Unit</label>
                      <input type="text" class="form-control" name="unit" placeholder="Unit" value="<?= $update['unit'] ?>">
                    </div>
					<div class="form-group">
						<label for="product_img">File upload</label>
						<input type="file" name="productimg[]" class="form-control" id="productimg" multiple>
                    </div>
					<input type="hidden" name="image" id="image" value="<?= $update['productimg']; ?>"/>
					<div class="form-group">
                      <label for="features">Key features</label>
                      <textarea id="features" name="features" class="form-control rounded-0 bg-light"><?= $update['features']; ?></textarea>  
						<script>
							$( 'textarea#features' ).ckeditor();
							var data = $( 'textarea#features' ).val();
							$( 'textarea#features' ).val(data);
						</script>
                    </div>
					<div class="form-group">
                      <label for="description">Description</label>
                      <input type="text" class="form-control" name="description" placeholder="Description" value="<?= $update['description'] ?>">
                    </div>
					<div class="form-group">
                      <label for="disclaimer">Disclaimer</label>
                      <input type="text" class="form-control" name="disclaimer" placeholder="Disclaimer" value="<?= $update['disclaimer'] ?>">
                    </div>
                    
					<button type="submit" class="btn btn-primary mr-2">Update</button>
					</form>
				</div>
              </div>
            </div>
	  </div>
	  
	  
      
    </div>
	
  </div>

  <?=view('admin/include/admin_foot');?>
  
</body>


</html>
