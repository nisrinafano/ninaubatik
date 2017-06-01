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
                    <li role="presentation"><a href="<?php echo base_url()."index.php/admin_control/order";?>">Order</a></li>
                    <li role="presentation" class="active"><a href="#">Update Order</a></li>
                    <?php echo form_open_multipart('produk_control/updateOrder/'.$order['ID']); ?>
                    <form method="POST">
                        <table class="table">
                            <tr>
                                <td>ID</td>
                                <td><input type="text" name="kodeProduk" value="<?php echo $order['ID']; ?>" class='form-control'/></td>
                            </tr>
                            <!--<tr>
                                <td>Email</td>
                                <td><input type="text" name="emailUser" value="<?php echo $order['emailUser']; ?>"/></td>
                            </tr>
                            <tr>
                                <td>Nama Penerima</td>
                                <td><input type="text" name="namaCustomer" value="<?php echo $order['customerName']; ?>"/></td>
                            </tr>
                            <tr>
                                <td>Nomor Telepon Penerima</td>
                                <td><input type="text" name="teleponCustomer" value="<?php echo $order['customerPhone']; ?>"/></td>
                            </tr>
                            <tr>
                                <td>Alamat Penerima</td>
                                <td><input type="text" name="alamatCustomer" value="<?php echo $order['customerAddress']; ?>"/></td>
                            </tr>
                            <tr>
                                <td>Kota Penerima</td>
                                <td><input type="text" name="kotaCustomer" value="<?php echo $dataproduk['customerCity']; ?>"/></td>
                            </tr>
                            <tr>
                                <td>Metode Pengiriman</td>
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
                            </tr>-->
                            <tr>
                                <td>Status Order</td>
                                <td>
                                    <select name="orderStatus" class="form-control">
                                        <option value="unpaid">Unpaid</option>
                                        <option value="paid">Paid</option>
                                        <option value="shipped">Shipped</option>
                                        <option value="closed">Closed</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Resi Pengiriman</td>
                                <td><input type="text" name="shippingResi" class='form-control'/></td>
                            </tr>
                            <tr>
                                <td>Payment Method</td>
                                <td><input type="text" name="paymentMethod" class='form-control'/></td>
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