<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<?= view('include/head');?>
	<link rel="stylesheet" href="<?= base_url('admin/css/logincss.css');?>">
</head>
<body>
	<div class="container">
		<section id="content">
			<form action="<?= base_url('/webadmin/checklogin') ?>" method="Post" autocomplete="off">
			  <h1>Login</h1>
			  <div>
				<input type="text" placeholder="Email" required="" id="username" name="email"/>
			  </div>
			  <div style="position:relative;">
				<input type="password" placeholder="Password" required="" id="password" name="password" />
				<span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password eyeicon"></span>
			  </div>
			  <div class="submitbtn">
				<input type="submit" value="Log in" />
			  </div>
			</form>
		</section>
	</div>
	<?= view('include/foot');?>
	<script>
		$(".toggle-password").click(function() {
		  $(this).toggleClass("fa-eye fa-eye-slash");
		  var input = $($(this).attr("toggle"));
		  if (input.attr("type") == "password") {
			input.attr("type", "text");
		  } else {
			input.attr("type", "password");
		  }
		});
	</script>
</body>
</html>