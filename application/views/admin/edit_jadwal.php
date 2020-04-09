<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>EDIT JADWAL</h2>
            </div>
<div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                       
                        <div class="body">
			<?php foreach($pasien as $v){ ?>
			 <form role="form" action="<?php echo base_url("/admin/simpan_jadwal/$id_jadwal"); ?>" enctype="multipart/form-data" method="post">
                 
								 <div class="form-group">
								  <div class="form-line">
									<label>Tanggal Rencana Periksa Baru</label>
									<div class="input-group">
									  <div class="input-group-addon">
										<i class="fa fa-calendar"></i>
									  </div>
									  <input type="date" name="tanggal" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
									</div>
								  </div><!-- /.form-group -->
								  </div><!-- /.form-group -->
								   <div class="form-group">
								  <div class="form-line">
									  <label for="exampleInputEmail1">No. Kartu/MR</label>
									  <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $v->nomorkartu; ?>" readonly>
									</div><!-- /.form-group -->
									</div><!-- /.form-group -->
									<div class="form-group">
								  <div class="form-line">
									  <label for="exampleInputEmail1">Nama Pasien</label>
									  <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $v->namapasien; ?>" readonly>
									</div>
									</div>
									<div class="form-group">
								  <div class="form-line">
									  <label for="exampleInputEmail1">Tanggal Lahir</label>
									  <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $v->ttl; ?>" readonly>
									</div>
									</div>
									<div class="form-group">
								  <div class="form-line">
									  <label for="exampleInputEmail1">Umur</label>
									  <input type="number" class="form-control" id="exampleInputEmail1" value="<?php echo $v->umur; ?>" readonly>
									</div>
									</div>
								
								
								<div class="form-group">
								  <div class="form-line">
								  <label for="exampleInputEmail1">Pekerjaan</label>
								  <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $v->pekerjaan; ?>" readonly>
								</div>
								</div>
								<div class="form-group">
								  <div class="form-line">
								  <label for="exampleInputEmail1">Jenis Kelamin</label>
								  <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $v->kelamin; ?>" readonly>
								</div>
								</div>
								  <div class="form-group">
								  <div class="form-line">
									  <label>Alamat</label>
									  <textarea class="form-control" rows="3" readonly ><?php echo $v->alamat; ?></textarea>
									</div>
									</div>
								<div class="form-group">
								  <div class="form-line">
									  <label for="exampleInputEmail1">Telepon</label>
									  <input type="number" class="form-control" id="exampleInputEmail1" value="<?php echo $v->nohp; ?>" readonly>
									</div><!-- /.form-group -->
									</div><!-- /.form-group -->
								
								<div class="modal-footer">
									<button class="btn btn-info" type="submit">Simpan</button>
										</div>
							 
							  
			</form>
								
		   </div>
							  
			<?php } ?>
          </div>
		  <a href="<?php echo base_url("admin/mjadwal"); ?>"><button class="btn btn-primary pull-left">Kembali</button></a>
		
          </div>
          </div>
        </section><!-- /.content -->
      </div>
	  