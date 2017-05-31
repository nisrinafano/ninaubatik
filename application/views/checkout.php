<!-- banner -->
	<div class="banner10" id="home1">
		<div class="container">
			<h2>Checkout</h2>
		</div>
	</div>
<!-- //banner -->

<!-- breadcrumbs -->
	<div class="breadcrumb_dress">
		<div class="container">
			<ul>
				<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
				<li>Checkout</li>
			</ul>
		</div>
	</div>
<!-- //breadcrumbs -->

<!-- checkout -->
    <section>
        <div class="checkout">
		<div class="container">
            <?php $j=0;
                foreach($this->cart->contents() as $d) :
                    $j++; 
                endforeach; 
            ?>
			<h3>Your shopping cart contains: <span> <?php echo $j;
                //$this->cart->format_number($this->cart->total()); ?> Products</span></h3>
			<div class="checkout-right">
				<table class="table table-bordered table-striped table-hover">
			<thead>
				<tr>
					<th>No</th>
					<th>Product</th>
					<th>Jumlah</th>
					<th>Price</th>
					<th>Subtotal</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<?php 
					$i=0;
					foreach ($this->cart->contents() as $items) : 
					$i++;
				?>
				<tr>
					<td><?= $i ?></td>
					<td><?= $items['name'] ?></td>
					<td><?= $items['qty'] ?></td>
					<td align="right"><?= number_format($items['price'],0,',','.') ?></td>
					<td align="right"><?= number_format($items['subtotal'],0,',','.') ?></td>
					<td><a href="<?php echo base_url().'index.php/cart/clear_cartsatu/'.$i ?>"> <button> Delete </button> </a></td>
				</tr>
				<?php endforeach; ?>
			</tbody>
			<tfoot>
				<tr>
					<td align="right" colspan="4">Total </td>
					<td align="right"><?= number_format($this->cart->total(),0,',','.'); ?></td>
				</tr>
			</tfoot>
		</table>
				
				</div>
                    <div class="checkout-right-basket">
                        <a href="<?php echo base_url().'index.php/invoice/addOrder'?>"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Kirim Tagihan</a>
                    </div>
				<div class="clearfix"> </div>
			</div>
		</div>
    </section>
    <section>
        <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <h3 class="text-center">Pengiriman dan Pembayaran</h3>
                <?php echo form_open_multipart('invoice/addOrder/'); ?>
                <form method="post">
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="textinput">Nama Penerima</label>  
                        <div class="col-md-9">
                            <input  name="customerName" type="text" value="<?php echo $datacustomer['namaDepan'].' '.$datacustomer['namaBelakang'];?>"  class="form-control input-md" >
                        </div>
                    </div>
                    <br><br>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="textinput">Nomor Telepon</label>  
                        <div class="col-md-9">
                            <input  name="customerPhone" type="text" value="<?php echo $datacustomer['noTelp'];?>"  class="form-control input-md" >
                        </div>
                    </div>
                    <br><br>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="textinput">Alamat</label>  
                        <div class="col-md-9">
                            <input  name="customerAddress" type="text" value="<?php echo $datacustomer['alamat'];?>"  class="form-control input-md" >
                        </div>
                    </div>
                    <br><br>
                    <!--<div class="form-group">
                        <label class="col-md-3 control-label" for="textinput">Kota</label>  
                        <div class="col-md-9">
                            <input  name="customerCity" type="text" value="<?php //echo $datacustomer['kotaKab'];?>"  class="form-control input-md" >
                        </div>
                    </div>
                    <br><br>-->
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="textinput">Kota</label>
                        <div class="col-md-9">
                            <select name="customerCity" class="form-control">
                                <?php foreach($ongkir as $d) { ?>
                                <option value="<?php echo $d['kota'];?>"><?php echo $d['kota'];?></option>
                                <?php } ?>
                            </select>    
                        </div>
                    </div><br><br>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="textinput">Metode Pengiriman</label>
                        <div class="col-md-9">
                            <select name="shippingMethod" class="form-control">
                                <?php foreach($metode as $d) { ?>
                                <option value="<?php echo $d['jenisPaket'];?>"><?php echo $d['jenisPaket'];?></option>
                                <?php } ?>
                            </select>    
                        </div>
                    </div><br><br>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="singlebutton"></label>
                        <div class="col-md-4">
                            <button  name="singlebutton" class="btn btn-primary">submit</button>
                        </div>
                    </div>
                    <div class="checkout-right-basket">
                        <a href="<?php echo base_url().'index.php/invoice/addOrder'?>"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Kirim Tagihan</a>
                    </div>
                    <?php echo form_close(); ?>
                </form>
                <br><br>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
    </section>
	
	<div class="modal video-modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModal6">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="images/39.jpg" alt=" " class="img-responsive" />
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
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star.png" alt=" " class="img-responsive" />
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
<!-- //checkout -->
