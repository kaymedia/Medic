 <?php foreach($periksa1 as $vp1){ 
     
$ambiltindakan =  $this->master->sum_tindakan($vp1->id_tindakan);
foreach($ambiltindakan as $ambiltindakan){
    $arraybiaya[] = $ambiltindakan->hitung;
}
  } ?>
   <?php foreach($periksabahan as $bahanhabispakai){ 
     $jumlahbahan = $bahanhabispakai->jml_bahan;
     $ambilbahan =  $this->master->sum_bahan($bahanhabispakai->id_bahan);
     foreach($ambilbahan as $ambilbahan){
         $arraybahan[] = $ambilbahan->hitung*$jumlahbahan;
     }
       } ?>
<?php $no = 1; foreach($periksa3 as $vp1){ 
											$arrayharga[] = $vp1->jumlahobat*$vp1->hargaobat;
											$totalbiaya = array_sum($arraybiaya);
											$totalharga = array_sum($arrayharga);
											$totalbahan = array_sum($arraybahan);
$total = $totalbiaya + $totalharga + $totalbahan; }
											?> 
											           

<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>TOTAL YANG DI TAGIHKAN KE PASIEN</h2>
            </div>
<div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                       
                        <div class="body">
				 <table class="table table-striped">
                                        <thead>
                                            <tr>
                                              
                                                <th>Total Obat dan Pemeriksaan </th>
                                                <th> <font color = "blue">Rp.<?php echo number_format($total,0,".","."). ''; ?></font></th>

                                            </tr>
                                        </thead>
                                       
                                    </table>
				
			
						 
         
						 
					<form role="form" action="<?php echo base_url("/admin/simpan_pemasukan/$kode/$id_pasien"); ?>" enctype="multipart/form-data" method="post">
					<div class="form-group">
					<div class="form-line">
				  <label>Jumlah</label>
                 <input type="number" name="jumlah" class="form-control" id="exampleInputEmail1" value="<?php echo $total; ?>">
				 </div>
				 </div>
				<div class="modal-footer">
                                    <button class="btn btn-info" type="submit">Selanjutnya</button>
                                </div>
                                </form>
				
			
						 
          </div>
		  </div>
							  </div>
                </div><!-- /.tab-content -->
              </div>
        </section><!-- /.content -->
      </div>