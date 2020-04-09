 <?php foreach($periksa1 as $vp1){ 

 $arraybiaya[] = $vp1->biaya; } ?>
<?php $no = 1; foreach($periksa3 as $vp1){ 
											$arrayharga[] = $vp1->jumlahobat*$vp1->hargaobat;
											$totalbiaya = array_sum($arraybiaya);
											$totalharga = array_sum($arrayharga);
$total = $totalbiaya + $totalharga;
$totalsekarang = $total - $jumlahsebelum;
 }
											?> 
											           
<div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <!-- Main content -->
        <section class="content">

          <!-- Default box -->
		  <div class="nav-tabs-custom">
                <ul class="nav nav-tabs pull-right"> 
                  <li class="pull-right header"><font color="green">Aplikasi E-klinik</font></li>
                  <li class="pull-left header"><i class="fa fa-money"></i>Total Tagihan ke Pasien</li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="tab_1-1">
                    <div class="box-body">
					<div class="row">
				 <table class="table table-striped">
                                        <thead>
										<tr>
                                              
                                                <th>Pemasukan Obat Pemeriksaan Saat Ini </th>
                                                <th> <font color = "blue">Rp.<?php echo number_format($totalsekarang,0,".","."). ''; ?></font></th>

                                            </tr>
                                            
											<tr>
                                              
                                                <th>Pemasukan Sebelumnya </th>
                                                <th> <font color = "blue">Rp.<?php echo number_format($jumlahsebelum,0,".","."). ''; ?></font></th>

                                            </tr>
											<tr>
                                              
                                                <th>Total Obat dan Pemeriksaan </th>
                                                <th> <font color = "blue">Rp.<?php echo number_format($total,0,".","."). ''; ?></font></th>

                                            </tr>
                                        </thead>
                                       
                                    </table>
				
			
						 
          </div>
						 <div class="row">
					<form role="form" action="<?php echo base_url("/admin/simpan_pemasukan_rawatjalan/$kode/$id_pasien"); ?>" enctype="multipart/form-data" method="post">
					<div class="form-group">
				  <label>Jumlah</label>
                 <input type="number" name="jumlah" class="form-control" id="exampleInputEmail1" placeholder="">
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