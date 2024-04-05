<?php
	//print_r($update);
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
						<div class="card">
							<div class="card-body">
							  <h4 class="card-title">User Form</h4>
							  <form class="form-sample" action="<?= base_url('/webadmin/edituser') ?>" method="Post">
								<p class="card-description">
								  Personal info
								</p>
								<div class="row">
								<input type="hidden" name="id" value="<?= $update['Id'] ?>">
								  <div class="col-md-6">
									<div class="form-group row">
									  <label class="col-sm-3 col-form-label">Name</label>
									  <div class="col-sm-9">
										<input type="text" class="form-control" name="name" value="<?= $update['Name'] ?>"/>
									  </div>
									</div>
								  </div>
								  <div class="col-md-6">
									<div class="form-group row">
									  <label class="col-sm-3 col-form-label">Email</label>
									  <div class="col-sm-9">
										<input type="email" class="form-control" name="email" value="<?= $update['Email'] ?>"/>
									  </div>
									</div>
								  </div>
								</div>
								
								<div class="row">
								  <div class="col-md-6">
									<div class="form-group row">
									  <label class="col-sm-3 col-form-label">State</label>
									  <div class="col-sm-9">
										<input type="text" class="form-control" name="state" value="<?= $update['State'] ?>"/>
									  </div>
									</div>
								  </div>
								  <div class="col-md-6">
									<div class="form-group row">
									  <label class="col-sm-3 col-form-label">City</label>
									  <div class="col-sm-9">
										<input type="text" class="form-control" name="city" value="<?= $update['City'] ?>"/>
									  </div>
									</div>
								  </div>
								</div>
								<div class="row">
								  <div class="col-md-6">
									<div class="form-group row hide">
									  <label class="col-sm-3 col-form-label">Pincode</label>
									  <div class="col-sm-9">
										<input type="number" class="form-control" name="pincode" value="<?= $update['Pincode'] ?>"/>
										<div class="hidenum"></div>
									  </div>
									</div>
								  </div>
								  <div class="col-md-6">
									<div class="form-group row hide">
									  <label class="col-sm-3 col-form-label">Mobile</label>
									  <div class="col-sm-9">
										<input type="number" class="form-control" name="mobile" value="<?= $update['Mobile'] ?>"/>
										<div class="hidenum"></div>
									  </div>
									</div>
								  </div>
								  <div class="col-md-6">
									<div class="form-group row">
									  <label class="col-sm-3 col-form-label">Address</label>
									  <div class="col-sm-9">
										<input type="text" class="form-control" name="address" value="<?= $update['Address'] ?>"/>
									  </div>
									</div>
								  </div>
								  <div class="col-md-6">
									<div class="form-group row">
									  <label class="col-sm-3 col-form-label">Password</label>
									  <div class="col-sm-9">
										<input type="text" class="form-control" name="password" value="<?= $update['Password'] ?>"/>
									  </div>
									</div>
								  </div>
								</div>
								<button type="submit" class="btn btn-primary mr-2">Update</button>
							  </form>
							</div>
						  </div>
				</div>
              </div>
         </div>
	  </div>
    </div>
  </div>

  <?=view('admin/include/admin_foot');?>
</body>


</html>
