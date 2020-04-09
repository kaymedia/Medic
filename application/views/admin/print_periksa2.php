 <?php $no = 1; foreach($periksa1 as $vp1){ 
 $this->tanggal = $vp1->tanggal;} ?>
 <style type="text/css">
	table.tableizer-table {
		font-size: 12px;
		max-width: 100%;
		border: 1px solid #CCC; 
		font-family: Arial, Helvetica, sans-serif;
	} 
	.tableizer-table td {
		padding: 4px;
		margin: 3px;
		border: 1px solid #CCC;
	}
	.tableizer-table th {
		background-color: #00a65a !important; 
		color: #FFF;
		font-weight: bold;
	}
</style>
<link href="<?php echo base_url();?>assets/css/login1.css" rel="stylesheet" type="text/css" />


<div>
    <div class="header-logo-left"><img class="header-img-las" src="<?php echo base_url();?>assets/img/logo.png" style="width:80px;">
	  <div style="font-size:16px; font-weight:bold;" class="roboto"><center>CETAK HASIL PEMERIKSAAN PASIEN</center>
    <div style="font-size:25px; font-weight:bold;" class="roboto"><center><?php echo strtoupper($namaklinik); ?></center>
    <span style="font-size:12px;">
    	<center><?php echo $alamatklinik; ?>  <br>
    	Phone: <?php echo $nohpklinik; ?><br> </center><p><p><p><br><hr>
	<?php foreach($pasien as $vpasien){ ?>
	<p style="font-size:16px; "align="left">Nomor Kartu : <?php echo $vpasien->nomorkartu; ?></p> 
	<p style="font-size:16px; "align="left">Nama : <?php echo $vpasien->namapasien; ?></p> 
	<?php } ?>
    </div>
    </div>
    <div style="float:right;" class="roboto"></div>
   
    <div class="header-logo-right"></div>
	

</div>
<p style="font-size:16px; "align="left">Keluhan</p> 
<table class="tableizer-table"  width="100%">
<thead><tr class="tableizer-firstrow"> 
                                            <th>No</th>
                                            <th>Keluhan</th>
                                            <th>Tanggal</th>
                                            </thead>
											<?php $no = 1; foreach($periksa1 as $vp0){ 
											
											?>
                                    <tbody>
									     <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $vp0->keluhan; ?></td>
                                            <td><?php echo tgl_indo($vp0->tanggal); ?></td>
                                            
										 </tr>
										
									<?php $no++; } ?>
									
								
                                    </tbody>
                                </table>
<p style="font-size:16px; "align="left">Diagnosa</p> 
<table class="tableizer-table"  width="100%">
<thead><tr class="tableizer-firstrow"> 
                                            <th>No</th>
                                            <th>Diagnosa</th>
                                            <th>Tanggal</th>
                                            </thead>
											<?php $no = 1; foreach($periksa1 as $vp1){ 
											$this->tanggal = $vp1->tanggal; 
											$arraybiaya[] = $vp1->biaya;
											
											?>
                                    <tbody>
									     <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $vp1->diagnosa; ?></td>
                                            <td><?php echo tgl_indo($vp1->tanggal); ?></td>
										 </tr>
										
									<?php $no++; } ?>
									
								
                                    </tbody>
                                </table>
								<p style="font-size:16px; "align="left">Tindakan</p> 
								<table class="tableizer-table"  width="100%">
<thead><tr class="tableizer-firstrow"> 
                                            <th>No</th>
                                            <th>Tindakan</th>
                                            <th>Tanggal</th>
                                           </thead>
											<?php $no = 1; foreach($periksa1 as $vp1){ 
											
											?>
                                    <tbody>
									     <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $vp1->tindakan; ?></td>
                                            <td><?php echo tgl_indo($vp1->tanggal); ?></td>
                                            
										 </tr>
										
									<?php $no++; } ?>
									 
                                    </tbody>
                                </table>
								<p style="font-size:16px; "align="left">Obat</p> 
								<table class="tableizer-table"  width="100%">
<thead><tr class="tableizer-firstrow"> 
                                            <th>No</th>
                                            <th>Obat</th>
                                            <th>Dosis</th>
                                            <th>Jumlah Obat</th>
                                            <th>Tanggal</th></thead>
											<?php $no = 1; foreach($periksa3 as $vp1){ 
											$arrayharga[] = $vp1->jumlahobat*$vp1->hargaobat;
											$totalbiaya = array_sum($arraybiaya);
											$totalharga = array_sum($arrayharga);
											$total = $totalbiaya + $totalharga;
											?>
                                    <tbody>
									     <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $vp1->namaobat; ?></td> 
                                            <td><?php echo $vp1->dosis; ?></td> 
                                            <td><?php echo $vp1->jumlahobat; ?></td> 
                                             <td><?php echo tgl_indo($vp1->tanggal); ?></td>
										 </tr>
										
									<?php $no++; } ?>
									
                                    </tbody>
                                </table>
								                                </table>
								<table class="tableizer-table"  width="100%">
											<?php $no = 1; foreach($periksa3 as $vp1){ 
											
											?>
                                    <tbody>
									     
										
									<?php $no++; } ?>
									 <tr>
                                            <td>Total Biaya Pemeriksaan</td>
                                            
                                            <td>Rp.<?php echo number_format($total,0,".","."). ''; ?></td> 
										 </tr>
                                    </tbody>
                                </table>
                                <p align="right"> <?php echo tgl_indo(date('20y-m-d')); ?></p>
<br><br><br>
<p align="right"><b><u><?php echo $nama; ?></u></b></p>
<script>
window.print();
</script>
								