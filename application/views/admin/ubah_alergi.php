<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>UBAH ALERGI PASIEN</h2>
            </div>
<div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                       
                        <div class="body">
			 <?php foreach($alergi as $alergi){ ?>
			
			 <form role="form" action="<?php echo base_url("/admin/simpan_alergi/$alergi->id_pasien"); ?>" enctype="multipart/form-data" method="post">
								 <label>Apakah Pasien Memiliki Alergi ?</label>
									  <select name="statusalergi"  class="form-control">
									  <option value="Iya">Iya</option>
										<option value="Tidak">Tidak</option>
										
										
										
									  </select>
								<br>
								  <label>Alergi Obat</label>
								  <textarea name="alergi" class="form-control" placeholder="Alergi Obat" ><?php echo $alergi->alergi; ?></textarea>
								   
									
								<div class="modal-footer">
									<button class="btn btn-info" type="submit">Simpan</button>
									</div>
							 
							  
			</form>
					
		   </div>
			
							  
			<?php } ?>
          </div>
			
			
        </section><!-- /.content -->
      </div>
      </div>
      </div>
     
	  