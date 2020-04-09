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
				
				<?php foreach($user as $v){ ?>
                
							<form role="form" action="<?php echo base_url("/admin/simpan_user/$v->id_user"); ?>" enctype="multipart/form-data" method="post">
									 <div class="form-group">
								  <div class="form-line">
										<label>Username</label>
                                        <input name="username" type="text" class="form-control" value="<?php echo $v->username; ?>" REQUIRED>
                                    </div>
                                    </div>
									 <div class="form-group">
								  <div class="form-line">
										<label>Password</label>
                                        <input name="password" type="password" class="form-control" placeholder="Paswword" REQUIRED>
                                    </div>
                                    </div>
									 <div class="form-group">
								  <div class="form-line">
										<label>Nama</label>
                                        <input name="nama" type="text" class="form-control"  value="<?php echo $v->nama; ?>" REQUIRED>
                                    </div>
                                    </div>
									 <div class="form-group">
								  <div class="form-line">
										<label>Alamat</label>
                                       <textarea name="alamat" class="form-control" placeholder="Alamat"><?php echo $v->alamat; ?></textarea>
                                    </div>
                                    </div>
									 <div class="form-group">
								  <div class="form-line">
										<label>Nomor Handphone</label>
                                        <input name="nohp" type="number" class="form-control"  value="<?php echo $v->nohp; ?>" REQUIRED>
                                    </div>
                                    </div>
									

                                <!-- modal untuk footer -->
                                <div class="modal-footer">
                                    <button class="btn btn-info" type="submit"><i class="fa fa-save"></i> Simpan</button>
									
                                </div>
                                </form>
								
								
							  </div><!-- /.row -->
							  </div>
							  <a href="<?php echo base_url("admin/user"); ?>"><button class="btn btn-primary pull-left">Kembali</button></a>
							  
									
				<?php } ?>
                </div><!-- /.tab-content -->
              </div>
        </section><!-- /.content -->
      </div>
	  