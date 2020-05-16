<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>MASTER PASIEN</h2>
            </div>
<div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                       
                        <div class="body">
							<div class="table-responsive">
							<a href="<?php echo base_url("admin/daftar"); ?>"><button class="btn btn-primary ">Daftar Pasien Baru</button></a> <button data-toggle="modal" data-target="#cari" class="btn btn-primary">Cari Pasien</button> <a href="<?php echo base_url("/admin/exportpasien"); ?>"><button class="btn btn-success">Export Pasien ke Excel</button></a>
							<div class=" pull-right"><i class="fa fa-check"></i> <?php echo $jd; ?> Pasien ditemukan.</div>
							<p>
							<div class="table-responsive">
                                <table id="tabel" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nomor Kartu</th>
                                            <th>Nama Pasien</th>
                                            <th>Nama Orangtua</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Alamat</th>
                                            <th>Umur</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
									<?php $no = $nomor; foreach($mpasien as $v){ ?>
                                    <tbody>
									     <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $v->nomorkartu; ?></td>
                                            <td><?php echo $v->namapasien; ?></td>
                                            <td><?php echo $v->namaortu; ?></td>
                                            <td><?php echo $v->kelamin; ?></td>
                                            <td><?php echo $v->alamat; ?></td>
                                            <td><?php echo $v->umur; ?> Tahun</td>
                                            <td><a href="<?php echo base_url("admin/lihat_pasien/$v->id_pasien"); ?>"><button class="btn btn-success">Lihat</button></a>
                                            <br> <a target="___blank" href="<?php echo base_url("admin/rekam_medis/$v->id_pasien"); ?>"><button class="btn btn-primary">Rekam Medis</button></a>
                                            <br><a href="<?php echo base_url("admin/edit_pasien/$v->id_pasien"); ?>"><button class="btn btn-warning">Edit</button></a> 
                                             <br><a href="<?php echo base_url("admin/hapus_pasien/$v->id_pasien"); ?>"><button onclick="javascript : return confirm('Apakah Anda Yakin Ingin Menghapus ?')" class="btn btn-danger">Hapus</button></a></td>
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
	  <div class="modal fade" id="cari">
                          <div class="modal-dialog">
                            <div class="modal-content">

                              <!-- modal header -->
                                <div class="modal-header">
                                    <button class="close" type="button" data-dismiss="modal">&times;</button>
                                   
                                </div>

                                <!-- modal untuk isi konten -->
                                <div class="modal-body">
                                <form role="form" action="<?php echo base_url("/admin/post_cari_pasien"); ?>" enctype="multipart/form-data" method="post">
									<div class="form-group">
										<label>Masukan Kata Kunci</label>
                                        <input name="cari" type="text" class="form-control" placeholder="Cari Berdasarkan Nama / Nomor Kartu" REQUIRED>
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
	 