
				
				<?php foreach($v as $v){ ?>
                <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>MASTER OBAT</h2>
            </div>
<div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                       
                        <div class="body">
                                <form role="form" action="<?php echo base_url("/admin/simpan_tindakan/$v->id_tindakan"); ?>" enctype="multipart/form-data" method="post">
									<div class="form-group">
								  <div class="form-line">
										<label>Nama Tindakan</label>
                                        <input name="nama_tindakan" type="text" class="form-control" value="<?php echo $v->nama_tindakan; ?>" REQUIRED>
                                    </div>
                                    </div>
									
									<div class="form-group">
								  <div class="form-line">
										<label>Harga Satuan</label>
                                        <input name="biaya_tindakan" type="number" class="form-control" value="<?php echo $v->biaya_tindakan; ?>" REQUIRED>
                                    </div>
                                    </div>
							
                                <!-- modal untuk footer -->
                                <div class="modal-footer">
                                    <button class="btn btn-info" type="submit"><i class="fa fa-save"></i> Simpan</button>
                                </div>
                                </form>
								
                            </div>
                            </div>
							<a href="<?php echo base_url("admin/mtindakan"); ?>"><button class="btn btn-primary pull-left">Kembali</button></a>
							  </div><!-- /.row -->
							  </div>
				<?php } ?>
                </div><!-- /.tab-content -->
              </div>
        </section><!-- /.content -->
      </div>