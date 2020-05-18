<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>PERIKSA</h2>
            </div>
<div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                    <div class="alert alert-info alert-dismissible" role="alert">
                               
                               <marquee> Untuk pasien yang belum terdaftar silahkan pilih tombol <b>PASIEN BARU</b> jika telah terdaftar silahkan pilih tombol <b> PASIEN TERDAFTAR</b>.</marquee>                            </div>
                        <div class="body">
						
						<div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
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
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="info-box bg-cyan">
							<div class="icon">
								<i class="fa fa-check"></i>
							</div>
							<div class="content">
								<div class="text">PASIEN TERDAFTAR</div>
								 <a href="#" data-toggle="modal" data-target="#cari"  class="small-box-footer"><font color="white">Pilih Pasien <i class="fa fa-arrow-circle-right"></i></a></font>
							</div>
						</div>
						</div>
            
							  </div><!-- /.row -->
							  </div>
                </div><!-- /.tab-content -->
              </div>
        </section><!-- /.content -->
		
      </div>
	  <div class="modal fade" id="cari">
                          <div class="modal-dialog">
                            <div class="modal-content">

                              <!-- modal header -->
                                <div class="modal-header">
                                    <button class="close" type="button" data-dismiss="modal">&times;</button>
                                   
                                </div>

                                <!-- modal untuk isi konten -->
                                <div class="modal-body">
                                <form role="form" action="<?php echo base_url("/admin/post_cari_periksa"); ?>" enctype="multipart/form-data" method="post">
									<div class="form-group">
                                    <label for="varchar">Nama Pasien / Nomor Kartu Pasien</label>
                                     <div class="row">
                                        <div class="col-md-10">
                                        <input type="hidden" class="form-control" name="cari" id="kode_pasien" placeholder="Pilih Nama Pasien / Nomor Kartu Pasien" readonly="" />
                                        <input type="text" class="form-control" name="" id="namapasien" placeholder="Pilih Nama Pasien / Nomor Kartu Pasien" readonly="" />
                                    </div>
                                    <div class="col-md-2">
                                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">. . .</button>
                                    </div>
                                    </div>
									

                                <!-- modal untuk footer -->
                                <div class="modal-footer">
                                    <button class="btn btn-info" type="submit"> Selanjutnya</button>
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
                                    <th>Nama Orang Tua</th>
                                </tr>
                            </thead>
                             <tbody>
                            <?php foreach ($datapasien as $v) {?>
                             <tr class="pilih" data-kodepasien="<?php echo $v->id_pasien; ?>" data-namapasien="<?php echo $v->namapasien; ?>">
                                        <td><?php echo $v->nomorkartu; ?></td>
                                        <td><?php echo $v->namapasien; ?></td>
                                        <td><?php echo $v->namaortu; ?></td>
                                    </tr>
                            <?php } ?>                          
                                    </tbody>
                        </table>  
                    </div>
                </div>
            </div>
        </div>
