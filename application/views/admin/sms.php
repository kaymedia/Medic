<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>SMS GATEWAY GRATIS</h2>
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
                  
                  <div class="table-responsive mailbox-messages">
                    <table class="table table-hover table-striped">
					<?php $no = $nomor; foreach($bobat as $v) { ?>
                      <tbody>
                        <tr>
                          <td class="mailbox-name"><?php echo $v->kode; ?> - SMS Berhasil Dikirim pada tanggal <?php echo tgl_indo($v->tanggal); ?>.</td>
                          <td class="mailbox-subject"><a href="<?php echo base_url("/admin/lihat_sms/$v->kode"); ?>"><button class="btn btn-primary btn-block margin-bottom">Lihat SMS</button></td>
                        </tr>
                        
                     <?php $no++; } ?>
                     </tbody>
                     </table>
					<?php echo $this->pagination->create_links(); ?>
                  </div><!-- /.mail-box-messages -->
                </div><!-- /.box-body -->
               
              </div><!-- /. box -->
            </div><!-- /.col -->
          </div>
							  </div>
                </div><!-- /.tab-content -->
              </div>
        </section><!-- /.content -->
		
      </div>
	  