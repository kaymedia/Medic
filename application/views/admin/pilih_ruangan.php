<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>PILIH RUANGAN</h2>
            </div>
<div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                       
                        <div class="body">
					<form role="form" action="<?php echo base_url("/admin/simpan_pilih_ruangan/$kode/$id_pasien"); ?>" enctype="multipart/form-data" method="post">
				  <label>Pilih Ruangan</label>
				  <div class="form-group">
                                     <div class="row">
                                        <div class="col-md-10">
                                        <input type="hidden" class="form-control" name="ruangan" id="kode_ruangan" placeholder="Pilih Ruangan" readonly="" />
                                        <input type="text" class="form-control" name="" id="namaruangan" placeholder="Pilih Ruangan" readonly="" />
                                    </div>
                                    <div class="col-md-2">
                                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">. . .</button>
                                    </div>
                                    </div>
					</div>
				<div class="modal-footer">
                                    <button class="btn btn-info" type="submit">Selanjutnya</button>
                                </div>
                                </form>
				
			
						 
          </div>
		  </div>
							  </div>
                </div><!-- /.tab-content -->
              </div>
        </section><!-- /.content -->
      </div>
	   <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" style="width:800px">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Daftar Nama Ruangan</h4>
                    </div>
                    <div class="modal-body">
                        <table id="lookup2" class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>Nama Ruangan</th>
                                </tr>
                            </thead>
                             <tbody>
                            <?php foreach ($ruangan as $v) {?>
                             <tr class="pilih2" data-koderuangan="<?php echo $v->id_ruangan; ?>" data-namaruangan="<?php echo $v->namaruangan; ?>">
                                        <td><?php echo $v->namaruangan; ?></td>
                                    </tr>
                            <?php } ?>                          
                                    </tbody>
                        </table>  
                    </div>
                </div>
            </div>
        </div>
