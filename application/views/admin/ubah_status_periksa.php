<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>UBAH STATUS PEMERIKSAAN</h2>
            </div>
<div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                       
                        <div class="body">
					<form role="form" action="<?php echo base_url("/admin/simpan_status_periksa/$kode/$id_pasien"); ?>" enctype="multipart/form-data" method="post">
				  <label>Status</label>
                   <label>Status Pasien</label>
				   	<div class="form-group">
								<div class="form-line">
                 <select name="status" class="form-control">
					<option value="Rawat Inap">Rawat Inap</option>
					<option value="Pulang">Pulang</option>
					<option value="Rawat Jalan">Rawat Jalan</option>
					</select>
					</div>
					</div>
				<div class="modal-footer">
                                    <button class="btn btn-info" type="submit">Simpan</button>
                                </div>
                                </form>
				
						 
          </div>
		  </div>
		  <a href="<?php echo base_url("admin/mpasienrawat"); ?>"><button class="btn btn-primary pull-left">Kembali</button></a>	
			
							  </div>
                </div><!-- /.tab-content -->
              </div>
        </section><!-- /.content -->
      </div>