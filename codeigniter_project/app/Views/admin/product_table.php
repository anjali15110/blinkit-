<?php
	//print_r($productdata);
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
	  
	  <div class="card" style="margin: 40px auto; width: 70%; flex:none; background-color: #fff;">
		<div class="grid-margin stretch-card" style="overflow:auto;">
              <div class="card-body">
                  <h4 class="card-title">Category Table</h4>
                  
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Category</th>
						  <th>Subcategory</th>
                          <th>Product Name</th>
						  <th>Price</th>
						  <th>Unit</th>
						  <th>Product Image</th>
						  <th>Features</th>
						  <th>Description</th>
						  <th>Desclaimer</th>
						  <th>Status</th>
                          <th>Created Date</th>
                          <th>Updated Date</th>
						  <th>Deleted Date</th>
						  <th>Edit</th>
                        </tr>
                      </thead>
                      <tbody>
							<?php foreach ($getsproduct as $row){ ?>
								<tr>
									<td><?php echo $row->id; ?></td>
									<td><?php echo $category[$row->category]->category_name; ?></td>
									<td><?php echo $row->subcat; ?></td>
									<td><?php echo $row->product_name; ?></td>
									<td><?php echo $row->price; ?></td>
									<td><?php echo $row->unit; ?></td>
									<td><?php
										$images = explode(',', $row->productimg);
										//print_r($images);
										foreach ($images as $item) {
									?>
										<img width="100px" height="100px" src="<?= base_url('admin/product_image/' . $item) ?>" />
									<?php
										}
									?></td>
									<td><?php echo substr($row->features,0,25); ?></td>
									<td><?php echo substr($row->description,0,25); ?></td>
									<td><?php echo substr($row->disclaimer,0,25); ?></td>
									<td><?php echo $row->status; ?></td>
									<td><?php echo $row->created_at; ?></td>
									<td><?php echo $row->updated_at; ?></td>
									<td><?php echo $row->deleted_at; ?></td>
									<td><a class="btn btn-info" href="<?php echo base_url('/webadmin/product_edit/').$row->id; ?>">Edit</a></td>
								</tr>
							<?php
								}
							?>
                      </tbody>
                    </table>
                  </div>
                </div>
        </div>
	  </div>
	  
	  
      
    </div>	
  </div>

  <?=view('admin/include/admin_foot');?>
  
</body>


</html>
