<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>UBAH STATUS JADWAL</h2>
            </div>
<div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                       
                        <div class="body">
			<?php foreach($pasien as $v){ ?>
			
			 <form role="form" action="<?php echo base_url("/admin/simpan_status_jadwal/$id_jadwal"); ?>" enctype="multipart/form-data" method="post">
                 
								 <div class="form-group">
								  <div class="">
									 <label for="exampleInputEmail1">Status Pemeriksaan</label>
										<select name="status" class="form-control">
											<option value="Sudah Diperiksa">Sudah Diperiksa</option>
											<option value="Belum Diperiksa">Belum Diperiksa</option>
										</select>
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
			
			
        </section><!-- /.content -->
      </div>
      </div>
      </div>
     
	  