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
						  name: '<?php echo $tggl1; ?>',
								 data: [<?php echo $t1; ?>] }, 
								  {
						  name: '<?php echo $tggl2; ?>',
								 data: [<?php echo $t2; ?>] }, 
								  {
						 name: '<?php echo $tggl3; ?>',
								 data: [<?php echo $t3; ?>] }, 
								  {
						 name: '<?php echo $tggl4; ?>',
								 data: [<?php echo $t4; ?>] }, 
								  {
						 name: '<?php echo $tggl5; ?>',
								 data: [<?php echo $t5; ?>] }, 
								  {
						  name: '<?php echo $tggl6; ?>',
								 data: [<?php echo $t6; ?>] }, 
								  {
						  name: '<?php echo $tggl7; ?>',
								 data: [<?php echo $t7; ?>] }, 
								  {
						 name: '<?php echo $tggl8; ?>',
								 data: [<?php echo $t8; ?>] }, 
								  {
						 name: '<?php echo $tggl9; ?>',
								 data: [<?php echo $t9; ?>] }, 
								  {
						 name: '<?php echo $tggl10; ?>',
								 data: [<?php echo $t10; ?>] }, 
								  {
						 name: '<?php echo $tggl11; ?>',
								 data: [<?php echo $t11; ?>] }, 
								  {
						 name: '<?php echo $tggl12; ?>',
								 data: [<?php echo $t12; ?>] }, 
								  {
						name: '<?php echo $tggl13; ?>',
								 data: [<?php echo $t13; ?>] }, 
								  {
						name: '<?php echo $tggl14; ?>',
								 data: [<?php echo $t14; ?>] }, 
								  {
						name: '<?php echo $tggl15; ?>',
								 data: [<?php echo $t15; ?>] }, 
								 {
						name: '<?php echo $tggl16; ?>',
								 data: [<?php echo $t16; ?>] }, 
								  {
						name: '<?php echo $tggl17; ?>',
								 data: [<?php echo $t17; ?>] }, 
								  {
						name: '<?php echo $tggl18; ?>',
								 data: [<?php echo $t18; ?>] }, 
								  {
						name: '<?php echo $tggl19; ?>',
								 data: [<?php echo $t19; ?>] }, 
								  {
						name: '<?php echo $tggl20; ?>',
								 data: [<?php echo $t20; ?>] }, 
								  {
						name: '<?php echo $tggl21; ?>',
								 data: [<?php echo $t21; ?>] }, 
								  {
						name: '<?php echo $tggl22; ?>',
								 data: [<?php echo $t22; ?>] }, 
								  {
						name: '<?php echo $tggl23; ?>',
								 data: [<?php echo $t23; ?>] }, 
								  {
						name: '<?php echo $tggl24; ?>',
								 data: [<?php echo $t24; ?>] }, 
								  {
						 name: '<?php echo $tggl25; ?>',
								 data: [<?php echo $t25; ?>] }, 
								  {
						name: '<?php echo $tggl26; ?>',
								 data: [<?php echo $t26; ?>] }, 
								  {
						name: '<?php echo $tggl27; ?>',
								 data: [<?php echo $t27; ?>] }, 
								  {
						name: '<?php echo $tggl28; ?>',
								 data: [<?php echo $t28; ?>] }, 
								  {
						name: '<?php echo $tggl29; ?>',
								 data: [<?php echo $t29; ?>] }, 
								  {
						name: '<?php echo $tggl30; ?>',
								 data: [<?php echo $t30; ?>] }, 
								  {
						name: '<?php echo $tggl31; ?>',
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
						  name: '<?php echo $tggl1; ?>',
								 data: [<?php echo $t1x; ?>] }, 
								  {
						  name: '<?php echo $tggl2; ?>',
								 data: [<?php echo $t2x; ?>] }, 
								  {
						 name: '<?php echo $tggl3; ?>',
								 data: [<?php echo $t3x; ?>] }, 
								  {
						 name: '<?php echo $tggl4; ?>',
								 data: [<?php echo $t4x; ?>] }, 
								  {
						 name: '<?php echo $tggl5; ?>',
								 data: [<?php echo $t5x; ?>] }, 
								  {
						  name: '<?php echo $tggl6; ?>',
								 data: [<?php echo $t6x; ?>] }, 
								  {
						  name: '<?php echo $tggl7; ?>',
								 data: [<?php echo $t7x; ?>] }, 
								  {
						 name: '<?php echo $tggl8; ?>',
								 data: [<?php echo $t8x; ?>] }, 
								  {
						 name: '<?php echo $tggl9; ?>',
								 data: [<?php echo $t9x; ?>] }, 
								  {
						 name: '<?php echo $tggl10; ?>',
								 data: [<?php echo $t10x; ?>] }, 
								  {
						 name: '<?php echo $tggl11; ?>',
								 data: [<?php echo $t11x; ?>] }, 
								  {
						 name: '<?php echo $tggl12; ?>',
								 data: [<?php echo $t12x; ?>] }, 
								  {
						name: '<?php echo $tggl13; ?>',
								 data: [<?php echo $t13x; ?>] }, 
								  {
						name: '<?php echo $tggl14; ?>',
								 data: [<?php echo $t14x; ?>] }, 
								  {
						name: '<?php echo $tggl15; ?>',
								 data: [<?php echo $t15x; ?>] }, 
								 {
						name: '<?php echo $tggl16; ?>',
								 data: [<?php echo $t16x; ?>] }, 
								  {
						name: '<?php echo $tggl17; ?>',
								 data: [<?php echo $t17x; ?>] }, 
								  {
						name: '<?php echo $tggl18; ?>',
								 data: [<?php echo $t18x; ?>] }, 
								  {
						name: '<?php echo $tggl19; ?>',
								 data: [<?php echo $t19x; ?>] }, 
								  {
						name: '<?php echo $tggl20; ?>',
								 data: [<?php echo $t20x; ?>] }, 
								  {
						name: '<?php echo $tggl21; ?>',
								 data: [<?php echo $t21x; ?>] }, 
								  {
						name: '<?php echo $tggl22; ?>',
								 data: [<?php echo $t22x; ?>] }, 
								  {
						name: '<?php echo $tggl23; ?>',
								 data: [<?php echo $t23x; ?>] }, 
								  {
						name: '<?php echo $tggl24; ?>',
								 data: [<?php echo $t24x; ?>] }, 
								  {
						 name: '<?php echo $tggl25; ?>',
								 data: [<?php echo $t25x; ?>] }, 
								  {
						name: '<?php echo $tggl26; ?>',
								 data: [<?php echo $t26x; ?>] }, 
								  {
						name: '<?php echo $tggl27; ?>',
								 data: [<?php echo $t27x; ?>] }, 
								  {
						name: '<?php echo $tggl28; ?>',
								 data: [<?php echo $t28x; ?>] }, 
								  {
						name: '<?php echo $tggl29; ?>',
								 data: [<?php echo $t29x; ?>] }, 
								  {
						name: '<?php echo $tggl30; ?>',
								 data: [<?php echo $t30x; ?>] }, 
								  {
						name: '<?php echo $tggl31; ?>',
								 data: [<?php echo $t31x; ?>] }, 
								 

								 ]
    });
});
</script>
<script type="text/javascript">
  var chart1; // globally available
$(document).ready(function() {
      chart1 = new Highcharts.Chart({
         chart: {
            renderTo: 'pasien',
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
						  name: '<?php echo $tggl1; ?>',
								 data: [<?php echo $t1z; ?>] }, 
								  {
						  name: '<?php echo $tggl2; ?>',
								 data: [<?php echo $t2z; ?>] }, 
								  {
						 name: '<?php echo $tggl3; ?>',
								 data: [<?php echo $t3z; ?>] }, 
								  {
						 name: '<?php echo $tggl4; ?>',
								 data: [<?php echo $t4z; ?>] }, 
								  {
						 name: '<?php echo $tggl5; ?>',
								 data: [<?php echo $t5z; ?>] }, 
								  {
						  name: '<?php echo $tggl6; ?>',
								 data: [<?php echo $t6z; ?>] }, 
								  {
						  name: '<?php echo $tggl7; ?>',
								 data: [<?php echo $t7z; ?>] }, 
								  {
						 name: '<?php echo $tggl8; ?>',
								 data: [<?php echo $t8z; ?>] }, 
								  {
						 name: '<?php echo $tggl9; ?>',
								 data: [<?php echo $t9z; ?>] }, 
								  {
						 name: '<?php echo $tggl10; ?>',
								 data: [<?php echo $t10z; ?>] }, 
								  {
						 name: '<?php echo $tggl11; ?>',
								 data: [<?php echo $t11z; ?>] }, 
								  {
						 name: '<?php echo $tggl12; ?>',
								 data: [<?php echo $t12z; ?>] }, 
								  {
						name: '<?php echo $tggl13; ?>',
								 data: [<?php echo $t13z; ?>] }, 
								  {
						name: '<?php echo $tggl14; ?>',
								 data: [<?php echo $t14z; ?>] }, 
								  {
						name: '<?php echo $tggl15; ?>',
								 data: [<?php echo $t15z; ?>] }, 
								 {
						name: '<?php echo $tggl16; ?>',
								 data: [<?php echo $t16z; ?>] }, 
								  {
						name: '<?php echo $tggl17; ?>',
								 data: [<?php echo $t17z; ?>] }, 
								  {
						name: '<?php echo $tggl18; ?>',
								 data: [<?php echo $t18z; ?>] }, 
								  {
						name: '<?php echo $tggl19; ?>',
								 data: [<?php echo $t19z; ?>] }, 
								  {
						name: '<?php echo $tggl20; ?>',
								 data: [<?php echo $t20z; ?>] }, 
								  {
						name: '<?php echo $tggl21; ?>',
								 data: [<?php echo $t21z; ?>] }, 
								  {
						name: '<?php echo $tggl22; ?>',
								 data: [<?php echo $t22z; ?>] }, 
								  {
						name: '<?php echo $tggl23; ?>',
								 data: [<?php echo $t23z; ?>] }, 
								  {
						name: '<?php echo $tggl24; ?>',
								 data: [<?php echo $t24z; ?>] }, 
								  {
						 name: '<?php echo $tggl25; ?>',
								 data: [<?php echo $t25z; ?>] }, 
								  {
						name: '<?php echo $tggl26; ?>',
								 data: [<?php echo $t26z; ?>] }, 
								  {
						name: '<?php echo $tggl27; ?>',
								 data: [<?php echo $t27z; ?>] }, 
								  {
						name: '<?php echo $tggl28; ?>',
								 data: [<?php echo $t28z; ?>] }, 
								  {
						name: '<?php echo $tggl29; ?>',
								 data: [<?php echo $t29z; ?>] }, 
								  {
						name: '<?php echo $tggl30; ?>',
								 data: [<?php echo $t30z; ?>] }, 
								  {
						name: '<?php echo $tggl31; ?>',
								 data: [<?php echo $t31z; ?>] }, 
								 

								 ]
    });
});
</script>
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>LAPORAN PENDAPATAN DARI TANGGAL <?php echo tgl_indo($tggl1); ?> SAMPAI <?php echo tgl_indo($tggl31); ?></h2>
				
            </div>
<div class="row clearfix">
                <!-- Task Info -->
				 
               
               
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                       
                        <div class="body">
					 <table class="table table-striped">
                                        <thead>
                                            <tr>
                                              
                                                <th>Total Pendapatan Per 1 Bulan </th>
                                                <th><i class=""></i> <font color = "blue">Rp. <?php echo number_format($totalpendapatan2,0,".","."). ''; ?> - Rp. <?php echo number_format($totalpendapatan,0,".","."). ''; ?> =  Rp. <?php echo number_format($totalakhir,0,".","."). ''; ?></font></th>
												
                                            </tr>
											<tr>
												<th>Total Pasien Per 1 Bulan </th>
                                                <th><i class=""></i> <font color = "blue"> <?php echo $totalpasien; ?></font></th>

                                            </tr>
                                        </thead>
                                       
                                    </table>
				
			
				
		 <div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>Laporan Pendaftaran Pasien Perhari dari tanggal <?php echo tgl_indo($tggl1); ?> Sampai <?php echo tgl_indo($tggl31); ?></h2>
                           
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
                            <h2>Laporan Pendapatan dari Uang Subsidi Silang Perhari dari tanggal <?php echo tgl_indo($tggl1); ?> Sampai <?php echo tgl_indo($tggl31); ?></h2>
                           
                        </div>
                        <div class="body">
							<div id="pendapatan2" ></div>

                        </div>
                    </div>
                </div>
                <!-- #END# Task Info -->
            </div>
			 <div class="row clearfix">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>Laporan Pasien Yang Terdaftar Perhari dari tanggal <?php echo tgl_indo($tggl1); ?> Sampai <?php echo tgl_indo($tggl31); ?></h2>
                           
                        </div>
                        <div class="body">
							<div id="pasien" ></div>

                        </div>
                    </div>
                </div>
          </div>
          </div>
		  </div>
							  </div>
                </div><!-- /.tab-content -->
              </div>
        </section><!-- /.content -->
     