
<!-- banner -->
	<div class="banner10" id="home1">
		<div class="container">
			<h2>My Profile</h2>
		</div>
	</div>
<!-- //banner -->

<!-- breadcrumbs -->
	<div class="breadcrumb_dress">
		<div class="container">
			<ul>
				<li><a href="<?php echo base_url()?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
				<li>My Profile</li>
			</ul>
		</div>
	</div>
<!-- //breadcrumbs -->
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
                <div class="col-md-3 col-lg-3 " align="center">  </div>
                
                <div class=" col-md-3 col-lg-6 ">
                  <table class="table table-user-information">
                    <tbody>
                    <?php foreach ($data as $d) {
                      ?>
                    
                      <tr>
                        <td>Username</td>
                        <td>: <?= $d['username']; ?></td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td>: <?=  $d['email']; ?></td>
                      </tr>
                      <tr>
                        <td>Nama Depan</td>
                        <td>: <?=  $d['namaDepan']; ?></td>
                      </tr>
                   
                         <tr>
                             <tr>
                        <td>Nama Belakang</td>
                        <td>:<?= $d['namaBelakang']; ?></td>
                      </tr>
                        <tr>
                        <td>Alamat</td>
                        <td>: <?=  $d['alamat']; ?></td>
                      </tr>
                      <tr>
                        <td>Kota/Kabupaten</td>
                        <td>: <?=  $d['kotaKab']; ?></td>
                      </tr>
                        <td>Provinsi</td>
                        <td>: <?=  $d['provinsi']; ?>
                        </td>
                           
                      </tr>
                      <tr>
                        <td>No Telp</td>
                        <td>: <?= $d['noTelp']; ?></td>
                      </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                  

                </div>
              </div>
            </div>
                 <div class="panel-footer">
                            <a href="<?php echo base_url().'index.php/page/editprofile'?>" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                            <span class="pull-right"><a href="<?php echo base_url().'index.php/page/gantipassword'?>" data-original-title="Ganti password" data-toggle="tooltip" type="text" >Ganti password</a>
                            </span>
                       
                    </div>
            
          </div>
        </div>
      </div>
    </div>