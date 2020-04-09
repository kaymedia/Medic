<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>EDIT PENGATURAN APILKASI</h2>
				
            </div>
<div class="row clearfix">
                <!-- Task Info -->
				 
               
               
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                       
                        <div class="body">
						<?php foreach($situs as $v){ ?>
								 <form role="form" action="<?php echo base_url("/admin/simpan_setting"); ?>" enctype="multipart/form-data" method="post">
								   
								 <div class="form-group">
								  <div class="form-line">
									  <label for="exampleInputEmail1">Logo</label>
									  <input name="logo" type="file" class="form-control">
									</div><!-- /.form-group -->
									</div><!-- /.form-group -->
									<div class="form-group">
								  <div class="form-line">
									  <label for="exampleInputEmail1">Limit Stok Obat (Pcs)</label>
									  <input name="limitstok" type="number" class="form-control"  value="<?= $v->limitstok ?>">
									</div><!-- /.form-group -->
									</div><!-- /.form-group -->
									<div class="form-group">
								  <div class="form-line">
									  <label for="exampleInputEmail1">Limit Kadaluarsa (Hari)</label>
									  <input name="limitkadaluarsa" type="number" class="form-control"  value="<?= $v->limitkadaluarsa ?>">
									</div><!-- /.form-group -->
									</div><!-- /.form-group -->
									<div class="form-group">
								  <div class="form-line">
									  <label for="exampleInputEmail1">Pendapatan Dari Obat (%)</label>
									  <input name="pendapatan_obat" type="number" class="form-control"  value="<?= $v->pendapatan_obat ?>">
									</div><!-- /.form-group -->
									</div><!-- /.form-group -->
									<div class="form-group">
								  <div class="form-line">
									  <label for="exampleInputEmail1">Pendapatan Dari Pemeriksaan Dokter (%)</label>
									  <input name="pendapatan_periksa" type="number" class="form-control" value="<?= $v->pendapatan_periksa ?>">
									</div><!-- /.form-group -->
									</div><!-- /.form-group -->
								   <div class="form-group">
								  <div class="form-line">
									  <label for="exampleInputEmail1">Nama Layanan Kesehatan</label>
									  <input name="namaklinik" type="text" class="form-control" value="<?= $v->namaklinik ?>">
									</div><!-- /.form-group -->
									</div><!-- /.form-group -->
									 <div class="form-group">
								  <div class="form-line">
									  <label for="exampleInputEmail1">Alamat</label>
									  <textarea name="alamat" class="form-control" placeholder="Alamat "><?= $v->alamat ?></textarea>
									</div>
									</div>
									 <div class="form-group">
								  <div class="">
									  <label for="exampleInputEmail1">Nomor Handphone</label>
									  <input name="nohp" type="text" class="form-control" value="<?= $v->nohp ?>">
									</div>
									</div>
									<div class="modal-footer">
									<button class="btn btn-info" type="submit"><i class="fa fa-save"></i> Simpan</button>
									
								</div>
								</form>
						<?php } ?>
							  </div>
                </div><!-- /.tab-content -->
				<a href="<?php echo base_url("admin/setting"); ?>"><button class="btn btn-primary pull-left">Kembali</button></a>
									
								
              </div>
        </section><!-- /.content -->
      </div>