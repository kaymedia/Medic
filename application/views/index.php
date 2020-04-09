<!DOCTYPE html>
<html>
  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Aplikasi Manajemen Klinik</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/waves.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/all-themes.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/moris.css">
	<link href="<?php echo base_url(); ?>/assets/css/font-awesome.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>/assets/sweetalert/sweetalert.css" rel="stylesheet" />
	<script src="<?php echo base_url ()?>/assets/bsb/plugins/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url ()?>/assets/sweetalert/sweetalert.min.js"></script>
   
  </head>

<body class="login-page">
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);">Klinik Utama Saibumi</b></a>
            <small> Aplikasi Manajemen Klinik</small>
        </div>
        <div class="card">
            <div class="body">
                <form role="form" action="<?php echo base_url("/app/cekmasuk"); ?>" enctype="multipart/form-data" method="post">
                    <div class="msg">Masukan Username dan Password Anda.</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-lock"></i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 p-t-5">
                            <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                            <label for="rememberme">Ingat saya</label>
                        </div>
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-pink waves-effect" type="submit">Masuk</button>
                        </div>
                    </div>
                    <div class="row m-t-15 m-b--20">
                        <div class="col-xs-6">
                           &copy; <?= date('Y'); ?>
                        </div>
                        <div class="col-xs-6 align-right">Klinik Utama Saibumi</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script src="<?php echo base_url ()?>/assets/bsb/plugins/bootstrap/js/bootstrap.js"></script>
    <script src="<?php echo base_url ()?>/assets/bsb/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    <script src="<?php echo base_url ()?>/assets/bsb/plugins/node-waves/waves.js"></script>
    <script src="<?php echo base_url ()?>/assets/bsb/plugins/jquery-countto/jquery.countTo.js"></script>
    <script src="<?php echo base_url ()?>/assets/bsb/plugins/raphael/raphael.min.js"></script>
    <script src="<?php echo base_url ()?>/assets/bsb/plugins/morrisjs/morris.js"></script>
    <script src="<?php echo base_url ()?>/assets/bsb/plugins/chartjs/Chart.bundle.js"></script>
    <script src="<?php echo base_url ()?>/assets/bsb/plugins/jquery-sparkline/jquery.sparkline.js"></script>
    <script src="<?php echo base_url ()?>/assets/bsb/js/admin.js"></script>
    <script src="<?php echo base_url ()?>/assets/bsb/js/demo.js"></script>
</body>
</html>