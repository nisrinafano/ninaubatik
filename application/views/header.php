<?php 
$status = ($this->session->userdata('status'));
$email = $this->session->userdata('email');
?><!DOCTYPE html>
<html>
<head>
<title>Ninau Batik </title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Women's Fashion Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url(); ?>assets/css/fasthover.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<!-- //js -->
<!-- countdown -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.countdown.css" />
<!-- //countdown -->
<!-- cart -->
<script src="<?php echo base_url(); ?>assets/js/simpleCart.min.js"></script>
<!-- cart -->
<!-- for bootstrap working -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<link href='//fonts.googleapis.com/css?family=Glegoo:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smooth-scrolling -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- //end-smooth-scrolling -->
</head>
	
<body>
<!-- header -->
	<div class="modal fade" id="myModal88" tabindex="-1" role="dialog" aria-labelledby="myModal88"
		aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
						&times;</button>
					<h4 class="modal-title" id="myModalLabel">
						Don't Wait, Login now!</h4>
				</div>
				<div class="modal-body modal-body-sub">
					<div class="row">
						<div class="col-md-12 modal_body_left modal_body_left1" style="border-right: 1px dotted #C2C2C2;padding-right:3em;">
							<div class="sap_tabs">	
								<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
									<ul>
										<li class="resp-tab-item" aria-controls="tab_item-0"><span>Sign in</span></li>
										<li class="resp-tab-item" aria-controls="tab_item-1"><span>Sign up</span></li>
									</ul>		
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
										<div class="facts">
											<div class="register">
												<form action="<?php echo base_url().'index.php/home/login' ?>" method="post">			
													<input name="email" placeholder="Email Address" type="text" required="">						
													<input name="password" placeholder="Password" type="password" required="">	

													<p style="color: red"><?php echo $this->session->flashdata('error');?></p>									
													<div class="sign-up">
														<input type="submit" value="Sign in"/>
													</div>
												</form>
											</div>
										</div> 
									</div>	

									<div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
										<div class="facts">
											<div class="register">
												<form action="<?php echo base_url().'index.php/home/signUp' ?>" method="post">			
													<input placeholder="Nama Depan" name="namadepan" type="text" required="">
													<input placeholder="Nama Belakang" name="namabelakang" type="text" required="">
													<input placeholder="Email Address" name="email" type="email" required="">	
													<input placeholder="Password" name="password" type="password" required="">	
													<input placeholder="Confirm Password" name="confirmassword" type="password" required="">
													<div class="sign-up">
														<input type="submit" value="Create Account"/>
													</div>
												</form>
											</div>
										</div>
									</div> 			        					            	      
								</div>	
							</div>
							<script src="<?php echo base_url(); ?>assets/js/easyResponsiveTabs.js" type="text/javascript"></script>
							<script type="text/javascript">
								$(document).ready(function () {
									$('#horizontalTab').easyResponsiveTabs({
										type: 'default', //Types: default, vertical, accordion           
										width: 'auto', //auto or any width like 600px
										fit: true   // 100% fit in a container
									});
								});
							</script>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="header">
		<div class="container">
			<div class="w3l_login">
			<?php  
				if ($status == "login"){
					?>
					<a href="<?php echo base_url().'index.php/home/logout' ?>" >
					<span class="glyphicon glyphicon-log-out" aria-hidden="true"> Logout</span> </a>
				<?php }
				else if ($_SESSION['page'] == 'home'){ ?>
					<script>
					$('#myModal88').modal('show');
					</script>
					<a href="#" data-toggle="modal" data-target="#myModal88"><span class="glyphicon glyphicon-user" aria-hidden="true"> Login</span></a>	
				<?php } else { 	?>
					<a href="#" data-toggle="modal" data-target="#myModal88"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
		
			<?php } ?>

			
			</div>
			<div class="w3l_logo">
				<h1 align="center"><a href="<?php echo base_url()?>">Ninau Batik<span>Your Batik Shop</span></a></h1>
			</div>
			<div class="cart box_1">
				<a href="<?php echo base_url().'index.php/page/checkout'?>">
					<div class="total">
                        <?php $j=0;
                        foreach($this->cart->contents() as $d) :
                            $j = $j + $d['qty']; 
                        endforeach; ?>	
					<span class="#"></span> <span <?php echo $j; //$this->cart->total_items()?> ></span>  items</div>
					<img src="<?php echo base_url(); ?>assets/images/bag.png" alt="" />
				</a>
				<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
				<div class="clearfix"> </div>
			</div>	
			<div class="clearfix"> </div>
		
	</div>
	<div class="navigation">
		<div class="container">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header nav_2">
					<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div> 
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav">
						<li class="active"><a href="<?php echo base_url().'index.php/page'?>" class="act">Home</a></li>	
						<!-- Mega Menu -->
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Products <b class="caret"></b></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="row">
									<div class="col-sm-3">
										<ul class="multi-column-dropdown">
											<h6>Kain</h6>
											<li><a href="<?php echo base_url().'index.php/page/dresses'?>">Harga dibawah Rp100.000 <span>New</span></a></li>
											<li><a href="<?php echo base_url().'index.php/page/sweaters'?>">Harga Rp100.000 - Rp300.000</a></li>
											<li><a href="<?php echo base_url().'index.php/page/skirts'?>">Harga >Rp300.000</a></li>
										</ul>
									</div>
									<div class="col-sm-3">
										<ul class="multi-column-dropdown">
											<h6>Kemeja</h6>
											<li><a href="<?php echo base_url().'index.php/page/salwars'?>">Lengan Panjang</a></li>
											<li><a href="<?php echo base_url().'index.php/page/sarees'?>">Lengan Pendek<span>New</span></a></li>
										</ul>
									</div>
									<div class="col-sm-2">
										<ul class="multi-column-dropdown">
											<h6>Mukenah</h6>
											<li><a href="<?php echo base_url().'index.php/page/sandals'?>">Mukenah batik</a></li>
										</ul>
									</div>
									<div class="col-sm-4">
										
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
						</li>
						<li><a href="<?php echo base_url().'index.php/page/about'?>">About Us</a></li>
						<li><?php if($status == "login") { ?>
							<a href="<?php echo base_url().'index.php/page/myprofile'?>">My Profile</a>
						<?php }
							?></li>
						<li><a href="<?php echo base_url().'index.php/page/form_confirm'?>">Konfirmasi Pembayaran</a></li>
					</ul>
				</div>
			</nav>
		</div>
	</div>