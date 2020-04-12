
				
				<?php foreach($bobat as $bv){ ?>
                <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>EDIT PEMBELIAN OBAT</h2>
            </div>
<div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                       
                        <div class="body">
                                <form role="form" action="<?php echo base_url("/admin/simpan_bobat/$bv->id_beliobat//$bv->id_obat"); ?>" enctype="multipart/form-data" method="post">
									<div class="form-group">
								  <div class="form-line">
										<label>Nama Obat</label>
                                        <input name="namaobat" type="text" class="form-control" value="<?php echo $bv->namaobat; ?>" REQUIRED>
                                    </div>
                                    </div>
									<div class="form-group">
								  <div class="form-line">
										<label>Jenis Obat</label>
                                        <select name="id_jenisobat" class="form-control">
                                        <?php foreach($jenisobat as $jenisobat){ ?> 
                                          <option value="<?php echo $jenisobat->id_jenisobat; ?>"><?php echo $jenisobat->jenisobat; ?></option>
                                        <?php } ?>
											
										
										</select>
                                    </div>
                                    </div>
									<div class="form-group">
								  <div class="form-line">
										<label>Jumlah Beli</label>
                                        <input name="jumlahbeli" type="number" class="form-control" value="<?php echo $bv->jumlahbeli; ?>" REQUIRED>
                                    </div>
                                    </div>
									<div class="form-group">
								  <div class="form-line">
										<label>Satuan</label>
                                        <select name="satuan" class="form-control">
											<option value="<?php echo $bv->satuan; ?>" selected><?php echo $bv->satuan; ?></option>
											<option value="Botol">Botol</option>
											<option value="Tablet"> Tablet</option>
											<option value="Buah"> Buah</option>
											<option value="Kapsul"> Kapsul</option>
										</select>
                                    </div>
                                    </div>
									<div class="form-group">
								  <div class="form-line">
										<label>Jumlah per Satuan</label>
                                        <input name="jumlahpersatuan" type="number" class="form-control" value="<?php echo $bv->jumlahpersatuan; ?>" REQUIRED>
                                    </div>
									</div>
									<div class="form-group">
								  <div class="form-line">
										<label>Harga Beli</label>
                                        <input name="hargabeli" type="number" class="form-control" value="<?php echo $bv->hargabeli; ?>" REQUIRED>
                                    </div>
                                    </div>
									<div class="form-group">
								  <div class="form-line">
									<label>Tanggal Kadaluarsa</label>
									<div class="input-group">
									  <div class="input-group-addon">
										<i class="fa fa-calendar"></i>
									  </div>
									  <input type="date" name="kadaluarsa" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask value="<?php echo $bv->kadaluarsa; ?>">
									</div>
								  </div><!-- /.form-group -->
								  </div><!-- /.form-group -->
								  <div class="form-group">
								  <div class="form-line">
										<label>Nama Suplier</label>
                                        <select name="id_suplier" class="form-control">
                                        <?php foreach($suplier as $suplier){ ?> 
                                          <option value="<?php echo $suplier->id_suplier; ?>"><?php echo $suplier->namasuplier; ?></option>
                                        <?php } ?>
											
										
										</select>
                                    </div>
                                    </div>
									<div class="form-group">
								  <div class="form-line">
									<label>Tanggal Kadaluarsa</label>
									<div class="input-group">
									  <div class="input-group-addon">
										<i class="fa fa-calendar"></i>
									  </div>
									  <input type="date" name="tanggalbeli" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask value="<?php echo $bv->tanggalbeli; ?>">
									</div>
								  </div><!-- /.form-group -->
								  </div><!-- /.form-group -->
								  <div class="form-group">
								  <div class="form-line">
										<label>Satuan</label>
                                        <select name="id_satuanobat" class="form-control">
                                        <?php foreach($satuanobat as $satuanobat){ ?> 
                                          <option value="<?php echo $satuanobat->id_satuanobat; ?>"><?php echo $satuanobat->satuanobat; ?></option>
                                        <?php } ?>
											
										
										</select>
                                    </div>
                                    </div>
                                <!-- modal untuk footer -->
                                <div class="modal-footer">
                                    <button class="btn btn-info" type="submit"><i class="fa fa-save"></i> Simpan</button>
                                </div>
                                </form>
								
                            </div>
                            </div>
							<a href="<?php echo base_url("admin/bobat"); ?>"><button class="btn btn-primary pull-left">Kembali</button></a>
							  </div><!-- /.row -->
							  </div>
				<?php } ?>
                </div><!-- /.tab-content -->
              </div>
        </section><!-- /.content -->
      </div>