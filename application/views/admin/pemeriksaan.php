
<script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	var maxField = 100; //Input fields increment limitation
	var addButton = $('.diagnosa'); //Add button selector
	var wrapper = $('.tdiagnosa'); //Input field wrapper
	var fieldHTML = ' <div class="col-xs-8"><label>Diagnosa</label> <input type="text" name="diagnosa[]" class="form-control" placeholder="Diagnosa Penyakit"><a href="#" class="remove_button">Hapus</a></div></div>'; //New input field html 
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
	var fieldHTML = '<div class="col-xs-8"><select name="id_tindakan[]" class="form-control" required=""><?php foreach($tindakan as $tindakan){ ?><option value="<?php echo $tindakan->id_tindakan; ?>"><?php echo $tindakan->nama_tindakan; ?> - Rp.<?php echo number_format($tindakan->biaya_tindakan,0,".","."). ''; ?></option><?php } ?></select><a href="#" class="remove_button">Hapus</a></div>'; //New input field html 
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
	var fieldHTML = '<div class="col-xs-8"><label>Obat</label><select name="obat[]" class="form-control"><?php foreach($obat as $vobat){ ?><option value="<?php echo $vobat->id_obat; ?>"><?php echo $vobat->namaobat; ?><?php } ?></option></select> <a href="#" class="remove_button">Hapus</a></div><div class="col-xs-8"><label>Dosis</label><input type="text" name="dosis[]" class="form-control" placeholder="Contoh : 3 x 1 Hari."><label>Jumlah Obat</label><input type="number" name="jumlahobat[]" class="form-control" placeholder="Contoh : 10 Butir."><a href="#" class="remove_button">Hapus</a></div>'; //New input field html 
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
	var fieldHTML = '<div class="col-xs-8"><label>Keluhan</label><input type="text" name="keluhan[]" class="form-control" placeholder="Keluhan Pasien"><a href="#" class="remove_button">Hapus</a></div>'; //New input field html 
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
</script><script type="text/javascript">
$(document).ready(function(){
	var maxField = 100; //Input fields increment limitation
	var addButton = $('.bahanhabis'); //Add button selector
	var wrapper = $('.tbahanhabis'); //Input field wrapper
	var fieldHTML = '<div class="col-xs-8"><label>Bahan Habis Pakai</label><select name="id_bahan[]" class="form-control" required=""><?php foreach($bahanhabis as $bahanhabis){ ?><option value="<?php echo $bahanhabis->id_bahan; ?>"><?php echo $bahanhabis->nama_bahan; ?> - Rp.<?php echo number_format($bahanhabis->harga_bahan,0,".","."). ''; ?></option><?php } ?></select><a href="#" class="remove_button">Hapus</a> </div><div class="col-xs-8"><label>Jumlah</label><input type="number" name="jml_bahan[]" class="form-control" placeholder="Contoh : 10 pcs." required=""><a href="#" class="remove_button">Hapus</a></div></div>'; //New input field html 
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
                <h2>PEMERIKSAAN PASIEN</h2>
            </div>
<div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                       <?php foreach($alergi as $cekwarna){
						   if($cekwarna->statusalergi == "Iya"){ ?>
                        <div class="bodyred">
					   <?php } } ?>
					   <?php foreach($alergi as $cekwarna){
						   if($cekwarna->statusalergi == "Tidak"){ ?>
                        <div class="body">
					   <?php } } ?>
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
                      <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo tgl_indo($vpasien->ttl); ?>" disabled>
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
					<div class="form-group">
								 <div class="form-line">
									  <label for="exampleInputEmail1">Nama Orang Tua</label>
									  <input name="namaortu" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $vpasien->namaortu; ?>" readonly>
									</div><!-- /.form-group -->
									</div><!-- /.form-group -->
								 <div class="form-group">
								  <div class="form-line">
									  <label for="exampleInputEmail1">Tanggal Daftar</label>
									  <input name="tanggal" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo tgl_indo($vpasien->tanggal); ?>" readonly>
									</div><!-- /.form-group -->
									</div><!-- /.form-group -->
                </div><!-- /.col -->
				<form role="form" action="<?php echo base_url("/admin/simpan_periksa/$vpasien->id_pasien"); ?>" enctype="multipart/form-data" method="post">
                <div class="col-md-8">
					<div class="row">
					<div class="col-xs-3">
					<label>Suhu Badan</label>
                      <input type="text" name="suhu" class="form-control" placeholder="Celsius">
                    </div>
					<div class="col-xs-3">
					<label>Tekanan Darah</label>
                      <input type="text" name="tekanandarah" class="form-control" placeholder="Tekanan Darah" >
                    </div>
					<div class="col-xs-3">
					<label>Tinggi Badan (Cm)</label>
                      <input type="text" name="tinggi" class="form-control" placeholder="Tinggi Badan" >
                    </div>
					<div class="col-xs-3">
					<label>Berat Badan (Kg)</label>
                      <input type="text" name="berat" class="form-control" placeholder="Berat Badan" >
                    </div>
                  </div>
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
				   <?php foreach($alergi as $cekada){
						   if($cekada->statusalergi == "Tidak"){ ?>
									  <label>Apakah Pasien Memiliki Alergi ?</label>
									  <select name="statusalergi"  class="form-control">
										<option value="Tidak">Tidak</option>
										<option value="Iya">Iya</option>
										
										
									  </select>
									  <br>
                  <textarea name="alergi" class="form-control" placeholder="Kosongkan Apabila Pasien Tidak Memiliki Alergi"></textarea>
				   <?php } }?>
				   <?php foreach($alergi as $cekada){
						   if($cekada->statusalergi == "Iya"){ ?>
				  <select name="statusalergi"  class="form-control">
										
										<option value="<?php echo $cekada->statusalergi; ?>" selected><?php echo $cekada->statusalergi; ?></option>
										
										<option value="Tidak">Tidak</option>
										<option value="Iya">Iya</option>
										
									  </select><br>
                  <textarea name="alergi" class="form-control" placeholder="Alergi Obat" readonly><?php echo $cekada->alergi; ?></textarea>
				  <a target="___blank" href="<?php echo base_url("/admin/ubah_alergi/$cekada->id_pasien"); ?>" title="Add field">Ubah Alergi Pasien</a>
				   <?php } }?>
				  </br>
				  <hr>
					<label>Pemeriksaan Fisik</label><br>
					<table class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
					
					<td>Keadaan Umum : </td>
					<td> <select name="keadaanumum" class="form-control">
				
					<option value="Sehat">Sehat</option>
					<option value="Sakit Ringan">Sakit Ringan</option>
					<option value="Sakit Sedang">Sakit Sedang</option>
					<option value="Sakit Berat">Sakit Berat</option>
				
					</select></td>
					</thead></tr></table>
					<table class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
					<td>Kesadaran :&nbsp;&nbsp;&nbsp;&nbsp; </td>
					<td> <select name="kesadaran" class="form-control">
				
					<option value="CM">CM</option>
					<option value="Apatis">Apatis</option>
					<option value="Somnolen">Somnolen</option>
					<option value="Sopor">Sopor</option>
				
					</select></td>
					
					</thead></tr></table>
					
					<table class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
					<td>Kepala : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
					<td> <select name="kepala" class="form-control">
				
					<option value="Normal">Normal</option>
					<option value="Abnormal">Abnormal</option>
					
					</select></td>
					
					<td><label class="radio-inline"><input type="text" placeholder="Keterangan" class="form-control" name="textkepala"></label></td>
					</thead></tr></table>
					
					<table class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
					<td>Mata : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
					<td> <select name="mata" class="form-control">
				
					<option value="Normal">Normal</option>
					<option value="Abnormal">Abnormal</option>
					
					</select></td>
					<td><label class="radio-inline"><input type="text" placeholder="Keterangan"  class="form-control" name="textmata"></label></td>
					</thead></tr></table>
					
					<table class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
					<td>Hidung : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
					<td> <select name="hidung" class="form-control">
				
					<option value="Normal">Normal</option>
					<option value="Abnormal">Abnormal</option>
					
					</select></td>
					<td><label class="radio-inline"><input type="text" placeholder="Keterangan"  class="form-control" name="texthidung"></label></td>
					</thead></tr></table>
					
					<table class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
					<td>Gigi & Mulut :  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
					<td> <select name="gigimulut" class="form-control">
				
					<option value="Normal">Normal</option>
					<option value="Abnormal">Abnormal</option>
					
					</select></td>
					<td><label class="radio-inline"><input type="text" placeholder="Keterangan"  class="form-control" name="textgigimulut"></label></td>
					</thead></tr></table>
					
					<table class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
					<td>Tenggorokan :  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
					<td> <select name="tenggorokan" class="form-control">
				
					<option value="Normal">Normal</option>
					<option value="Abnormal">Abnormal</option>
					
					</select></td>
					<td><label class="radio-inline"><input type="text"  placeholder="Keterangan" class="form-control" name="texttenggorokan"></label></td>
					</thead></tr></table>
					
					<table class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
					<td>Telinga : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
					<td> <select name="telinga" class="form-control">
				
					<option value="Normal">Normal</option>
					<option value="Abnormal">Abnormal</option>
					
					</select></td>
					<td><label class="radio-inline"><input type="text" placeholder="Keterangan"  class="form-control" name="texttelinga"></label></td>
					</thead></tr></table>
					
					<table class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
					<td>Leher : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
					<td> <select name="leher" class="form-control">
				
					<option value="Normal">Normal</option>
					<option value="Abnormal">Abnormal</option>
					
					</select></td>
					<td><label class="radio-inline"><input type="text"  placeholder="Keterangan" class="form-control" name="textleher"></label></td>
					</thead></tr></table>
					<table class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
					<td>Thoraks : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
					<td> <select name="thoraks" class="form-control">
				
					<option value="Normal">Normal</option>
					<option value="Abnormal">Abnormal</option>
					
					</select></td>
					<td><label class="radio-inline"><input type="text"  placeholder="Keterangan" class="form-control" name="textthoraks"></label></td>
					</thead></tr></table>
					<table class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
					<td>Jantung : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
					<td> <select name="jantung" class="form-control">
				
					<option value="Normal">Normal</option>
					<option value="Abnormal">Abnormal</option>
					
					</select></td>
					<td><label class="radio-inline"><input type="text"   placeholder="Keterangan"class="form-control" name="textjantung"></label></td>
					</thead></tr></table>
					<table class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
					<td>Paru : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td>
					<td> <select name="paru" class="form-control">
				
					<option value="Normal">Normal</option>
					<option value="Abnormal">Abnormal</option>
					
					</select></td>
					<td><label class="radio-inline"><input type="text"  placeholder="Keterangan" class="form-control" name="textparu"></label></td>
					</thead></tr></table>
					<table class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
					<td>Abdomen : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
					<td> <select name="abdomen" class="form-control">
				
					<option value="Normal">Normal</option>
					<option value="Abnormal">Abnormal</option>
					
					</select></td>
					<td><label class="radio-inline"><input type="text"  placeholder="Keterangan" class="form-control" name="textabdomen"></label></td>
					</thead></tr></table>
					<table class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
					<td>Genitalia & Anus :&nbsp;&nbsp;&nbsp; </td>
					<td> <select name="genetalia" class="form-control">
				
					<option value="Normal">Normal</option>
					<option value="Abnormal">Abnormal</option>
					
					</select></td>
					<td><label class="radio-inline"><input type="text"  placeholder="Keterangan" class="form-control" name="textgenetalia"></label></td>
					</thead></tr></table>
					<table class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
					<td>Ekstrimitas : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td>
					<td> <select name="ekstrimitas" class="form-control">
				
					<option value="Normal">Normal</option>
					<option value="Abnormal">Abnormal</option>
					
					</select></td>
					<td><label class="radio-inline"><input type="text"  placeholder="Keterangan" class="form-control" name="textekstrimitas"></label></td>
					</thead></tr></table>
					<table class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
					<td>Kulit :  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
					<td> <select name="kulit" class="form-control">
				
					<option value="Normal">Normal</option>
					<option value="Abnormal">Abnormal</option>
					
					</select></td>
					<td><label class="radio-inline"><input type="text"  placeholder="Keterangan" class="form-control" name="textkulit"></label></td>
					</thead></tr></table>
				   
                    
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
                    <div class="col-xs-8">
					<label>Obat</label>
					<select name="obat[]" class="form-control" required="">
					<?php foreach($obat as $vobat){ ?>
					<option value="<?php echo $vobat->id_obat; ?>"><?php echo $vobat->namaobat; ?></option>
					<?php } ?>
					</select>
                    </div>
					<div class="col-xs-8">
					<label>Dosis</label>
                      <input type="text" name="dosis[]" class="form-control" placeholder="Contoh : 3 x 1 Hari." required="">
                    </div>
					<div class="col-xs-8">
					<label>Jumlah Obat</label>
                      <input type="number" name="jumlahobat[]" class="form-control" placeholder="Contoh : 10 Butir." required="">
                    </div>
					<div class="tobat"></div>
					<div class="col-xs-4">
					<label>Klik Untuk Menambah Obat</label>
                       <a href="javascript:void(0);" class="obat" title="Add field"><img src="<?php echo base_url(); ?>/assets/img/add.png"/></a>
                    </div>
                  </div>
				  <br>
				  <div class="">
				  <div class="form-line">
									  <label>Keterangan Tambahan</label>
									  <textarea class="form-control" rows="3" name= "keterangan" placeholder="keterangan Tambahan" ></textarea>
									</div>
									</div>
				  <label>Status Pasien</label>
                 <select name="status" class="form-control">
					<option value="Rawat Inap">Rawat Inap</option>
					<option value="Pulang">Pulang</option>
					<option value="Rawat Jalan">Rawat Jalan</option>
					</select>
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
          </div>
		  </div>
							  </div>
                </div><!-- /.tab-content -->
              </div>
        </section><!-- /.content -->
      </div>