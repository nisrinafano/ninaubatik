<html>
<head>
    <link href='<?php echo base_url('assets/css/bootstrap.min.css')?>' rel="stylesheet" type="text/css">
    <link href='<?php echo base_url('assets/css/sb-admin-2.css')?>' rel="stylesheet" type="text/css">
    <link href='<?php echo base_url('assets/css/metisMenu.min.css')?>' rel="stylesheet" type="text/css">
    <link href='<?php echo base_url('assets/css/morris.min.css')?>' rel="stylesheet" type="text/css">
    <title>Ninau Batik</title>
    <link rel="icon" href="<?=base_url().'assets/images/logo.png'?>" type="image/gif">
</head>
<body>
    <nav class="navbar navbar-default navbar-static-top" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo base_url('index.php/admin_control/produk')?>"><img src="<?php echo base_url()."/uploads/Logo.jpg"; ?>" width="50"/></a>
        </div>
        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                Hi, Admin
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" href="<?php echo base_url('index.php/loginadmin')?>">Logout</a>
            </li>
        </ul>
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li><a href="<?php echo base_url('index.php/admin_control/produk')?>">Produk</a></li>
                    <li><a href="<?php echo base_url()."index.php/customer_control/seecustomer"; ?>">Customer</a></li>
                    <li><a href="<?php echo base_url()."index.php/admin_control/order"; ?>">Order</a></li>
                    <li><a href="<?php echo base_url()."index.php/admin_control/testi"; ?>">Testimoni</a></li>
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
                    <li role="presentation" class="active"><a href="#">Order</a></li>
                    <table class="table">
                        <thead>
                            <tr>
                            <th>ID</th>
                            <th>Email Customer</th>
                            <th>Nama</th>
                            <th>Kota</th>
                            <th>Total</th>
                            <th>Status</th>
                            <th>Tanggal</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($order as $data) { ?>
                            <tr>
                            <td><?php echo $data['ID']; ?></td>
                            <td><?php echo $data['emailUser']; ?></td>
                            <td><?php echo $data['customerName']; ?></td>
                            <td><?php echo $data['customerCity']; ?></td>
                            <td><?php echo number_format($data['amount'],0,',','.'); ?></td>
                            <td><?php echo $data['orderStatus']; ?></td>
                            <td><?php echo $data['date']; ?></td>
                            <td><a href="<?php echo base_url("index.php/produk_control/updateOrder/".$data['ID']); ?>"><button>Update</button></a></td>
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
