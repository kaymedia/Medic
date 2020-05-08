<!DOCTYPE html>
<html>
  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $judul; ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/waves.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/all-themes.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/moris.css">
	 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>/assets/bsb/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>/assets/sweetalert/sweetalert.css" rel="stylesheet" />
	<script src="<?php echo base_url ()?>/assets/bsb/plugins/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url ()?>/assets/sweetalert/sweetalert.min.js"></script>
    <link href="<?php echo base_url(); ?>/assets/bsb/plugins/multi-select/css/multi-select.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/bsb/plugins/jquery-spinner/css/bootstrap-spinner.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/bsb/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/bsb/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

   
  </head>
 <body class="theme-deep-purple">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Silahkan Tunggu...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
   
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="<?php echo base_url("/admin"); ?>"><?php echo $this->namaklinik; ?></a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                   
                    <!-- #END# Notifications -->
                    <!-- Tasks -->
                    <li class="dropdown">
                         <a href="<?php echo base_url("/admin/logout"); ?>">Keluar</a>
                       
                    </li>
                    <!-- #END# Tasks -->
                    
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
             <!-- User Info -->
            <div class="user-info">
                <div class="image">
                <?php if($this->logo != NULL){
                        ?>
                    <img src="<?php echo base_url();?>assets/img/<?php echo $this->logo; ?>" width="250" alt="User" />
                <?php } ?>
                <?php if($this->logo == NULL){
                        ?>
                    <img src="<?php echo base_url();?>assets/img/default.png" width="100" height= "100" alt="User" />
                <?php } ?>
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $nama; ?></div>
                    <div class="email"><?php echo $namaklinik; ?></div>
                    
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active">
                        <a href="<?php echo base_url()?>admin/index">
                            <i class="fa fa-home" ><span>Home</span></i> 
                        </a>
                    </li>
				<li><a href="<?php echo base_url()?>admin/daftar"><i class="fa fa-pencil-square"> <span>Pendaftaran</span></i></a></li>
				<li><a href="<?php echo base_url()?>admin/periksa "><i class="fa fa-check-square-o"><span>Pemeriksaan</span></i> </a></li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="fa fa-bar-chart-o"><span>Master Data</span> </i> 
					</a>
                        <ul class="ml-menu">
                <li><a href="<?php echo base_url()?>admin/mpasien"><i class="fa fa-folder-open"> Pasien</i></a></li>
                <li><a href="<?php echo base_url()?>admin/mpasienrawat"><i class="fa fa-folder-open">Periksa & Rawat Inap</i></a></li>
                <li><a href="<?php echo base_url()?>admin/mruangan"><i class="fa fa-folder-open">Ruangan</i> </a></li>
                <li><a href="<?php echo base_url()?>admin/mjadwal"><i class="fa fa-folder-open">Jadwal</i> </a></li>
                <li><a href="<?php echo base_url()?>admin/mtindakan"><i class="fa fa-folder-open">Tindakan</i> </a></li>
                <li><a href="<?php echo base_url()?>admin/mdokter"><i class="fa fa-folder-open">Dokter</i> </a></li>
                
                        </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="fa fa-bar-chart-o"><span>Master Obat</span> </i> 
					</a>
                        <ul class="ml-menu">
              
                <li><a href="<?php echo base_url()?>admin/msatuanobat"><i class="fa fa-folder-open">Satuan Obat</i> </a></li>
                <li><a href="<?php echo base_url()?>admin/mjenisobat"><i class="fa fa-folder-open">Jenis Obat</i> </a></li>
                <li><a href="<?php echo base_url()?>admin/mobat"><i class="fa fa-folder-open">Obat</i> </a></li>
                <li><a href="<?php echo base_url()?>admin/mbahanhabispakai"><i class="fa fa-folder-open">Bahan Habis Pakai</i> </a></li>
                <li><a href="<?php echo base_url()?>admin/msuplier"><i class="fa fa-folder-open">Suplier Obat</i> </a></li>
				<li><a href="<?php echo base_url()?>admin/bobat"><i class="fa fa-folder-open">Beli Obat</i> </a></li>

                        </ul>
                </li>
                
				<li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="fa fa-print"><span>Laporan</span> </i> 
					</a>
                        <ul class="ml-menu">
                <li><a href="<?php echo base_url()?>admin/pendapatan"><i class="fa fa-file-pdf-o"> Pendapatan</i></a></li>
				<li><a href="<?php echo base_url()?>admin/lap_pasien"><i class="fa fa-file-pdf-o"> Statistik Pasien</i></a></li> 
				<li><a href="<?php echo base_url()?>admin/lap_obat"><i class="fa fa-file-pdf-o"> Laporan Obat</i></a></li> 
				<li><a href="<?php echo base_url()?>admin/lap_detail"><i class="fa fa-file-pdf-o"> Laporan Lengkap</i></a></li> 
                        </ul>
                </li>
				<li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="fa fa-navicon"><span>Layanan</span> </i> 
					</a>
                        <ul class="ml-menu">
                <li><a href="<?php echo base_url()?>admin/sms"><i class="fa fa-envelope-o"> Sms Gateway</i></a></li>
				
                        </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="fa fa-gear"><span>Pengaturan</span> </i> 
					</a>
                        <ul class="ml-menu">
                <li><a href="<?php echo base_url()?>admin/user"><i class="fa fa-info"> Pengaturan User</i></a></li>
				<li><a href="<?php echo base_url()?>admin/setting"><i class="fa fa-info"> Pengaturan Aplikasi</i></a></li>

                        </ul>
                </li>    
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 20<?php echo date('y'); ?> Klinik Saibumi Utama</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.4
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        
        <!-- #END# Right Sidebar -->
    </section>

	  