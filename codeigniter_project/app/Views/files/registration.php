<!DOCTYPE html>
<html lang="en">
<head>
  <title>blinkit</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?=view('include/head');?>
</head>
<body>

  <div class="row mx-0">
	<div class="col-md-6">
		<div>
			<div class="text-center mt-3">
				<h4>New here?</h4>
				<h6 class="font-weight-light">Join us today! It takes only few steps</h6>
			</div>
			<form action="<?= base_url('/adduser') ?>" method="Post">
			<div class="row" style="width: 75%; margin: auto;">
				<div class="col-md-12">
				<div class="form-group row py">
				  <label class="col-sm-2 col-form-label">Name</label>
				  <div class="col-sm-10">
					<input type="text" class="form-control py-2" name="Name"/>
				  </div>
				</div>
			  </div>
			  <div class="col-md-12">
				<div class="form-group row py">
				  <label class="col-sm-2 col-form-label">Email</label>
				  <div class="col-sm-10">
					<input type="email" class="form-control py-2" name="Email"/>
				  </div>
				</div>
			  </div>
			  <div class="col-md-12">
				<div class="form-group row py">
				  <label class="col-sm-2 col-form-label">State</label>
				  <div class="col-sm-10">
					<input type="state" class="form-control py-2" name="State"/>
				  </div>
				</div>
			  </div>
			  <div class="col-md-12">
				<div class="form-group row py">
				  <label class="col-sm-2 col-form-label">City</label>
				  <div class="col-sm-10">
					<input type="city" class="form-control py-2" name="City"/>
				  </div>
				</div>
			  </div>
			  <div class="col-md-12">
				<div class="form-group row py">
				  <label class="col-sm-2 col-form-label">Pincode</label>
				  <div class="col-sm-10">
					<input type="pincode" class="form-control py-2" name="Pincode"/>
				  </div>
				</div>
			  </div>
			  <div class="col-md-12">
				<div class="form-group row py">
				  <label class="col-sm-2 col-form-label">Mobile</label>
				  <div class="col-sm-10">
					<input type="mobile" class="form-control py-2" name="Mobile"/>
				  </div>
				</div>
			  </div>
			   <div class="col-md-12">
				<div class="form-group row py">
				  <label class="col-sm-2 col-form-label">Address</label>
				  <div class="col-sm-10">
					<input type="address" class="form-control py-2" name="Address"/>
				  </div>
				</div>
			  </div>
			   <div class="col-md-12">
				<div class="form-group row py">
				  <label class="col-sm-2 col-form-label">Password</label>
				  <div class="col-sm-10">
					<input type="password" class="form-control py-2" name="Password"/>
				  </div>
				</div>
			  </div>
			  <button type="submit" class="btn btn-primary mr-2">Submit</button>
			</div>
		</form>	
		<div class="text-center mt-4 font-weight-light">
		  Already have an account? <a href="<?= base_url('/userlogin') ?>" class="text-primary">Login</a>
		</div>
		</div>
	</div>

	<div class="col-md-6" style="background-image:url(<?= base_url('images/register-bg.jpg');?>)">
		<div class="copyright">
			<p>Copyright &copy; 2018  All rights reserved.</p>
		</div>
	</div>
  </div>
 
	<?= view('include/foot');?>
</body>

</html>
