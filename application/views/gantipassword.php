<div class="banner10" id="home1">
		<div class="container">
			<h2>Ubah Password</h2>
		</div>
	</div>
<!-- //banner -->

<!-- breadcrumbs -->
	<div class="breadcrumb_dress">
		<div class="container">
			<ul>
				<li><a href="<?php echo base_url()?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
				<li>Ubah Password</li>
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
                <div  align="center">  </div>
		
            <form class="form-horizontal" action="<?php echo base_url().'index.php/home/gantipassword'?>" method="POST">
            <fieldset>
            <h4 style="color: blue" align="center"><?php echo $this->session->flashdata('message');?></h4>
            <div class="form-group">
              <label class="col-md-4 control-label" for="textinput" >Password Baru
              <span style="color: red">*</span> 
              </label>
              <div class="col-md-4">
              <input  name="password" type="password" class="form-control input-md" required="" >
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label" for="textinput">Confirm Password
                <span style="color: red">*</span> 
              </label>  
              <div class="col-md-4">
              <input  name="email" type="password" class="form-control input-md" required="" >
              </div>
            </div>

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
