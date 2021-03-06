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
                        <!--<td><?php //echo $new_item['keterangan']; ?></td>-->

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