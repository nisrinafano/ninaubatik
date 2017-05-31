<html>
<head>
    <link href='<?php echo base_url('assets/css/bootstrap.min.css')?>' rel="stylesheet" type="text/css">
    <link href='<?php echo base_url('assets/css/sb-admin-2.css')?>' rel="stylesheet" type="text/css">
    <link href='<?php echo base_url('assets/css/metisMenu.min.css')?>' rel="stylesheet" type="text/css">
    <link href='<?php echo base_url('assets/css/morris.min.css')?>' rel="stylesheet" type="text/css">

    <!-- Custom Fonts 
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">-->
</head>
<body>
    <nav class="navbar navbar-default navbar-static-top" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo base_url('index.php/seecustomer')?>">Admin</a>
        </div>
        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                <a class="dropdown-toggle" href="#">Products</a>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" href="<?php echo base_url()."index.php/admin_control/customer"; ?>">Customer</a>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" href="#">Logout</a>
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
                    <li><a href="<?php echo base_url()."index.php/admin_control/produk";?>">Produk</a></li>
                    <li><a href="<?php echo base_url()."index.php/admin_control/customer"; ?>">Customer</a></li>
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
                    <li role="presentation" class="active"><a href="#">Transaksi Customer</a></li>
                    <li role="presentation"><a href="<?php echo base_url()."index.php/admin_control/trans_month"; ?>">Transaksi per Produk</a></li>
                    <li role="presentation"><a href="<?php echo base_url()."index.php/admin_control/trans_prod"; ?>">Transaksi Bulanan</a></li>
                    <table class="table">
                    <thead>
                        <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Jumlah Order</th>
                        <th>Total Order</th>
                        <th>Jumlah Transaksi</th>
                        <th>Total Transaksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($datacustomer as $data) { ?>
                        <tr>
                        <td><?php echo $data['idCustomer']; ?></td>
                        <td><?php echo $data['namaDepan'].' '.$data['namaBelakang']; ?></td>
                        <td><?php echo $data['jumlahOrder']; ?></td>
                        <td><?php echo $data['totalOrder']; ?></td>
                        <td><?php echo $data['jumlahTransaksi']; ?></td>
                        <td><?php echo $data['totalTransaksi']; ?></td>
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