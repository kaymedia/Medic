<?php $totalpendapatan = $t1+$t2+$t3+$t4+$t5+$t6+$t7+$t8+$t9+$t10+$t11+$t12+$t13+$t14+$t15+$t16+$t17+$t18+$t19+$t20+$t21+$t22+$t23+$t24+$t25+$t26+$t27+$t28+$t29+$t30+$t31; ?>
<?php $totalpendapatan2 = $t1x+$t2x+$t3x+$t4x+$t5x+$t6x+$t7x+$t8x+$t9x+$t10x+$t11x+$t12x+$t13x+$t14x+$t15x+$t16x+$t17x+$t18x+$t19x+$t20x+$t21x+$t22x+$t23x+$t24x+$t25x+$t26x+$t27x+$t28x+$t29x+$t30x+$t31x; ?>
<?php $totalakhir = $totalpendapatan2 - $totalpendapatan; ?>
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
            categories: ['Dana Masuk Pertanggal']
         },
         yAxis: {
            title: {
               text: 'Jumlah Pendapatan'
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
<script type="text/javascript">
  var chart1; // globally available
$(document).ready(function() {
      chart1 = new Highcharts.Chart({
         chart: {
            renderTo: 'pendapatan2',
            type: 'column'
         },   
         title: {
            text: ''
         },
         xAxis: {
            categories: ['Dana Masuk Pertanggal']
         },
         yAxis: {
            title: {
               text: 'Jumlah Pendapatan'
            }
         },
          series:             
				[
				
							     {
						  name: '<?php echo date('01-m-20y'); ?>',
								 data: [<?php echo $t1x; ?>] }, 
								  {
						  name: '<?php echo date('02-m-20y'); ?>',
								 data: [<?php echo $t2x; ?>] }, 
								  {
						 name: '<?php echo date('03-m-20y'); ?>',
								 data: [<?php echo $t3x; ?>] }, 
								  {
						 name: '<?php echo date('04-m-20y'); ?>',
								 data: [<?php echo $t4x; ?>] }, 
								  {
						 name: '<?php echo date('05-m-20y'); ?>',
								 data: [<?php echo $t5x; ?>] }, 
								  {
						  name: '<?php echo date('06-m-20y'); ?>',
								 data: [<?php echo $t6x; ?>] }, 
								  {
						  name: '<?php echo date('07-m-20y'); ?>',
								 data: [<?php echo $t7x; ?>] }, 
								  {
						 name: '<?php echo date('08-m-20y'); ?>',
								 data: [<?php echo $t8x; ?>] }, 
								  {
						 name: '<?php echo date('09-m-20y'); ?>',
								 data: [<?php echo $t9x; ?>] }, 
								  {
						 name: '<?php echo date('10-m-20y'); ?>',
								 data: [<?php echo $t10x; ?>] }, 
								  {
						 name: '<?php echo date('11-m-20y'); ?>',
								 data: [<?php echo $t11x; ?>] }, 
								  {
						 name: '<?php echo date('12-m-20y'); ?>',
								 data: [<?php echo $t12x; ?>] }, 
								  {
						name: '<?php echo date('13-m-20y'); ?>',
								 data: [<?php echo $t13x; ?>] }, 
								  {
						name: '<?php echo date('14-m-20y'); ?>',
								 data: [<?php echo $t14x; ?>] }, 
								  {
						name: '<?php echo date('15-m-20y'); ?>',
								 data: [<?php echo $t15x; ?>] }, 
								 {
						name: '<?php echo date('16-m-20y'); ?>',
								 data: [<?php echo $t16x; ?>] }, 
								  {
						name: '<?php echo date('17-m-20y'); ?>',
								 data: [<?php echo $t17x; ?>] }, 
								  {
						name: '<?php echo date('18-m-20y'); ?>',
								 data: [<?php echo $t18x; ?>] }, 
								  {
						name: '<?php echo date('19-m-20y'); ?>',
								 data: [<?php echo $t19x; ?>] }, 
								  {
						name: '<?php echo date('20-m-20y'); ?>',
								 data: [<?php echo $t20x; ?>] }, 
								  {
						name: '<?php echo date('21-m-20y'); ?>',
								 data: [<?php echo $t21x; ?>] }, 
								  {
						name: '<?php echo date('22-m-20y'); ?>',
								 data: [<?php echo $t22x; ?>] }, 
								  {
						name: '<?php echo date('23-m-20y'); ?>',
								 data: [<?php echo $t23x; ?>] }, 
								  {
						name: '<?php echo date('24-m-20y'); ?>',
								 data: [<?php echo $t24x; ?>] }, 
								  {
						 name: '<?php echo date('25-m-20y'); ?>',
								 data: [<?php echo $t25x; ?>] }, 
								  {
						name: '<?php echo date('26-m-20y'); ?>',
								 data: [<?php echo $t26x; ?>] }, 
								  {
						name: '<?php echo date('27-m-20y'); ?>',
								 data: [<?php echo $t27x; ?>] }, 
								  {
						name: '<?php echo date('28-m-20y'); ?>',
								 data: [<?php echo $t28x; ?>] }, 
								  {
						name: '<?php echo date('29-m-20y'); ?>',
								 data: [<?php echo $t29x; ?>] }, 
								  {
						name: '<?php echo date('30-m-20y'); ?>',
								 data: [<?php echo $t30x; ?>] }, 
								  {
						name: '<?php echo date('31-m-20y'); ?>',
								 data: [<?php echo $t31x; ?>] }, 
								 

								 ]
    });
});
</script>
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>LAPORAN PENDAPATAN</h2>
				
            </div>
<div class="row clearfix">
                <!-- Task Info -->
				 
               
               
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                       
                        <div class="body">
					 <table class="table table-striped">
                                        <thead>
                                            <tr>
                                              
                                                <th>Total Pendapatan Bulan Ini </th>
                                                <th><i class=""></i> <font color = "blue">Rp. <?php echo number_format($totalpendapatan2,0,".","."). ''; ?> - Rp. <?php echo number_format($totalpendapatan,0,".","."). ''; ?> =  Rp. <?php echo number_format($totalakhir,0,".","."). ''; ?></font></th>

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
		   <div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>Laporan Pendapatan dari Uang Subsidi Silang Perhari dari tanggal <?php echo tgl_indo(date('20y-m-01')); ?> Sampai <?php echo tgl_indo(date('20y-m-31')); ?></h2>
                           
                        </div>
                        <div class="body">
							<div id="pendapatan2" ></div>

                        </div>
                    </div>
                </div>
                <!-- #END# Task Info -->
            </div>
			
		
			
          </div>
		  </div>
							  </div>
                </div><!-- /.tab-content -->
              </div>
        </section><!-- /.content -->
     