<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>SELESAI MENAMBAH PEMERIKSAAN PASIEN</h2>
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
					Detail Pasien
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
									<?php $no = 1; foreach ($periksa1 as $vtmp2){ ?>
                                    <tbody>
									    <tr>
											<td><?php echo $no; ?></td>
											<td><?php echo $vtmp2->tindakan; ?></td>
											<td><?php echo $vtmp2->biaya; ?></td>
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
									$this->kode = $vtmp3->kode;
									$this->id_pasien = $vpasien->id_pasien;
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
						<a target="_blank" href="<?php echo base_url("admin/print_periksa_semua/$this->kode/$this->id_pasien"); ?>"><button class="btn btn-primary pull-left">Print Total</button></a>
			
						 <?php } ?>
						 
          </div>
		  </div>
							  </div>
                </div><!-- /.tab-content -->
              </div>
        </section><!-- /.content -->
      </div>