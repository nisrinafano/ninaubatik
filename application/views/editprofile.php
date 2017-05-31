<div class="banner10" id="home1">
		<div class="container">
			<h2>Edit Profile</h2>
		</div>
	</div>
<!-- //banner -->

<!-- breadcrumbs -->
	<div class="breadcrumb_dress">
		<div class="container">
			<ul>
				<li><a href="<?php echo base_url()?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
				<li>Edit Profile</li>
			</ul>
		</div>
	</div>

    <div class="container">
	   <div class="row">
          <div class="panel panel-info">
            <div class="panel-heading">
              <?php foreach ($data as $x) {
                      ?>
              <h3 class="panel-title"><?= $x['namaDepan']; ?>
              <span><?=    $x['namaBelakang']; } ?>  </span>
                                                                
              </h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div  align="center">  </div>
		
            <form class="form-horizontal" action="<?php echo base_url().'index.php/home/aksi_edit'?>" method="POST">
            <fieldset>
            <?php foreach ($data as $d ) {
                # code...
            ?>
            <div class="form-group">
              <label class="col-md-4 control-label" for="textinput">Username</label>  
              <div class="col-md-4">
              <input  name="username" type="text" value="<?= $d['username']; ?>"  class="form-control input-md" >
                
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label" for="textinput">Email</label>  
              <div class="col-md-4">
              <input  name="email" type="text" value="<?= $d['email']; ?>"  class="form-control input-md" readonly="">
                
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="textinput">Nama Depan</label>  
              <div class="col-md-4">
              <input  name="namadepan" type="text" value="<?= $d['namaDepan']; ?>"  class="form-control input-md">
                
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="textinput">Nama Belakang</label>  
              <div class="col-md-4">
              <input  name="namabelakang" type="text" value="<?= $d['namaBelakang']; ?>"  class="form-control input-md">
                
              </div>
            </div>

              <!-- Textarea -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="textarea">Alamat Pengiriman</label>
              <div class="col-md-4">                     
                <textarea class="form-control"  name="alamat" value=""><?= $d['alamat']; ?></textarea>
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="textinput">Kabupaten / Kota</label>  
              <div class="col-md-4">
              <input name="kabupaten" type="text" value="<?= $d['kotaKab']; ?>" class="form-control input-md">
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label" for="textinput">Provinsi</label>  
              <div class="col-md-4">
              <input name="provinsi" type="text" value="<?= $d['provinsi']; ?>" class="form-control input-md">
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label" for="textinput">No Telp</label>  
              <div class="col-md-4">
              <input name="notelp" type="text" value="<?= $d['noTelp']; ?>" class="form-control input-md">
              </div>
            </div>
            <?php }?>

            <!-- Button -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="singlebutton"></label>
              <div class="col-md-4">
                <button  name="singlebutton" class="btn btn-primary">submit</button>
              </div>
            </div>

            </fieldset>
            </form>

            </div>
    </div>
</div>
