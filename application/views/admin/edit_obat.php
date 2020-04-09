
				
				<?php foreach($mobat as $v){ ?>
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
                                <form role="form" action="<?php echo base_url("/admin/simpan_obat/$v->id_obat"); ?>" enctype="multipart/form-data" method="post">
									<div class="form-group">
								  <div class="form-line">
										<label>Nama Obat</label>
                                        <input name="namaobat" type="text" class="form-control" value="<?php echo $v->namaobat; ?>" REQUIRED>
                                    </div>
                                    </div>
									<div class="form-group">
								  <div class="form-line">
										<label>Satuan</label>
                                        <select name="satuan" class="form-control">
											<option value="<?php echo $v->satuanobat; ?>" selected><?php echo $v->satuanobat; ?></option>
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
                                        <input name="hargaobat" type="number" class="form-control" value="<?php echo $v->hargaobat; ?>" REQUIRED>
                                    </div>
                                    </div>
									<div class="form-group">
								  <div class="form-line">
									<label>Tanggal Kadaluarsa</label>
									<div class="input-group">
									  <div class="input-group-addon">
										<i class="fa fa-calendar"></i>
									  </div>
									  <input type="date" name="kadaluarsa" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask value="<?php echo $v->kadaluarsa; ?>">
									</div>
								  </div><!-- /.form-group -->
								  </div><!-- /.form-group -->
								<div class="form-group">
								<div class="form-line">
										<label>Stok</label>
                                        <input name="stok" type="number" class="form-control" value="<?php echo $v->stok; ?>" REQUIRED>
                                    </div>
                                    </div>
                                <!-- modal untuk footer -->
                                <div class="modal-footer">
                                    <button class="btn btn-info" type="submit"><i class="fa fa-save"></i> Simpan</button>
                                </div>
                                </form>
								
                            </div>
                            </div>
							<a href="<?php echo base_url("admin/mobat"); ?>"><button class="btn btn-primary pull-left">Kembali</button></a>
							  </div><!-- /.row -->
							  </div>
				<?php } ?>
                </div><!-- /.tab-content -->
              </div>
        </section><!-- /.content -->
      </div>