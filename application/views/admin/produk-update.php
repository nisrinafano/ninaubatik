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
                    <li role="presentation"><a href="#">Upload Produk</a></li>
                    <li role="presentation"><a href="<?php echo base_url()."index.php/admin_control/seeproduk";?>">Lihat Produk</a></li>
                    <li role="presentation" class="active"><a href="#">Update Produk</a></li>
                    <?php echo form_open_multipart('produk_control/update/'.$dataproduk['kodeProduk']); ?>
                    <form method="POST">
                        <table class="table">
                            <tr>
                                <td>Kode Produk</td>
                                <td><input type="text" name="kodeProduk" value="<?php echo $dataproduk['kodeProduk']; ?>"/></td>
                            </tr>
                            <tr>
                                <td>Nama Produk</td>
                                <td><input type="text" name="namaProduk" value="<?php echo $dataproduk['namaProduk']; ?>"/></td>
                            </tr>
                            <tr>
                                <td>Tanggal Beli</td>
                                <td><input type="date" name="tanggalBeli" value="<?php echo $dataproduk['tanggalBeli']; ?>"/></td>
                            </tr>
                            <tr>
                                <td>Jumlah</td>
                                <td><input type="text" name="jumlah" value="<?php echo $dataproduk['jumlah']; ?>"/></td>
                            </tr>
                            <tr>
                                <td>Ukuran</td>
                                <td><input type="text" name="ukuran" value="<?php echo $dataproduk['ukuran']; ?>"/></td>
                            </tr>
                            <tr>
                                <td>Berat</td>
                                <td><input type="text" name="berat" value="<?php echo $dataproduk['berat']; ?>"/></td>
                            </tr>
                            <tr>
                                <td>Toko Beli</td>
                                <td><input type="text" name="tokoBeli" value="<?php echo $dataproduk['tokoBeli']; ?>"/></td>
                            </tr>
                            <tr>
                                <td>Kota Beli</td>
                                <td><input type="text" name="kotaBeli" value="<?php echo $dataproduk['kotaBeli']; ?>"/></td>
                            </tr>
                            <tr>
                                <td>Harga Beli</td>
                                <td><input type="text" name="hargaBeli" value="<?php echo $dataproduk['hargaBeli']; ?>"/></td>
                            </tr>
                            <tr>
                                <td>Harga Jual</td>
                                <td><input type="text" name="hargaJual" value="<?php echo $dataproduk['hargaJual']; ?>"/></td>
                            </tr>
                            <tr>
                                <td>Keterangan</td>
                                <td><textarea type="textarea" name="keterangan" rows="8" cols="40" value="<?php echo $dataproduk['keterangan']; ?>"></textarea></td>
                            </tr>
                            <tr>
                                <td><input type="hidden" name="is_submit" value="1" /></td>
                                <td colspan="2"><input type="submit" name="submit" value="Upload" /></td>
                            </tr>
                        </table> 
                        <?php echo form_close(); ?>
                    </form>
                    <a href="<?php echo base_url()."index.php/admin_control/seeproduk"; ?>"><span>Edit Gambar</span></a>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>