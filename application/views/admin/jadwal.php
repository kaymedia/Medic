<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>JADWAL</h2>
            </div>
<div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="">
                       
                        <div class="body">
						
						<div class="">
                        
                        <div class="body">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<div class="info-box bg-cyan ">
							<div class="icon">
								<i class="fa fa-user"></i>
							</div>
							<div class="content">
								<div class="text">PASIEN BARU</div>
								<a href="<?php echo base_url("/admin/daftar");?>" class="small-box-footer"><font color="white">Daftarkan pasien <i class="fa fa-arrow-circle-right"></i></a></font> 

							</div>
						</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<div class="info-box bg-cyan ">
							<div class="icon">
								<i class="fa fa-check"></i>
							</div>
							<div class="content">
								<div class="text">PASIEN TERDAFTAR</div>
								<a href="#" data-toggle="modal" data-target="#cari"  class="small-box-footer"><font color="white">Pilih pasien <i class="fa fa-arrow-circle-right"></i></a></font> 

							</div>
						</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<div class="info-box bg-cyan ">
							<div class="icon">
								<i class="fa fa-calendar"></i>
							</div>
							<div class="content">
								<div class="text">MASTER JADWAL </div>
								<a href="<?php echo base_url("/admin/mjadwal");?>" class="small-box-footer"><font color="white">Lihat jadwal <i class="fa fa-arrow-circle-right"></i></a></font> 

							</div>
						</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<div class="info-box bg-cyan ">
							<div class="icon">
								<i class="fa fa-group"></i>
							</div>
							<div class="content">
								<div class="text">MASTER PASIEN</div>
								<a href="<?php echo base_url("/admin/mpasien");?>" class="small-box-footer"><font color="white">Lihat pasien <i class="fa fa-arrow-circle-right"></i></a></font> 

							</div>
						</div>
						</div>
						</div>
                    </div>
							  </div><!-- /.col -->
							  </div>
                </div><!-- /.tab-content -->
              </div>
    </div>
	</section>
	  <div class="modal fade" id="cari">
                          <div class="modal-dialog">
                            <div class="modal-content">

                              <!-- modal header -->
                                <div class="modal-header">
                                    <button class="close" type="button" data-dismiss="modal">&times;</button>
                                   
                                </div>

                                <!-- modal untuk isi konten -->
                                <div class="modal-body">
                                <form role="form" action="<?php echo base_url("/admin/post_cari_jadwal"); ?>" enctype="multipart/form-data" method="post">
									<div class="form-group">
                                    <label for="varchar">Nama Pasien / Nomor Kartu Pasien</label>
                                     <div class="row">
                                        <div class="col-md-10">
                                        <input type="text" class="form-control" name="cari" id="kode_pasien" placeholder="Pilih Nama Pasien / Nomor Kartu Pasien" readonly="" />
                                    </div>
                                    <div class="col-md-2">
                                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">. . .</button>
                                    </div>
                                    </div>
                                    </div>
									
									

                                <!-- modal untuk footer -->
                                <div class="modal-footer">
                                    <button class="btn btn-info" type="submit">Selanjutnya</button>
                                </div>
                                </form>
                            </div>

                          </div>
                        </div>
                        </div>
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" style="width:800px">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Daftar Pasien</h4>
                    </div>
                    <div class="modal-body">
                        <table id="lookup" class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>Nomor Kartu</th>
                                    <th>Nama</th>
                                </tr>
                            </thead>
                             <tbody>
                            <?php foreach ($datapasien as $v) {?>
                             <tr class="pilih" data-kodepasien="<?php echo $v->id_pasien; ?>">
                                        <td><?php echo $v->nomorkartu; ?></td>
                                        <td><?php echo $v->namapasien; ?></td>
                                    </tr>
                            <?php } ?>                          
                                    </tbody>
                        </table>  
                    </div>
                </div>
            </div>
        </div>
