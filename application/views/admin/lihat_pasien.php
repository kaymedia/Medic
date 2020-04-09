<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>LIHAT PASIEN</h2>
            </div>
<div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                       
                        <div class="body">
						<?php foreach($pasien as $v) { ?>
								
									 <div class="form-group">
								  <div class="form-line">
									  <label for="exampleInputEmail1">Nomor Kartu</label>
									  <input type="text" name="namapasien" class="form-control" id="exampleInputEmail1" value="<?php echo $v->nomorkartu; ?>" readonly>
									</div>
									</div>
									 <div class="form-group">
								  <div class="form-line">
									  <label for="exampleInputEmail1">Nama Pasien</label>
									  <input type="text" name="namapasien" class="form-control" id="exampleInputEmail1" value="<?php echo $v->namapasien; ?>" readonly>
									</div>
									</div>
									 <div class="form-group">
								  <div class="form-line">
									  <label for="exampleInputEmail1">Tanggal Lahir</label>
									  <input type="text" name="umur" class="form-control" id="exampleInputEmail1" value="<?php echo $v->ttl; ?>" readonly>
									</div>
									</div>
									 <div class="form-group">
								  <div class="form-line">
									  <label for="exampleInputEmail1">Umur</label>
									  <input type="number" name="umur" class="form-control" id="exampleInputEmail1" value="<?php echo $v->umur; ?>" readonly>
									</div>
									</div>
								
								 <div class="form-group">
								  <div class="form-line">
								  <label for="exampleInputEmail1">Pekerjaan</label>
								  <input type="text" name="pekerjaan" class="form-control" id="exampleInputEmail1" value="<?php echo $v->pekerjaan; ?>" readonly>
								</div>
								</div>
								   <div class="form-group">
								  <div class="form-line">
								  <label for="exampleInputEmail1">Jenis Kelamin</label>
								  <input type="text" name="pekerjaan" class="form-control" id="exampleInputEmail1" value="<?php echo $v->kelamin; ?>" readonly>
								</div>
								</div>
								  <div class="form-group">
								  <div class="form-line">
									  <label>Alamat</label>
									  <textarea name="alamat" class="form-control" rows="3" placeholder="Alamat Pasien ..." readonly><?php echo $v->alamat; ?></textarea>
									</div>
									</div>
								 <div class="form-group">
								  <div class="form-line">
									  <label for="exampleInputEmail1">Telepon</label>
									  <input name="nohp" type="number" class="form-control" id="exampleInputEmail1" value="<?php echo $v->nohp; ?>" readonly>
									</div><!-- /.form-group -->
									</div><!-- /.form-group -->
									 <div class="form-group">
								  <div class="form-line">
									  <label for="exampleInputEmail1">Nama Orang Tua</label>
									  <input name="namaortu" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $v->namaortu; ?>" readonly>
									</div><!-- /.form-group -->
									</div><!-- /.form-group -->
								 <div class="form-group">
								  <div class="form-line">
									  <label for="exampleInputEmail1">Tanggal Daftar</label>
									  <input name="tanggal" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo tgl_indo($v->tanggal); ?>" readonly>
									</div><!-- /.form-group -->
									</div><!-- /.form-group -->
								<div class="modal-footer">
									<a target="__blank" href="<?php echo base_url("admin/print_kartu_pasien/$v->id_pasien"); ?>"><button class="btn btn-success">Print Kartu</button></a> 
								</div>
							  </div><!-- /.row -->
							  </div>
						<?php } ?>
                </div><!-- /.tab-content -->
              </div>
        </section><!-- /.content -->
      </div>