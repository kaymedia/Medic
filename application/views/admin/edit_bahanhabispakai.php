
				
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
                                <form role="form" action="<?php echo base_url("/admin/simpan_bahanhabispakai/$v->id_bahan"); ?>" enctype="multipart/form-data" method="post">
									<div class="form-group">
								  <div class="form-line">
										<label>Nama Bahan</label>
                                        <input name="nama_bahan" type="text" class="form-control" value="<?php echo $v->nama_bahan; ?>" REQUIRED>
                                    </div>
                                    </div>
									<div class="form-group">
								  <div class="form-line">
										<label>Satuan</label>
                                        <select name="satuan_bahan" class="form-control">
											<option value="<?php echo $v->satuan_bahan; ?>" selected><?php echo $v->satuan_bahan; ?></option>
											<option value="Botol">Botol</option>
											<option value="Tablet"> Tablet</option>
											<option value="Buah"> Buah</option>
											<option value="Kapsul"> Kapsul</option>
										</select>
                                    </div>
                                    </div>
									<div class="form-group">
								  <div class="form-line">
										<label>Harga Satuan</label>
                                        <input name="harga_bahan" type="number" class="form-control" value="<?php echo $v->harga_bahan; ?>" REQUIRED>
                                    </div>
                                    </div>
									
								<div class="form-group">
								<div class="form-line">
										<label>Stok</label>
                                        <input name="stok_bahan" type="number" class="form-control" value="<?php echo $v->stok_bahan; ?>" REQUIRED>
                                    </div>
                                    </div>
                                <!-- modal untuk footer -->
                                <div class="modal-footer">
                                    <button class="btn btn-info" type="submit"><i class="fa fa-save"></i> Simpan</button>
                                </div>
                                </form>
								
                            </div>
                            </div>
							<a href="<?php echo base_url("admin/mbahanhabispakai"); ?>"><button class="btn btn-primary pull-left">Kembali</button></a>
							  </div><!-- /.row -->
							  </div>
				<?php } ?>
                </div><!-- /.tab-content -->
              </div>
        </section><!-- /.content -->
      </div>