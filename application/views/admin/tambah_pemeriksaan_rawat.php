<script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	var maxField = 100; //Input fields increment limitation
	var addButton = $('.diagnosa'); //Add button selector
	var wrapper = $('.tdiagnosa'); //Input field wrapper
	var fieldHTML = ' <div class="col-xs-8"><label>Diagnosa</label> <input type="text" name="diagnosa[]" class="form-control" placeholder="Diagnosa Penyakit"></div>'; //New input field html 
	var x = 1; //Initial field counter is 1
	$(addButton).click(function(){ //Once add button is clicked
		if(x < maxField){ //Check maximum number of input fields
			x++; //Increment field counter
			$(wrapper).append(fieldHTML); // Add field html
		}
	});
	$(wrapper).on('click', '.remove_button', function(e){ //Once remove button is clicked
		e.preventDefault();
		$(this).parent('div').remove(); //Remove field html
		x--; //Decrement field counter
	});
});
</script>
<script type="text/javascript">
$(document).ready(function(){
	var maxField = 100; //Input fields increment limitation
	var addButton = $('.tindakan'); //Add button selector
	var wrapper = $('.ttindakan'); //Input field wrapper
    var fieldHTML = '<div class="col-xs-8"><select name="id_tindakan[]" class="form-control" required=""><?php foreach($tindakan as $tindakan){ ?><option value="<?php echo $tindakan->id_tindakan; ?>"><?php echo $tindakan->nama_tindakan; ?> - Rp.<?php echo number_format($tindakan->biaya_tindakan,0,".","."). ''; ?></option><?php } ?></select></div>';
    var x = 1; //Initial field counter is 1
	$(addButton).click(function(){ //Once add button is clicked
		if(x < maxField){ //Check maximum number of input fields
			x++; //Increment field counter
			$(wrapper).append(fieldHTML); // Add field html
		}
	});
	$(wrapper).on('click', '.remove_button', function(e){ //Once remove button is clicked
		e.preventDefault();
		$(this).parent('div').remove(); //Remove field html
		x--; //Decrement field counter
	});
});
</script>
<script type="text/javascript">
$(document).ready(function(){
	var maxField = 100; //Input fields increment limitation
	var addButton = $('.bahanhabis'); //Add button selector
	var wrapper = $('.tbahanhabis'); //Input field wrapper
	var fieldHTML = '<div class="col-xs-8"><label>Bahan Habis Pakai</label><select name="id_bahan[]" class="form-control" required=""><?php foreach($bahanhabis as $bahanhabis){ ?><option value="<?php echo $bahanhabis->id_bahan; ?>"><?php echo $bahanhabis->nama_bahan; ?> - Rp.<?php echo number_format($bahanhabis->harga_bahan,0,".","."). ''; ?></option><?php } ?></select> </div><div class="col-xs-8"><label>Jumlah</label><input type="number" name="jml_bahan[]" class="form-control" placeholder="Contoh : 10 pcs." required=""></div><div class="tbahanhabis"></div>'; //New input field html 
	var x = 1; //Initial field counter is 1
	$(addButton).click(function(){ //Once add button is clicked
		if(x < maxField){ //Check maximum number of input fields
			x++; //Increment field counter
			$(wrapper).append(fieldHTML); // Add field html
		}
	});
	$(wrapper).on('click', '.remove_button', function(e){ //Once remove button is clicked
		e.preventDefault();
		$(this).parent('div').remove(); //Remove field html
		x--; //Decrement field counter
	});
});
</script>
<script type="text/javascript">
$(document).ready(function(){
	var maxField = 100; //Input fields increment limitation
	var addButton = $('.obat'); //Add button selector
	var wrapper = $('.tobat'); //Input field wrapper
	var fieldHTML = '<div class="col-xs-8"><label>Obat</label><select name="obat[]" class="form-control"><?php foreach($obat as $vobat){ ?><option value="<?php echo $vobat->id_obat; ?>"><?php echo $vobat->namaobat; ?><?php } ?></option></select> </div><div class="col-xs-8"><label>Dosis</label><input type="text" name="dosis[]" class="form-control" placeholder="Contoh : 3 x 1 Hari."> </div>'; //New input field html 
	var x = 1; //Initial field counter is 1
	$(addButton).click(function(){ //Once add button is clicked
		if(x < maxField){ //Check maximum number of input fields
			x++; //Increment field counter
			$(wrapper).append(fieldHTML); // Add field html
		}
	});
	$(wrapper).on('click', '.remove_button', function(e){ //Once remove button is clicked
		e.preventDefault();
		$(this).parent('div').remove(); //Remove field html
		x--; //Decrement field counter
	});
});
</script>
<script type="text/javascript">
$(document).ready(function(){
	var maxField = 100; //Input fields increment limitation
	var addButton = $('.obat'); //Add button selector
	var wrapper = $('.tobat'); //Input field wrapper
	var fieldHTML = '<div class="col-xs-8"><label>Obat</label><select name="obat[]" class="form-control"><?php foreach($obat as $vobat){ ?><option value="<?php echo $vobat->id_obat; ?>"><?php echo $vobat->namaobat; ?><?php } ?></option></select> </div><div class="col-xs-8"><label>Dosis</label><input type="text" name="dosis[]" class="form-control" placeholder="Contoh : 3 x 1 Hari."><label>Jumlah Obat</label><input type="number" name="jumlahobat[]" class="form-control" placeholder="Contoh : 10 Butir."></div>'; //New input field html 
	var x = 1; //Initial field counter is 1
	$(addButton).click(function(){ //Once add button is clicked
		if(x < maxField){ //Check maximum number of input fields
			x++; //Increment field counter
			$(wrapper).append(fieldHTML); // Add field html
		}
	});
	$(wrapper).on('click', '.remove_button', function(e){ //Once remove button is clicked
		e.preventDefault();
		$(this).parent('div').remove(); //Remove field html
		x--; //Decrement field counter
	});
});
</script>
<script type="text/javascript">
$(document).ready(function(){
	var maxField = 100; //Input fields increment limitation
	var addButton = $('.keluhan'); //Add button selector
	var wrapper = $('.tkeluhan'); //Input field wrapper
	var fieldHTML = '<div class="col-xs-8"><label>Keluhan</label><input type="text" name="keluhan[]" class="form-control" placeholder="Keluhan Pasien"></div>'; //New input field html 
	var x = 1; //Initial field counter is 1
	$(addButton).click(function(){ //Once add button is clicked
		if(x < maxField){ //Check maximum number of input fields
			x++; //Increment field counter
			$(wrapper).append(fieldHTML); // Add field html
		}
	});
	$(wrapper).on('click', '.remove_button', function(e){ //Once remove button is clicked
		e.preventDefault();
		$(this).parent('div').remove(); //Remove field html
		x--; //Decrement field counter
	});
});
</script>
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>TAMBAH PEMERIKSAAN PASIEN</h2>
            </div>
<div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                    <div class="body">
						 <div class="row">
						 <?php foreach($pasien as $vpasien){ ?>
                <div class="col-md-4">
                   <div class="form-group">
								<div class="form-line">
								<label for="exampleInputEmail1">No. Kartu</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $vpasien->nomorkartu; ?>" disabled>
                    </div><!-- /.form-group -->
                    </div><!-- /.form-group -->
					<div class="form-group">
								<div class="form-line">
                      <label for="exampleInputEmail1">Nama Pasien</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $vpasien->namapasien; ?>" disabled>
                    </div>
                    </div>
					<div class="form-group">
								<div class="form-line">
                      <label for="exampleInputEmail1">Tanggal Lahir</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $vpasien->ttl; ?>" disabled>
                    </div>
                    </div>
					<div class="form-group">
								<div class="form-line">
                      <label for="exampleInputEmail1">Umur</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $vpasien->umur; ?>" disabled>
                    </div>
                    </div>
					<div class="form-group">
								<div class="form-line">
                      <label>Jenis Kelamin</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $vpasien->kelamin; ?>" disabled>
                    </div><!-- /.form-group -->
                    </div><!-- /.form-group -->
                  <div class="form-group">
								<div class="form-line">
                      <label>Alamat</label>
                      <textarea class="form-control" rows="2" placeholder="Enter ..." disabled><?php echo $vpasien->alamat; ?></textarea>
                    </div>
                    </div>
				<div class="form-group">
								<div class="form-line">
                      <label for="exampleInputEmail1">Telepon</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $vpasien->nohp; ?>" disabled>
                    </div>
                    </div>
                </div><!-- /.col -->
				<form role="form" action="<?php echo base_url("/admin/simpan_periksa_rawat/$kode/$vpasien->id_pasien"); ?>" enctype="multipart/form-data" method="post">
				<label>Tambahkan Pemeriksaan</label>
                <div class="col-md-8">
				
				  </br>
				   <div class="row">
                    <div class="col-xs-8">
					<label>Keluhan</label>
                      <input type="text" name="keluhan[]" class="form-control" placeholder="Keluhan Pasien">
                    </div>
					<div class="tkeluhan"></div>
					<div class="col-xs-4">
					<label>Klik Untuk Menambah Keluhan</label>
                      <a href="javascript:void(0);" class="keluhan" title="Add field"><img src="<?php echo base_url(); ?>/assets/img/add.png"/></a>
                    </div>
                  </div>
				  <hr>
				  <div class="row">
                    <div class="col-xs-8">
					<label>Diagnosa</label>
                      <input type="text" name="diagnosa[]" class="form-control" placeholder="Diagnosa Penyakit">
                    </div>
					<div class="tdiagnosa"></div>
					<div class="col-xs-4">
					<label>Klik Untuk Menambah Diagnosa</label>
                      <a href="javascript:void(0);" class="diagnosa" title="Add field"><img src="<?php echo base_url(); ?>/assets/img/add.png"/></a>
                    </div>
                  </div>
				  </br>
				  <hr>
				   <div class="row">
                    <div class="col-xs-8">
					<label>Tindakan</label>
                    <select name="id_tindakan[]" class="form-control" required="">
					<?php foreach($tindakan2 as $tindakan2){ ?>
					<option value="<?php echo $tindakan2->id_tindakan; ?>"><?php echo $tindakan2->nama_tindakan; ?> - Rp.<?php echo number_format($tindakan2->biaya_tindakan,0,".","."). ''; ?></option>
					<?php } ?>
					</select>
                    </div>
					<div class="ttindakan"></div>
					<div class="col-xs-4">
					<label>Klik Untuk Menambah Tindakan</label>
                      <a href="javascript:void(0);" class="tindakan" title="Add field"><img src="<?php echo base_url(); ?>/assets/img/add.png"/></a>
                    </div>
					<br>
				  <div class="col-xs-8">
					<label>Bahan Habis Pakai</label>
					<select name="id_bahan[]" class="form-control" required="">
					<?php foreach($bahanhabis2 as $bahanhabis2){ ?>
					<option value="<?php echo $bahanhabis2->id_bahan; ?>"><?php echo $bahanhabis2->nama_bahan; ?> - Rp.<?php echo number_format($bahanhabis2->harga_bahan,0,".","."). ''; ?></option>
					<?php } ?>
					</select>
                    </div>
					<div class="col-xs-8">
					<label>Jumlah</label>
                      <input type="number" name="jml_bahan[]" class="form-control" placeholder="Contoh : 10 pcs." required="">
                    </div>
					<div class="tbahanhabis"></div>
					<div class="col-xs-4">
					<label>Klik Untuk Menambah Bahan Habis Pakai</label>
                       <a href="javascript:void(0);" class="bahanhabis" title="Add field"><img src="<?php echo base_url(); ?>/assets/img/add.png"/></a>
                    </div>
				  <br>
                  </div>
				  <hr>
				  <div class="row">
                    <div class="col-xs-8">
					<label>Obat</label>
					<select name="obat[]" class="form-control">
					<?php foreach($obat as $vobat){ ?>
					<option value="<?php echo $vobat->id_obat; ?>"><?php echo $vobat->namaobat; ?></option>
					<?php } ?>
					</select>
                    </div>
					<div class="col-xs-8">
					<label>Dosis</label>
                      <input type="text" name="dosis[]" class="form-control" placeholder="Contoh : 3 x 1 Hari.">
                    </div>
					<div class="col-xs-8">
					<label>Jumlah Obat</label>
                      <input type="number" name="jumlahobat[]" class="form-control" placeholder="Contoh : 10 Butir.">
                    </div>
					<div class="tobat"></div>
					<div class="col-xs-4">
					<label>Klik Untuk Menambah Obat</label>
                       <a href="javascript:void(0);" class="obat" title="Add field"><img src="<?php echo base_url(); ?>/assets/img/add.png"/></a>
                    </div>
                  </div>
				  <br>
                  <label>Pilih Dokter</label>
                 <select name="id_dokter" class="form-control">
				 <?php foreach ($dokter as $dokter){ ?>
					<option value="<?php echo $dokter->id_dokter; ?>"><?php echo $dokter->namadokter; ?></option>
				 <?php } ?>
					</select>
				<div class="modal-footer">
                                    <button class="btn btn-info" type="submit">Selanjutnya</button>
                                </div>
                                </form>
				
			
						 <?php } ?>
						 <div class="row">
					Detail Pasien
					 <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Suhu Nadan (c)</th>
                                            <th>Tinggi Badang (cm)</th>
                                            <th>Berat Badan(kg)</th>
                                            <th>Tekanan Darah</th>
                                            
                                            
                                        </tr>
                                    </thead>
									<?php $no = 1; foreach ($periksa2 as $vtmp0){ ?>
                                    <tbody>
									    <tr>
											<td><?php echo $vtmp0->suhu; ?></td>
											<td><?php echo $vtmp0->tinggi; ?></td>
											<td><?php echo $vtmp0->berat; ?></td>
											<td><?php echo $vtmp0->tekanandarah; ?></td>
                                        </tr>
									<?php $no++; } ?>
                                    </tbody>
                                </table>
                  </div>
				  <div class="row">
					Pemeriksaan Fisik
					 <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Keadaan Umum</th>
                                            <th>Kesadaran</th>
                                             
                                            
                                            
                                        </tr>
                                    </thead>
									<?php $no = 1; foreach ($periksa2 as $vpisik0){ ?>
                                    <tbody>
									    <tr>
											<td><?php echo $vpisik0->keadaanumum; ?></td>
											<td><?php echo $vpisik0->kesadaran; ?></td>
											
                                        </tr>
									<?php $no++; } ?>
                                    </tbody>
                                </table>
                  </div>
				  <div class="row"> 
					 <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Kepala</th>
                                            <th>Keterangan</th>
                                             
                                            
                                            
                                        </tr>
                                    </thead>
									<?php $no = 1; foreach ($periksa2 as $vpisik1){ ?>
                                    <tbody>
									    <tr>
											<td><?php echo $vpisik1->kepala; ?></td>
											<td><?php echo $vpisik1->textkepala; ?></td>
											
                                        </tr>
									<?php $no++; } ?>
                                    </tbody>
                                </table>
                  </div>
				   <div class="row"> 
					 <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Mata</th>
                                            <th>Keterangan</th>
                                             
                                            
                                            
                                        </tr>
                                    </thead>
									<?php $no = 1; foreach ($periksa2 as $vpisik2){ ?>
                                    <tbody>
									    <tr>
											<td><?php echo $vpisik2->mata; ?></td>
											<td><?php echo $vpisik2->textmata; ?></td>
											
                                        </tr>
									<?php $no++; } ?>
                                    </tbody>
                                </table>
                  </div>
				   <div class="row"> 
					 <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Hidung</th>
                                            <th>Keterangan</th>
                                             
                                            
                                            
                                        </tr>
                                    </thead>
									<?php $no = 1; foreach ($periksa2 as $vpisik3){ ?>
                                    <tbody>
									    <tr>
											<td><?php echo $vpisik3->hidung; ?></td>
											<td><?php echo $vpisik3->texthidung; ?></td>
											
                                        </tr>
									<?php $no++; } ?>
                                    </tbody>
                                </table>
                  </div>
				   <div class="row"> 
					 <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Gigi dan Mulut</th>
                                            <th>Keterangan</th>
                                             
                                            
                                            
                                        </tr>
                                    </thead>
									<?php $no = 1; foreach ($periksa2 as $vpisik4){ ?>
                                    <tbody>
									    <tr>
											<td><?php echo $vpisik4->gigimulut; ?></td>
											<td><?php echo $vpisik4->textgigimulut; ?></td>
											
                                        </tr>
									<?php $no++; } ?>
                                    </tbody>
                                </table>
                  </div>
				  <div class="row"> 
					 <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Tenggorokan</th>
                                            <th>Keterangan</th>
                                             
                                            
                                            
                                        </tr>
                                    </thead>
									<?php $no = 1; foreach ($periksa2 as $vpisik5){ ?>
                                    <tbody>
									    <tr>
											<td><?php echo $vpisik5->tenggorokan; ?></td>
											<td><?php echo $vpisik5->texttenggorokan; ?></td>
											
                                        </tr>
									<?php $no++; } ?>
                                    </tbody>
                                </table>
                  </div>
				  <div class="row"> 
					 <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Telinga</th>
                                            <th>Keterangan</th>
                                             
                                            
                                            
                                        </tr>
                                    </thead>
									<?php $no = 1; foreach ($periksa2 as $vpisik6){ ?>
                                    <tbody>
									    <tr>
											<td><?php echo $vpisik6->telinga; ?></td>
											<td><?php echo $vpisik6->texttelinga; ?></td>
											
                                        </tr>
									<?php $no++; } ?>
                                    </tbody>
                                </table>
                  </div>
				  <div class="row"> 
					 <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Leher</th>
                                            <th>Keterangan</th>
                                             
                                            
                                            
                                        </tr>
                                    </thead>
									<?php $no = 1; foreach ($periksa2 as $vpisik7){ ?>
                                    <tbody>
									    <tr>
											<td><?php echo $vpisik7->leher; ?></td>
											<td><?php echo $vpisik7->textleher; ?></td>
											
                                        </tr>
									<?php $no++; } ?>
                                    </tbody>
                                </table>
                  </div>
				  <div class="row"> 
					 <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Thoraks</th>
                                            <th>Keterangan</th>
                                             
                                            
                                            
                                        </tr>
                                    </thead>
									<?php $no = 1; foreach ($periksa2 as $vpisik8){ ?>
                                    <tbody>
									    <tr>
											<td><?php echo $vpisik8->thoraks; ?></td>
											<td><?php echo $vpisik8->textthoraks; ?></td>
											
                                        </tr>
									<?php $no++; } ?>
                                    </tbody>
                                </table>
                  </div>
				  <div class="row"> 
					 <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Jantung</th>
                                            <th>Keterangan</th>
                                             
                                            
                                            
                                        </tr>
                                    </thead>
									<?php $no = 1; foreach ($periksa2 as $vpisik9){ ?>
                                    <tbody>
									    <tr>
											<td><?php echo $vpisik9->jantung; ?></td>
											<td><?php echo $vpisik9->textjantung; ?></td>
											
                                        </tr>
									<?php $no++; } ?>
                                    </tbody>
                                </table>
                  </div>
				   <div class="row"> 
					 <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Paru</th>
                                            <th>Keterangan</th>
                                             
                                            
                                            
                                        </tr>
                                    </thead>
									<?php $no = 1; foreach ($periksa2 as $vpisik10){ ?>
                                    <tbody>
									    <tr>
											<td><?php echo $vpisik10->paru; ?></td>
											<td><?php echo $vpisik10->textparu; ?></td>
											
                                        </tr>
									<?php $no++; } ?>
                                    </tbody>
                                </table>
                  </div>
				  <div class="row"> 
					 <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Abdomen</th>
                                            <th>Keterangan</th>
                                             
                                            
                                            
                                        </tr>
                                    </thead>
									<?php $no = 1; foreach ($periksa2 as $vpisik11){ ?>
                                    <tbody>
									    <tr>
											<td><?php echo $vpisik11->abdomen; ?></td>
											<td><?php echo $vpisik11->textabdomen; ?></td>
											
                                        </tr>
									<?php $no++; } ?>
                                    </tbody>
                                </table>
                  </div>
				  <div class="row"> 
					 <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Genetalia & dan Anus</th>
                                            <th>Keterangan</th>
                                             
                                            
                                            
                                        </tr>
                                    </thead>
									<?php $no = 1; foreach ($periksa2 as $vpisik12){ ?>
                                    <tbody>
									    <tr>
											<td><?php echo $vpisik12->genetalia; ?></td>
											<td><?php echo $vpisik12->textgenetalia; ?></td>
											
                                        </tr>
									<?php $no++; } ?>
                                    </tbody>
                                </table>
                  </div>
				  <div class="row"> 
					 <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Ekstrimitas</th>
                                            <th>Keterangan</th>
                                             
                                            
                                            
                                        </tr>
                                    </thead>
									<?php $no = 1; foreach ($periksa2 as $vpisik13){ ?>
                                    <tbody>
									    <tr>
											<td><?php echo $vpisik13->extrimitas; ?></td>
											<td><?php echo $vpisik13->textextrimitas; ?></td>
											
                                        </tr>
									<?php $no++; } ?>
                                    </tbody>
                                </table>
                  </div>
				   <div class="row"> 
					 <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Kulit</th>
                                            <th>Keterangan</th>
                                             
                                            
                                            
                                        </tr>
                                    </thead>
									<?php $no = 1; foreach ($periksa2 as $vpisik14){ ?>
                                    <tbody>
									    <tr>
											<td><?php echo $vpisik14->kulit; ?></td>
											<td><?php echo $vpisik14->textkulit; ?></td>
											
                                        </tr>
									<?php $no++; } ?>
                                    </tbody>
                                </table>
                  </div>
					<div class="row">
					Diagnosa
					 <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Diagnosa</th>
                                        </tr>
                                    </thead>
									<?php $no = 1;  foreach ($periksa1 as $vtmp1){ ?>
                                    <tbody>
									    <tr>
											<td><?php echo $no; ?></td>
											<td><?php echo $vtmp1->diagnosa; ?></td>
                                        </tr>
									<?php $no++; } ?>
                                    </tbody>
                                </table>
                  </div>
				  <div class="row">
					Keluhan
					 <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Keluhan</th>
                                            
                                            
                                        </tr>
                                    </thead>
									<?php $no = 1; foreach ($periksa1 as $vtmp2){ ?>
                                    <tbody>
									    <tr>
											<td><?php echo $no; ?></td>
											<td><?php echo $vtmp2->keluhan; ?></td>
                                        </tr>
									<?php $no++; } ?>
                                    </tbody>
                                </table>
                  </div>
				  <div class="row">
					Tindakan
					 <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tindakan</th>
                                            <th>Biaya</th>
                                            
                                            
                                        </tr>
                                    </thead>
									<?php $no = 1; foreach ($periksa1 as $vtmp2){ ?>
                                    <tbody>
									    <tr>
											<td><?php echo $no; ?></td>
											<td><?php echo $vtmp2->nama_tindakan; ?></td>
											<td><?php echo $vtmp2->biaya_tindakan; ?></td>
                                        </tr>
									<?php $no++; } ?>
                                    </tbody>
                                </table>
                  </div>
				  <div class="row">
					Obat
					<table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Obat</th>
                                            <th>Dosis</th>
                                            <th>Harga Obat</th>
                                            <th>Satuan Obat</th>
                                            <th>Jumlah Obat</th>
                                            
                                            
                                        </tr>
                                    </thead>
									<?php $no = 1; foreach ($periksa3 as $vtmp3){ 
									$this->kode = $vtmp3->kode;
									$this->id_pasien = $vpasien->id_pasien;
									?>
                                    <tbody>
									    <tr>
											<td><?php echo $no; ?></td>
											<td><?php echo $vtmp3->namaobat; ?></td>
											<td><?php echo $vtmp3->dosis; ?></td>
											<td><?php echo $vtmp3->hargaobat; ?></td>
											<td><?php echo $vtmp3->satuanobat; ?></td>
											<td><?php echo $vtmp3->jumlahobat; ?></td>
                                        </tr>
									<?php $no++; } ?>
                                    </tbody>
                                </table>
                  </div>
          </div>
		  </div>
							  </div>
                </div><!-- /.tab-content -->
              </div>
        </section><!-- /.content -->
      </div>