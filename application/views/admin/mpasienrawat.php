<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>MASTER PEMERIKSAAN</h2>
            </div>
<div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                       
                        <div class="body">
							<div class="table-responsive">
							<a href="<?php echo base_url("admin/daftar"); ?>"><button class="btn btn-primary">Daftarkan Pasien Baru</button></a> <button data-toggle="modal" data-target="#cari" class="btn btn-primary">Cari Pemeriksaan</button>
							<div class=" pull-right"><i class="fa fa-check"></i> <?php echo $jd; ?> Pemeriksaan Ditemukan.</div>
							<p>
							<div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Periksa</th>
                                            <th>No Kartu</th>
                                            <th>Nama Pasien</th>
                                            <th>Nama Orangtua</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Alamat</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
									
                                    <tbody>
									<?php $no = $nomor; foreach($periksa as $v){ 
									?>
									     <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $v->kode; ?></td>
                                            <td><?php echo $v->nomorkartu; ?></td>
                                            <td><?php echo $v->namapasien; ?></td>
                                            <td><?php echo $v->namaortu; ?></td>
                                            <td><?php echo $v->kelamin; ?></td>
                                            <td><?php echo $v->alamat; ?></td>
                                            <td><?php echo $v->status; ?></td>
											<?php if ($v->status == "Rawat Inap"){ ?>
                                            <td><a href="<?php echo base_url("admin/tambah_pemeriksaan_rawat/$v->kode/$v->id_pasien"); ?>"><button class="btn btn-primary">+ Periksa</button></a> <a href="<?php echo base_url("admin/ubah_status_periksa/$v->kode/$v->id_pasien"); ?>"><button class="btn btn-success">Ubah Status</button></a> <a href="<?php echo base_url("admin/pindah_ruangan_rawat/$v->kode/$v->id_pasien"); ?>"><button class="btn btn-warning">Pindah Ruangan</button></a> </td>
											<?php } ?>
											<?php if ($v->status == "Rawat Jalan"){ ?>
                                            <td> <a target="__blank" href="<?php echo base_url("admin/print_periksa/$v->kode/$v->id_pasien"); ?>"><button class="btn btn-default">Print Pemeriksaan</button></a></td>
											<?php } ?>
											<?php if ($v->status == "Pulang"){ ?>
                                            <td><a target="__blank" href="<?php echo base_url("admin/print_periksa/$v->kode/$v->id_pasien"); ?>"><button class="btn btn-default">Print Pemeriksaan</button></a>  </td>
											<?php } ?>
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
                                 <form role="form" action="<?php echo base_url("/admin/post_cari_rawat"); ?>" enctype="multipart/form-data" method="post">
									<div class="form-group">
								<div class="form-line">
										<label>Masukan Kata Kunci</label>
                                        <input name="cari" type="text" class="form-control" placeholder="Cari Berdasarkan Nama / Nomor Kartu" REQUIRED>
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
	  