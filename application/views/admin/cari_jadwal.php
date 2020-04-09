<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>PILIH PASIEN UNTUK DI JADWALKAN</h2>
            </div>
<div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                       
                        <div class="body">
							<div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nomor Kartu</th>
                                            <th>Nama Pasien</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Alamat</th>
                                            <th>Umur</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
									<?php $no = $nomor; foreach($pasien as $v){ ?>
                                    <tbody>
									     <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $v->nomorkartu; ?></td>
                                            <td><?php echo $v->namapasien; ?></td>
                                            <td><?php echo $v->kelamin; ?></td>
                                            <td><?php echo $v->alamat; ?></td>
                                            <td><?php echo $v->umur; ?></td>
                                            <td><a href="<?php echo base_url("admin/buat_jadwal/$v->id_pasien"); ?>"><button class="btn btn-primary">Pilih</button></a></td>
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
	 