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
                  <form action="<?= base_url('/webadmin/editsubcategory'); ?>" method="POST" enctype="multipart/form-data">
				  <h4 class="card-title">Category Form</h4>
				  <div class="form-group">
                      <label for="categoryid">Category</label>
						<select class="form-control bg-light" name="categoryid" required>
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
                      <label for="subcategory">Subcategory name</label>
                      <input type="text" class="form-control" name="sub_name" id="subcategory" placeholder="Subcategory" value="<?=$update['sub_name']; ?>">
                    </div>
					<div>
						<input type="hidden" name="subid" value="<?= $update['id'] ?>">
					</div>
                    <div class="form-group">
						<label>File upload</label>
						<input type="file" name="sub_image" class="file-upload-default"  value="<?= $update['sub_image']; ?>">
						<div class="input-group col-xs-12">
							<input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image" value="<?= $update['sub_image']; ?>">
							<input type="hidden" name="subimage" value="<?= $update['sub_image']; ?>">
							<span class="input-group-append">
							<button class="file-upload-browse btn btn-primary" type="button">Upload	</button>
							<img src="<?= base_url('admin/sub_images/'.$update['sub_image']);?>"  width="100px" height="120px"/>
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
