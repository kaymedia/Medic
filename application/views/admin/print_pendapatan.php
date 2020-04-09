
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
	  <div style="font-size:16px; font-weight:bold;" class="roboto"><center>RESUME PENDAPATAN KLINIK</center>
    <div style="font-size:25px; font-weight:bold;" class="roboto"><center><?php echo strtoupper($namaklinik); ?></center>
    <span style="font-size:12px;">
    	<center><?php echo $alamatklinik; ?>  <br>
    	Phone: <?php echo $nohpklinik; ?><br> </center><p><p><p><br><hr>
    </div>
    </div>
    <div style="float:right;" class="roboto"></div>
   
    <div class="header-logo-right"></div>
	

</div>
<table class="tableizer-table"  width="100%">
<thead><tr class="tableizer-firstrow"> 
                                            <th>No</th>
                                            <th>Kode Pemeriksaan</th>
                                            <th>Nomor Kartu</th>
                                            <th>Nama Pasien</th>
                                            <th>Alamat</th>
                                            <th>No HP</th>
                                            <th>Tanggal</th>
                                            </thead>
											<?php $no = 1; foreach($pendapatan as $v){ 
											$arraybiaya[] = $v->biaya;
											$totalsemuanya = array_sum(arraybiaya);
											
											?>
                                    <tbody>
									     <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $v->kode; ?></td>
                                            <td><?php echo $v->id_pasien; ?></td>
                                            <td><?php echo $v->namapasien; ?></td>
                                            <td><?php echo $v->alamat; ?></td>
                                            <td><?php echo $v->nohp; ?></td>
                                            <td><?php echo tgl_indo($v->tanggal); ?></td>
                                            
										 </tr>
										  
										
									<?php $no++; } ?>
									<tr>
											<td>Total</td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
                                            <td><?php echo $totalsemuanya; ?></td>
                                            
										 </tr>
									
								
                                    </tbody>
                                </table>
<script>
window.print();
</script>