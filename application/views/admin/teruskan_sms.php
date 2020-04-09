<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>TERUSKAN SMS</h2>
            </div>
<div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                       
                        <div class="body">
						<div class="row">
            <div class="col-md-3">
              </a>
              <div class="box box-solid">
                
                <div class="box-body no-padding">
                  <ul class="nav nav-pills nav-stacked">
                     <li><a href="<?php echo base_url("/admin/sms"); ?>" class="btn btn-primary btn-block margin-bottom">Data Sms <span class="label label-primary pull-right"><?php echo $jd; ?></span></a></li>
					 <li><a href="<?php echo base_url("/admin/sms_baru"); ?>" class="btn btn-primary btn-block margin-bottom">Kirim SMS Baru </a></li>
                   
                  </ul>
                </div><!-- /.box-body -->
              </div><!-- /. box -->
              
            </div><!-- /.col -->
            <div class="col-md-9">
              <div class="box box-primary">
               
                <div class="box-body no-padding">
                  
                  <!-- Multi Select -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Pilih Pasien
                                <small>Pilih Pasien yang akan menerima broadcast sms.</small>
                            </h2>
                           
                        </div>
                        <div class="body">
                            <form role="form" action="<?php echo base_url("/admin/kirim_sms"); ?>" enctype="multipart/form-data" method="post">
                            <select id='pre-selected-options' multiple='multiple' name='idpasien[]'>
							<?php foreach ($pasien as $v){ ?>
							  <option value='<?php echo $v->id_pasien; ?>' ><?php echo $v->namapasien; ?> - <?php echo $v->nohp; ?></option>
							<?php } ?>
							</select>
							 <div class="form-group">
								  <div class="form-line">
								  <hr>
									  <textarea name="isi" class="form-control" rows="3" ><?php foreach($sms2 as $v2){ echo $v2->isi; }?></textarea>
									</div>
									</div>
									<div class="modal-footer">
                                    <button class="btn btn-primary btn-block margin-bottom" type="submit"><i class="fa fa-arrow-right"></i> Kirm</button>
                                </div>
                         </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Multi Select -->

                </div><!-- /.box-body -->
               
              </div><!-- /. box -->
            </div><!-- /.col -->
          </div>
							  </div>
                </div><!-- /.tab-content -->
              </div>
        </section><!-- /.content -->
		
      </div>
	  <script type="text/javascript">
    $(document).ready(function() {
        $('#pre-selected-options').multiSelect();
    });
</script>