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
            <a class="navbar-brand" href="<?php echo base_url('index.php/admin-control/produk')?>"><img src="<?php echo base_url()."/uploads/Logo.png"; ?>" width="50"/></a>
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
                    <li><a href="<?php echo base_url()."index.php/admin_control/produk"; ?>">Produk</a></li>
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
                    <li role="presentation" class="active"><a href="#">Order</a></li>
                    <li role="presentation"><a href="<?php echo base_url()."index.php/admin_control/invoice"; ?>">Invoice</a></li>
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
                            <td><a href="<?php echo site_url("invoice/update/".$data['ID']); ?>"><button>Update</button></a></td>
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
