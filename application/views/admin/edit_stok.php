<div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <!-- Main content -->
        <section class="content">

          <!-- Default box -->
		  <div class="nav-tabs-custom">
                <ul class="nav nav-tabs pull-right"> 
                  <li class="pull-right header"><font color="green">Aplikasi E-klinik</font></li>
                  <li class="pull-left header"><i class="fa fa-edit"></i>Edit Stok Data Obat</li>
                </ul>
				
				<?php foreach($mobat as $v){ ?>
                <div class="tab-content">
                  <div class="tab-pane active" id="tab_1-1">
                    <div class="box-body">
						<div class="row">
							 <div class="modal-body">
                                <form role="form" action="<?php echo base_url("/admin/simpan_stok/$v->id_obat"); ?>" enctype="multipart/form-data" method="post">
									
								<div class="form-group">
										<label>Stok</label>
                                        <input name="stok" type="number" class="form-control" value="<?php echo $v->stok; ?>" REQUIRED>
                                    </div>
                                <!-- modal untuk footer -->
                                <div class="modal-footer">
                                    <button class="btn btn-info" type="submit"><i class="fa fa-save"></i> Simpan</button>
                                </div>
                                </form>
								<a href="<?php echo base_url("admin/lap_obat"); ?>"><button class="btn btn-primary pull-left">Kembali</button></a>
                            </div>
                            </div>
							  </div><!-- /.row -->
							  </div>
				<?php } ?>
                </div><!-- /.tab-content -->
              </div>
        </section><!-- /.content -->
      </div>