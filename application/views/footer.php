<?php 
$status = ($this->session->userdata('status'));
?>
<div class="newsletter">
		<div class="container">
			<div align="center">
				<h3>Ninau Batik</h3>
				<p>Kualitas Bagus, Harga Bersahabat</p>
			</div>
			<div class="col-md-6 w3agile_newsletter_right">
				
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //newsletter -->
<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="w3_footer_grids">
				<div class="col-md-3 w3_footer_grid">
					<h3>Contact</h3>
					<p>More information, you can contact us on</p>
					<ul class="address">
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Jalan Jatisari Permai V I16, <span>Sidoarjo.</span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">ninaubatik@gmail.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+62 812 324 4434</li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Information</h3>
					<ul class="info"> 
						<li><a href="<?php echo base_url().'index.php/page/about'?>">About Us</a></li>
						<li><a href="<?php echo base_url().'index.php/page/mail'?>">Contact Us</a></li>
						<?php if($status == "login") {
							?> <li><a href="<?php echo base_url().'index.php/page/short-codes'?>">My profile</a></li>
						<?php 
						}?>
						<li><a href="<?php echo base_url().'index.php/page/faq'?>">FAQ's</a></li>
						<li><a href="<?php echo base_url().'index.php/page/products'?>">Special Products</a></li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Category</h3>
					<ul class="info"> 
						<li><a href="<?php echo base_url().'index.php/page/dresses'?>">Kain</a></li>
						<li><a href="<?php echo base_url().'index.php/page/sweaters'?>">Kemeja</a></li>
						<li><a href="<?php echo base_url().'index.php/page/shirts'?>">Mukenah</a></li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Profile</h3>
					<ul class="info"> 
						<li><a href="<?php echo base_url().'index.php/page/checkout'?>">My Cart</a></li>
					</ul>
					<h4>Follow Us</h4>
					<div class="agileits_social_button">
						<ul>
							<li><a href="#" class="facebook"> </a></li>
							<li><a href="#" class="twitter"> </a></li>
							<li><a href="#" class="google"> </a></li>
							<li><a href="#" class="pinterest"> </a></li>
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="footer-copy">
			<div class="footer-copy1">
				<div class="footer-copy-pos">
					<a href="#home1" class="scroll"><img src="<?php echo base_url(); ?>assets/images/arrow.png" alt=" " class="img-responsive" /></a>
				</div>
			</div>
			<div class="container">
				<p>&copy; 2016 Women's Fashion. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
			</div>
		</div>
	</div>
<!-- //footer -->
</body>
</html>