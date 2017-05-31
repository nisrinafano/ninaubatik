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
                    <li role="presentation"><a href="<?php echo base_url()."index.php/admin_control/produk";?>">Upload Produk</a></li>
                    <li role="presentation" class="active"><a href="#">Lihat Produk</a></li>
                    <table class="table">
                      <tr>
                        <th>Kode Produk</th>
                        <!--<th>Nama Produk</th>-->
                        <th>Gambar</th>
                        <!--<th>Tanggal Beli</th>-->
                        <th>Jumlah</th>
                        <th>Ukuran</th>
                        <th>Berat</th>
                        <th>Harga Beli</th>
                        <th>Harga Jual</th>
                        <th>Toko Beli</th>
                        <th>Kota Beli</th>
                        <!--<th>Keterangan</th>-->
                      </tr>
                    <?php foreach ($dataproduk as $new_item) { ?>
                      <tr>
                        <td><?php echo $new_item['kodeProduk']; ?></td>
                        <!--<td><?//php echo $new_item['namaProduk']; ?></td>-->
                        <td><img src="<?php echo base_url()."/uploads/".$new_item['gambar']; ?>" width="100"/></td>
                        <!--<td><?//php echo $new_item['tanggalBeli']; ?></td>-->
                        <td><?php echo $new_item['jumlah']; ?></td>
                        <td><?php echo $new_item['ukuran']; ?></td>
                        <td><?php echo $new_item['berat']; ?></td>
                        <td><?php echo $new_item['hargaBeli']; ?></td>
                        <td><?php echo $new_item['hargaJual']; ?></td>
                        <td><?php echo $new_item['tokoBeli']; ?></td>
                        <td><?php echo $new_item['kotaBeli']; ?></td>
                        <!--<td><?php echo $new_item['keterangan']; ?></td>-->

                        <td><a href="<?php echo site_url("produk_control/update/".$new_item['kodeProduk']); ?>">Update</a>
                        <a href="<?php echo site_url("produk_control/delete/".$new_item['kodeProduk']); ?>">Delete</a></td>
                      </tr>
                    <?php } ?>
                    </table>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>