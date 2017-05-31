<html>
<head>
    <link href='<?php echo base_url('assets/css/bootstrap.min.css')?>' rel="stylesheet" type="text/css">
    <link href='<?php echo base_url('assets/css/sb-admin-2.css')?>' rel="stylesheet" type="text/css">
    <link href='<?php echo base_url('assets/css/metisMenu.min.css')?>' rel="stylesheet" type="text/css">
    <link href='<?php echo base_url('assets/css/morris.min.css')?>' rel="stylesheet" type="text/css">
</head>
<body>
    <nav class="navbar navbar-default navbar-static-top" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo base_url('index.php/produk-up')?>"><img src="<?php echo base_url()."/uploads/Logo.png"; ?>" width="50"/></a>
        </div>
        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                <a class="dropdown-toggle" href="#">Products</a>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" href="<?php echo base_url()."index.php/customer_control/seecustomer"; ?>">Customer</a>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" href="#">Products</a>
            </li>
        </ul>
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="glyphicon glyphicon-search"></i>
                                </button>
                            </span>
                        </div>
                    </li>
                    <li><a href="<?php echo base_url('index.php')?>">Produk</a></li>
                    <li><a href="<?php echo base_url()."index.php/customer_control/seecustomer"; ?>">Customer</a></li>
                    <li><a href="<?php echo base_url()."index.php/admin_control/order"; ?>">Order</a></li>
                    <li><a href="<?php echo base_url()."index.php/admin_control/report"; ?>">Report</a></li>
                </ul>
            </div>
            <div class="col-md-10"></div>
        </div>

    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-10">
                <ul class="nav nav-tabs">
                    <li role="presentation" class="active"><a href="#">Customer</a></li>
                    <li role="presentation"><a href="<?php echo base_url()."index.php/admin_control/transcustomer"; ?>">Transaksi Customer</a></li>
                    <table class="table">
                        <thead>
                            <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Kota / Kabupaten</th>
                            <th>Provinsi</th>
                            <th>No Telepon</th>
                            <th>Email</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($datacustomer as $data) { ?>
                            <tr>
                            <td><?php echo $data['idCustomer']; ?></td>
                            <td><?php echo $data['namaDepan'].' '.$data['namaBelakang']; ?></td>
                            <td><?php echo $data['alamat']; ?></td>
                            <td><?php echo $data['kotaKab']; ?></td>
                            <td><?php echo $data['provinsi']; ?></td>
                            <td><?php echo $data['noTelp']; ?></td>
                            <td><?php echo $data['email']; ?></td>
                            </tr>
                        </tbody>
                        <?php } ?>
                    </table>
                </ul>
            </div>
        </div>
        
    </div>
</body>
</html>
