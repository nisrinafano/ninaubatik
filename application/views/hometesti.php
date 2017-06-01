
<!-- //header -->
<!-- banner -->
	<div class="banner" id="home1">
		<div class="container">
			<!--<h3>fashions fade, <span>style is eternal</span></h3>-->
		</div>
	</div>
<!-- //banner -->

<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container">
			<div class="col-md-12 wthree_banner_bottom_right">
				<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					<ul id="myTab" class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home">Kain</a></li>
						<li role="presentation"><a href="#kemeja" role="tab" id="kemeja-tab" data-toggle="tab" aria-controls="kemeja">Kemeja</a></li>
						<li role="presentation"><a href="#mukena" role="tab" id="mukena-tab" data-toggle="tab" aria-controls="mukena">Mukena</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
							<div class="agile_ecommerce_tabs">
							    <?php foreach($data['kain'] as $d) { ?>
								<div class="col-md-3 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="<?php echo base_url()."/uploads/".$d['gambar']; ?>" alt=" " class="img-responsive" />
									    <img src="<?php echo base_url()."/uploads/".$d['gambar1']; ?>" alt=" " class="img-responsive" />
										<img src="<?php echo base_url()."/uploads/".$d['gambar']; ?>" alt=" " class="img-responsive" />
									    <img src="<?php echo base_url()."/uploads/".$d['gambar1']; ?>" alt=" " class="img-responsive" />
										<img src="<?php echo base_url()."/uploads/".$d['gambar']; ?>" alt=" " class="img-responsive" />
									    <img src="<?php echo base_url()."/uploads/".$d['gambar1']; ?>" alt=" " class="img-responsive" />
										<img src="<?php echo base_url()."/uploads/".$d['gambar']; ?>" alt=" " class="img-responsive" />
									    <img src="<?php echo base_url()."/uploads/".$d['gambar1']; ?>" alt=" " class="img-responsive" />
										<!--<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>-->
									</div>
									<h5><a href="<?php echo base_url().'index.php/page/single/'.$d['kodeProduk']; ?>"><?php echo $d['namaProduk']?></a></h5>
									<div class="simpleCart_shelfItem">
										<p><i class="item_price">Rp <?php echo number_format($d['hargaJual'],0,',','.'); ?></i></p>
										<p><a class="item_add" href="<?php echo base_url()."index.php/cart/add_to_cart/".$d['ID'] ;?>">Add to cart</a></p>
									</div>
								</div>
								<?php } ?>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="kemeja" aria-labelledby="kemeja-tab">
							<div class="agile_ecommerce_tabs">
								<?php foreach($data['kemeja'] as $d) { ?>
								<div class="col-md-3 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="<?php echo base_url()."/uploads/".$d['gambar']; ?>" alt=" " class="img-responsive" />
									    <img src="<?php echo base_url()."/uploads/".$d['gambar1']; ?>" alt=" " class="img-responsive" />
										<img src="<?php echo base_url()."/uploads/".$d['gambar']; ?>" alt=" " class="img-responsive" />
									    <img src="<?php echo base_url()."/uploads/".$d['gambar1']; ?>" alt=" " class="img-responsive" />
										<img src="<?php echo base_url()."/uploads/".$d['gambar']; ?>" alt=" " class="img-responsive" />
									    <img src="<?php echo base_url()."/uploads/".$d['gambar1']; ?>" alt=" " class="img-responsive" />
										<img src="<?php echo base_url()."/uploads/".$d['gambar']; ?>" alt=" " class="img-responsive" />
									    <img src="<?php echo base_url()."/uploads/".$d['gambar1']; ?>" alt=" " class="img-responsive" />
										<!--<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>-->
									</div>
									<h5><a href="<?php echo base_url().'index.php/page/single/'.$d['kodeProduk']; ?>"><?php echo $d['namaProduk']?></a></h5>
									<div class="simpleCart_shelfItem">
										<p><i class="item_price">Rp <?php echo number_format($d['hargaJual'],0,',','.'); ?></i></p>
										<p><a class="item_add" href="<?php echo base_url()."index.php/cart/add_to_cart/".$d['ID'] ;?>">Add to cart</a></p>
									</div>
								</div>
								<?php } ?>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="mukena" aria-labelledby="mukena-tab">
							<div class="agile_ecommerce_tabs">
								<?php foreach($data['mukena'] as $d) { ?>
								<div class="col-md-3 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="<?php echo base_url()."/uploads/".$d['gambar']; ?>" alt=" " class="img-responsive" />
									    <img src="<?php echo base_url()."/uploads/".$d['gambar1']; ?>" alt=" " class="img-responsive" />
										<img src="<?php echo base_url()."/uploads/".$d['gambar']; ?>" alt=" " class="img-responsive" />
									    <img src="<?php echo base_url()."/uploads/".$d['gambar1']; ?>" alt=" " class="img-responsive" />
										<img src="<?php echo base_url()."/uploads/".$d['gambar']; ?>" alt=" " class="img-responsive" />
									    <img src="<?php echo base_url()."/uploads/".$d['gambar1']; ?>" alt=" " class="img-responsive" />
										<img src="<?php echo base_url()."/uploads/".$d['gambar']; ?>" alt=" " class="img-responsive" />
									    <img src="<?php echo base_url()."/uploads/".$d['gambar1']; ?>" alt=" " class="img-responsive" />
										<!--<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>-->
									</div>
									<h5><a href="<?php echo base_url().'index.php/page/single/'.$d['kodeProduk']; ?>"><?php echo $d['namaProduk']?></a></h5>
									<div class="simpleCart_shelfItem">
										<p><i class="item_price">Rp <?php echo number_format($d['hargaJual'],0,',','.'); ?></i></p>
										<p><a class="item_add" href="<?php echo base_url()."index.php/cart/add_to_cart/".$d['ID'] ;?>">Add to cart</a></p>
									</div>
								</div>
								<?php } ?>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
					<div class=" container">
				<div class= "col-md-12" >
				<br> <br> <hr>
				<h2 align = "center"> Testimoni </h2>
				 </div>
				<div class="row">
				
				<div class="col-md-8 col-md-offset-2">
                <div class="quote"><i class="fa fa-quote-left fa-4x"></i></div>
				<div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="3000">
				  <!-- Carousel indicators -->
                  <ol class="carousel-indicators">
				    <li data-target="#fade-quote-carousel" data-slide-to="0"></li>
				    <li data-target="#fade-quote-carousel" data-slide-to="1"></li>
				    <li data-target="#fade-quote-carousel" data-slide-to="2" class="active"></li>
                    <li data-target="#fade-quote-carousel" data-slide-to="3"></li>
                    <li data-target="#fade-quote-carousel" data-slide-to="4"></li>
                    <li data-target="#fade-quote-carousel" data-slide-to="5"></li>
				  </ol>
				  <!-- Carousel items -->
				  <div class="carousel-inner">
				     <?php foreach($data['testimoni'] as $d) { ?>
				    <div class="active item">
                        <!--<div class="profile-circle" style="background-color: rgba(0,0,0,.2);"></div>-->
				    	<blockquote>
				    		<p><?php echo $d['testimoni']; ?></p>
				    	</blockquote>	
				    	<p> <?php echo $d['nama']; ?> - <?php echo $d['email']?></p><br><br>
				    </div>
				    <?php } ?>
				    <!--<div class="item">
                        <div class="profile-circle" style="background-color: rgba(77,5,51,.2);"></div>
				    	<blockquote>
				    		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
				    	</blockquote>
				    </div>
				    <div class="active item">
                        <div class="profile-circle" style="background-color: rgba(145,169,216,.2);"></div>
				    	<blockquote>
				    		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
				    	</blockquote>
				    </div>
                    <div class="item">
                        <div class="profile-circle" style="background-color: rgba(77,5,51,.2);"></div>
    			    	<blockquote>
				    		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
				    	</blockquote>
				    </div>
                    <div class="item">
                        <div class="profile-circle" style="background-color: rgba(77,5,51,.2);"></div>
    			    	<blockquote>
				    		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
				    	</blockquote>
				    </div>
                    <div class="item">
                        <div class="profile-circle" style="background-color: rgba(77,5,51,.2);"></div>
    			    	<blockquote>
				    		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
				    		
				    	</blockquote>	
				    </div>-->
				  </div>
				</div>
			</div>							
		</div>
				</div>
				<div align="center">
					<a href="#" data-toggle="modal" data-target="#myModal"> <button  name="singlebutton" class="btn btn-primary" type="submit">Tambahkan Testimoni</button> </a>
				</div>
					<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal88"
		aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
						&times;</button>
					<h4 class="modal-title" id="myModalLabel"> Tambahkan Testimoni Anda!</h4>
				</div>
				<div class="modal-body modal-body-sub">
					<div class="row">
						<form action="<?php echo base_url().'index.php/testi_control/add_data' ?>" class="form-horizontal" method="post">			
						   <div class="form-group">
				              <label class="col-md-3 control-label" for="textinput" >Nama Anda
				              </label>
				              <div class="col-md-9">
				              <input  name="nama" type="text" class="form-control input-md" required="" > <br>
				              </div>
				            </div>

				            <div class="form-group">
				              <label class="col-md-3 control-label" for="email">Email Anda
				              </label>  
				              <div class="col-md-9">
				              <input  name="email" type="text" class="form-control input-md" required="" > <br>
				              </div>
				            </div>
				            <div class="form-group">
				              <label class="col-md-3 control-label" for="textinput">Testimoni Anda
				              </label>  
				              <div class="col-md-9">
				              <textarea name="testimoni" type="text" class="form-control input-md" required="">   </textarea> <br>
				              </div>
				            </div>
				            <div class="form-group">
					            <label class="col-md-3 control-label" for="singlebutton"></label>
					              <div class="col-md-9">
					                <input type="hidden" name="is_submit" value="1" />
					                <button  name="singlebutton" class="btn btn-primary" type="submit">submit</button>
					              </div>
					            </div>
						</form>
						<div class="col-md-12 modal_body_left modal_body_left1" style="border-right: 1px dotted #C2C2C2;padding-right:3em;">
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
					<!--modal-video-->
				<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
							</div>
							<section>
								<div class="modal-body">
									<div class="col-md-5 modal_body_left">
										<img src="<?php echo base_url(); ?>assets/images/20.jpg" alt=" " class="img-responsive" />
									</div>
									<div class="col-md-7 modal_body_right">
										<h4>a good look women's shirt</h4>
										<p>Ut enim ad minim veniam, quis nostrud 
											exercitation ullamco laboris nisi ut aliquip ex ea 
											commodo consequat.Duis aute irure dolor in 
											reprehenderit in voluptate velit esse cillum dolore 
											eu fugiat nulla pariatur. Excepteur sint occaecat 
											cupidatat non proident, sunt in culpa qui officia 
											deserunt mollit anim id est laborum.</p>
										<div class="rating">
											<div class="rating-left">
												<img src="<?php echo base_url(); ?>assets/images/star-.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="<?php echo base_url(); ?>assets/images/star-.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="<?php echo base_url(); ?>assets/images/star-.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="<?php echo base_url(); ?>assets/images/star.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="<?php echo base_url(); ?>assets/images/star.png" alt=" " class="img-responsive" />
											</div>
											<div class="clearfix"> </div>
										</div>
										<div class="modal_body_right_cart simpleCart_shelfItem">
											<p><span>$320</span> <i class="item_price">$250</i></p>
											<p><a class="item_add" href="#">Add to cart</a></p>
										</div>
										<h5>Color</h5>
										<div class="color-quality">
											<ul>
												<li><a href="#"><span></span>Red</a></li>
												<li><a href="#" class="brown"><span></span>Yellow</a></li>
												<li><a href="#" class="purple"><span></span>Purple</a></li>
												<li><a href="#" class="gray"><span></span>Violet</a></li>
											</ul>
										</div>
									</div>
									<div class="clearfix"> </div>
								</div>
							</section>
						</div>
					</div>
				</div>
				<div class="modal video-modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModal1">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
							</div>
							<section>
								<div class="modal-body">
									<div class="col-md-5 modal_body_left">
										<img src="<?php echo base_url(); ?>assets/images/63.jpg" alt=" " class="img-responsive" />
									</div>
									<div class="col-md-7 modal_body_right">
										<h4>a good look black women's jeans</h4>
										<p>Ut enim ad minim veniam, quis nostrud 
											exercitation ullamco laboris nisi ut aliquip ex ea 
											commodo consequat.Duis aute irure dolor in 
											reprehenderit in voluptate velit esse cillum dolore 
											eu fugiat nulla pariatur. Excepteur sint occaecat 
											cupidatat non proident, sunt in culpa qui officia 
											deserunt mollit anim id est laborum.</p>
										<div class="rating">
											<div class="rating-left">
												<img src="<?php echo base_url(); ?>assets/images/star-.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="<?php echo base_url(); ?>assets/images/star-.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="<?php echo base_url(); ?>assets/images/star-.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="<?php echo base_url(); ?>assets/images/star.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="<?php echo base_url(); ?>assets/images/star.png" alt=" " class="img-responsive" />
											</div>
											<div class="clearfix"> </div>
										</div>
										<div class="modal_body_right_cart simpleCart_shelfItem">
											<p><span>$320</span> <i class="item_price">$250</i></p>
											<p><a class="item_add" href="#">Add to cart</a></p>
										</div>
										<h5>Color</h5>
										<div class="color-quality">
											<ul>
												<li><a href="#"><span></span>Red</a></li>
												<li><a href="#" class="brown"><span></span>Yellow</a></li>
												<li><a href="#" class="purple"><span></span>Purple</a></li>
												<li><a href="#" class="gray"><span></span>Violet</a></li>
											</ul>
										</div>
									</div>
									<div class="clearfix"> </div>
								</div>
							</section>
						</div>
					</div>
				</div>
				<div class="modal video-modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModal2">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
							</div>
							<section>
								<div class="modal-body">
									<div class="col-md-5 modal_body_left">
										<img src="<?php echo base_url(); ?>assets/images/23.jpg" alt=" " class="img-responsive" />
									</div>
									<div class="col-md-7 modal_body_right">
										<h4>a good look women's Watch</h4>
										<p>Ut enim ad minim veniam, quis nostrud 
											exercitation ullamco laboris nisi ut aliquip ex ea 
											commodo consequat.Duis aute irure dolor in 
											reprehenderit in voluptate velit esse cillum dolore 
											eu fugiat nulla pariatur. Excepteur sint occaecat 
											cupidatat non proident, sunt in culpa qui officia 
											deserunt mollit anim id est laborum.</p>
										<div class="rating">
											<div class="rating-left">
												<img src="<?php echo base_url(); ?>assets/images/star-.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="<?php echo base_url(); ?>assets/images/star-.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="<?php echo base_url(); ?>assets/images/star-.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="<?php echo base_url(); ?>assets/images/star.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="<?php echo base_url(); ?>assets/images/star.png" alt=" " class="img-responsive" />
											</div>
											<div class="clearfix"> </div>
										</div>
										<div class="modal_body_right_cart simpleCart_shelfItem">
											<p><span>$320</span> <i class="item_price">$250</i></p>
											<p><a class="item_add" href="#">Add to cart</a></p>
										</div>
										<h5>Color</h5>
										<div class="color-quality">
											<ul>
												<li><a href="#"><span></span>Red</a></li>
												<li><a href="#" class="brown"><span></span>Yellow</a></li>
												<li><a href="#" class="purple"><span></span>Purple</a></li>
												<li><a href="#" class="gray"><span></span>Violet</a></li>
											</ul>
										</div>
									</div>
									<div class="clearfix"> </div>
								</div>
							</section>
						</div>
					</div>
				</div>
				<div class="modal video-modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModal3">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
							</div>
							<section>
								<div class="modal-body">
									<div class="col-md-5 modal_body_left">
										<img src="<?php echo base_url(); ?>assets/images/24.jpg" alt=" " class="img-responsive" />
									</div>
									<div class="col-md-7 modal_body_right">
										<h4>a good look women's Sandal</h4>
										<p>Ut enim ad minim veniam, quis nostrud 
											exercitation ullamco laboris nisi ut aliquip ex ea 
											commodo consequat.Duis aute irure dolor in 
											reprehenderit in voluptate velit esse cillum dolore 
											eu fugiat nulla pariatur. Excepteur sint occaecat 
											cupidatat non proident, sunt in culpa qui officia 
											deserunt mollit anim id est laborum.</p>
										<div class="rating">
											<div class="rating-left">
												<img src="<?php echo base_url(); ?>assets/images/star-.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="<?php echo base_url(); ?>assets/images/star-.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="<?php echo base_url(); ?>assets/images/star-.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="<?php echo base_url(); ?>assets/images/star.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="<?php echo base_url(); ?>assets/images/star.png" alt=" " class="img-responsive" />
											</div>
											<div class="clearfix"> </div>
										</div>
										<div class="modal_body_right_cart simpleCart_shelfItem">
											<p><span>$320</span> <i class="item_price">$250</i></p>
											<p><a class="item_add" href="#">Add to cart</a></p>
										</div>
										<h5>Color</h5>
										<div class="color-quality">
											<ul>
												<li><a href="#"><span></span>Red</a></li>
												<li><a href="#" class="brown"><span></span>Yellow</a></li>
												<li><a href="#" class="purple"><span></span>Purple</a></li>
												<li><a href="#" class="gray"><span></span>Violet</a></li>
											</ul>
										</div>
									</div>
									<div class="clearfix"> </div>
								</div>
							</section>
						</div>
					</div>
				</div>
				<div class="modal video-modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModal4">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
							</div>
							<section>
								<div class="modal-body">
									<div class="col-md-5 modal_body_left">
										<img src="<?php echo base_url(); ?>assets/images/22.jpg" alt=" " class="img-responsive" />
									</div>
									<div class="col-md-7 modal_body_right">
										<h4>a good look women's Necklace</h4>
										<p>Ut enim ad minim veniam, quis nostrud 
											exercitation ullamco laboris nisi ut aliquip ex ea 
											commodo consequat.Duis aute irure dolor in 
											reprehenderit in voluptate velit esse cillum dolore 
											eu fugiat nulla pariatur. Excepteur sint occaecat 
											cupidatat non proident, sunt in culpa qui officia 
											deserunt mollit anim id est laborum.</p>
										<div class="rating">
											<div class="rating-left">
												<img src="<?php echo base_url(); ?>assets/images/star-.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="<?php echo base_url(); ?>assets/images/star-.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="<?php echo base_url(); ?>assets/images/star-.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="<?php echo base_url(); ?>assets/images/star.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="<?php echo base_url(); ?>assets/images/star.png" alt=" " class="img-responsive" />
											</div>
											<div class="clearfix"> </div>
										</div>
										<div class="modal_body_right_cart simpleCart_shelfItem">
											<p><span>$320</span> <i class="item_price">$250</i></p>
											<p><a class="item_add" href="#">Add to cart</a></p>
										</div>
										<h5>Color</h5>
										<div class="color-quality">
											<ul>
												<li><a href="#"><span></span>Red</a></li>
												<li><a href="#" class="brown"><span></span>Yellow</a></li>
												<li><a href="#" class="purple"><span></span>Purple</a></li>
												<li><a href="#" class="gray"><span></span>Violet</a></li>
											</ul>
										</div>
									</div>
									<div class="clearfix"> </div>
								</div>
							</section>
						</div>
					</div>
				</div>
				<div class="modal video-modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModal5">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
							</div>
							<section>
								<div class="modal-body">
									<div class="col-md-5 modal_body_left">
										<img src="<?php echo base_url(); ?>assets/images/35.jpg" alt=" " class="img-responsive" />
									</div>
									<div class="col-md-7 modal_body_right">
										<h4>a good look women's Jacket</h4>
										<p>Ut enim ad minim veniam, quis nostrud 
											exercitation ullamco laboris nisi ut aliquip ex ea 
											commodo consequat.Duis aute irure dolor in 
											reprehenderit in voluptate velit esse cillum dolore 
											eu fugiat nulla pariatur. Excepteur sint occaecat 
											cupidatat non proident, sunt in culpa qui officia 
											deserunt mollit anim id est laborum.</p>
										<div class="rating">
											<div class="rating-left">
												<img src="<?php echo base_url(); ?>assets/images/star-.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="<?php echo base_url(); ?>assets/images/star-.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="<?php echo base_url(); ?>assets/images/star-.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="<?php echo base_url(); ?>assets/images/star.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="<?php echo base_url(); ?>assets/images/star.png" alt=" " class="img-responsive" />
											</div>
											<div class="clearfix"> </div>
										</div>
										<div class="modal_body_right_cart simpleCart_shelfItem">
											<p><span>$320</span> <i class="item_price">$250</i></p>
											<p><a class="item_add" href="#">Add to cart</a></p>
										</div>
										<h5>Color</h5>
										<div class="color-quality">
											<ul>
												<li><a href="#"><span></span>Red</a></li>
												<li><a href="#" class="brown"><span></span>Yellow</a></li>
												<li><a href="#" class="purple"><span></span>Purple</a></li>
												<li><a href="#" class="gray"><span></span>Violet</a></li>
											</ul>
										</div>
									</div>
									<div class="clearfix"> </div>
								</div>
							</section>
						</div>
					</div>
				</div>
				<div class="modal video-modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModal6">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
							</div>
							<section>
								<div class="modal-body">
									<div class="col-md-5 modal_body_left">
										<img src="<?php echo base_url(); ?>assets/images/39.jpg" alt=" " class="img-responsive" />
									</div>
									<div class="col-md-7 modal_body_right">
										<h4>a good look women's Long Skirt</h4>
										<p>Ut enim ad minim veniam, quis nostrud 
											exercitation ullamco laboris nisi ut aliquip ex ea 
											commodo consequat.Duis aute irure dolor in 
											reprehenderit in voluptate velit esse cillum dolore 
											eu fugiat nulla pariatur. Excepteur sint occaecat 
											cupidatat non proident, sunt in culpa qui officia 
											deserunt mollit anim id est laborum.</p>
										<div class="rating">
											<div class="rating-left">
												<img src="<?php echo base_url(); ?>assets/images/star-.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="<?php echo base_url(); ?>assets/images/star-.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="<?php echo base_url(); ?>assets/images/star-.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="<?php echo base_url(); ?>assets/images/star.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="<?php echo base_url(); ?>assets/images/star.png" alt=" " class="img-responsive" />
											</div>
											<div class="clearfix"> </div>
										</div>
										<div class="modal_body_right_cart simpleCart_shelfItem">
											<p><span>$320</span> <i class="item_price">$250</i></p>
											<p><a class="item_add" href="#">Add to cart</a></p>
										</div>
										<h5>Color</h5>
										<div class="color-quality">
											<ul>
												<li><a href="#"><span></span>Red</a></li>
												<li><a href="#" class="brown"><span></span>Yellow</a></li>
												<li><a href="#" class="purple"><span></span>Purple</a></li>
												<li><a href="#" class="gray"><span></span>Violet</a></li>
											</ul>
										</div>
									</div>
									<div class="clearfix"> </div>
								</div>
							</section>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //banner-bottom -->
<!-- newsletter -->
	