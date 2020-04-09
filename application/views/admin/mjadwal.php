<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>MASTER JADWAL</h2>
            </div>
<div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                       
                        <div class="body">
							<div class="table-responsive">
							<a href="<?php echo base_url("admin/jadwal"); ?>"><button class="btn btn-primary ">Buat Jadwal Pemeriksaan</button></a>
							<div class=" pull-right"><i class="fa fa-check"></i> <?php echo $jd; ?> Jadwal ditemukan.</div>
							<p>
                                <table id="tabel" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nomor Kartu</th>
                                            <th>Nama Pasien</th>
                                            <th>Alamat</th>
                                            <th>Tanggal</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
									<?php $no = $nomor; foreach($mjadwal as $v){ ?>
                                    <tbody>
									     <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $v->nomorkartu; ?></td>
                                            <td><?php echo $v->namapasien; ?></td>
                                            <td><?php echo $v->alamat; ?></td>
                                            <td><?php echo tgl_indo($v->tanggal); ?></td>
                                            <td><?php echo $v->status; ?></td>
                                            <td><a href="<?php echo base_url("admin/ubah_status_jadwal/$v->id_jadwal"); ?>"><button class="btn btn-success">Ubah Status</button></a> <a href="<?php echo base_url("admin/edit_jadwal/$v->id_pasien/$v->id_jadwal"); ?>"><button class="btn btn-primary">Edit Jadwal</button></a></td>
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
	  