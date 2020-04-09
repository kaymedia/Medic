<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>EDIT PASIEN</h2>
            </div>
<div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                       
                        <div class="body">
						<?php foreach($pasien as $v) { ?>
						<form role="form" action="<?php echo base_url("/admin/simpan_pasien/$v->id_pasien"); ?>" enctype="multipart/form-data" method="post">
								
									 <div class="form-group">
								  <div class="form-line">
									  <label for="exampleInputEmail1">Nama Pasien</label>
									  <input type="text" name="namapasien" class="form-control" id="exampleInputEmail1" value="<?php echo $v->namapasien; ?>" >
									</div>
									</div>
									 <div class="form-group">
								  <div class="form-line">
									  <label for="exampleInputEmail1">Tanggal Lahir</label>
									  <input type="date" name="ttl" class="form-control" id="exampleInputEmail1" value="<?php echo $v->ttl; ?>" >
									</div>
									</div>
									 <div class="form-group">
								  <div class="form-line">
									  <label for="exampleInputEmail1">Umur</label>
									  <input type="number" name="umur" class="form-control" id="exampleInputEmail1" value="<?php echo $v->umur; ?>" >
									</div>
									</div>
								
								 <div class="form-group">
								  <div class="form-line">
								  <label for="exampleInputEmail1">Pekerjaan</label>
								  <input type="text" name="pekerjaan" class="form-control" id="exampleInputEmail1"  value="<?php echo $v->pekerjaan; ?>" >
								</div>
								</div>
								   <div class="form-group">
								  <div class="form-line">
									  <label>Jenis Kelamin</label>
									  <select name="kelamin"  class="form-control">
										<option value="<?php echo $v->kelamin; ?>" selected><?php echo $v->kelamin; ?></option>
										<option value="Laki-Laki">Laki-Laki</option>
										<option value="Perempuan">Perempuan</option>
										
									  </select>
									</div><!-- /.form-group -->
									</div><!-- /.form-group -->
								   <div class="form-group">
								  <div class="form-line">
									  <label>Alamat</label>
									  <textarea name="alamat" class="form-control" rows="3" placeholder="Alamat Pasien ..."><?php echo $v->alamat; ?></textarea>
									</div>
									</div>
								 <div class="form-group">
								  <div class="form-line">
									  <label for="exampleInputEmail1">Telepon</label>
									  <input name="nohp" type="number" class="form-control" id="exampleInputEmail1" value="<?php echo $v->nohp; ?>">
									</div><!-- /.form-group -->
									</div><!-- /.form-group -->
								<div class="form-group">
								  <div class="form-line">
									  <label for="exampleInputEmail1">Nama Orang Tua</label>
									  <input name="namaortu" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $v->namaortu; ?>" >
									</div><!-- /.form-group -->
									</div><!-- /.form-group -->
								<div class="modal-footer">
									<button class="btn btn-info" type="submit">Simpan</button>
								</div>
								</form>
						<?php } ?>
							  </div><!-- /.row -->
							  </div>
                </div><!-- /.tab-content -->
              </div>
        </section><!-- /.content -->
      </div>