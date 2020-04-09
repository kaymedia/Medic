<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>EDIT RUANGAN</h2>
            </div>
<div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                       
                        <div class="body">
						<?php foreach($ruangan as $v) { ?>
							<div class="modal-body">
                                <form role="form" action="<?php echo base_url("/admin/simpan_ruangan/$v->id_ruangan"); ?>" enctype="multipart/form-data" method="post">
									 <div class="form-group">
								  <div class="form-line">
										<label>Nama Ruangan</label>
                                        <input name="namaruangan" type="text" class="form-control" value="<?php echo $v->namaruangan; ?>" REQUIRED>
                                    </div>
                                    </div>
                                <!-- modal untuk footer -->
                                <div class="modal-footer">
                                    <button class="btn btn-info" type="submit"><i class="fa fa-save"></i> Simpan</button>
									
                                </div>
                                </form>
								
                            </div>
						<?php } ?>
							  </div><!-- /.row -->
							  </div>
							  <a href="<?php echo base_url("admin/mruangan"); ?>"><button class="btn btn-primary pull-left">Kembali</button></a>
									
                </div><!-- /.tab-content -->
              </div>
        </section><!-- /.content -->
      </div>
	  
	 