<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>MASTER SUPLIER</h2>
            </div>
<div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                       
                        <div class="body">
							<div class="table-responsive">
							<button data-toggle="modal" data-target="#tambah" class="btn btn-primary">Tambah Suplier</button>
							<div class=" pull-right"><i class="fa fa-check"></i> <?php echo $jd; ?> Suplier ditemukan.</div>
							<p>
							<div class="table-responsive">
                                <table id="tabel" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama SUplier</th>
                                            <th>Alamat Suplier</th>
                                            <th>No HP Suplier</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
									<?php $no = $nomor; foreach($v as $v){ ?>
                                    <tbody>
									     <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $v->namasuplier; ?></td>
                                            <td><?php echo $v->alamatsuplier; ?></td>
                                            <td><?php echo $v->nohpsuplier; ?></td>
                                            <td><a href="<?php echo base_url("admin/edit_suplier/$v->id_suplier"); ?>"><button class="btn btn-primary">Edit</button></a> <a href="<?php echo base_url("admin/hapus_suplier/$v->id_suplier"); ?>"><button onclick="javascript : return confirm('Apakah Anda Yakin Ingin Menghapus ?')" class="btn btn-danger">Hapus</button></a></td>
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
                                <form role="form" action="<?php echo base_url("/admin/tambah_suplier"); ?>" enctype="multipart/form-data" method="post">
									<div class="form-group">
								  <div class="form-line">
										<label>Nama Suplier</label>
                                        <input name="namasuplier" type="text" class="form-control" placeholder="Nama Suplier" REQUIRED>
                                    </div>
                                    </div>
									
									<div class="form-group">
								  <div class="form-line">
										<label>Alamat Suplier</label>
                                        <textarea name="alamatsuplier" class="form-control" placeholder="Alamat Suplier" REQUIRED></textarea>
                                    </div>
                                    </div>
									
								  <div class="form-group">
								  <div class="form-line">
										<label>No HP Suplier</label>
                                        <input name="nohpsuplier" type="number" class="form-control" placeholder="No HP Suplier" REQUIRED>
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
