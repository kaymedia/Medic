<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>PENGATURAN APILKASI</h2>
				
            </div>
<div class="row clearfix">
                <!-- Task Info -->
				 
               
               
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                       
                        <div class="body">
					<?php foreach ($situs as $v) { ?>
            
                  <table class="table table-user-information">
                    <tbody>
                    <tr>
                        <td>Logo</td>
                        <td>
                        <?php if($v->logo != NULL){
                          echo '<img class="img img-responsive" src="'.base_url("assets/img/$v->logo").'">';
                        }
                        else{
                          echo '<img class="img img-responsive" src="'.base_url("assets/img/default.png").'">';
                        } 
                        ?>
                       
                        </td>
                      </tr>
                      <tr>
                        <td>Batas Minimal Limit Stok Obat</td>
                        <td><?php echo $v->limitstok; ?> Pcs</td>
                      </tr>
                      <tr>
                        <td>Batas Minimal Obat Kadaluarsa</td>
                        <td><?php echo $v->limitkadaluarsa; ?> Hari</td>
                      </tr>
                      <tr>
                        <td>Pendapatan Dari Obat</td>
                        <td><?php echo $v->pendapatan_obat; ?> %</td>
                      </tr>
                      <tr>
                        <td>Pendapatan Dari Pemeriksaan</td>
                        <td><?php echo $v->pendapatan_periksa; ?> %</td>
                      </tr>
                      <tr>
                        <td>Nama Layanan Kesehatan</td>
                        <td><?php echo $v->namaklinik; ?></td>
                      </tr>
                      <tr>
                        <td>Alamat</td>
                        <td><?php echo $v->alamat; ?></td>
                      </tr>
                      <tr>
                        <td>Nomor Handphone</td>
                        <td><?php echo $v->nohp; ?></td>
                      </tr>
					 
                        
                       
                      
                     
                    </tbody>
                  </table>
                <a href="<?php echo base_url("admin/edit_setting"); ?>"><button class="btn btn-primary align-right">Edit Pengaturan Aplikasi</button></a>
               
               
          </div>
					<?php } ?>
							  </div><!-- /.row -->
							  </div>
                </div><!-- /.tab-content -->
              </div>
        </section><!-- /.content -->
      </div>