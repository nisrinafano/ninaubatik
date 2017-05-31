<html>
<head>
    <link href='<?php echo base_url('css/bootstrap.css')?>' rel="stylesheet" type="text/css">
    <link href='<?php echo base_url('css/sb-2-admin.css')?>' rel="stylesheet" type="text/css">
</head>
<body>
    <nav class="navbar navbar-default navbar-static-top" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo base_url('index.php/seecustomer')?>">Admin</a>
        </div>
        <ul class="nav navbar-top-links navbar-right"></ul>
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
                    <li><a href="datacustomer.php">Customer</a></li>
                    <li><a href="<?php echo base_url()."index.php/admin_control/order"; ?>">Order</a></li>
                    <li><a href="datacustomer.php">Report</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <ul class="nav nav-tabs">
            <li role="presentation" class="active"><a href="#">Transaksi Customer</a></li>
            <li role="presentation"><a href="#">Transaksi per Produk</a></li>
            <li role="presentation"><a href="#">Transaksi Bulanan</a></li>
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
</body>
</html>