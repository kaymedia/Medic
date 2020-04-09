<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>MASTER PEMBELIAN OBAT OBAT</h2>
            </div>
<div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                       
                        <div class="body">
							<div class="table-responsive">
							<button data-toggle="modal" data-target="#tambah" class="btn btn-primary">Tambah Obat</button> <button data-toggle="modal" data-target="#cari" class="btn btn-primary">Cari Obat</button>
							<div class=" pull-right"><i class="fa fa-check"></i> <?php echo $jd; ?> Obat ditemukan.</div>
							<p>
							<div class="table-responsive">
                                <table id="tabel" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Obat</th>
                                            <th>Jumlah Beli</th>
                                            <th>Satuan</th>
                                            <th>Jml/Stuan</th>
                                            <th>Harga Beli</th>
                                            <th>Nama Apotik</th>
											<th>Tanggal Beli</th>
											<th></th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
									<?php $no = $nomor; foreach($bobat as $bv) { ?>
                                    <tbody>
									     <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $bv->namaobat; ?></td>
                                            <td><?php echo $bv->jumlahbeli; ?></td>
                                            <td><?php echo $bv->satuan; ?></td>
                                            <td><?php echo $bv->jumlahpersatuan; ?></td>
                                            <td>Rp.<?php echo number_format($bv->hargabeli,0,".","."). ''; ?></td>
											<td><?php echo $bv->namaapotik; ?></td>
											<td><?php echo tgl_indo($bv->tanggalbeli); ?> </td>
											<td></td><td><a href="<?php echo base_url("/admin/edit_bobat/$bv->id_beliobat");?>"><button class="btn btn-primary">Edit</button></a> <a href="<?php echo base_url("/admin/hapus_bobat/$bv->id_beliobat/$bv->id_obat"); ?>"><button onclick="javascript : return confirm('Apakah Anda Yakin Ingin Menghapus ?')" class="btn btn-danger">Hapus</button></a></td>
                                        </tr>
									<?php $no++; } ?>
                                    </tbody>
                                </table>
								<?php echo $this->pagination->create_links(); ?>
                            </div>
							  </div><!-- /.row -->
							  </div>
                </div><!-- /.tab-content -->
              </div>
        </section><!-- /.content -->
      </div>
	  <div class="modal fade" id="tambah">
                          <div class="modal-dialog">
                            <div class="modal-content">

                              <!-- modal header -->
                                <div class="modal-header">
                                    <button class="close" type="button" data-dismiss="modal">&times;</button>
                                   
                                </div>

                                <!-- modal untuk isi konten -->
                                <div class="modal-body">
                                <form role="form" action="<?php echo base_url('/admin/tambah_bobat'); ?>" enctype="multipart/form-data" method="post">
									<div class="form-group">
								  <div class="form-line">
										<label>Nama Obat</label>
                                        <input name="namaobat" type="text" class="form-control" placeholder="Nama Obat" REQUIRED>
                                    </div>
									</div>
									<div class="form-group">
									<div class="form-line">
										<label>Jumlah Beli</label>
                                        <input name="jumlahbeli" type="number" class="form-control" placeholder="Jumlah Beli" REQUIRED>
                                    </div>
									</div>
                                    
									<div class="form-group">
								  <div class="form-line">
										<label>Satuan</label>
                                        <select name="satuan" class="form-control">
											<option value="Box">BOX</option>
											<option value="Dus">Dus</option>
											<option value="Botol">Botol</option>
											<option value="Ampul">Ampul</option>
											
										</select>
                                    </div>
                                    </div>
									<div class="form-group">
								  <div class="form-line">
										<label>Jumlah per Satuan</label>
                                        <input name="jumlahpersatuan" type="number" class="form-control" placeholder="Isi dari satuan Beli" REQUIRED>
                                    </div>
									</div>
									<div class="form-group">
								  <div class="form-line">
										<label>Harga Beli</label>
                                        <input name="hargabeli" type="number" class="form-control" placeholder="Harga Beli per Satu Box" REQUIRED>
                                    </div>
									</div>
									<div class="form-group">
								  <div class="form-line">
									<label>Tanggal Kadaluarsa</label>
									<div class="input-group">
									  <div class="input-group-addon">
										<i class="fa fa-calendar"></i>
									  </div>
									  <input type="date" name="kadaluarsa" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
									</div>
								  </div><!-- /.form-group -->
								  </div><!-- /.form-group -->
									<div class="form-group">
									<div class="form-line">
										<label>Nama Apotik</label>
                                        <input name="namaapotik" type="text" class="form-control" placeholder="Nama Apotik" REQUIRED>
                                    </div>
									</div>
                                    
									<div class="form-group">
								  <div class="form-line">
									<label>Tanggal Beli</label>
									<div class="input-group">
									  <div class="input-group-addon">
										<i class="fa fa-calendar"></i>
									  </div>
									  <input type="date" name="tanggalbeli" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
									</div>
								  </div><!-- /.form-group -->
								  </div><!-- /.form-group -->
								  
								<div class="form-group">
								  <div class="form-line">
										<label>Satuan Dalam Obat</label>
                                        <select name="satuanobat" class="form-control">
											<option value="Botol">Botol</option>
											<option value="Tablet"> Tablet</option> 
											<option value="Kapsul"> Kapsul</option>
											<option value="Tube"> Tube</option>
											<option value="Ampul"> Ampul</option>
										</select>
                                    </div>
                                    </div>
									</div>
                                <!-- modal untuk footer -->
                                <div class="modal-footer">
                                    <button class="btn btn-info" type="submit"><i class="fa fa-save"></i> Simpan</button>
                                </div>
                                </form>
                            </div>

                          </div>
                        </div>
                        </div>
	  <div class="modal fade" id="cari">
                          <div class="modal-dialog">
                            <div class="modal-content">

                              <!-- modal header -->
                                <div class="modal-header">
                                    <button class="close" type="button" data-dismiss="modal">&times;</button>
                                    
                                </div>

                                <!-- modal untuk isi konten -->
                                <div class="modal-body">
                                <form role="form" action="<?php echo base_url("/admin/post_cari_bobat");?>" enctype="multipart/form-data" method="post">
									<div class="form-group">
								  <div class="form-line">
										<label>Masukan Kata Kunci</label>
                                        <input name="namaobat" type="text" class="form-control" placeholder="Cari Berdasarkan Nama Obat" REQUIRED>
                                    </div>
                                    </div>
									

                                <!-- modal untuk footer -->
                                <div class="modal-footer">
                                    <button class="btn btn-info" type="submit"><i class="fa fa-search"></i> Cari</button>
                                </div>
                                </form>
                            </div>

                          </div>
                        </div>
                        </div>
	 