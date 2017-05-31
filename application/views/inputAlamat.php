<!-- banner -->    
    <div class="banner10" id="home1">
		<div class="container">
			<h2>Checkout</h2>
		</div>
	</div>
<!-- banner end-->

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

<div class="container">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <h3 class="text-center">Pengiriman dan Pembayaran</h3>
            <form method="post">
                <div class="form-group">
                    <div class="col-md-3"><input type="hidden"></div>  
                    <div class="col-md-9">
                        <input  name="invoiceNumber" type="hidden" value="<?php echo $datacustomer['namaDepan'].' '.$datacustomer['namaBelakang'];?>"  class="form-control input-md" >
                    </div> 
                </div>
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
            </form>
            <br><br>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>
