
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
	  <div style="font-size:16px; font-weight:bold;" class="roboto"><center>REKAM MEDIS PASIEN</center>
    <div style="font-size:25px; font-weight:bold;" class="roboto"><center><?php echo strtoupper($namaklinik); ?></center>
    <span style="font-size:12px;">
    	<center><?php echo $alamatklinik; ?>  <br>
    	Phone: <?php echo $nohpklinik; ?><br> </center><p><p><p><br><hr>
	<?php foreach($pasien as $vpasien){ ?>
	<p style="font-size:16px; "align="left">Nama : <?php echo $vpasien->namapasien; ?></p> 
	<p style="font-size:16px; "align="left">Nomor Kartu : <?php echo $vpasien->nomorkartu; ?></p> 
	<?php } ?>
	<?php foreach($alergi as $valergi){ ?>
	<p align="left">Status Alergi : <?php echo $valergi->statusalergi; ?></p> 
	<p align="left">Alergi Terhadap : <?php echo $valergi->alergi; ?></p> 
	<?php } ?>
    </div>
    </div>
    <div style="float:right;" class="roboto"></div>
   
    <div class="header-logo-right"></div>
	

</div>
<p style="font-size:16px; "align="left">Diagnosa</p> 
<table class="tableizer-table"  width="100%">
<thead><tr class="tableizer-firstrow"> 
                                            <th>No</th>
                                            <th>Kode Pemeriksaan</th>
                                            <th>Tanggal</th>
                                            <th>Diagnosa</th>
                                            </thead>
											<?php $no = 1; foreach($rm1 as $rm1){ 
											
											
											?>
                                    <tbody>
									<?php if ($rm1->diagnosa != "" ) { ?>
									     <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $rm1->kode; ?></td>
                                            <td><?php echo tgl_indo($rm1->tanggal); ?></td>
                                            <td><?php echo $rm1->diagnosa; ?></td>
                                            
										 </tr>
									<?php } ?>
										
									<?php $no++; } ?>
									
								
                                    </tbody>
                                </table>
								<p style="font-size:16px; "align="left">Tindakan</p> 
								<table class="tableizer-table"  width="100%">
<thead><tr class="tableizer-firstrow"> 
                                            <th>No</th>
                                            <th>Kode Pemeriksaan</th>
                                            <th>Tanggal</th>
                                            <th>Tindakan</th>
                                            <th>Biaya</th>
                                           </thead>
											<?php $no = 1; foreach($rm2 as $rm2){ 
											
											?>
                                    <tbody>
									<?php if ($rm2->tindakan != "" or $rm2->biaya != "") { ?>
									     <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $rm2->kode; ?></td>
											<td><?php echo tgl_indo($rm2->tanggal); ?></td>
                                            <td><?php echo $rm2->tindakan; ?></td>
                                            <td>Rp.<?php echo number_format($rm2->biaya,0,".","."). ''; ?></td>
                                            
										 </tr>
									<?php } ?>
										
									<?php $no++; } ?>
									 
                                    </tbody>
                                </table>
								<p style="font-size:16px; "align="left">Obat</p> 
								<table class="tableizer-table"  width="100%">
<thead><tr class="tableizer-firstrow"> 
                                            <th>No</th>
                                            <th>Kode Pemeriksaan</th>
                                            <th>Tanggal</th>
                                            <th>Obat</th>
                                            <th>Harga</th>
                                            <th>Dosis</thead>
											<?php $no = 1; foreach($rm3 as $rm3){ 
											
											?>
                                    <tbody>
									<?php if ($rm3->dosis != "" ) { ?>
									     <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $rm3->kode; ?></td>
											<td><?php echo tgl_indo($rm1->tanggal); ?></td>
                                            <td><?php echo $rm3->namaobat; ?></td> 
                                            <td>Rp.<?php echo number_format($rm3->hargaobat,0,".","."). ''; ?></td> 
                                            <td><?php echo $rm3->dosis; ?></td> 
										 </tr>
									<?php } ?>
									<?php $no++; } ?>
									
                                    </tbody>
                                </table>
								                                </table>
<p align="right"> <?php echo tgl_indo(date('20y-m-d')); ?></p>
<br><br><br>
<p align="right"><b><u><?php echo $nama; ?></u></b></p>
								                                
<script>
window.print();
</script>