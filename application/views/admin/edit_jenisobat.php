
				
				<?php foreach($v as $v){ ?>
                <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>EDIT JENIS OBAT</h2>
            </div>
<div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                       
                        <div class="body">
                                <form role="form" action="<?php echo base_url("/admin/simpan_jenisobat/$v->id_jenisobat"); ?>" enctype="multipart/form-data" method="post">
								<div class="form-group">
								  <div class="form-line">
										<label>Jenis Obat</label>
                                        <input name="jenisobat" type="text" class="form-control" value="<?= $v->jenisobat ?>" REQUIRED>
                                    </div>
                                    </div>
                                <!-- modal untuk footer -->
                                <div class="modal-footer">
                                    <button class="btn btn-info" type="submit"><i class="fa fa-save"></i> Simpan</button>
                                </div>
                                </form>
								
                            </div>
                            </div>
							<a href="<?php echo base_url("admin/mjenisobat"); ?>"><button class="btn btn-primary pull-left">Kembali</button></a>
							  </div><!-- /.row -->
							  </div>
				<?php } ?>
                </div><!-- /.tab-content -->
              </div>
        </section><!-- /.content -->
      </div>