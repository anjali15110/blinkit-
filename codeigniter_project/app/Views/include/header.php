<header>
		<div class="containerlg">
			<div class="d-flex mx-0">
				<div class="blinklogo">
					<div class="logo">
						<a href="<?= base_url('/'); ?>"><h1>blink<span>it</span></h1></a>
					</div>
				</div>
				<nav class="topbar navbar navbar-expand-lg" >
					<button class="navbar-toggler border-0 togglebtn" data-bs-toggle="collapse" data-bs-target="#mynav" style="width: 100%;text-align: right;">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div style="margin-bottom: 3px;" class="w-100">
						<div class="container">	
							<div>
								<div class="d-flex">
									<div class="collapse  navbar-collapse" id="mynav">
										<div class="flexdel">
											<div class="deliverytime">
												<h5>Delivery in 13 minutes</h5>
											</div>
										</div>
										<div class="flexsearch">
											<div class="search">
												<input type="search" placeholder="search"/>
											</div>
										</div>
										<div class="flexlogin">
											<a  class="loginuser" href="<?= base_url('/userlogin') ?>"><div class="login">
												Login
											</div></a>
										</div>
										<div class="flexadd">
											<div class="d-flex cart">
												<span> <i class="fa-solid fa-cart-shopping"></i> </span>
													
												<div>
													<?php
														if($cart == null){	
													?>
														<div class="mycart">  &nbsp; My Cart</div>
													<?php
														}else{
													?>
														<div class="mycart">  &nbsp; <a href="<?= base_url('/cart') ?>">My Cart</a></div>
													<?php
														}
													?>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</header>
