<div class="banner10" id="home1">
		<div class="container">
			<h2>Konfirmasi Pembayaran</h2>
		</div>
	</div>
<!-- //banner -->

<!-- breadcrumbs -->
	<div class="breadcrumb_dress">
		<div class="container">
			<ul>
				<li><a href="<?php echo base_url()?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
				<li>Konfirmasi Pembayaran</li>
			</ul>
		</div>
	</div>

    <div class="container">
	   <div class="row">
          <div class="panel panel-info">
            <div class="panel-heading">
            </div>
            <div class="panel-body">
              <div class="row">
              <div class="col-md-1"> 
              </div>
                <div  class="col-md-10"> 
		       <?php echo  $this->session->flashdata('message_konf'); ?>
            <?php echo form_open_multipart('admin_control/konfirmasi_pembayaran/'); ?>
            <form class="form-horizontal" action="<?php echo base_url().'index.php/admin_control/konfirmasi_pembayaran'?>" method="POST" enctype="multipart/form-data">
            <fieldset>
            <div class="form-group">
              <label class="col-md-3 control-label" for="textinput" >Nama Pengirim
              </label>
              <div class="col-md-9">
              <input  name="namapengirim" type="text" class="form-control input-md" required="" > <br>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 control-label" for="textinput">No. Invoice
              </label>  
              <div class="col-md-9">
              <input  name="noinvoice" type="text" class="form-control input-md" required="" > <br>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label" for="textinput">Bukti Pembayaran
              </label>
              <div class="col-md-9">
                <input type="file" name="userFile" id="userFile"> <br>
              </div>  
            </div>
             <div class="form-group">
              <label class="col-md-3 control-label" for="singlebutton"></label>
              <div class="col-md-9">
                <button  name="singlebutton" class="btn btn-primary" type="submit">submit</button>
              </div>
            </div>
            
            </fieldset>
            </form>
                        <?php echo form_close(); ?>
              </div>
            </div>
    </div>
</div>
