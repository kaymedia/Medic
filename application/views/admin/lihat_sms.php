<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>LIHAT SMS</h2>
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
                  
                  <div class="box box-primary">
               <?php foreach($sms2 as $v2){ ?>
                <div class="box-body no-padding">
                  <div class="mailbox-read-info">
                    <h3><i class="fa fa-check"></i> SMS Berhasil Dikirim Dengan Kode <?php echo $v2->kode; ?> </h3><hr>
                    <h5><span class="mailbox-read-time pull-right"><?php echo tgl_indo($v2->tanggal); ?></span></h5><p></p>Penerima :
                   <div class="form-group">
						<div class="form-line">
                    <textarea class= "form-control" readonly> <?php foreach($sms1 as $v1){ ?><?php echo $v1->nama; ?> - <?php echo $v1->nohp; ?>, <?php } ?></textarea>
                    </div>
                    </div>
                  </div><!-- /.mailbox-read-info -->
                 Isi :
                  <div class="mailbox-read-message">
                      <div class="form-group">
								  <div class="form-line">
                    <textarea class= "form-control" readonly><?php echo $v2->isi; ?></textarea>
                    </div>
                    </div>
                  </div><!-- /.mailbox-read-message -->
                </div><!-- /.box-body -->
                <div class="box-footer">
                  <div class="pull-right">
                    <a href="<?php echo base_url("/admin/teruskan_sms/$v2->kode"); ?>"><button class="btn btn-default"><i class="fa fa-share"></i> Teruskan</button></a>
                  </div>
                 
                </div><!-- /.box-footer -->
              </div>
                </div><!-- /.box-body -->
               <?php } ?>
              </div><!-- /. box -->
            </div><!-- /.col -->
          </div>
							  </div>
                </div><!-- /.tab-content -->
              </div>
        </section><!-- /.content -->
		
      </div>
	  