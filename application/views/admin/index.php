<script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/highcharts.js"></script>
<script type="text/javascript">
  var chart1; // globally available
$(document).ready(function() {
      chart1 = new Highcharts.Chart({
         chart: {
            renderTo: 'pendapatan',
            type: 'column'
         },   
         title: {
            text: ''
         },
         xAxis: {
            categories: ['Pasien Terdaftar Masuk Pertanggal']
         },
         yAxis: {
            title: {
               text: 'Jumlah Pasien'
            }
         },
          series:             
				[
				
							     {
						  name: '<?php echo date('01-m-20y'); ?>',
								 data: [<?php echo $t1; ?>] }, 
								  {
						  name: '<?php echo date('02-m-20y'); ?>',
								 data: [<?php echo $t2; ?>] }, 
								  {
						 name: '<?php echo date('03-m-20y'); ?>',
								 data: [<?php echo $t3; ?>] }, 
								  {
						 name: '<?php echo date('04-m-20y'); ?>',
								 data: [<?php echo $t4; ?>] }, 
								  {
						 name: '<?php echo date('05-m-20y'); ?>',
								 data: [<?php echo $t5; ?>] }, 
								  {
						  name: '<?php echo date('06-m-20y'); ?>',
								 data: [<?php echo $t6; ?>] }, 
								  {
						  name: '<?php echo date('07-m-20y'); ?>',
								 data: [<?php echo $t7; ?>] }, 
								  {
						 name: '<?php echo date('08-m-20y'); ?>',
								 data: [<?php echo $t8; ?>] }, 
								  {
						 name: '<?php echo date('09-m-20y'); ?>',
								 data: [<?php echo $t9; ?>] }, 
								  {
						 name: '<?php echo date('10-m-20y'); ?>',
								 data: [<?php echo $t10; ?>] }, 
								  {
						 name: '<?php echo date('11-m-20y'); ?>',
								 data: [<?php echo $t11; ?>] }, 
								  {
						 name: '<?php echo date('12-m-20y'); ?>',
								 data: [<?php echo $t12; ?>] }, 
								  {
						name: '<?php echo date('13-m-20y'); ?>',
								 data: [<?php echo $t13; ?>] }, 
								  {
						name: '<?php echo date('14-m-20y'); ?>',
								 data: [<?php echo $t14; ?>] }, 
								  {
						name: '<?php echo date('15-m-20y'); ?>',
								 data: [<?php echo $t15; ?>] }, 
								 {
						name: '<?php echo date('16-m-20y'); ?>',
								 data: [<?php echo $t16; ?>] }, 
								  {
						name: '<?php echo date('17-m-20y'); ?>',
								 data: [<?php echo $t17; ?>] }, 
								  {
						name: '<?php echo date('18-m-20y'); ?>',
								 data: [<?php echo $t18; ?>] }, 
								  {
						name: '<?php echo date('19-m-20y'); ?>',
								 data: [<?php echo $t19; ?>] }, 
								  {
						name: '<?php echo date('20-m-20y'); ?>',
								 data: [<?php echo $t20; ?>] }, 
								  {
						name: '<?php echo date('21-m-20y'); ?>',
								 data: [<?php echo $t21; ?>] }, 
								  {
						name: '<?php echo date('22-m-20y'); ?>',
								 data: [<?php echo $t22; ?>] }, 
								  {
						name: '<?php echo date('23-m-20y'); ?>',
								 data: [<?php echo $t23; ?>] }, 
								  {
						name: '<?php echo date('24-m-20y'); ?>',
								 data: [<?php echo $t24; ?>] }, 
								  {
						 name: '<?php echo date('25-m-20y'); ?>',
								 data: [<?php echo $t25; ?>] }, 
								  {
						name: '<?php echo date('26-m-20y'); ?>',
								 data: [<?php echo $t26; ?>] }, 
								  {
						name: '<?php echo date('27-m-20y'); ?>',
								 data: [<?php echo $t27; ?>] }, 
								  {
						name: '<?php echo date('28-m-20y'); ?>',
								 data: [<?php echo $t28; ?>] }, 
								  {
						name: '<?php echo date('29-m-20y'); ?>',
								 data: [<?php echo $t29; ?>] }, 
								  {
						name: '<?php echo date('30-m-20y'); ?>',
								 data: [<?php echo $t30; ?>] }, 
								  {
						name: '<?php echo date('31-m-20y'); ?>',
								 data: [<?php echo $t31; ?>] }, 
								 

								 ]
    });
});
</script>
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>
           <div class="alert alert-info alert-dismissible" role="alert">
                               
                               <marquee> Mohon Pastikan Data dalam <b><a href="<?= base_url("admin/mobat")?>"><font color="white">Master Obat</font></a></b>, <b><a href="<?= base_url("admin/mruangan")?>"><font color="white">Master Ruangan</font></a></b> atau <b><a href="<?= base_url("admin/bobat")?>"><font color="white">Master Beli Obat</font></a></b> Telah terinput, Terimakasih.</marquee>                            </div>
            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan ">
                        <div class="icon">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="content">
                            <div class="text">PASIEN BARU</div>
                              <a href="<?php echo base_url("/admin/daftar");?>" class="small-box-footer"><font color="white">Daftarkan <i class="fa fa-arrow-circle-right"></i></a></font>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan ">
                        <div class="icon">
                            <i class="fa fa-group"></i>
                        </div>
                        <div class="content">
                            <div class="text">PASIEN RAWAT INAP</div>
                            <a href="<?php echo base_url("/admin/mpasienrawat");?>" class="small-box-footer"><font color="white">Lihat Pasien <i class="fa fa-arrow-circle-right"></i></a></font> 

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan ">
                        <div class="icon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <div class="content">
                            <div class="text">MASTER JADWAL</div>
                             <a href="<?php echo base_url("/admin/mjadwal");?>" class="small-box-footer"><font color="white">Lihat Jadwal <i class="fa fa-arrow-circle-right"></i></a></font> 

                    </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan ">
                        <div class="icon">
                            <i class="fa fa-bar-chart-o"></i>
                        </div>
                        <div class="content">
                            <div class="text">LAPORAN PENDAPATAN</div>
                             <a href="<?php echo base_url("/admin/pendapatan");?>" class="small-box-footer"><font color="white">Lihat Laporan <i class="fa fa-arrow-circle-right"></i></a></font> 
                      
                    </div>
                    </div>
                </div>
            </div>
            <!-- #END# Widgets -->
        

            <div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>Laporan Pasien Yang Terdaftar Perhari dari tanggal <?php echo tgl_indo(date('20y-m-01')); ?> Sampai <?php echo tgl_indo(date('20y-m-31')); ?></h2>
                           
                        </div>
                        <div class="body">
							<div id="pendapatan" ></div>

                        </div>
                    </div>
                </div>
                <!-- #END# Task Info -->
            </div>
        </div>
    </section>