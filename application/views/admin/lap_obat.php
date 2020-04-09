<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>PILIH RENTANG TANGGAL LAPORAN OBAT</h2>
				
            </div>
<div class="row clearfix">
                <!-- Task Info -->
				 
               
               
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                       
                        <div class="body">
							<form role="form" action="<?php echo base_url("/admin/lihat_lap_obat"); ?>" enctype="multipart/form-data" method="post" target="_blank">
							<table class="table table-striped">
                                        <thead>
                                            <tr>
                                              
                                                <th>Tanggal Mulai</th>
                                                <th>Tanggal Sampai</th>
                                                <th>Aksi</th>

                                            </tr>
                                        </thead>
                                         <tbody>
                                            <tr>
                                               
                                                <td><input type="date" class="form-control" name="tanggalmulai" placeholder="Tanggal"/></td>
                                                <td><input type="date" class="form-control" name="tanggalsampai" placeholder="Tanggal"/></td>
                                                <td> <button class="btn btn-info" type="submit"><i class="fa fa-eye"></i> Lihat</button></td>
                                               
                                            </tr>
                                            
                                        </tbody>
                                    </table>
								</form>
            
						</div><!-- /.row -->
				</div>
                </div><!-- /.tab-content -->
				
        <div class="container-fluid">
            <div class="block-header">
                <h2>OBAT LIMIT STOK</h2>
				
            </div>
<div class="row clearfix">
                <!-- Task Info -->
				 
               
               
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                       
                        <div class="body">
							<div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Obat</th>
                                            <th>Satuan</th>
                                            <th>Harga Satuan</th>
                                            <th>Kadaluarsa</th>
                                            <th>Stok</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
									<?php $no = 1; foreach($obat as $v){ ?>
                                    <tbody>
									     <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $v->namaobat; ?></td>
                                            <td><?php echo $v->satuanobat; ?></td>
                                            <td><?php echo $v->hargaobat; ?></td>
                                            <td><?php echo tgl_indo($v->kadaluarsa); ?></td>
                                            <td><font color="red"><b><?php echo $v->stok; ?></b></font></td>
                                            <td><a href="<?php echo base_url("admin/edit_stok/$v->id_obat"); ?>"><button class="btn btn-warning">Ubah Stok</button></a> </td>
                                        </tr>
									<?php $no++; } ?>
                                    </tbody>
                                </table>
								<?php echo $this->pagination->create_links(); ?>
                            </div>
							  </div><!-- /.row -->
							  </div>
                </div><!-- /.tab-content -->
              </div>
              </div>
        </section><!-- /.content -->
		
      </div>
	 