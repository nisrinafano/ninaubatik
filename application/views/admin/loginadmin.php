<html>
<head>
    <link href='<?php echo base_url('assets/css/bootstrap.min.css')?>' rel="stylesheet" type="text/css">
    <link href='<?php echo base_url('assets/css/sb-admin-2.css')?>' rel="stylesheet" type="text/css">
    <link href='<?php echo base_url('assets/css/metisMenu.min.css')?>' rel="stylesheet" type="text/css">
    <link href='<?php echo base_url('assets/css/morris.min.css')?>' rel="stylesheet" type="text/css">
</head>
<body>
    <jumbotron class="text-center">
        <h2><img src="<?php echo base_url()."/uploads/Logo.png"; ?>" width="200"/></h2>
        <h4>Admin</h4>
    </jumbotron>
    <br> <br>
    <div class="text-center">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <form action="<?php echo base_url().'index.php/admin_control/login'?>" method="post">
                    <table class="table">
                        <tr>
                            <td>Username : </td>
                            <td><input type="text" name="username" /></td>
                        </tr>
                        <tr>
                            <td>Password : </td>
                            <td><input type="password" name="password" /></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" name="submit" value="Login" />
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</body>
</html>