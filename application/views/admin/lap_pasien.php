
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
               text: 'Jumlah P'
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
                <h2>LAPORAN PASIEN</h2>
				
            </div>
<div class="row clearfix">
                <!-- Task Info -->
				 
               
               
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                       
                        <div class="body">
					  <table class="table table-striped">
                                        <thead>
                                            <tr>
                                              
                                                <th>Total Terdaftar Bulan Ini </th>
                                                <th><i class="fa fa-user"></i> <font color = "blue"><?php echo $totalpasien; ?></font> Pasien</th>

                                            </tr>
                                        </thead>
                                       
                                    </table>
			
						 
        
		  <div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>Laporan Pendaftaran Pasien Perhari dari tanggal <?php echo tgl_indo(date('20y-m-01')); ?> Sampai <?php echo tgl_indo(date('20y-m-31')); ?></h2>
                           
                        </div>
                        <div class="body">
							<div id="pendapatan" ></div>

                        </div>
                    </div>
                </div>
                <!-- #END# Task Info -->
           
		  
		
			
          </div>
		  </div>
							  </div>
                </div><!-- /.tab-content -->
              </div>
        </section><!-- /.content -->
     