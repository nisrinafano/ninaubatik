<!-- banner -->    
    <div class="banner10" id="home1">
		<div class="container">
			<h2>Checkout</h2>
		</div>
	</div>
<!-- banner end-->

<!-- breadcrumbs -->
	<div class="breadcrumb_dress">
		<div class="container">
			<ul>
				<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
				<li>Checkout</li>
			</ul>
		</div>
	</div>
<!-- //breadcrumbs -->

<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <br><br><h3 class="text-center">Terimakasih telah berbelanja di Ninau Batik</h3><br><br>
            <h4>Berikut ini adalah rincian order Anda :</h4>
            <table class="table">
                <tr>
                    <td>Nomor Invoice : </td>
                    <td><p><?php echo $order['invoiceNumber']?></p></td>
                </tr>
                <tr>
                    <td>Nama Penerima : </td>
                    <td><p><?php echo $order['customerName']?></p></td>   
                </tr>
                <tr>
                    <td>Nomor Telepon Penerima : </td>
                    <td><p><?php echo $order['customerPhone']?></p></td>   
                </tr>
                <tr>
                    <td>Alamat Penerima : </td>
                    <td><p><?php echo $order['customerAddress']?><br><?php echo $order['customerCity']?></p></td>   
                </tr>
                <tr>
                    <td>Total Pembelian : </td>
                    <td><p>Rp <?php echo number_format($order['amount'],0,',','.'); ?></p></td>   
                </tr>
            </table>
            <h5 class="text-center">Silahkan melakukan transfer sejumlah total pembelian ke :</h5><br>
            <h6 class="text-center">Rekening BNI Syariah</h6><br>
            <h5 class="text-center">0383 382 061</h5><br>
            <h6 class="text-center">a.n. Nisrina Fadhilah Fano</h6><br><br><br>
            <h6 class="text-center">Regards,</h6><br>
            <h6 class="text-center">Ninau Batik</h6><br>
            <br><br>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
