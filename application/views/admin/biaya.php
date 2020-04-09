<div class="content-wrapper">
	<section class="content">
		<div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Biaya</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Tanggal</th>
                        <th>Keterangan</th>
                        <th>Jumlah</th>
                        <th>Menu</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>12/12/2098</td>
                        <td>123</td>
                        <td>dskjls</td>
						<td><div class="btn-group">
                      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                      </button>
                      <ul class="dropdown-menu" role="menu">
                        <li data-toggle="modal" data-target="#tambah"><a href="#">Lihat</a></li>
                        <li><a href="#">Edit</a></li>
                        <li><a href="#">Hapus</a></li>
                      </ul>
                    </div></td>
                      </tr>
                    </tbody>
                    
                  </table>
                </div><!-- /.box-body -->
              </div>
		 </section>
		</div>
		<div class="modal fade" id="tambah">
                          <div class="modal-dialog">
                            <div class="modal-content">

                              <!-- modal header -->
                                <div class="modal-header">
                                    <button class="close" type="button" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Tambah Guru</h4>
                                </div>

                                <!-- modal untuk isi konten -->
                                <div class="modal-body">
                                <form role="form" action="#" enctype="multipart/form-data" method="post">
                                    <div class="form-group">
                                    
										<label>Tanggal Rencana Periksa</label>
										<div class="input-group">
										<div class="input-group-addon">
										<i class="fa fa-calendar"></i>
										</div>
										<input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
									</div>
									<div class="form-group">
									<label>Bayaran PLN</label>
                                    <input name="koderup" type="text" class="form-control" placeholder="Bayaran PLN" REQUIRED>
									<label>Jumlah</label>
                                        <input name="koderup" type="text" class="form-control" placeholder="Jumlah" REQUIRED>
									</div>

                                <!-- modal untuk footer -->
                                <div class="modal-footer">
                                    <button class="btn btn-info" type="submit">Simpan</button>
									<button class="btn btn-info" type="submit">Batal</button>
                                </div>
                                </form>
                            </div>

                          </div>
                        </div>
                        </div>
						</div>