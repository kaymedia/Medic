<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>PENDAFTARAN PASIEN BARU</h2>
            </div>
<div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                       
                        <div class="body">
						<form role="form" action="<?php echo base_url("/admin/pendaftaran"); ?>" enctype="multipart/form-data" method="post">
								
								 
									<div class="form-group">
									<div class="form-line">
									  <label for="exampleInputEmail1">Nama Pasien</label>
									  <input type="text" name="namapasien" class="form-control" id="exampleInputEmail1" placeholder="Minimal 4 Karakter">
									</div>
									</div>
									<div class="form-group">
									<div class="form-line">
									  <label for="exampleInputEmail1">Tanggal Lahir</label>
									  <div class="input-group">
									  <div class="input-group-addon">
										<i class="fa fa-calendar"></i>
									  </div>
									  <input type="date" name="ttl" class="form-control" id="exampleInputEmail1" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
									</div>
									</div>
									</div>
									
								
								<div class="form-group">
								<div class="form-line">
								  <label for="exampleInputEmail1">Pekerjaan</label>
								  <input type="text" name="pekerjaan" class="form-control" id="exampleInputEmail1" placeholder="Pekerjaan">
								</div>
								</div>
								  <div class="form-group">
								  <div class="form-line">
									  <label>Jenis Kelamin</label>
									  <select name="kelamin"  class="form-control">
										<option value="Laki-Laki">Laki-Laki</option>
										<option value="Perempuan">Perempuan</option>
										
									  </select>
									</div><!-- /.form-group -->
									</div><!-- /.form-group -->
								  <div class="form-group">
								  <div class="form-line">
									  <label>Alamat</label>
									  <textarea name="alamat" class="form-control" rows="3" placeholder="Alamat Pasien ..."></textarea>
									</div>
									</div>
								<div class="form-group">
								<div class="form-line">
									  <label for="exampleInputEmail1">Telepon</label>
									  <input name="nohp" type="number" class="form-control" id="exampleInputEmail1" placeholder="Telepon">
									</div><!-- /.form-group -->
									</div><!-- /.form-group -->
								
								<div class="form-group">
								<div class="form-line">
									  <label for="exampleInputEmail1">Nama Orang Tua</label>
									  <input name="namaortu" type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Ayah / Ibu">
									</div><!-- /.form-group -->
									</div><!-- /.form-group -->
									<button type="submit" class="btn btn-primary m-t-15 waves-effect">Daftar</button>
								
								</form>
							  </div><!-- /.col -->
							  </div>
                </div><!-- /.tab-content -->
              </div>
    </div>