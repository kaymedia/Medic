<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>LAPORAN DETAIL PERBULAN</h2>
				
            </div>
<div class="row clearfix">
                <!-- Task Info -->
				 
               
               
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                       
                        <div class="body">
							<form role="form" action="<?php echo base_url("/admin/lihat_lap_lengkap"); ?>" enctype="multipart/form-data" method="post" target="_blank">
							<table class="table table-striped">
                                        <thead>
                                            <tr>
                                              
                                                <th>Bulan</th>
                                                <th>Tahun</th>
                                                <th>Aksi</th>

                                            </tr>
                                        </thead>
                                         <tbody>
                                            <tr>
                                               
                                                <td><select name="bulan" class="form-control" required="">
                                         <option value="01">Januari</option>
                                         <option value="02">Febuari</option>
                                         <option value="03">Maret</option>
                                         <option value="04">April</option>
                                         <option value="05">Mei</option>
                                         <option value="06">Juni</option>
                                         <option value="07">Juli</option>
                                         <option value="08">Agustus</option>
                                         <option value="09">September</option>
                                         <option value="10">Oktober</option>
                                         <option value="11">November</option>
                                         <option value="12">Desember</option>
                                        </select></td>
                                                <td><select name="tahun" class="form-control" required="">
										<?php
										$thnini = date('20y');
										$jmlahkurang = $thnini-5;
										
										$jmlahlebih = $thnini+5;
										for($x = $jmlahkurang; $x <= $jmlahlebih; $x++){ 
										?>
                                         <option value="<?php echo $x; ?>"><?php echo $x; ?></option>
										<?php } ?>
										
                                         </td>
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
                <h2>DETAIL LAPORAN LENGKAP</h2>
				
            </div>
<div class="row clearfix">
                <!-- Task Info -->
				 
               
               
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                       
                        <div class="body">
							<table class="table table-striped">
                                        <thead>
                                            <tr>
                                              
                                                <th>Pendapatan dari pasien tahun <?php echo date('20y'); ?></th>
                                                <th>Pendapatan dari obat tahun <?php echo date('20y'); ?></th>
                                                <th>Hitung Bersih</th>

                                            </tr>
                                        </thead>
                                         <tbody>
                                            <tr>
                                               
                                                <td>Rp.<?php echo number_format($uangsetahun,0,".","."). ''; ?></td>
                                                <td>Rp.<?php echo number_format($obatsetahun,0,".","."). ''; ?></td>
                                                <td>Rp.<?php echo number_format($uangsetahun-$obatsetahun,0,".","."). ''; ?></td>
                                                
                                               
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                           <table class="table table-striped">
                                        <thead>
                                            <tr>
                                              
                                                <th>Pendapatan dari pasien selama ini</th>
                                                <th>Pendapatan dari obat selama ini</th>
                                                <th>Hitung Bersih</th>

                                            </tr>
                                        </thead>
                                         <tbody>
                                            <tr>
                                               
                                                <td>Rp.<?php echo number_format($uangsemua,0,".","."). ''; ?></td>
                                                <td>Rp.<?php echo number_format($obatsemua,0,".","."). ''; ?></td>
                                                <td>Rp.<?php echo number_format($uangsemua-$obatsemua,0,".","."). ''; ?></td>
                                                
                                               
                                            </tr>
                                            
                                        </tbody>
                                    </table>
							  </div><!-- /.row -->
							  </div>
                </div><!-- /.tab-content -->
              </div>
              </div>
        </section><!-- /.content -->
		
      </div>
	 