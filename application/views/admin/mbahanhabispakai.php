<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>MASTER BAHAN HABIS PAKAI</h2>
            </div>
<div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                       
                        <div class="body">
							<div class="table-responsive">
							<button data-toggle="modal" data-target="#tambah" class="btn btn-primary">Tambah Bahan Habis Pakai</button> 
		
							<div class=" pull-right"><i class="fa fa-check"></i> <?php echo $jd; ?> Bahan Habis Pakai ditemukan.</div>
							<p>
							<div class="table-responsive">
                                <table id="tabel" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Bahan</th>
                                            <th>Satuan</th>
                                            <th>Harga</th>
                                            <th>Stok</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
									<?php $no = $nomor; foreach($v as $v){ ?>
                                    <tbody>
									     <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $v->nama_bahan; ?></td>
                                            <td><?php echo $v->satuan_bahan; ?></td>
                                            <td>Rp.<?php echo number_format($v->harga_bahan,0,".","."). ''; ?></td>
                                            <td><?php echo $v->stok_bahan; ?></td>
                                            <td><a href="<?php echo base_url("admin/edit_bahanhabispakai/$v->id_bahan"); ?>"><button class="btn btn-primary">Edit</button></a> <a href="<?php echo base_url("admin/hapus_bahanhabispakai/$v->id_bahan"); ?>"><button onclick="javascript : return confirm('Apakah Anda Yakin Ingin Menghapus ?')" class="btn btn-danger">Hapus</button></a></td>
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
                                <form role="form" action="<?php echo base_url("/admin/tambah_bahanhabispakai"); ?>" enctype="multipart/form-data" method="post">
									<div class="form-group">
								  <div class="form-line">
										<label>Nama Bahan</label>
                                        <input name="nama_bahan" type="text" class="form-control" placeholder="Nama Bahan" REQUIRED>
                                    </div>
                                    </div>
									<div class="form-group">
								  <div class="form-line">
										<label>Satuan</label>
                                        <select name="satuan_bahan" class="form-control">
											<option value="Botol">Botol</option>
											<option value="Tablet"> Tablet</option> 
											<option value="Kapsul"> Kapsul</option>
											<option value="Tube"> Tube</option>
											<option value="Ampul"> Ampul</option>
										</select>
                                    </div>
                                    </div>
									<div class="form-group">
								  <div class="form-line">
										<label>Harga per Satuan</label>
                                        <input name="harga_bahan" type="number" class="form-control" placeholder="Harga Bahan" REQUIRED>
                                    </div>
                
								  <div class="form-group">
								  <div class="form-line">
										<label>Stok</label>
                                        <input name="stok_bahan" type="number" class="form-control" placeholder="Stok" REQUIRED>
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
                                <form role="form" action="<?php echo base_url("/admin/post_cari_obat"); ?>" enctype="multipart/form-data" method="post">
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
						
						 <div class="modal fade" id="upload">
                          <div class="modal-dialog">
                            <div class="modal-content">

                              <!-- modal header -->
                                <div class="modal-header">
                                    <button class="close" type="button" data-dismiss="modal">&times;</button>
                                    
                                </div>

                                <!-- modal untuk isi konten -->
                                <div class="modal-body">
                                <form role="form" action="<?php echo base_url("/admin/uploadobat"); ?>" enctype="multipart/form-data" method="post">
									<div class="form-group">
								  <div class="form-line">
										<label>Pilih File Excel</label>
                                        <input name="file" type="file" class="form-control" placeholder="" REQUIRED>
                                    </div>
                                    </div>
									

                                <!-- modal untuk footer -->
                                <div class="modal-footer">
                                    <button class="btn btn-info" type="submit"><i class="fa fa-upload"></i> Upload</button>
                                </div>
                                </form>
                            </div>

                          </div>
                        </div>
                        </div>
	 
	 