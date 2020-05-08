<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>SELESAI MEMERIKSA PASIEN</h2>
            </div>
<div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                       
                        <div class="body">
						 <div class="row">
						 <?php foreach($pasien as $vpasien){ ?>
						  <div class="col-md-4">
                <div class="form-group">
								<div class="form-line">
                      <label for="exampleInputEmail1">No. Kartu</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $vpasien->id_pasien; ?>" disabled>
                    </div><!-- /.form-group -->
                    </div><!-- /.form-group -->
					<div class="form-group">
								<div class="form-line">
                      <label for="exampleInputEmail1">Nama Pasien</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $vpasien->namapasien; ?>" disabled>
                    </div>
                    </div>
					<div class="form-group">
								<div class="form-line">
                      <label for="exampleInputEmail1">Tanggal Lahir</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo tgl_indo($vpasien->ttl); ?>" disabled>
                    </div>
                    </div>
					<div class="form-group">
								<div class="form-line">
                      <label for="exampleInputEmail1">Umur</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $vpasien->umur; ?>" disabled>
                    </div>
                    </div>
					<div class="form-group">
								<div class="form-line">
                      <label>Jenis Kelamin</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $vpasien->kelamin; ?>" disabled>
                    </div><!-- /.form-group -->
                    </div><!-- /.form-group -->
                  <div class="form-group">
								<div class="form-line">
                      <label>Alamat</label>
                      <textarea class="form-control" rows="2" placeholder="Enter ..." disabled><?php echo $vpasien->alamat; ?></textarea>
                    </div>
                    </div>
				<div class="form-group">
								<div class="form-line">
                      <label for="exampleInputEmail1">Telepon</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $vpasien->nohp; ?>" disabled>
                    </div>
                    </div>
					<div class="form-group">
								 <div class="form-line">
									  <label for="exampleInputEmail1">Nama Orang Tua</label>
									  <input name="namaortu" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $vpasien->namaortu; ?>" readonly>
									</div><!-- /.form-group -->
									</div><!-- /.form-group -->
								 <div class="form-group">
								  <div class="form-line">
									  <label for="exampleInputEmail1">Tanggal Daftar</label>
									  <input name="tanggal" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo tgl_indo($vpasien->tanggal); ?>" readonly>
									</div><!-- /.form-group -->
									</div><!-- /.form-group -->
                </div><!-- /.col -->
			
                <div class="col-md-8">
				<div class="row">
					
					 <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Suhu Nadan (c)</th>
                                            <th>Tinggi Badang (cm)</th>
                                            <th>Berat Badan(kg)</th>
                                            <th>Tekanan Darah</th>
                                            
                                            
                                        </tr>
                                    </thead>
									<?php $no = 1; foreach ($periksa2 as $vtmp0){ ?>
                                    <tbody>
									    <tr>
											<td><?php echo $vtmp0->suhu; ?></td>
											<td><?php echo $vtmp0->tinggi; ?></td>
											<td><?php echo $vtmp0->berat; ?></td>
											<td><?php echo $vtmp0->tekanandarah; ?></td>
                                        </tr>
									<?php $no++; } ?>
                                    </tbody>
                                </table>
                  </div>
				  <div class="row">
					Pemeriksaan Fisik
					 <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Keadaan Umum</th>
                                            <th>Kesadaran</th>
                                             
                                            
                                            
                                        </tr>
                                    </thead>
									<?php $no = 1; foreach ($periksa2 as $vpisik0){ ?>
                                    <tbody>
									    <tr>
											<td><?php echo $vpisik0->keadaanumum; ?></td>
											<td><?php echo $vpisik0->kesadaran; ?></td>
											
                                        </tr>
									<?php $no++; } ?>
                                    </tbody>
                                </table>
                  </div>
				  <div class="row"> 
					 <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Kepala  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                            <th>Keterangan</th>
                                             
                                            
                                            
                                        </tr>
                                    </thead>
									<?php $no = 1; foreach ($periksa2 as $vpisik1){ ?>
                                    <tbody>
									    <tr>
											<td><?php echo $vpisik1->kepala; ?></td>
											<td><?php echo $vpisik1->textkepala; ?></td>
											
                                        </tr>
									<?php $no++; } ?>
                                    </tbody>
                                </table>
                  </div>
				   <div class="row"> 
					 <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Mata  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                            <th>Keterangan</th>
                                             
                                            
                                            
                                        </tr>
                                    </thead>
									<?php $no = 1; foreach ($periksa2 as $vpisik2){ ?>
                                    <tbody>
									    <tr>
											<td><?php echo $vpisik2->mata; ?></td>
											<td><?php echo $vpisik2->textmata; ?></td>
											
                                        </tr>
									<?php $no++; } ?>
                                    </tbody>
                                </table>
                  </div>
				   <div class="row"> 
					 <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Hidung  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                            <th>Keterangan</th>
                                             
                                            
                                            
                                        </tr>
                                    </thead>
									<?php $no = 1; foreach ($periksa2 as $vpisik3){ ?>
                                    <tbody>
									    <tr>
											<td><?php echo $vpisik3->hidung; ?></td>
											<td><?php echo $vpisik3->texthidung; ?></td>
											
                                        </tr>
									<?php $no++; } ?>
                                    </tbody>
                                </table>
                  </div>
				   <div class="row"> 
					 <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Gigi dan Mulut &nbsp;&nbsp;&nbsp;&nbsp;</th>
                                            <th>Keterangan</th>
                                             
                                            
                                            
                                        </tr>
                                    </thead>
									<?php $no = 1; foreach ($periksa2 as $vpisik4){ ?>
                                    <tbody>
									    <tr>
											<td><?php echo $vpisik4->gigimulut; ?></td>
											<td><?php echo $vpisik4->textgigimulut; ?></td>
											
                                        </tr>
									<?php $no++; } ?>
                                    </tbody>
                                </table>
                  </div>
				  <div class="row"> 
					 <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Tenggorokan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                            <th>Keterangan</th>
                                             
                                            
                                            
                                        </tr>
                                    </thead>
									<?php $no = 1; foreach ($periksa2 as $vpisik5){ ?>
                                    <tbody>
									    <tr>
											<td><?php echo $vpisik5->tenggorokan; ?></td>
											<td><?php echo $vpisik5->texttenggorokan; ?></td>
											
                                        </tr>
									<?php $no++; } ?>
                                    </tbody>
                                </table>
                  </div>
				  <div class="row"> 
					 <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Telinga &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                            <th>Keterangan</th>
                                             
                                            
                                            
                                        </tr>
                                    </thead>
									<?php $no = 1; foreach ($periksa2 as $vpisik6){ ?>
                                    <tbody>
									    <tr>
											<td><?php echo $vpisik6->telinga; ?></td>
											<td><?php echo $vpisik6->texttelinga; ?></td>
											
                                        </tr>
									<?php $no++; } ?>
                                    </tbody>
                                </table>
                  </div>
				  <div class="row"> 
					 <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Leher &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                            <th>Keterangan</th>
                                             
                                            
                                            
                                        </tr>
                                    </thead>
									<?php $no = 1; foreach ($periksa2 as $vpisik7){ ?>
                                    <tbody>
									    <tr>
											<td><?php echo $vpisik7->leher; ?></td>
											<td><?php echo $vpisik7->textleher; ?></td>
											
                                        </tr>
									<?php $no++; } ?>
                                    </tbody>
                                </table>
                  </div>
				  <div class="row"> 
					 <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Thoraks  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                            <th>Keterangan</th>
                                             
                                            
                                            
                                        </tr>
                                    </thead>
									<?php $no = 1; foreach ($periksa2 as $vpisik8){ ?>
                                    <tbody>
									    <tr>
											<td><?php echo $vpisik8->thoraks; ?></td>
											<td><?php echo $vpisik8->textthoraks; ?></td>
											
                                        </tr>
									<?php $no++; } ?>
                                    </tbody>
                                </table>
                  </div>
				  <div class="row"> 
					 <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Jantung  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                            <th>Keterangan</th>
                                             
                                            
                                            
                                        </tr>
                                    </thead>
									<?php $no = 1; foreach ($periksa2 as $vpisik9){ ?>
                                    <tbody>
									    <tr>
											<td><?php echo $vpisik9->jantung; ?></td>
											<td><?php echo $vpisik9->textjantung; ?></td>
											
                                        </tr>
									<?php $no++; } ?>
                                    </tbody>
                                </table>
                  </div>
				   <div class="row"> 
					 <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Paru &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                            <th>Keterangan</th>
                                             
                                            
                                            
                                        </tr>
                                    </thead>
									<?php $no = 1; foreach ($periksa2 as $vpisik10){ ?>
                                    <tbody>
									    <tr>
											<td><?php echo $vpisik10->paru; ?></td>
											<td><?php echo $vpisik10->textparu; ?></td>
											
                                        </tr>
									<?php $no++; } ?>
                                    </tbody>
                                </table>
                  </div>
				  <div class="row"> 
					 <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Abdomen  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                            <th>Keterangan</th>
                                             
                                            
                                            
                                        </tr>
                                    </thead>
									<?php $no = 1; foreach ($periksa2 as $vpisik11){ ?>
                                    <tbody>
									    <tr>
											<td><?php echo $vpisik11->abdomen; ?></td>
											<td><?php echo $vpisik11->textabdomen; ?></td>
											
                                        </tr>
									<?php $no++; } ?>
                                    </tbody>
                                </table>
                  </div>
				  <div class="row"> 
					 <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Genetalia & Anus &nbsp;  </th>
                                            <th>Keterangan</th>
                                             
                                            
                                            
                                        </tr>
                                    </thead>
									<?php $no = 1; foreach ($periksa2 as $vpisik12){ ?>
                                    <tbody>
									    <tr>
											<td><?php echo $vpisik12->genetalia; ?></td>
											<td><?php echo $vpisik12->textgenetalia; ?></td>
											
                                        </tr>
									<?php $no++; } ?>
                                    </tbody>
                                </table>
                  </div>
				  <div class="row"> 
					 <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Extrimitas  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                            <th>Keterangan</th>
                                             
                                            
                                            
                                        </tr>
                                    </thead>
									<?php $no = 1; foreach ($periksa2 as $vpisik13){ ?>
                                    <tbody>
									    <tr>
											<td><?php echo $vpisik13->extrimitas; ?></td>
											<td><?php echo $vpisik13->textextrimitas; ?></td>
											
                                        </tr>
									<?php $no++; } ?>
                                    </tbody>
                                </table>
                  </div>
				   <div class="row"> 
					 <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Kulit &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                            <th>Keterangan</th>
                                             
                                            
                                            
                                        </tr>
                                    </thead>
									<?php $no = 1; foreach ($periksa2 as $vpisik14){ ?>
                                    <tbody>
									    <tr>
											<td><?php echo $vpisik14->kulit; ?></td>
											<td><?php echo $vpisik14->textkulit; ?></td>
											
                                        </tr>
									<?php $no++; } ?>
                                    </tbody>
                                </table>
                  </div>
				
				  <div class="row">
					Keluhan
					 <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Keluhan</th>
                                            
                                            
                                        </tr>
                                    </thead>
									<?php $no = 1; foreach ($periksa1 as $vtmp2){ ?>
                                    <tbody>
									    <tr>
											<td><?php echo $no; ?></td>
											<td><?php echo $vtmp2->keluhan; ?></td>
                                        </tr>
									<?php $no++; } ?>
                                    </tbody>
                                </table>
                  </div>
				  	<div class="row">
					Diagnosa
					 <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Diagnosa</th>
                                        </tr>
                                    </thead>
									<?php $no = 1;  foreach ($periksa1 as $vtmp1){ ?>
                                    <tbody>
									    <tr>
											<td><?php echo $no; ?></td>
											<td><?php echo $vtmp1->diagnosa; ?></td>
                                        </tr>
									<?php $no++; } ?>
                                    </tbody>
                                </table>
                  </div>
				  <div class="row">
					Tindakan
					 <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tindakan</th>
                                            <th>Biaya</th>
                                            
                                            
                                        </tr>
                                    </thead>
									<?php $no = 1; foreach ($periksa1 as $vtmp2){ 
									$this->kode = $vtmp2->kode;
									$this->id_pasien = $vpasien->id_pasien;?>
                                    <tbody>
									    <tr>
											<td><?php echo $no; ?></td>
											<td><?php echo $vtmp2->nama_tindakan; ?></td>
											<td><?php echo $vtmp2->biaya_tindakan; ?></td>
                                        </tr>
									<?php $no++; } ?>
                                    </tbody>
                                </table>
                  </div>
				  <div class="row">
					Obat
					 <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Obat</th>
                                            <th>Dosis</th>
                                            <th>Harga Obat</th>
                                            <th>Satuan Obat</th>
                                            <th>Jumlah Obat</th>
                                            
                                            
                                        </tr>
                                    </thead>
									<?php $no = 1; foreach ($periksa3 as $vtmp3){ 
									
									?>
                                    <tbody>
									    <tr>
											<td><?php echo $no; ?></td>
											<td><?php echo $vtmp3->namaobat; ?></td>
											<td><?php echo $vtmp3->dosis; ?></td>
											<td><?php echo $vtmp3->hargaobat; ?></td>
											<td><?php echo $vtmp3->satuanobat; ?></td>
											<td><?php echo $vtmp3->jumlahobat; ?></td>
                                        </tr>
									<?php $no++; } ?>
                                    </tbody>
                                </table>
                  </div>
						<a target="_blank" href="<?php echo base_url("admin/print_periksa/$kode/$id_pasien"); ?>"><button class="btn btn-primary pull-left">Print</button></a>
			
						 <?php } ?>
						 
          </div>
		  </div>
							  </div>
                </div><!-- /.tab-content -->
              </div>
        </section><!-- /.content -->
      </div>