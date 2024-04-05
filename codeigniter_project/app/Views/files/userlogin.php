<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<?= view('include/head');?>
	<link href="<?= base_url('css/login_css.css'); ?>" rel="stylesheet">
</head>
<body>
<section  style="background-image:url('<?= base_url('images/signinbackground.jpg') ?>'); padding-top:9rem; padding-bottom:9rem!important; background-position: center;">
	<div class="container" style="margin-bottom: -19rem;">
		<div class="form animated flipInX content">
			<h2 class="text-center">Login</h2>
			 
			<form class="loginbox" autocomplete="off" action="<?= base_url('/check_userlogin') ?>" method="Post">
				<input placeholder="Email" type="text" id="username" name="email"></input>
				<input placeholder="Password" type="password" id="password" name="password"></input>
				<button type="submit" id="submit">Login</button>
			</form>
			<p class="text-center ">Don't have an account? <span><a href="<?= base_url('/registration') ?>">Create</span></a></p>
		</div>
	</div>
</section>
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