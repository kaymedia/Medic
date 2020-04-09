<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>USER</h2>
				
            </div>
<div class="row clearfix">
                <!-- Task Info -->
				 
               
               
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                       
                        <div class="body">
							<div class="table-responsive">
						<button data-toggle="modal" data-target="#tambah" class="btn btn-primary ">Tambah User</button>
							<div class=" pull-right"><i class="fa fa-check"></i> <?php echo $jd; ?> User ditemukan.</div>
							<p>

                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Nama</th>
                                            <th>No Hp</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
									<?php $no = $nomor; foreach($user as $v){ ?>
                                    <tbody>
									     <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $v->username; ?></td>
                                            <td>******</td>
                                            <td><?php echo $v->nama; ?></td>
                                            <td><?php echo $v->nohp; ?></td>
                                            <td><a href="<?php echo base_url("admin/edit_user/$v->id_user"); ?>"><button class="btn btn-primary">Edit</button></a> <a href="<?php echo base_url("admin/hapus_user/$v->id_user"); ?>"><button onclick="javascript : return confirm('Apakah Anda Yakin Ingin Menghapus ?')" class="btn btn-danger">Hapus</button></a></td>
                                        </tr>
									<?php $no++; } ?>
                                    </tbody>
                                </table>
								<?php echo $this->pagination->create_links(); ?>
                            </div>
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
                                <form role="form" action="<?php echo base_url("/admin/tambah_user"); ?>" enctype="multipart/form-data" method="post">
									<div class="form-group">
								  <div class="form-line">
										<label>Username</label>
                                        <input name="username" type="text" class="form-control" placeholder="Username" REQUIRED>
                                    </div>
                                    </div>
									<div class="form-group">
								  <div class="form-line">
										<label>Password</label>
                                        <input name="password" type="password" class="form-control" placeholder="Password" REQUIRED>
                                    </div>
                                    </div>
									<div class="form-group">
								  <div class="form-line">
										<label>Nama</label>
                                        <input name="nama" type="text" class="form-control" placeholder="Nama" REQUIRED>
                                    </div>
                                    </div>
									<div class="form-group">
								  <div class="form-line">
										<label>Alamat</label>
                                       <textarea name="alamat" class="form-control" placeholder="Alamat"></textarea>
                                    </div>
                                    </div>
									<div class="form-group">
								  <div class="form-line">
										<label>Nomor Handphone</label>
                                        <input name="nohp" type="number" class="form-control" placeholder="Nomor HP" REQUIRED>
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