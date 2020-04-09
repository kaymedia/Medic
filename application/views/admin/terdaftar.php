<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>TERDAFTAR</h2>
            </div>
<div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="">
                       
                        <div class="body">
						
						<div class="">
                        <div class="info-box bg-green">
						<div class="icon">
								<i class="fa fa-check"></i>
							</div>
                            <div class="content">
								<h2>Sukses mendaftarkan pasien baru.</h2>
								
							</div>
                          
                        </div>
                        </div>
                        </div>
                        <div class="">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<div class="info-box bg-cyan ">
							<div class="icon">
								<i class="fa fa-edit"></i>
							</div>
							<div class="content">
								<div class="text">PERIKSA PASIEN</div>
								<a href="<?php echo base_url("/admin/pemeriksaan/$id_pasien"); ?>" class="small-box-footer"><font color="white">Pemeriksaan <i class="fa fa-arrow-circle-right"></i></a></font> 

							</div>
						</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<div class="info-box bg-cyan ">
							<div class="icon">
								<i class="fa fa-calendar"></i>
							</div>
							<div class="content">
								<div class="text">BUAT JADWAL</div>
								<a href="<?php echo base_url("/admin/buat_jadwal/$id_pasien"); ?>" class="small-box-footer"><font color="white">jadwalkan pasien <i class="fa fa-arrow-circle-right"></i></a></font> 

							</div>
						</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<div class="info-box bg-cyan ">
							<div class="icon">
								<i class="fa fa-info"></i>
							</div>
							<div class="content">
								<div class="text">INFORMASI PASIEN </div>
								<a href="<?php echo base_url("/admin/lihat_pasien/$id_pasien"); ?>" class="small-box-footer"><font color="white">Lihat Pasien <i class="fa fa-arrow-circle-right"></i></a></font> 

							</div>
						</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<div class="info-box bg-cyan ">
							<div class="icon">
								<i class="fa fa-file"></i>
							</div>
							<div class="content">
								<div class="text">REKAM MEDIS</div>
								<a target="___blank" href="<?php echo base_url("/admin/rekam_medis/$id_pasien"); ?>" class="small-box-footer"><font color="white">Lihat RM <i class="fa fa-arrow-circle-right"></i></a></font> 

							</div>
						</div>
						</div>
							  </div>
                </div><!-- /.tab-content -->
              </div>
    </div>
	</section>