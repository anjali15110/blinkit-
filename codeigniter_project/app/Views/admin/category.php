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
				
                  <form action="<?= base_url('/webadmin/addcategory'); ?>" method="POST" enctype="multipart/form-data">
				  <h4 class="card-title">Category Form</h4>
                    <div class="form-group">
                      <label for="category">Category</label>
                      <input type="text" class="form-control" name="category" id="category" placeholder="Category" required>
                    </div>
                    <div class="form-group">
						<label>File upload</label>
						<input type="file" required name="img_name" class="file-upload-default" accept=".jpg, .jpeg, .png">
						<div class="input-group col-xs-12">
							<input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
							
							<span class="input-group-append">
							<button class="file-upload-browse btn btn-primary" type="button">Upload	</button>
							</span>
						</div>
                    </div>
					<button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
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
