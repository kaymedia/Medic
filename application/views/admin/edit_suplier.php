
				
				<?php foreach($v as $v){ ?>
                <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>EDIT SUPLIER OBAT</h2>
            </div>
<div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                       
                        <div class="body">
                                <form role="form" action="<?php echo base_url("/admin/simpan_suplier/$v->id_suplier"); ?>" enctype="multipart/form-data" method="post">
								<div class="form-group">
								  <div class="form-line">
										<label>Nama Suplier</label>
                                        <input name="namasuplier" type="text" class="form-control" value="<?= $v->namasuplier ?>" REQUIRED>
                                    </div>
                                    </div>
									
									<div class="form-group">
								  <div class="form-line">
										<label>Alamat Suplier</label>
                                        <textarea name="alamatsuplier" class="form-control" ><?= $v->alamatsuplier ?></textarea>
                                    </div>
                                    </div>
									
								  <div class="form-group">
								  <div class="form-line">
										<label>No HP Suplier</label>
                                        <input name="nohpsuplier" type="number" class="form-control" value="<?= $v->nohpsuplier ?>" REQUIRED>
                                    </div>
                                    </div>
                                <!-- modal untuk footer -->
                                <div class="modal-footer">
                                    <button class="btn btn-info" type="submit"><i class="fa fa-save"></i> Simpan</button>
                                </div>
                                </form>
								
                            </div>
                            </div>
							<a href="<?php echo base_url("admin/msuplier"); ?>"><button class="btn btn-primary pull-left">Kembali</button></a>
							  </div><!-- /.row -->
							  </div>
				<?php } ?>
                </div><!-- /.tab-content -->
              </div>
        </section><!-- /.content -->
      </div>