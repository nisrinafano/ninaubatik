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
                    <li role="presentation" class="active"><a href="#">Upload Produk</a></li>
                    <li role="presentation"><a href="<?php echo base_url()."index.php/admin_control/seeproduk";?>">Lihat Produk</a></li>
                    <?php echo form_open_multipart('produk_control/create/'); ?>
                    <form method="POST">
                        <table class="table">
                            <tr>
                                <td>Kode Produk</td>
                                <td><input type="text" name="kodeProduk" /></td>
                            </tr>
                            <tr>
                                <td>Nama Produk</td>
                                <td><input type="text" name="namaProduk" /></td>
                            </tr>
                            <tr>
                                <td>Tanggal Beli</td>
                                <td><input type="date" name="tanggalBeli" /></td>
                            </tr>
                            <tr>
                                <td>Gambar1</td>
                                <td><input type="file" name="userfile" size="20" /></td>
                            </tr>
                            <tr>
                                <td>Gambar2</td>
                                <td><input type="file" name="userfile1" size="20" /></td>
                            </tr>
                            <tr>
                                <td>Jumlah</td>
                                <td><input type="text" name="jumlah" /></td>
                            </tr>
                            <tr>
                                <td>Ukuran</td>
                                <td><input type="text" name="ukuran" /></td>
                            </tr>
                            <tr>
                                <td>Berat</td>
                                <td><input type="text" name="berat" /></td>
                            </tr>
                            <tr>
                                <td>Kategori</td>
                                <td><input type="text" name="kategori" /></td>
                            </tr>
                            <tr>
                                <td>Jenis</td>
                                <td><input type="text" name="jenis" /></td>
                            </tr>
                            <tr>
                                <td>Toko Beli</td>
                                <td><input type="text" name="tokoBeli" /></td>
                            </tr>
                            <tr>
                                <td>Kota Beli</td>
                                <td><input type="text" name="kotaBeli" /></td>
                            </tr>
                            <tr>
                                <td>Harga Beli</td>
                                <td><input type="text" name="hargaBeli" /></td>
                            </tr>
                            <tr>
                                <td>Harga Jual</td>
                                <td><input type="text" name="hargaJual" /></td>
                            </tr>
                            <tr>
                                <td>Keterangan</td>
                                <td><textarea type="textarea" name="keterangan" rows="8" cols="40"></textarea></td>
                            </tr>
                            <tr>
                                <td><input type="hidden" name="is_submit" value="1" /></td>
                                <td colspan="2"><input type="submit" name="submit" value="Upload" /></td>
                            </tr>
                        </table> 
                        <?php echo form_close(); ?>
                    </form>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>