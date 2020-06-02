<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		if($this->session->userdata('username') == ""){
			redirect(base_url());
		}
		$this->load->model('master'); //meload master model	
		date_default_timezone_set("Asia/Jakarta");// set timezone jekardah
		// if($this->session->userdata('id_siswa')==null){
			// redirect(base_url());
		// }
		$this->load->library(array('PHPExcel','PHPExcel/IOFactory'));
		
		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');
		$this->load->helper('tglid'); //tanggalindonesia
		$data['situs'] = $this->master->situs();
		foreach($data['situs'] as $situs){
			$this->namaklinik = $situs->namaklinik;
			$this->alamatklinik = $situs->alamat;
			$this->nohpklinik = $situs->nohp;
			$this->logo = $situs->logo;
			$this->pendapatan_obat = $situs->pendapatan_obat;
			$this->pendapatan_periksa = $situs->pendapatan_periksa;
			$this->limitstok = $situs->limitstok;
			$this->limitkadaluarsa = $situs->limitkadaluarsa;
		}
		
	}
	function encrypt_password($post_array, $primary_key = null)
	{
	  
		$this->load->helper('security');
		$post_array['password'] = do_hash($post_array['password'], 'md5');
		return $post_array;
	  
	}
	public function output($output = null)
	{
		$this->load->view('/admin/detail.php',(array)$output);
	}
	public function index()
	{
		$data['namaklinik'] = $this->namaklinik;
		$data['alamatklinik'] = $this->alamatklinik;
		$data['nohpklinik'] = $this->nohpklinik; 
		$data['nama'] = $this->session->userdata('nama'); 
		$data['username'] = $this->session->userdata('username'); 
		$data['judul'] = "Home - ".$this->namaklinik."";;
		$t1 =  date('20y-m-01');
		$t2 =  date('20y-m-02');
		$t3 =  date('20y-m-03');
		$t4 =  date('20y-m-04');
		$t5 =  date('20y-m-05');
		$t6 =  date('20y-m-06');
		$t7 =  date('20y-m-07');
		$t8 =  date('20y-m-08');
		$t9 =  date('20y-m-09');
		$t10 =  date('20y-m-10');
		$t11 =  date('20y-m-11');
		$t12 =  date('20y-m-12');
		$t13 =  date('20y-m-13');
		$t14 =  date('20y-m-14');
		$t15 =  date('20y-m-15');
		$t16 =  date('20y-m-16');
		$t17 =  date('20y-m-17');
		$t18 =  date('20y-m-18');
		$t19 =  date('20y-m-19');
		$t20 =  date('20y-m-20');
		$t21 =  date('20y-m-21');
		$t22 =  date('20y-m-22');
		$t23 =  date('20y-m-23');
		$t24 =  date('20y-m-24');
		$t25 =  date('20y-m-25');
		$t26 =  date('20y-m-26');
		$t27 =  date('20y-m-27');
		$t28 =  date('20y-m-28');
		$t29 =  date('20y-m-29');
		$t30 =  date('20y-m-30');
		$t31 =  date('20y-m-31');
		$data['h1'] = $this->master->hitungpasien($t1);
		$data['h2'] = $this->master->hitungpasien($t2);
		$data['h3'] = $this->master->hitungpasien($t3);
		$data['h4'] = $this->master->hitungpasien($t4);
		$data['h5'] = $this->master->hitungpasien($t5);
		$data['h6'] = $this->master->hitungpasien($t6);
		$data['h7'] = $this->master->hitungpasien($t7);
		$data['h8'] = $this->master->hitungpasien($t8);
		$data['h9'] = $this->master->hitungpasien($t9);
		$data['h10'] = $this->master->hitungpasien($t10);
		$data['h11'] = $this->master->hitungpasien($t11);
		$data['h12'] = $this->master->hitungpasien($t12);
		$data['h13'] = $this->master->hitungpasien($t13);
		$data['h14'] = $this->master->hitungpasien($t14);
		$data['h15'] = $this->master->hitungpasien($t15);
		$data['h16'] = $this->master->hitungpasien($t16);
		$data['h17'] = $this->master->hitungpasien($t17);
		$data['h18'] = $this->master->hitungpasien($t18);
		$data['h19'] = $this->master->hitungpasien($t19);
		$data['h20'] = $this->master->hitungpasien($t20);
		$data['h21'] = $this->master->hitungpasien($t21);
		$data['h22'] = $this->master->hitungpasien($t22);
		$data['h23'] = $this->master->hitungpasien($t23);
		$data['h24'] = $this->master->hitungpasien($t24);
		$data['h25'] = $this->master->hitungpasien($t25);
		$data['h26'] = $this->master->hitungpasien($t26);
		$data['h27'] = $this->master->hitungpasien($t27);
		$data['h28'] = $this->master->hitungpasien($t28);
		$data['h29'] = $this->master->hitungpasien($t29);
		$data['h30'] = $this->master->hitungpasien($t30);
		$data['h31'] = $this->master->hitungpasien($t31);
		$data['ttl'] = $this->master->sumpasien($t1, $t31);
		
		foreach($data['h1'] as $h1){$data['t1'] = $h1->hitung;}
		foreach($data['h2'] as $h2){$data['t2'] = $h2->hitung;}
		foreach($data['h3'] as $h3){$data['t3'] = $h3->hitung;}
		foreach($data['h4'] as $h4){$data['t4'] = $h4->hitung;}
		foreach($data['h5'] as $h5){$data['t5'] = $h5->hitung;}
		foreach($data['h6'] as $h6){$data['t6'] = $h6->hitung;}
		foreach($data['h7'] as $h7){$data['t7'] = $h7->hitung;}
		foreach($data['h8'] as $h8){$data['t8'] = $h8->hitung;}
		foreach($data['h9'] as $h9){$data['t9'] = $h9->hitung;}
		foreach($data['h10'] as $h10){$data['t10'] = $h10->hitung;}
		foreach($data['h11'] as $h11){$data['t11'] = $h11->hitung;}
		foreach($data['h12'] as $h12){$data['t12'] = $h12->hitung;}
		foreach($data['h13'] as $h13){$data['t13'] = $h13->hitung;}
		foreach($data['h14'] as $h14){$data['t14'] = $h14->hitung;}
		foreach($data['h15'] as $h15){$data['t15'] = $h15->hitung;}
		foreach($data['h16'] as $h16){$data['t16'] = $h16->hitung;}
		foreach($data['h17'] as $h17){$data['t17'] = $h17->hitung;}
		foreach($data['h18'] as $h18){$data['t18'] = $h18->hitung;}
		foreach($data['h19'] as $h19){$data['t19'] = $h19->hitung;}
		foreach($data['h20'] as $h20){$data['t20'] = $h20->hitung;}
		foreach($data['h21'] as $h21){$data['t21'] = $h21->hitung;}
		foreach($data['h22'] as $h22){$data['t22'] = $h22->hitung;}
		foreach($data['h23'] as $h23){$data['t23'] = $h23->hitung;}
		foreach($data['h24'] as $h24){$data['t24'] = $h24->hitung;}
		foreach($data['h25'] as $h25){$data['t25'] = $h25->hitung;}
		foreach($data['h26'] as $h26){$data['t26'] = $h26->hitung;}
		foreach($data['h27'] as $h27){$data['t27'] = $h27->hitung;}
		foreach($data['h28'] as $h28){$data['t28'] = $h28->hitung;}
		foreach($data['h29'] as $h29){$data['t29'] = $h29->hitung;}
		foreach($data['h30'] as $h30){$data['t30'] = $h30->hitung;}
		foreach($data['h31'] as $h31){$data['t31'] = $h31->hitung;}
		foreach($data['ttl'] as $ttl){$data['totalpasien'] = $ttl->hitung;}
		
		$data['nama'] = $this->session->userdata('nama'); 
		$data['username'] = $this->session->userdata('username');
		$data['tanggal1'] = $t1;
		$this->load->view('/admin/header', $data);
		$this->load->view('/admin/index');
		$this->load->view('/admin/footer');
	}
	
	
	public function periksa()
	{
		$data['namaklinik'] = $this->namaklinik;
		$data['alamatklinik'] = $this->alamatklinik;
		$data['nohpklinik'] = $this->nohpklinik; 
		$data['judul'] = "Periksa Pasien - ".$this->namaklinik."";
		$data['nama'] = $this->session->userdata('nama'); 
		$data['username'] = $this->session->userdata('username'); 
		$this->load->view('/admin/header', $data);
		$data['datapasien'] = $this->master->datapasien();
		$this->load->view('/admin/periksa',$data);
		$this->load->view('/admin/footer');
	}
	public function pemeriksaan($id_pasien)
	{
		if($id_pasien == ""){
			echo "<script>window.location.href='".base_url('/admin/periksa')."' </script>";
		}
		$data['namaklinik'] = $this->namaklinik;
		$data['alamatklinik'] = $this->alamatklinik;
		$data['nohpklinik'] = $this->nohpklinik; 
		$data['judul'] = "Pemeriksaan Pasien - ".$this->namaklinik."";
		$data['nama'] = $this->session->userdata('nama'); 
		$data['username'] = $this->session->userdata('username'); 
		$this->load->view('/admin/header', $data);
		$data['obat'] = $this->master->obat_periksa();
		$data['pasien'] = $this->master->view_pasien_jadwal($id_pasien);
		$data['alergi'] = $this->master->lihat_alergi($id_pasien);
		$data['dokter'] = $this->master->lihat_data('tbl_dokter', 'statusdokter', 'Aktif');
		$data['tindakan'] = $this->master->lihat_data('tbl_tindakan', '1', '1');
		$data['tindakan2'] = $this->master->lihat_data('tbl_tindakan', '1', '1');
		$data['bahanhabis'] = $this->master->lihat_data('tbl_bahan_habis_pakai', '1', '1');
		$data['bahanhabis2'] = $this->master->lihat_data('tbl_bahan_habis_pakai', '1', '1');
		$this->load->view('/admin/pemeriksaan', $data);
		$this->load->view('/admin/footer');
	}
	public function simpan_periksa($id_pasien)
	{
		if($id_pasien == ""){
			echo "<script>window.location.href='".base_url('/admin/periksa')."' </script>";
		}
		function kode_acak($n = 10) {
     	$aKod = NULL;
     	$kode = "0123456789"; //jumlah kode = 63
  
  		for ($i=0; $i<$n; $i++) {
     		$acakAngka = rand(1, strlen($kode));
     		$aKod .= substr($kode, $acakAngka, 1);
  			}
  			return $aKod;
  		}
		$kode = kode_acak($n = 10);
		
		$suhu = $this->input->post('suhu');
		$tekanandarah = $this->input->post('tekanandarah');
		$tinggi = $this->input->post('tinggi');
		$berat = $this->input->post('berat');
		$diagnosa = $this->input->post('diagnosa');
		//tindakan dan dokter
		$id_tindakan = $this->input->post('id_tindakan');;
		$id_dokter = $this->input->post('id_dokter');;
		//
		//bahan habis pakai
		$id_bahan = $this->input->post('id_bahan');;
		$jml_bahan = $this->input->post('jml_bahan');;
		//

		$obat = $this->input->post('obat');
		$dosis = $this->input->post('dosis');
		$keterangan = $this->input->post('keterangan');
		$status = $this->input->post('status');
		//rsuevisi
		$keluhan = $this->input->post('keluhan');
		$keadaanumum = $this->input->post('keadaanumum');
		$kesadaran = $this->input->post('kesadaran');
		$kepala = $this->input->post('kepala');
		$textkepala = $this->input->post('textkepala');
		$mata = $this->input->post('mata');
		$textmata = $this->input->post('textmata');
		$hidung = $this->input->post('hidung');
		$texthidung = $this->input->post('texthidung');
		$gigimulut = $this->input->post('gigimulut');
		$textgigimulut = $this->input->post('textgigimulut');
		$tenggorokan = $this->input->post('tenggorokan');
		$texttenggorokan = $this->input->post('texttenggorokan');
		$telinga = $this->input->post('telinga');
		$texttelinga = $this->input->post('texttelinga');
		$leher = $this->input->post('leher');
		$textleher = $this->input->post('textleher');
		$thoraks = $this->input->post('thoraks');
		$textthoraks = $this->input->post('textthoraks');
		$jantung = $this->input->post('jantung');
		$textjantung = $this->input->post('textjantung');
		$paru = $this->input->post('paru');
		$textparu = $this->input->post('textparu');
		$abdomen = $this->input->post('abdomen');
		$textabdomen = $this->input->post('textabdomen');
		$genetalia = $this->input->post('genetalia');
		$textgenetalia = $this->input->post('textgenetalia');
		$ekstrimitas = $this->input->post('ekstrimitas');
		$textekstrimitas = $this->input->post('textekstrimitas');
		$kulit = $this->input->post('kulit');
		$textkulit = $this->input->post('textkulit');
		$jumlahobat = $this->input->post('jumlahobat');
		//
		//alergi
		$alergi = $this->input->post('alergi');
		$statusalergi = $this->input->post('statusalergi');
		$dataalergi = array('alergi' => $alergi,
							'statusalergi' => $statusalergi);
		$this->master->simpan_alergi($dataalergi, $id_pasien);
		//
		$tanggal = date('20y-m-d');
		$jdiagnosa = sizeof($diagnosa);
		$jdiagnosa = sizeof($diagnosa);
		$jtindakan = sizeof($tindakan);
		$jkeluhan = sizeof($keluhan);
		$jbahan = sizeof($id_bahan);
		$jobat = sizeof($obat);
		$arraymax = array($jdiagnosa, $jtindakan, $jobat, $jkeluhan, $jbahan);
		
		$jumlah = max($arraymax);
		for( $i = 0; $i < $jumlah; $i++){ 
		$sesix['kodexperiksa'] = $kode;
		
		$this->session->set_userdata($sesix);
		$kodex = $this->session->userdata('kodexperiksa');
		error_reporting(0);
		$data[$i] = array('kode' => $kode,
						  'id_pasien' => $id_pasien,
						  'suhu' => $suhu,
						  'tekanandarah' => $tekanandarah,
						  'tinggi' => $tinggi,
						  'berat' => $berat,
						  'keluhan' => $keluhan[$i],
						  'diagnosa' => $diagnosa[$i],
						  'id_tindakan' => $id_tindakan[$i],
						  'id_dokter' => $id_dokter[$i],
						  'id_obat' => $obat[$i],
						  'dosis' => $dosis[$i],
						  'keterangan' => $keterangan,
						  'tanggal' => $tanggal,
						  'status' => $status,
						  'keadaanumum' => $keadaanumum,
						  'kesadaran' => $kesadaran,
						  'kepala' => $kepala,
						  'textkepala' => $textkepala,
						  'mata' => $mata,
						  'textmata' => $textmata,
						  'hidung' => $hidung,
						  'texthidung' => $texthidung,
						  'gigimulut' => $gigimulut,
						  'textgigimulut' => $textgigimulut,
						  'tenggorokan' => $tenggorokan,
						  'texttenggorokan' => $texttenggorokan,
						  'telinga' => $telinga,
						  'texttelinga' => $texttelinga,
						  'leher' => $leher,
						  'textleher' => $textleher,
						  'thoraks' => $thoraks,
						  'textthoraks' => $textthoraks,
						  'jantung' => $jantung,
						  'textjantung' => $textjantung,
						  'paru' => $paru,
						  'textparu' => $textparu,
						  'abdomen' => $abdomen,
						  'textabdomen' => $textabdomen,
						  'genetalia' => $genetalia,
						  'textgenetalia' => $textgenetalia,
						  'extrimitas' => $ekstrimitas,
						  'textextrimitas' => $textekstrimitas,
						  'kulit' => $kulit,
						  'textkulit' => $textkulit,
						  'jumlahobat' => $jumlahobat[$i],
						  'id_bahan' => $id_bahan[$i],
						  'jml_bahan' => $jml_bahan[$i]
						  );
		$ambilobat  = $this->master->ambildataobat($obat[$i]);
        foreach($ambilobat as $ambilobatku){
            $stoksaatini[$i]  = $ambilobatku->stok;
			$stokinal[$i] = $stoksaatini[$i] - $jumlahobat[$i];
			$dataobat[$i] = array('stok'  => $stokinal[$i]);
			$this->master->simpan_obat($dataobat[$i], $obat[$i]);
			
        }			
		//ambil stok bahan habis pakai
		$ambilbahan  = $this->master->lihat_data('tbl_bahan_habis_pakai', 'id_bahan', $id_bahan[$i]);
        foreach($ambilbahan as $ambilbahan){
            $stokbahansaatini[$i]  = $ambilbahan->stok;
			$stokbahanfinal[$i] = $stokbahansaatini[$i] - $jml_bahan[$i];
			$databahan[$i] = array('stok_bahan'  => $stokbahanfinal[$i]);
			$this->master->simpan_data('tbl_bahan_habis_pakai','id_bahan', $id_bahan[$i], $databahan[$i]);
			
        }					


		}
		$dataxx = array ( 'tanggal' => "",
					   'kode' => $kode,
					   'jumlah' => 0);
		$ekz = $this->master->simpan_pemasukan($dataxx, $kode);
		for( $i = 0; $i < $jumlah; $i++){ 
		$this->master->simpan_periksa($data[$i]);
		}
		 if($status == "Rawat Inap"){
			 $kodex = $this->session->userdata('kodexperiksa');
			  redirect(base_url("/admin/pilih_ruangan/$kode/$id_pasien"));
		  }
		  else if($status == "Rawat Jalan"){
			 $kodex = $this->session->userdata('kodexperiksa');
			   redirect(base_url("/admin/pemasukan_pasien/$kode/$id_pasien"));
		  }
		  else{
			  $kodex = $this->session->userdata('kodexperiksa');
		  redirect(base_url("/admin/pemasukan_pasien/$kode/$id_pasien"));
		  }

	}
	public function simpan_periksa_rawat($kode, $id_pasien)
	{
		if($id_pasien == ""){
			echo "<script>window.location.href='".base_url('/admin/mpasienrawat')."' </script>";
		}
		if($kode == ""){
			echo "<script>window.location.href='".base_url('/admin/mpasienrawat')."' </script>";
		}
		$diagnosa = $this->input->post('diagnosa');
		$id_tindakan = $this->input->post('id_tindakan');
		$biaya = $this->input->post('biaya');
		$obat = $this->input->post('obat');
		$dosis = $this->input->post('dosis');
		$keluhan = $this->input->post('keluhan');
		$jumlahobat = $this->input->post('jumlahobat');
		$id_dokter = $this->input->post('id_dokter');
		$id_bahan = $this->input->post('id_bahan');
		$jml_bahan = $this->input->post('jml_bahan');
		$tanggal = date('20y-m-d');
		$jdiagnosa = sizeof($diagnosa);
		$jdiagnosa = sizeof($diagnosa);
		$jtindakan = sizeof($tindakan);
		$jkeluhan = sizeof($keluhan);
		$jobat = sizeof($obat);
		$arraymax = array($jdiagnosa, $jtindakan, $jobat, $jkeluhan);
		$tanggal = date('20y-m-d');
		$jumlah = max($arraymax);
		for( $i = 0; $i < $jumlah; $i++){ 
		
		error_reporting(0);
		$data[$i] = array('kode' => $kode,
						  'id_pasien' => $id_pasien,
						  'keluhan' => $keluhan[$i],
						  'diagnosa' => $diagnosa[$i],
						  'id_tindakan' => $id_tindakan[$i],
						  'id_bahan' => $id_bahan[$i],
						  'jml_bahan' => $jml_bahan[$i],
						  'biaya' => $biaya[$i],
						  'tanggal' => $tanggal,
						  'id_obat' => $obat[$i],
						  'dosis' => $dosis[$i],
						  'id_dokter' => $id_dokter,
						  'status' => 'Rawat Inap',
						  'jumlahobat' => $jumlahobat[$i]);
						


		}
		for( $i = 0; $i < $jumlah; $i++){ 
		$this->master->simpan_periksa($data[$i]);
		}
		redirect(base_url("/admin/sukses_periksa2/$kode/$id_pasien"));

	}
	public function simpan_periksa_rawat_jalan($kode, $id_pasien)
	{
		if($id_pasien == ""){
			echo "<script>window.location.href='".base_url('/admin/mpasienrawat')."' </script>";
		}
		if($kode == ""){
			echo "<script>window.location.href='".base_url('/admin/mpasienrawat')."' </script>";
		}
		$diagnosa = $this->input->post('diagnosa');
		$tindakan = $this->input->post('tindakan');
		$biaya = $this->input->post('biaya');
		$obat = $this->input->post('obat');
		$dosis = $this->input->post('dosis');
		$keluhan = $this->input->post('keluhan');
		$jumlahobat = $this->input->post('jumlahobat');
		$tanggal = date('20y-m-d');
		$jdiagnosa = sizeof($diagnosa);
		$jdiagnosa = sizeof($diagnosa);
		$jtindakan = sizeof($tindakan);
		$jkeluhan = sizeof($keluhan);
		$jobat = sizeof($obat);
		$arraymax = array($jdiagnosa, $jtindakan, $jobat, $jkeluhan);
		$tanggal = date('20y-m-d');
		$jumlah = max($arraymax);
		for( $i = 0; $i < $jumlah; $i++){ 
		
		error_reporting(0);
		$data[$i] = array('kode' => $kode,
						  'id_pasien' => $id_pasien,
						  'keluhan' => $keluhan[$i],
						  'diagnosa' => $diagnosa[$i],
						  'tindakan' => $tindakan[$i],
						  'biaya' => $biaya[$i],
						  'tanggal' => $tanggal,
						  'id_obat' => $obat[$i],
						  'dosis' => $dosis[$i],
						  'jumlahobat' => $jumlahobat[$i]);
						


		}
		for( $i = 0; $i < $jumlah; $i++){ 
		$this->master->simpan_periksa($data[$i]);
		}
		 redirect(base_url("/admin/pemasukan_pasien_rawatjalan/$kode/$id_pasien"));

	}
	
	public function ubah_status_periksa($kode, $id_pasien){
		$data['namaklinik'] = $this->namaklinik;
		$data['alamatklinik'] = $this->alamatklinik;
		$data['nohpklinik'] = $this->nohpklinik; 
		$data['judul'] = "Ubah Status Pemeriksaan Untuk Pasien - ".$this->namaklinik."";
		$data['nama'] = $this->session->userdata('nama'); 
		$data['username'] = $this->session->userdata('username'); 
		$data['kode'] = $kode; 
		$data['id_pasien'] = $id_pasien; 
		$this->load->view('/admin/header', $data);
		$this->load->view('/admin/ubah_status_periksa', $data);
		$this->load->view('/admin/footer');
	}
	public function simpan_status_periksa($kode, $id_pasien){
		if($kode == ""){
			echo "<script>window.location.href='".base_url('/admin/mpasienrawat')."' </script>";
		}
		$status = $this->input->post('status');
		$data = array ('status' => $status);
		$ekz = $this->master->simpan_pilih_ruangan($data, $kode);
		if($status == "Rawat Inap"){
			 $kodex = $this->session->userdata('kodexperiksa');
			  redirect(base_url("/admin/pilih_ruangan/$kode/$id_pasien"));
		  }
		  else if($status == "Rawat Jalan"){
			 $kodex = $this->session->userdata('kodexperiksa');
			  redirect(base_url("/admin/sukses_periksa/$kode/$id_pasien"));
		  }
		  else{
			  $kodex = $this->session->userdata('kodexperiksa');
		  redirect(base_url("/admin/pemasukan_pasien_pulang/$kode/$id_pasien"));
		  }
		
	}
	public function pemasukan_pasien($kode, $id_pasien){
		$data['namaklinik'] = $this->namaklinik;
		$data['alamatklinik'] = $this->alamatklinik;
		$data['nohpklinik'] = $this->nohpklinik; 
		$data['judul'] = "Pembayaran Tagihan Untuk Pasien - ".$this->namaklinik."";
		$data['nama'] = $this->session->userdata('nama'); 
		$data['username'] = $this->session->userdata('username'); 
		$data['kode'] = $kode;
		$data['total'] = 0;
		$data['id_pasien'] = $id_pasien; 
		$this->load->view('/admin/header', $data);
		$data['periksa1'] = $this->master->tampil_periksa1($kode);
		$data['periksa2'] = $this->master->tampil_periksa2($kode);
		$data['periksa3'] = $this->master->tampil_periksa3($kode);
		$data['periksabahan'] = $this->master->tampil_periksabahan($kode);
		$this->load->view('/admin/pemasukan_pasien', $data);
		$this->load->view('/admin/footer');
	}
	public function pemasukan_pasien_rawatjalan($kode, $id_pasien){
		$data['namaklinik'] = $this->namaklinik;
		$data['alamatklinik'] = $this->alamatklinik;
		$data['nohpklinik'] = $this->nohpklinik; 
		$data['judul'] = "Pembayaran Tagihan Untuk Pasien - ".$this->namaklinik."";
		$data['nama'] = $this->session->userdata('nama'); 
		$data['username'] = $this->session->userdata('username'); 
		$data['kode'] = $kode;
		$data['total'] = 0;
		$data['jumlahsebelum'] = 0;
		$data['id_pasien'] = $id_pasien; 
		$this->load->view('/admin/header', $data);
		$ambilsebelum = $this->master->lihat_pemasukan($kode);
		
		foreach($ambilsebelum as $sblm){
			 
			
				$data['jumlahsebelum'] =  $sblm->jumlah; ;
			
		}
		$data['periksa1'] = $this->master->tampil_periksa1($kode);
		$data['periksa2'] = $this->master->tampil_periksa2($kode);
		$data['periksa3'] = $this->master->tampil_periksa3($kode);
		$this->load->view('/admin/pemasukan_pasien_rawatjalan', $data);
		$this->load->view('/admin/footer');
	}
	public function pemasukan_pasien_pulang($kode, $id_pasien){
		$data['namaklinik'] = $this->namaklinik;
		$data['alamatklinik'] = $this->alamatklinik;
		$data['nohpklinik'] = $this->nohpklinik; 
		$data['judul'] = "Pembayaran Tagihan Untuk Pasien - ".$this->namaklinik."";
		$data['nama'] = $this->session->userdata('nama'); 
		$data['username'] = $this->session->userdata('username'); 
		$data['kode'] = $kode;
		$data['total'] = 0;
		
		$data['id_pasien'] = $id_pasien; 
		$this->load->view('/admin/header', $data);
		$ambilsebelum = $this->master->lihat_pemasukan($kode);
		
		
		foreach($ambilsebelum as $sblm){
			 
			
				$data['jumlahsebelum'] =  $sblm->jumlah; ;
			
		}
		
		$data['periksa1'] = $this->master->tampil_periksa1($kode);
		$data['periksa2'] = $this->master->tampil_periksa2($kode);
		$data['periksa3'] = $this->master->tampil_periksa3($kode);
		$this->load->view('/admin/pemasukan_pasien_pulang', $data);
		$this->load->view('/admin/footer');
	}
	public function simpan_pemasukan_pulang($kode, $id_pasien){
		if($kode == ""){
			echo "<script>window.location.href='".base_url('/admin/periksa')."' </script>";
		}
		$jumlah = $this->input->post('jumlah');
		$tanggal = date('20y-m-d');
		
		$data = array ( 'tanggal' => $tanggal,
					   'jumlah' => $jumlah);
		$ekz = $this->master->simpan_pemasukan2($data, $kode);
		redirect(base_url("/admin/sukses_periksa/$kode/$id_pasien"));
		
	}
	public function simpan_pemasukan($kode, $id_pasien){
		if($kode == ""){
			echo "<script>window.location.href='".base_url('/admin/periksa')."' </script>";
		}
		$jumlah = $this->input->post('jumlah');
		$tanggal = date('20y-m-d');
		$data = array ( 'tanggal' => $tanggal,
					   'jumlah' => $jumlah);
		$ekz = $this->master->simpan_pemasukan2($data, $kode);
		redirect(base_url("/admin/sukses_periksa/$kode/$id_pasien"));
		
	}
	public function simpan_pemasukan_rawatjalan($kode, $id_pasien){
		if($kode == ""){
			echo "<script>window.location.href='".base_url('/admin/periksa')."' </script>";
		}
		$jumlah = $this->input->post('jumlah');
		$tanggal = date('20y-m-d');
		$ambilsebelum = $this->master->lihat_pemasukan($kode);
		foreach($ambilsebelum as $sblm){
			$jumlahs = $sblm->jumlah;
			$jumlahtotal = $jumlah + $jumlahs;
		}
		$data = array ( 'tanggal' => $tanggal,
					   'jumlah' => $jumlahtotal);
		$ekz = $this->master->simpan_pemasukan2($data, $kode);
		redirect(base_url("/admin/sukses_periksa/$kode/$id_pasien"));
		
	}
	public function pilih_ruangan($kode, $id_pasien){
		$data['namaklinik'] = $this->namaklinik;
		$data['alamatklinik'] = $this->alamatklinik;
		$data['nohpklinik'] = $this->nohpklinik; 
		$data['judul'] = "Pilih Ruangan Untuk Pasien - ".$this->namaklinik."";
		$data['nama'] = $this->session->userdata('nama'); 
		$data['username'] = $this->session->userdata('username'); 
		$data['kode'] = $kode;
		$data['id_pasien'] = $id_pasien; 
		$data['ruangan'] = $this->master->lihat_data('tbl_ruangan', 'statusruangan', '1');
		// $data['ruangan'] = $this->master->pilih_ruangan();
		$this->load->view('/admin/header', $data);
		$this->load->view('/admin/pilih_ruangan', $data);
		$this->load->view('/admin/footer');
	}
	public function simpan_pilih_ruangan($kode, $id_pasien){
		if($kode == ""){
			echo "<script>window.location.href='".base_url('/admin/periksa')."' </script>";
		}
		$kodex = $this->session->userdata('kodexperiksa');
		$ruangan = $this->input->post('ruangan');
		$dataruangan = array ('statusruangan' => 0);
		$this->master->simpan_data('tbl_ruangan','id_ruangan', $ruangan, $dataruangan);
		$data = array ('id_ruangan' => $ruangan);
		$ekz = $this->master->simpan_pilih_ruangan($data, $kode);
		redirect(base_url("/admin/sukses_periksa/$kode/$id_pasien"));
	}
	public function pindah_ruangan_rawat($kode, $id_pasien){
		$data['namaklinik'] = $this->namaklinik;
		$data['alamatklinik'] = $this->alamatklinik;
		$data['nohpklinik'] = $this->nohpklinik; 
		$data['judul'] = "Pindah Ruangan Untuk Pasien - ".$this->namaklinik."";
		$data['nama'] = $this->session->userdata('nama'); 
		$data['username'] = $this->session->userdata('username'); 
		$data['kode'] = $kode; 
		$data['id_pasien'] = $id_pasien; 
		$data['ruangan'] = $this->master->pilih_ruangan();
		$this->load->view('/admin/header', $data);
		$this->load->view('/admin/pindah_ruangan_rawat', $data);
		$this->load->view('/admin/footer');
	}
	public function simpan_ruangan_rawat($kode, $id_pasien){
		if($kode == ""){
			echo "<script>window.location.href='".base_url('/admin/mpasienrawat')."' </script>";
		}
		$ruangan = $this->input->post('ruangan');
		$data = array ('id_ruangan' => $ruangan);
		$kodex = $this->session->userdata('kodexperiksa');
		$ekz = $this->master->simpan_pilih_ruangan($data, $kode);
		redirect(base_url("/admin/mpasienrawat"));
	}
	public function sukses_periksa($kode, $id_pasien)
	{
		if($id_pasien == ""){
			echo "<script>window.location.href='".base_url('/admin/periksa')."' </script>";
		}
		if($kode == ""){
			echo "<script>window.location.href='".base_url('/admin/periksa')."' </script>";
		}
		$data['namaklinik'] = $this->namaklinik;
		$data['alamatklinik'] = $this->alamatklinik;
		$data['nohpklinik'] = $this->nohpklinik; 
		$data['judul'] = "Sukses Periksa Pasien - ".$this->namaklinik."";
		$data['nama'] = $this->session->userdata('nama'); 
		$data['username'] = $this->session->userdata('username'); 
		$data['id_pasien'] = $id_pasien; 
		$data['kode'] = $kode; 
		$this->load->view('/admin/header', $data);
		$kodex = $this->session->userdata('kodexperiksa');
		$data['pasien'] = $this->master->view_pasien_jadwal($id_pasien);
		$data['periksa1'] = $this->master->tampil_periksa1($kodex);
		$data['periksa2'] = $this->master->tampil_periksa2($kodex);
		$data['periksa3'] = $this->master->tampil_periksa3($kodex);
		$this->load->view('/admin/sukses_periksa', $data);
		$this->load->view('/admin/footer');
	}
	public function sukses_periksa2($kode, $id_pasien)
	{
		if($id_pasien == ""){
			echo "<script>window.location.href='".base_url('/admin/periksa')."' </script>";
		}
		if($kode == ""){
			echo "<script>window.location.href='".base_url('/admin/periksa')."' </script>";
		}
		$data['namaklinik'] = $this->namaklinik;
		$data['alamatklinik'] = $this->alamatklinik;
		$data['nohpklinik'] = $this->nohpklinik; 
		$data['judul'] = "Sukses Periksa Pasien - ".$this->namaklinik."";
		$data['nama'] = $this->session->userdata('nama'); 
		$data['username'] = $this->session->userdata('username'); 
		$this->load->view('/admin/header', $data);
		$data['pasien'] = $this->master->view_pasien_jadwal($id_pasien);
		$data['periksa1'] = $this->master->tampil_periksa1($kode);
		$data['periksa2'] = $this->master->tampil_periksa2($kode);
		$data['periksa3'] = $this->master->tampil_periksa3($kode);
		$this->load->view('/admin/sukses_periksa2', $data);
		$this->load->view('/admin/footer');
	}
	public function print_periksa($kode, $id_pasien)
	{
		if($id_pasien == ""){
			echo "<script>window.location.href='".base_url('/admin/periksa')."' </script>";
		}
		if($kode == ""){
			echo "<script>window.location.href='".base_url('/admin/periksa')."' </script>";
		}
		$data['nama'] = $this->session->userdata('nama');
		$data['namaklinik'] = $this->namaklinik;
		$data['alamatklinik'] = $this->alamatklinik;
		$data['nohpklinik'] = $this->nohpklinik; 
		$data['selisih'] = 0; 
		$data['pasien'] = $this->master->view_pasien_jadwal($id_pasien);
		$data['pemasukan'] = $this->master->lihat_pemasukan($kode);
		$data['periksa1'] = $this->master->tampil_periksa1($kode);
		$data['periksa2'] = $this->master->tampil_periksa2($kode);
		$data['periksa3'] = $this->master->tampil_periksa3($kode);
		$this->load->view('/admin/print_periksa', $data);
	}
	public function print_periksa_semua($kode, $id_pasien)
	{
		if($id_pasien == ""){
			echo "<script>window.location.href='".base_url('/admin/periksa')."' </script>";
		}
		if($kode == ""){
			echo "<script>window.location.href='".base_url('/admin/periksa')."' </script>";
		}
		$data['namaklinik'] = $this->namaklinik;
		$data['alamatklinik'] = $this->alamatklinik;
		$data['nohpklinik'] = $this->nohpklinik; 
		$data['nama'] = $this->session->userdata('nama');
		$data['pasien'] = $this->master->view_pasien_jadwal($id_pasien);
		$data['periksa1'] = $this->master->tampil_periksa1($kode);
		$data['periksa2'] = $this->master->tampil_periksa2($kode);
		$data['periksa3'] = $this->master->tampil_periksa3($kode);
		$this->load->view('/admin/print_periksa2', $data);
	}
	public function daftar()
	{
		$data['namaklinik'] = $this->namaklinik;
		$data['alamatklinik'] = $this->alamatklinik;
		$data['nohpklinik'] = $this->nohpklinik; 
		$data['judul'] = "Pendaftaran Pasien Baru - ".$this->namaklinik."";
		$data['nama'] = $this->session->userdata('nama'); 
		$data['username'] = $this->session->userdata('username'); 
		$data['totalharga'] = 0;
		$data['totalbiaya'] = 0;
		$data['total'] = 0;
		$this->load->view('/admin/header', $data);
		$this->load->view('/admin/daftar');
		$this->load->view('/admin/footer');
	}
	public function terdaftar($id_pasien)
	{
		if($id_pasien == ""){
			echo "<script>window.location.href='".base_url('/admin')."' </script>";
		}
		$data['namaklinik'] = $this->namaklinik;
		$data['alamatklinik'] = $this->alamatklinik;
		$data['nohpklinik'] = $this->nohpklinik; 
		$data['judul'] = "Berhasil Mendaftarkan Pasien - ".$this->namaklinik."";
		$data['nama'] = $this->session->userdata('nama'); 
		$data['username'] = $this->session->userdata('username'); 
		$data['id_pasien'] = $id_pasien; 
		$this->load->view('/admin/header', $data);
		$this->load->view('/admin/terdaftar',$data);
		$this->load->view('/admin/footer');
	}
	public function pendaftaran(){
		
		$tanggal = date('20y-m-d'); 
		$namapasien = $this->input->post('namapasien');
		$ttl = $this->input->post('ttl');
		$biday = new DateTime($ttl);
		$today = new DateTime();
		$diff = $today->diff($biday);
		$umur = $diff->y; //umur
		$pekerjaan = $this->input->post('pekerjaan');
		$kelamin = $this->input->post('kelamin');
		$alamat = $this->input->post('alamat');
		$nohp = $this->input->post('nohp');
		$namaortu = $this->input->post('namaortu');
		$data = array('tanggal' => $tanggal, 
					  'namapasien' => $namapasien,
					  'ttl' => $ttl,
					  'umur' => $umur,
					  'pekerjaan' => $pekerjaan,
					  'kelamin' => $kelamin,
					  'alamat' => $alamat,
					  'namaortu' => $namaortu,
					  'nohp' => $nohp);
		$ekz = $this->master->pendaftaran($data);
		$xxxx = $this->db->insert_id($ekz);
		$nokartu = "01-0000-".$xxxx."";
		$datax = array ('nomorkartu' => $nokartu);
		$this->master->simpan_nokartu($datax, $xxxx);
		$datay = array('id_pasien' => $xxxx,
					   'statusalergi' => 'Tidak');
		$this->master->tambah_alergi($datay);
		if($ekz){
			echo "
			<link href='".base_url()."/assets/sweetalert/sweetalert.css' rel='stylesheet' />
			<script src='".base_url()."/assets/bsb/plugins/jquery/jquery.min.js'></script>
			<script src='".base_url()."/assets/sweetalert/sweetalert.min.js'></script>
			 <script type='text/javascript'>
			  setTimeout(function () {  
			   swal({
				title: 'Berhasil Menyimpan',
				text: 'Pasien Dengan Nama ".$namapasien." Telah Berhasil Terdaftar.',
				type: 'success',
				timer: 4000,
				showConfirmButton: false
			   });  
			  },10); 
			  window.setTimeout(function(){ 
			  window.location.href='".base_url('/admin/terdaftar/'.$xxxx.'')."';	
			  } ,2100); 
			 </script>"; 
			//echo "<script>alert('Berhasil Menambah Data Pasien.');window.location.href='".base_url('/admin/terdaftar/'.$xxxx.'')."' </script>";
		}
		else{
			echo "
			<link href='".base_url()."/assets/sweetalert/sweetalert.css' rel='stylesheet' />
			<script src='".base_url()."/assets/bsb/plugins/jquery/jquery.min.js'></script>
			<script src='".base_url()."/assets/sweetalert/sweetalert.min.js'></script>
			 <script type='text/javascript'>
			  setTimeout(function () {  
			   swal({
				title: 'Gagal Menyimpan',
				text: 'Gagal Mendaftarkan Pasien',
				type: 'error',
				timer: 4000,
				showConfirmButton: false
			   });  
			  },10); 
			  window.setTimeout(function(){ 
			  window.location.href='".base_url('/admin/daftar/')."';	
			  } ,2100); 
			 </script>"; 
			//echo "<script>alert('Gagal Menambah Data Pasien.');window.location.href='".base_url('/admin/daftar')."' </script>";
		}
	}
	public function pendapatan()
	{
		$data['namaklinik'] = $this->namaklinik;
		$data['alamatklinik'] = $this->alamatklinik;
		$data['nohpklinik'] = $this->nohpklinik; 
		$data['judul'] = "Pendapatan - ".$this->namaklinik."";
		$t1 =  date('20y-m-01');
		$t2 =  date('20y-m-02');
		$t3 =  date('20y-m-03');
		$t4 =  date('20y-m-04');
		$t5 =  date('20y-m-05');
		$t6 =  date('20y-m-06');
		$t7 =  date('20y-m-07');
		$t8 =  date('20y-m-08');
		$t9 =  date('20y-m-09');
		$t10 =  date('20y-m-10');
		$t11 =  date('20y-m-11');
		$t12 =  date('20y-m-12');
		$t13 =  date('20y-m-13');
		$t14 =  date('20y-m-14');
		$t15 =  date('20y-m-15');
		$t16 =  date('20y-m-16');
		$t17 =  date('20y-m-17');
		$t18 =  date('20y-m-18');
		$t19 =  date('20y-m-19');
		$t20 =  date('20y-m-20');
		$t21 =  date('20y-m-21');
		$t22 =  date('20y-m-22');
		$t23 =  date('20y-m-23');
		$t24 =  date('20y-m-24');
		$t25 =  date('20y-m-25');
		$t26 =  date('20y-m-26');
		$t27 =  date('20y-m-27');
		$t28 =  date('20y-m-28');
		$t29 =  date('20y-m-29');
		$t30 =  date('20y-m-30');
		$t31 =  date('20y-m-31');
		$data['h1'] = $this->master->hitungpendapatan($t1);
		$data['h2'] = $this->master->hitungpendapatan($t2);
		$data['h3'] = $this->master->hitungpendapatan($t3);
		$data['h4'] = $this->master->hitungpendapatan($t4);
		$data['h5'] = $this->master->hitungpendapatan($t5);
		$data['h6'] = $this->master->hitungpendapatan($t6);
		$data['h7'] = $this->master->hitungpendapatan($t7);
		$data['h8'] = $this->master->hitungpendapatan($t8);
		$data['h9'] = $this->master->hitungpendapatan($t9);
		$data['h10'] = $this->master->hitungpendapatan($t10);
		$data['h11'] = $this->master->hitungpendapatan($t11);
		$data['h12'] = $this->master->hitungpendapatan($t12);
		$data['h13'] = $this->master->hitungpendapatan($t13);
		$data['h14'] = $this->master->hitungpendapatan($t14);
		$data['h15'] = $this->master->hitungpendapatan($t15);
		$data['h16'] = $this->master->hitungpendapatan($t16);
		$data['h17'] = $this->master->hitungpendapatan($t17);
		$data['h18'] = $this->master->hitungpendapatan($t18);
		$data['h19'] = $this->master->hitungpendapatan($t19);
		$data['h20'] = $this->master->hitungpendapatan($t20);
		$data['h21'] = $this->master->hitungpendapatan($t21);
		$data['h22'] = $this->master->hitungpendapatan($t22);
		$data['h23'] = $this->master->hitungpendapatan($t23);
		$data['h24'] = $this->master->hitungpendapatan($t24);
		$data['h25'] = $this->master->hitungpendapatan($t25);
		$data['h26'] = $this->master->hitungpendapatan($t26);
		$data['h27'] = $this->master->hitungpendapatan($t27);
		$data['h28'] = $this->master->hitungpendapatan($t28);
		$data['h29'] = $this->master->hitungpendapatan($t29);
		$data['h30'] = $this->master->hitungpendapatan($t30);
		$data['h31'] = $this->master->hitungpendapatan($t31);
		
		foreach($data['h1'] as $h1){$data['t1'] = $h1->hitung;}
		foreach($data['h2'] as $h2){$data['t2'] = $h2->hitung;}
		foreach($data['h3'] as $h3){$data['t3'] = $h3->hitung;}
		foreach($data['h4'] as $h4){$data['t4'] = $h4->hitung;}
		foreach($data['h5'] as $h5){$data['t5'] = $h5->hitung;}
		foreach($data['h6'] as $h6){$data['t6'] = $h6->hitung;}
		foreach($data['h7'] as $h7){$data['t7'] = $h7->hitung;}
		foreach($data['h8'] as $h8){$data['t8'] = $h8->hitung;}
		foreach($data['h9'] as $h9){$data['t9'] = $h9->hitung;}
		foreach($data['h10'] as $h10){$data['t10'] = $h10->hitung;}
		foreach($data['h11'] as $h11){$data['t11'] = $h11->hitung;}
		foreach($data['h12'] as $h12){$data['t12'] = $h12->hitung;}
		foreach($data['h13'] as $h13){$data['t13'] = $h13->hitung;}
		foreach($data['h14'] as $h14){$data['t14'] = $h14->hitung;}
		foreach($data['h15'] as $h15){$data['t15'] = $h15->hitung;}
		foreach($data['h16'] as $h16){$data['t16'] = $h16->hitung;}
		foreach($data['h17'] as $h17){$data['t17'] = $h17->hitung;}
		foreach($data['h18'] as $h18){$data['t18'] = $h18->hitung;}
		foreach($data['h19'] as $h19){$data['t19'] = $h19->hitung;}
		foreach($data['h20'] as $h20){$data['t20'] = $h20->hitung;}
		foreach($data['h21'] as $h21){$data['t21'] = $h21->hitung;}
		foreach($data['h22'] as $h22){$data['t22'] = $h22->hitung;}
		foreach($data['h23'] as $h23){$data['t23'] = $h23->hitung;}
		foreach($data['h24'] as $h24){$data['t24'] = $h24->hitung;}
		foreach($data['h25'] as $h25){$data['t25'] = $h25->hitung;}
		foreach($data['h26'] as $h26){$data['t26'] = $h26->hitung;}
		foreach($data['h27'] as $h27){$data['t27'] = $h27->hitung;}
		foreach($data['h28'] as $h28){$data['t28'] = $h28->hitung;}
		foreach($data['h29'] as $h29){$data['t29'] = $h29->hitung;}
		foreach($data['h30'] as $h30){$data['t30'] = $h30->hitung;}
		foreach($data['h31'] as $h31){$data['t31'] = $h31->hitung;}
		
		///pemasukan dari pasien
		
		$data['h1x'] = $this->master->hitungpendapatanx($t1);
		$data['h2x'] = $this->master->hitungpendapatanx($t2);
		$data['h3x'] = $this->master->hitungpendapatanx($t3);
		$data['h4x'] = $this->master->hitungpendapatanx($t4);
		$data['h5x'] = $this->master->hitungpendapatanx($t5);
		$data['h6x'] = $this->master->hitungpendapatanx($t6);
		$data['h7x'] = $this->master->hitungpendapatanx($t7);
		$data['h8x'] = $this->master->hitungpendapatanx($t8);
		$data['h9x'] = $this->master->hitungpendapatanx($t9);
		$data['h10x'] = $this->master->hitungpendapatanx($t10);
		$data['h11x'] = $this->master->hitungpendapatanx($t11);
		$data['h12x'] = $this->master->hitungpendapatanx($t12);
		$data['h13x'] = $this->master->hitungpendapatanx($t13);
		$data['h14x'] = $this->master->hitungpendapatanx($t14);
		$data['h15x'] = $this->master->hitungpendapatanx($t15);
		$data['h16x'] = $this->master->hitungpendapatanx($t16);
		$data['h17x'] = $this->master->hitungpendapatanx($t17);
		$data['h18x'] = $this->master->hitungpendapatanx($t18);
		$data['h19x'] = $this->master->hitungpendapatanx($t19);
		$data['h20x'] = $this->master->hitungpendapatanx($t20);
		$data['h21x'] = $this->master->hitungpendapatanx($t21);
		$data['h22x'] = $this->master->hitungpendapatanx($t22);
		$data['h23x'] = $this->master->hitungpendapatanx($t23);
		$data['h24x'] = $this->master->hitungpendapatanx($t24);
		$data['h25x'] = $this->master->hitungpendapatanx($t25);
		$data['h26x'] = $this->master->hitungpendapatanx($t26);
		$data['h27x'] = $this->master->hitungpendapatanx($t27);
		$data['h28x'] = $this->master->hitungpendapatanx($t28);
		$data['h29x'] = $this->master->hitungpendapatanx($t29);
		$data['h30x'] = $this->master->hitungpendapatanx($t30);
		$data['h31x'] = $this->master->hitungpendapatanx($t31);
		
		foreach($data['h1x'] as $h1x){$data['t1x'] = $h1x->hitung;}
		foreach($data['h2x'] as $h2x){$data['t2x'] = $h2x->hitung;}
		foreach($data['h3x'] as $h3x){$data['t3x'] = $h3x->hitung;}
		foreach($data['h4x'] as $h4x){$data['t4x'] = $h4x->hitung;}
		foreach($data['h5x'] as $h5x){$data['t5x'] = $h5x->hitung;}
		foreach($data['h6x'] as $h6x){$data['t6x'] = $h6x->hitung;}
		foreach($data['h7x'] as $h7x){$data['t7x'] = $h7x->hitung;}
		foreach($data['h8x'] as $h8x){$data['t8x'] = $h8x->hitung;}
		foreach($data['h9x'] as $h9x){$data['t9x'] = $h9x->hitung;}
		foreach($data['h10x'] as $h10x){$data['t10x'] = $h10x->hitung;}
		foreach($data['h11x'] as $h11x){$data['t11x'] = $h11x->hitung;}
		foreach($data['h12x'] as $h12x){$data['t12x'] = $h12x->hitung;}
		foreach($data['h13x'] as $h13x){$data['t13x'] = $h13x->hitung;}
		foreach($data['h14x'] as $h14x){$data['t14x'] = $h14x->hitung;}
		foreach($data['h15x'] as $h15x){$data['t15x'] = $h15x->hitung;}
		foreach($data['h16x'] as $h16x){$data['t16x'] = $h16x->hitung;}
		foreach($data['h17x'] as $h17x){$data['t17x'] = $h17x->hitung;}
		foreach($data['h18x'] as $h18x){$data['t18x'] = $h18x->hitung;}
		foreach($data['h19x'] as $h19x){$data['t19x'] = $h19x->hitung;}
		foreach($data['h20x'] as $h20x){$data['t20x'] = $h20x->hitung;}
		foreach($data['h21x'] as $h21x){$data['t21x'] = $h21x->hitung;}
		foreach($data['h22x'] as $h22x){$data['t22x'] = $h22x->hitung;}
		foreach($data['h23x'] as $h23x){$data['t23x'] = $h23x->hitung;}
		foreach($data['h24x'] as $h24x){$data['t24x'] = $h24x->hitung;}
		foreach($data['h25x'] as $h25x){$data['t25x'] = $h25x->hitung;}
		foreach($data['h26x'] as $h26x){$data['t26x'] = $h26x->hitung;}
		foreach($data['h27x'] as $h27x){$data['t27x'] = $h27x->hitung;}
		foreach($data['h28x'] as $h28x){$data['t28x'] = $h28x->hitung;}
		foreach($data['h29x'] as $h29x){$data['t29x'] = $h29x->hitung;}
		foreach($data['h30x'] as $h30x){$data['t30x'] = $h30x->hitung;}
		foreach($data['h31x'] as $h31x){$data['t31x'] = $h31x->hitung;}
		
		$data['nama'] = $this->session->userdata('nama'); 
		$data['username'] = $this->session->userdata('username');
		$data['tanggal1'] = $t1;
		$data['jumlahpendapatan'] = "";
		$this->load->view('/admin/header', $data);
		$this->load->view('/admin/pendapatan', $data);
		$this->load->view('/admin/footer');
	}
	public function logout(){
		$this->session->sess_destroy();
		echo "
			<link href='".base_url()."/assets/sweetalert/sweetalert.css' rel='stylesheet' />
			<script src='".base_url()."/assets/bsb/plugins/jquery/jquery.min.js'></script>
			<script src='".base_url()."/assets/sweetalert/sweetalert.min.js'></script>
			 <script type='text/javascript'>
			  setTimeout(function () {  
			   swal({
				title: 'Logout Berhasil',
				text: 'E-MEDIC',
				type: 'success',
				timer: 4000,
				showConfirmButton: false
			   });  
			  },10); 
			  window.setTimeout(function(){ 
			  window.location.href='".base_url('')."';	
			  } ,2100); 
			 </script>"; 
		//redirect(base_url());
	}
	public function post_lihat_laporan(){
		$tanggalmulai = $this->input->post('tanggalmulai');
		$tanggalsampai = $this->input->post('tanggalsampai');
		$sesipendapatan['tanggalmulai'] = $tanggalmulai;
		$sesipendapatan['tanggalsampai'] = $tanggalsampai;
		$this->session->set_userdata($sesipendapatan);
		redirect(base_url("admin/print_pendapatan"));
	}
	public function print_pendapatan()
	{
		$tanggalmulai = $this->session->userdata('tanggalmulai');
		$tanggalsampai = $this->session->userdata('tanggalsampai');
		if($tanggalmulai == ""){
			echo "<script>window.location.href='".base_url('/admin')."' </script>";
		}
		if($tanggalsampai == ""){
			echo "<script>window.location.href='".base_url('/admin')."' </script>";
		}
		$data['namaklinik'] = $this->namaklinik;
		$data['alamatklinik'] = $this->alamatklinik;
		$data['nohpklinik'] = $this->nohpklinik; 
		$data['pendapatan'] = $this->master->print_pendapatan($tanggalmulai, $tanggalsampai);
		$this->load->view('/admin/print_pendapatan', $data);
	}
	public function lap_pasien()
	{
		$data['namaklinik'] = $this->namaklinik;
		$data['alamatklinik'] = $this->alamatklinik;
		$data['nohpklinik'] = $this->nohpklinik; 
		$data['judul'] = "Pendapatan - ".$this->namaklinik."";
		$t1 =  date('20y-m-01');
		$t2 =  date('20y-m-02');
		$t3 =  date('20y-m-03');
		$t4 =  date('20y-m-04');
		$t5 =  date('20y-m-05');
		$t6 =  date('20y-m-06');
		$t7 =  date('20y-m-07');
		$t8 =  date('20y-m-08');
		$t9 =  date('20y-m-09');
		$t10 =  date('20y-m-10');
		$t11 =  date('20y-m-11');
		$t12 =  date('20y-m-12');
		$t13 =  date('20y-m-13');
		$t14 =  date('20y-m-14');
		$t15 =  date('20y-m-15');
		$t16 =  date('20y-m-16');
		$t17 =  date('20y-m-17');
		$t18 =  date('20y-m-18');
		$t19 =  date('20y-m-19');
		$t20 =  date('20y-m-20');
		$t21 =  date('20y-m-21');
		$t22 =  date('20y-m-22');
		$t23 =  date('20y-m-23');
		$t24 =  date('20y-m-24');
		$t25 =  date('20y-m-25');
		$t26 =  date('20y-m-26');
		$t27 =  date('20y-m-27');
		$t28 =  date('20y-m-28');
		$t29 =  date('20y-m-29');
		$t30 =  date('20y-m-30');
		$t31 =  date('20y-m-31');
		$data['h1'] = $this->master->hitungpasien($t1);
		$data['h2'] = $this->master->hitungpasien($t2);
		$data['h3'] = $this->master->hitungpasien($t3);
		$data['h4'] = $this->master->hitungpasien($t4);
		$data['h5'] = $this->master->hitungpasien($t5);
		$data['h6'] = $this->master->hitungpasien($t6);
		$data['h7'] = $this->master->hitungpasien($t7);
		$data['h8'] = $this->master->hitungpasien($t8);
		$data['h9'] = $this->master->hitungpasien($t9);
		$data['h10'] = $this->master->hitungpasien($t10);
		$data['h11'] = $this->master->hitungpasien($t11);
		$data['h12'] = $this->master->hitungpasien($t12);
		$data['h13'] = $this->master->hitungpasien($t13);
		$data['h14'] = $this->master->hitungpasien($t14);
		$data['h15'] = $this->master->hitungpasien($t15);
		$data['h16'] = $this->master->hitungpasien($t16);
		$data['h17'] = $this->master->hitungpasien($t17);
		$data['h18'] = $this->master->hitungpasien($t18);
		$data['h19'] = $this->master->hitungpasien($t19);
		$data['h20'] = $this->master->hitungpasien($t20);
		$data['h21'] = $this->master->hitungpasien($t21);
		$data['h22'] = $this->master->hitungpasien($t22);
		$data['h23'] = $this->master->hitungpasien($t23);
		$data['h24'] = $this->master->hitungpasien($t24);
		$data['h25'] = $this->master->hitungpasien($t25);
		$data['h26'] = $this->master->hitungpasien($t26);
		$data['h27'] = $this->master->hitungpasien($t27);
		$data['h28'] = $this->master->hitungpasien($t28);
		$data['h29'] = $this->master->hitungpasien($t29);
		$data['h30'] = $this->master->hitungpasien($t30);
		$data['h31'] = $this->master->hitungpasien($t31);
		$data['ttl'] = $this->master->sumpasien($t1, $t31);
		
		foreach($data['h1'] as $h1){$data['t1'] = $h1->hitung;}
		foreach($data['h2'] as $h2){$data['t2'] = $h2->hitung;}
		foreach($data['h3'] as $h3){$data['t3'] = $h3->hitung;}
		foreach($data['h4'] as $h4){$data['t4'] = $h4->hitung;}
		foreach($data['h5'] as $h5){$data['t5'] = $h5->hitung;}
		foreach($data['h6'] as $h6){$data['t6'] = $h6->hitung;}
		foreach($data['h7'] as $h7){$data['t7'] = $h7->hitung;}
		foreach($data['h8'] as $h8){$data['t8'] = $h8->hitung;}
		foreach($data['h9'] as $h9){$data['t9'] = $h9->hitung;}
		foreach($data['h10'] as $h10){$data['t10'] = $h10->hitung;}
		foreach($data['h11'] as $h11){$data['t11'] = $h11->hitung;}
		foreach($data['h12'] as $h12){$data['t12'] = $h12->hitung;}
		foreach($data['h13'] as $h13){$data['t13'] = $h13->hitung;}
		foreach($data['h14'] as $h14){$data['t14'] = $h14->hitung;}
		foreach($data['h15'] as $h15){$data['t15'] = $h15->hitung;}
		foreach($data['h16'] as $h16){$data['t16'] = $h16->hitung;}
		foreach($data['h17'] as $h17){$data['t17'] = $h17->hitung;}
		foreach($data['h18'] as $h18){$data['t18'] = $h18->hitung;}
		foreach($data['h19'] as $h19){$data['t19'] = $h19->hitung;}
		foreach($data['h20'] as $h20){$data['t20'] = $h20->hitung;}
		foreach($data['h21'] as $h21){$data['t21'] = $h21->hitung;}
		foreach($data['h22'] as $h22){$data['t22'] = $h22->hitung;}
		foreach($data['h23'] as $h23){$data['t23'] = $h23->hitung;}
		foreach($data['h24'] as $h24){$data['t24'] = $h24->hitung;}
		foreach($data['h25'] as $h25){$data['t25'] = $h25->hitung;}
		foreach($data['h26'] as $h26){$data['t26'] = $h26->hitung;}
		foreach($data['h27'] as $h27){$data['t27'] = $h27->hitung;}
		foreach($data['h28'] as $h28){$data['t28'] = $h28->hitung;}
		foreach($data['h29'] as $h29){$data['t29'] = $h29->hitung;}
		foreach($data['h30'] as $h30){$data['t30'] = $h30->hitung;}
		foreach($data['h31'] as $h31){$data['t31'] = $h31->hitung;}
		foreach($data['ttl'] as $ttl){$data['totalpasien'] = $ttl->hitung;}
		
		$data['nama'] = $this->session->userdata('nama'); 
		$data['username'] = $this->session->userdata('username');
		$data['tanggal1'] = $t1;
		$this->load->view('/admin/header', $data);
		$this->load->view('/admin/lap_pasien', $data);
		$this->load->view('/admin/footer');
	}
	
	public function post_cari_periksa(){
		$cari = $this->input->post('cari');
		redirect(base_url("admin/pemeriksaan/$cari"));
	}
	
	public function mjadwal()
	{
		$data['namaklinik'] = $this->namaklinik;
		$data['alamatklinik'] = $this->alamatklinik;
		$data['nohpklinik'] = $this->nohpklinik; 
		$data['judul'] = "Master Jadwal - ".$this->namaklinik."";
		$data['nama'] = $this->session->userdata('nama'); 
		$data['username'] = $this->session->userdata('username'); 
		$this->load->view('/admin/header', $data);
		try{
			$crud = new grocery_CRUD();

			//$crud->set_theme('datatables');
			$crud->set_table('tbl_jadwal');
			$crud->set_relation('id_pasien', 'tbl_pasien', '[{nomorkartu}] {namapasien} - {namaortu}');
			$crud->columns('id_pasien', 'tanggal', 'status');
			$crud->field_type('status','dropdown',
            array('Sudah Periksa' => 'Sudah Periksa', 'Belum Periksa' => 'Belum Periksa'));
			$output = $crud->render();

			$this->output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
		$this->load->view('/admin/footer');
	}
	public function mpasien()
	{
		$data['namaklinik'] = $this->namaklinik;
		$data['alamatklinik'] = $this->alamatklinik;
		$data['nohpklinik'] = $this->nohpklinik; 
		$data['judul'] = "Master Pasien - ".$this->namaklinik."";
		$data['nama'] = $this->session->userdata('nama'); 
		$data['username'] = $this->session->userdata('username'); 
		$this->load->view('/admin/header', $data);
		$jumlahdata = $this->master->page_mpasien();
		$this->load->library('pagination');
		$config['base_url'] = base_url("admin/mpasien/");
		$config['total_rows'] = $jumlahdata;
		$config['per_page'] = 10;
		$from = $this->uri->segment(3);
		// $config['page_query_string'] = TRUE;
		//$config['use_page_numbers'] = TRUE;
		$config['query_string_segment'] = 'page';
		$config['full_tag_open'] = '<div ><ul class="pagination">';
		$config['full_tag_close'] = '</ul></div><!--pagination-->';
		$config['first_link'] = '&laquo; First';
		$config['first_tag_open'] = '<li class="prev page">';
		$config['first_tag_close'] = '</li>';
		$config['last_link'] = 'Last &raquo;';
		$config['last_tag_open'] = '<li class="next page">';
		$config['last_tag_close'] = '</li>';
		$config['next_link'] = 'Next &rarr;';
		$config['next_tag_open'] = '<li class="next page">';
		$config['next_tag_close'] = '</li>';
		$config['prev_link'] = '&larr; Previous';
		$config['prev_tag_open'] = '<li class="prev page">';
		$config['prev_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li class="page">';
		$config['num_tag_close'] = '</li>';
		$config['anchor_class'] = 'follow_link';
		$this->pagination->initialize($config);	
		$data['mpasien'] = $this->master->data_mpasien($config['per_page'],$from);
		$data['jd'] = $jumlahdata;
		if($from < 1){
			$data['nomor'] = 1;
		}
		if($from > 1){
			$data['nomor'] = $from+1;
		}
		$this->load->view('/admin/mpasien', $data);
		$this->load->view('/admin/footer');
	}
	public function post_cari_pasien(){
		$cariz = $this->input->post('cari');
		$carixx = urldecode($cariz); //menghilangkan %20 atau spasi
		$sesipasien['pilih_cari_pasien'] = $carixx;
		$this->session->set_userdata($sesipasien);
		redirect(base_url("admin/pilih_cari_pasien"));
	}
	public function pilih_cari_pasien()
	{
		$cari = $this->session->userdata('pilih_cari_pasien');
		if($cari == ""){
			echo "<script>window.location.href='".base_url('/admin/mpasien')."' </script>";
		}
		$data['namaklinik'] = $this->namaklinik;
		$data['alamatklinik'] = $this->alamatklinik;
		$data['nohpklinik'] = $this->nohpklinik; 
		$data['judul'] = "Pilih Pasien - ".$this->namaklinik."";
		$data['nama'] = $this->session->userdata('nama'); 
		$data['username'] = $this->session->userdata('username'); 
		$this->load->view('/admin/header', $data);
		$jumlahdata = $this->master->page_cari_pasien($cari);
		$this->load->library('pagination');
		$config['base_url'] = base_url("admin/pilih_cari_pasien/");
		$config['total_rows'] = $jumlahdata;
		$config['per_page'] = 10;
		$from = $this->uri->segment(3);
		// $config['page_query_string'] = TRUE;
		//$config['use_page_numbers'] = TRUE;
		$config['query_string_segment'] = 'page';
		$config['full_tag_open'] = '<div ><ul class="pagination">';
		$config['full_tag_close'] = '</ul></div><!--pagination-->';
		$config['first_link'] = '&laquo; First';
		$config['first_tag_open'] = '<li class="prev page">';
		$config['first_tag_close'] = '</li>';
		$config['last_link'] = 'Last &raquo;';
		$config['last_tag_open'] = '<li class="next page">';
		$config['last_tag_close'] = '</li>';
		$config['next_link'] = 'Next &rarr;';
		$config['next_tag_open'] = '<li class="next page">';
		$config['next_tag_close'] = '</li>';
		$config['prev_link'] = '&larr; Previous';
		$config['prev_tag_open'] = '<li class="prev page">';
		$config['prev_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li class="page">';
		$config['num_tag_close'] = '</li>';
		$config['anchor_class'] = 'follow_link';
		$this->pagination->initialize($config);	
		$data['mpasien'] = $this->master->data_cari_pasien($config['per_page'],$from, $cari);
		$data['jd'] = $jumlahdata;
		if($from < 1){
			$data['nomor'] = 1;
		}
		if($from > 1){
			$data['nomor'] = $from+1;
		}
		$this->load->view('/admin/cari_pasien', $data);
		$this->load->view('/admin/footer');
	}
	public function lihat_pasien($id_pasien)
	{
		if($id_pasien == ""){
			echo "<script>window.location.href='".base_url('/admin/mpasien')."' </script>";
		}
		$data['namaklinik'] = $this->namaklinik;
		$data['alamatklinik'] = $this->alamatklinik;
		$data['nohpklinik'] = $this->nohpklinik; 
		$data['judul'] = "Lihat Pasien - ".$this->namaklinik."";
		$data['nama'] = $this->session->userdata('nama'); 
		$data['username'] = $this->session->userdata('username'); 
		$data['pasien'] = $this->master->lihat_pasien($id_pasien); 
		$this->load->view('/admin/header', $data);
		$this->load->view('/admin/lihat_pasien', $data);
		$this->load->view('/admin/footer');
	}
	public function edit_pasien($id_pasien)
	{
		if($id_pasien == ""){
			echo "<script>window.location.href='".base_url('/admin/mpasien')."' </script>";
		}
		$data['namaklinik'] = $this->namaklinik;
		$data['alamatklinik'] = $this->alamatklinik;
		$data['nohpklinik'] = $this->nohpklinik; 
		$data['judul'] = "Lihat Pasien - ".$this->namaklinik."";
		$data['nama'] = $this->session->userdata('nama'); 
		$data['username'] = $this->session->userdata('username'); 
		$data['pasien'] = $this->master->lihat_pasien($id_pasien); 
		$this->load->view('/admin/header', $data);
		$this->load->view('/admin/edit_pasien', $data);
		$this->load->view('/admin/footer');
	}
	public function hapus_pasien($id_pasien){
		if($id_pasien == ""){
			echo "<script>window.location.href='".base_url('/admin/mpasien')."' </script>";
		}
		$this->master->hapus_pasien($id_pasien);
		redirect(base_url("/admin/mpasien"));
	}
	public function print_kartu_pasien($id_pasien)
	{
		
		
		if($id_pasien == ""){
			echo "<script>window.location.href='".base_url('/admin/mpasien')."' </script>";
		}
		$data['namaklinik'] = $this->namaklinik;
		$data['alamatklinik'] = $this->alamatklinik;
		$data['nohpklinik'] = $this->nohpklinik; 
		$data['judul'] = "Lihat Pasien - ".$this->namaklinik."";
		$data['nama'] = $this->session->userdata('nama'); 
		$data['username'] = $this->session->userdata('username'); 
		$data['pasien'] = $this->master->lihat_pasien($id_pasien); 
		$namaklinik = $this->namaklinik;
		$tanggal = date('20y-m-d');
		$this->load->view('/admin/print_kartu_pasien', $data);
		// $pdfFilePath = FCPATH."/assets/pdf/kartupasien/$namaklinik-$id_pasien-($tanggal).pdf";

		// if (file_exists($pdfFilePath) == FALSE)

		// {

		// 	ini_set('memory_limit','32M'); // boost the memory limit if it's low ;)

		// 	$html = $this->load->view('/admin/print_kartu_pasien', $data, true); // render the view into HTML


		// 	$this->load->library('pdf');

		// 	$pdf = $this->pdf->load();

		// 	$pdf->SetFooter($_SERVER['HTTP_HOST'].'|{PAGENO}|'.date(DATE_RFC822)); // Add a footer for good measure ;)

		// 	$pdf->SetJS('window.print();');
		// 	$pdf->WriteHTML($html);
		// 	$pdf->Output($pdfFilePath, 'F');

		// }


		// redirect("/assets/pdf/kartupasien/$namaklinik-$id_pasien-($tanggal).pdf");
	}
	public function rekam_medis($id_pasien)
	{
		if($id_pasien == ""){
			echo "<script>window.location.href='".base_url('/admin/mpasien')."' </script>";
		}
		$data['namaklinik'] = $this->namaklinik;
		$data['alamatklinik'] = $this->alamatklinik;
		$data['nohpklinik'] = $this->nohpklinik; 
		$data['judul'] = "Lihat Pasien - ".$this->namaklinik."";
		$data['nama'] = $this->session->userdata('nama'); 
		$data['username'] = $this->session->userdata('username'); 
		$data['rm1'] = $this->master->rekam_medis($id_pasien); 
		$data['rm2'] = $this->master->rekam_medis($id_pasien); 
		$data['rm3'] = $this->master->rekam_medis1($id_pasien); 
		$data['pasien'] = $this->master->lihat_pasien($id_pasien); 
		$data['alergi'] = $this->master->lihat_alergi($id_pasien); 
		$this->load->view('/admin/rekam_medis', $data);
	}
	public function simpan_pasien($id_pasien){
		$namapasien = $this->input->post('namapasien');
		$ttl = $this->input->post('ttl');
		$umur = $this->input->post('umur');
		$pekerjaan = $this->input->post('pekerjaan');
		$kelamin = $this->input->post('kelamin');
		$alamat = $this->input->post('alamat');
		$nohp = $this->input->post('nohp');
		$namaortu = $this->input->post('namaortu');
		$data = array('namapasien' => $namapasien,
					  'ttl' => $ttl,
					  'umur' => $umur,
					  'pekerjaan' => $pekerjaan,
					  'kelamin' => $kelamin,
					  'alamat' => $alamat,
					  'namaortu' => $namaortu,
					  'nohp' => $nohp);
		$ekz = $this->master->simpan_pasien($data, $id_pasien);
		if($ekz){
			echo "
			<link href='".base_url()."/assets/sweetalert/sweetalert.css' rel='stylesheet' />
			<script src='".base_url()."/assets/bsb/plugins/jquery/jquery.min.js'></script>
			<script src='".base_url()."/assets/sweetalert/sweetalert.min.js'></script>
			 <script type='text/javascript'>
			  setTimeout(function () {  
			   swal({
				title: 'Berhasil Menyimpan',
				text: 'Data Pasien ".$namapasien." Berhasil Dirubah',
				type: 'success',
				timer: 4000,
				showConfirmButton: false
			   });  
			  },10); 
			  window.setTimeout(function(){ 
			  window.location.href='".base_url('/admin/mpasien/')."';	
			  } ,2100); 
			 </script>"; 
			//echo "<script>alert('Berhasil Menyimpan Data Pasien.');window.location.href='".base_url('/admin/mpasien')."' </script>";
		}
		else{
			echo "
			<link href='".base_url()."/assets/sweetalert/sweetalert.css' rel='stylesheet' />
			<script src='".base_url()."/assets/bsb/plugins/jquery/jquery.min.js'></script>
			<script src='".base_url()."/assets/sweetalert/sweetalert.min.js'></script>
			 <script type='text/javascript'>
			  setTimeout(function () {  
			   swal({
				title: 'Berhasil Menyimpan',
				text: 'Data Pasien Tidak Berhasil Disimpan',
				type: 'error',
				timer: 4000,
				showConfirmButton: false
			   });  
			  },10); 
			  window.setTimeout(function(){ 
			  window.location.href='".base_url('/admin/mpasien/')."';	
			  } ,2100); 
			 </script>"; 
			//echo "<script>alert('Gagal Menyimpan Data Pasien.');window.location.href='".base_url('/admin/mpasien')."' </script>";
		}
	}
	public function mpasienrawat()
	{
		$data['namaklinik'] = $this->namaklinik;
		$data['alamatklinik'] = $this->alamatklinik;
		$data['nohpklinik'] = $this->nohpklinik; 
		$data['judul'] = "Master Pasien Rawat Inap - ".$this->namaklinik."";
		$data['nama'] = $this->session->userdata('nama'); 
		$data['username'] = $this->session->userdata('username'); 
		$this->load->view('/admin/header', $data);
		$jumlahdata = $this->master->page_mpasien_rawat();
		$this->load->library('pagination');
		$config['base_url'] = base_url("admin/mpasienrawat/");
		$config['total_rows'] = $jumlahdata;
		$config['per_page'] = 10;
		$from = $this->uri->segment(3);
		// $config['page_query_string'] = TRUE;
		//$config['use_page_numbers'] = TRUE;
		$config['query_string_segment'] = 'page';
		$config['full_tag_open'] = '<div ><ul class="pagination">';
		$config['full_tag_close'] = '</ul></div><!--pagination-->';
		$config['first_link'] = '&laquo; First';
		$config['first_tag_open'] = '<li class="prev page">';
		$config['first_tag_close'] = '</li>';
		$config['last_link'] = 'Last &raquo;';
		$config['last_tag_open'] = '<li class="next page">';
		$config['last_tag_close'] = '</li>';
		$config['next_link'] = 'Next &rarr;';
		$config['next_tag_open'] = '<li class="next page">';
		$config['next_tag_close'] = '</li>';
		$config['prev_link'] = '&larr; Previous';
		$config['prev_tag_open'] = '<li class="prev page">';
		$config['prev_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li class="page">';
		$config['num_tag_close'] = '</li>';
		$config['anchor_class'] = 'follow_link';
		$this->pagination->initialize($config);	
		$data['periksa'] = $this->master->data_mpasien_rawat($config['per_page'],$from);
		$data['jd'] = $jumlahdata;
		if($from < 1){
			$data['nomor'] = 1;
		}
		if($from > 1){
			$data['nomor'] = $from+1;
		}
		$this->load->view('/admin/mpasienrawat', $data);
		$this->load->view('/admin/footer');
	}
	public function post_cari_rawat(){
		$cariz = $this->input->post('cari');
		$carixx = urldecode($cariz); //menghilangkan %20 atau spasi
		$sesipasien['pilih_cari_rawat'] = $carixx;
		$this->session->set_userdata($sesipasien);
		redirect(base_url("admin/cari_rawat"));
	}
	public function cari_rawat()
	{
		$cari = $this->session->userdata('pilih_cari_rawat');
		if($cari == ""){
			echo "<script>window.location.href='".base_url('/admin/mpasienrawat')."' </script>";
		}
		$data['namaklinik'] = $this->namaklinik;
		$data['alamatklinik'] = $this->alamatklinik;
		$data['nohpklinik'] = $this->nohpklinik; 
		$data['judul'] = "Cari Pemeriksaan Pasien - ".$this->namaklinik."";
		$data['nama'] = $this->session->userdata('nama'); 
		$data['username'] = $this->session->userdata('username'); 
		$this->load->view('/admin/header', $data);
		$jumlahdata = $this->master->page_cari_rawat($cari);
		$this->load->library('pagination');
		$config['base_url'] = base_url("admin/cari_rawat/");
		$config['total_rows'] = $jumlahdata;
		$config['per_page'] = 10;
		$from = $this->uri->segment(3);
		// $config['page_query_string'] = TRUE;
		//$config['use_page_numbers'] = TRUE;
		$config['query_string_segment'] = 'page';
		$config['full_tag_open'] = '<div ><ul class="pagination">';
		$config['full_tag_close'] = '</ul></div><!--pagination-->';
		$config['first_link'] = '&laquo; First';
		$config['first_tag_open'] = '<li class="prev page">';
		$config['first_tag_close'] = '</li>';
		$config['last_link'] = 'Last &raquo;';
		$config['last_tag_open'] = '<li class="next page">';
		$config['last_tag_close'] = '</li>';
		$config['next_link'] = 'Next &rarr;';
		$config['next_tag_open'] = '<li class="next page">';
		$config['next_tag_close'] = '</li>';
		$config['prev_link'] = '&larr; Previous';
		$config['prev_tag_open'] = '<li class="prev page">';
		$config['prev_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li class="page">';
		$config['num_tag_close'] = '</li>';
		$config['anchor_class'] = 'follow_link';
		$this->pagination->initialize($config);	
		$data['periksa'] = $this->master->data_cari_rawat($config['per_page'],$from, $cari);
		$data['jd'] = $jumlahdata;
		if($from < 1){
			$data['nomor'] = 1;
		}
		if($from > 1){
			$data['nomor'] = $from+1;
		}
		$this->load->view('/admin/cari_rawat', $data);
		$this->load->view('/admin/footer');
	}
	
	public function tambah_pemeriksaan_rawat($kode, $id_pasien)
	{
		if($id_pasien == ""){
			echo "<script>window.location.href='".base_url('/admin/mpasienrawat')."' </script>";
		}
		if($kode == ""){
			echo "<script>window.location.href='".base_url('/admin/mpasienrawat')."' </script>";
		}
		$data['namaklinik'] = $this->namaklinik;
		$data['alamatklinik'] = $this->alamatklinik;
		$data['nohpklinik'] = $this->nohpklinik; 
		$data['judul'] = "Tambah Pemeriksaan Rawat Inap - ".$this->namaklinik."";
		$data['nama'] = $this->session->userdata('nama'); 
		$data['username'] = $this->session->userdata('username'); 
		$this->load->view('/admin/header', $data);
		$data['obat'] = $this->master->obat_periksa();
		$data['pasien'] = $this->master->view_pasien_jadwal($id_pasien);
		$data['periksa1'] = $this->master->tampil_periksa1($kode);
		$data['periksa2'] = $this->master->tampil_periksa2($kode);
		$data['periksa3'] = $this->master->tampil_periksa3($kode);
		$data['dokter'] = $this->master->lihat_data('tbl_dokter', '1', '1');
		$data['tindakan'] = $this->master->lihat_data('tbl_tindakan', '1', '1');
		$data['tindakan2'] = $this->master->lihat_data('tbl_tindakan', '1', '1');
		$data['bahanhabis'] = $this->master->lihat_data('tbl_bahan_habis_pakai', '1', '1');
		$data['bahanhabis2'] = $this->master->lihat_data('tbl_bahan_habis_pakai', '1', '1');
		$data['kode'] = $kode;
		$this->load->view('/admin/tambah_pemeriksaan_rawat', $data);
		$this->load->view('/admin/footer');
	}
	public function tambah_pemeriksaan_rawat_jalan($kode, $id_pasien)
	{
		if($id_pasien == ""){
			echo "<script>window.location.href='".base_url('/admin/mpasienrawat')."' </script>";
		}
		if($kode == ""){
			echo "<script>window.location.href='".base_url('/admin/mpasienrawat')."' </script>";
		}
		$data['namaklinik'] = $this->namaklinik;
		$data['alamatklinik'] = $this->alamatklinik;
		$data['nohpklinik'] = $this->nohpklinik; 
		$data['judul'] = "Tambah Pemeriksaan Rawat Jalan - ".$this->namaklinik."";
		$data['nama'] = $this->session->userdata('nama'); 
		$data['username'] = $this->session->userdata('username'); 
		$this->load->view('/admin/header', $data);
		$data['obat'] = $this->master->obat_periksa();
		$data['pasien'] = $this->master->view_pasien_jadwal($id_pasien);
		$data['periksa1'] = $this->master->tampil_periksa1($kode);
		$data['periksa2'] = $this->master->tampil_periksa2($kode);
		$data['periksa3'] = $this->master->tampil_periksa3($kode);
		$data['kode'] = $kode;
		$this->load->view('/admin/tambah_pemeriksaan_rawat_jalan', $data);
		$this->load->view('/admin/footer');
	}
	public function mobat()
	{
		$data['namaklinik'] = $this->namaklinik;
		$data['alamatklinik'] = $this->alamatklinik;
		$data['nohpklinik'] = $this->nohpklinik; 
		$data['judul'] = "Master Obat - ".$this->namaklinik."";
		$data['nama'] = $this->session->userdata('nama'); 
		$data['username'] = $this->session->userdata('username'); 
		$this->load->view('/admin/header', $data);
		try{
			$crud = new grocery_CRUD();

			//$crud->set_theme('datatables');
			$crud->set_table('tbl_obat');
			$crud->set_relation('id_jenisobat', 'tbl_jenisobat', 'jenisobat');
			$crud->set_relation('id_satuanobat', 'tbl_satuanobat', 'satuanobat');
			$crud->set_relation('id_suplier', 'tbl_suplier', 'namasuplier');
			$crud->columns('namaobat','id_jenisobat', 'stok', 'id_satuanobat', 'hargaobat','id_suplier');
			$output = $crud->render();

			$this->output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
		$this->load->view('/admin/footer');
	}
	
	//satuan obat
	public function msatuanobat()
	{
		$data['namaklinik'] = $this->namaklinik;
		$data['alamatklinik'] = $this->alamatklinik;
		$data['nohpklinik'] = $this->nohpklinik; 
		$data['judul'] = "Master Satuan Obat - ".$this->namaklinik."";
		$data['nama'] = $this->session->userdata('nama'); 
		$data['username'] = $this->session->userdata('username'); 
		$this->load->view('/admin/header', $data);
		try{
			$crud = new grocery_CRUD();

			//$crud->set_theme('datatables');
			$crud->set_table('tbl_satuanobat');
			
			$output = $crud->render();

			$this->output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
		$this->load->view('/admin/footer');
	}
	
	//suplier
	public function msuplier()
	{
		$data['namaklinik'] = $this->namaklinik;
		$data['alamatklinik'] = $this->alamatklinik;
		$data['nohpklinik'] = $this->nohpklinik; 
		$data['judul'] = "Master Suplier - ".$this->namaklinik."";
		$data['nama'] = $this->session->userdata('nama'); 
		$data['username'] = $this->session->userdata('username'); 
		$this->load->view('/admin/header', $data);
		try{
			$crud = new grocery_CRUD();

			//$crud->set_theme('datatables');
			$crud->set_table('tbl_suplier');

			$output = $crud->render();

			$this->output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
		$this->load->view('/admin/footer');
	}
	
	public function mjenisobat()
	{
		$data['namaklinik'] = $this->namaklinik;
		$data['alamatklinik'] = $this->alamatklinik;
		$data['nohpklinik'] = $this->nohpklinik; 
		$data['judul'] = "Master Jenis Obat - ".$this->namaklinik."";
		$data['nama'] = $this->session->userdata('nama'); 
		$data['username'] = $this->session->userdata('username'); 
		$this->load->view('/admin/header', $data);
		try{
			$crud = new grocery_CRUD();

			//$crud->set_theme('datatables');
			$crud->set_table('tbl_jenisobat');
			
			$output = $crud->render();

			$this->output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
		$this->load->view('/admin/footer');
	}
	
	//master Bahan Habis Pakai
	public function mbahanhabispakai()
	{
		$data['namaklinik'] = $this->namaklinik;
		$data['alamatklinik'] = $this->alamatklinik;
		$data['nohpklinik'] = $this->nohpklinik; 
		$data['judul'] = "Master Bahan Habis Pakai - ".$this->namaklinik."";
		$data['nama'] = $this->session->userdata('nama'); 
		$data['username'] = $this->session->userdata('username'); 
		$this->load->view('/admin/header', $data);
		try{
			$crud = new grocery_CRUD();

			//$crud->set_theme('datatables');
			$crud->set_table('tbl_bahan_habis_pakai');
			$crud->set_relation('id_jenisobat', 'tbl_jenisobat', 'jenisobat');
			$crud->set_relation('id_satuanobat', 'tbl_satuanobat', 'satuanobat');
			$crud->set_relation('id_suplier', 'tbl_suplier', 'namasuplier');
			$crud->columns('nama_bahan','id_jenisobat', 'stok_bahan', 'id_satuanobat', 'harga_bahan','id_suplier');
			$output = $crud->render();

			$this->output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
		$this->load->view('/admin/footer');
	}
	
	//master Tindakan
	public function mtindakan()
	{
		$data['namaklinik'] = $this->namaklinik;
		$data['alamatklinik'] = $this->alamatklinik;
		$data['nohpklinik'] = $this->nohpklinik; 
		$data['judul'] = "Master Tindakan - ".$this->namaklinik."";
		$data['nama'] = $this->session->userdata('nama'); 
		$data['username'] = $this->session->userdata('username'); 
		$this->load->view('/admin/header', $data);
		try{
			$crud = new grocery_CRUD();

			//$crud->set_theme('datatables');
			$crud->set_table('tbl_tindakan');
			
			$output = $crud->render();

			$this->output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
		$this->load->view('/admin/footer');
	}
	
	
	public function mruangan()
	{
		$data['namaklinik'] = $this->namaklinik;
		$data['alamatklinik'] = $this->alamatklinik;
		$data['nohpklinik'] = $this->nohpklinik; 
		$data['judul'] = "Master Ruangan - ".$this->namaklinik."";
		$data['nama'] = $this->session->userdata('nama'); 
		$data['username'] = $this->session->userdata('username'); 
		$this->load->view('/admin/header', $data);
		try{
			$crud = new grocery_CRUD();

			//$crud->set_theme('datatables');
			$crud->set_table('tbl_ruangan');
			$crud->field_type('statusruangan','dropdown',
            array('1' => 'Aktif','0' => 'Tidak Aktif'));
			$output = $crud->render();

			$this->output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
		$this->load->view('/admin/footer');
	}
	public function mdokter()
	{
		$data['namaklinik'] = $this->namaklinik;
		$data['alamatklinik'] = $this->alamatklinik;
		$data['nohpklinik'] = $this->nohpklinik; 
		$data['judul'] = "Master DOkter - ".$this->namaklinik."";
		$data['nama'] = $this->session->userdata('nama'); 
		$data['username'] = $this->session->userdata('username'); 
		$this->load->view('/admin/header', $data);
		try{
			$crud = new grocery_CRUD();

			//$crud->set_theme('datatables');
			$crud->set_table('tbl_dokter');
			$crud->field_type('statusdokter','dropdown',
            array('Aktif' => 'Aktif', 'Libur' => 'Libur','Cuti' => 'Cuti' , 'Tidak Aktif' => 'Tidak Aktif'));
			$output = $crud->render();

			$this->output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
		$this->load->view('/admin/footer');
	}
	public function user()
	{
		$data['namaklinik'] = $this->namaklinik;
		$data['alamatklinik'] = $this->alamatklinik;
		$data['nohpklinik'] = $this->nohpklinik; 
		$data['judul'] = "User - ".$this->namaklinik."";
		$data['nama'] = $this->session->userdata('nama'); 
		$data['username'] = $this->session->userdata('username'); 
		$this->load->view('/admin/header', $data);
		try{
			$crud = new grocery_CRUD();
			$crud->columns(['username','nama','alamat','nohp']);
			//$crud->set_theme('datatables');
			$crud->set_table('tbl_user');
			$crud->callback_before_insert(array($this,'encrypt_password'));
			$crud->callback_before_update(array($this,'encrypt_password'));
			$output = $crud->render();

			$this->output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
		$this->load->view('/admin/footer');
	}
	
	public function setting()
	{
		$data['namaklinik'] = $this->namaklinik;
		$data['alamatklinik'] = $this->alamatklinik;
		$data['nohpklinik'] = $this->nohpklinik; 
		$data['judul'] = "Pengaturan - ".$this->namaklinik."";
		$data['nama'] = $this->session->userdata('nama'); 
		$data['username'] = $this->session->userdata('username'); 
		$this->load->view('/admin/header', $data);
		$data['situs'] = $this->master->situs();
		$this->load->view('/admin/setting', $data);
		$this->load->view('/admin/footer');
	}
	public function edit_setting()
	{
		$data['namaklinik'] = $this->namaklinik;
		$data['alamatklinik'] = $this->alamatklinik;
		$data['nohpklinik'] = $this->nohpklinik; 
		$data['judul'] = "Edit Pengaturan - ".$this->namaklinik."";
		$data['nama'] = $this->session->userdata('nama'); 
		$data['username'] = $this->session->userdata('username'); 
		$this->load->view('/admin/header', $data);
		$data['situs'] = $this->master->situs();
		$this->load->view('/admin/edit_setting', $data);
		$this->load->view('/admin/footer');
	}
	public function simpan_setting(){
		$logo = $this->input->post('logo');
		$limitstok = $this->input->post('limitstok');
		$limitkadaluarsa = $this->input->post('limitkadaluarsa');
		$pendapatan_obat = $this->input->post('pendapatan_obat');
		$pendapatan_periksa = $this->input->post('pendapatan_periksa');
		$alamat = $this->input->post('alamat');
		$nohp = $this->input->post('nohp');
		$nohp = $this->input->post('nohp');
		$namaklinik = $this->input->post('namaklinik');
		$this->load->library('upload');
		$logo = "";
		error_reporting(0);
		$nmfile = "logo_".time();
		$configfoto['upload_path'] = 'assets/img/';
		$configfoto['allowed_types'] = 'jpg|jpeg|gif|png';
		$configfoto['max_size'] = '1000048';
		$configfoto['file_name'] = $nmfile;
		$this->upload->initialize($configfoto);
		if($_FILES['logo']['name']){
			
			if($this->upload->do_upload('logo')){
				$lpr = $this->upload->data();
				$logo = $lpr['file_name'];
			}
			else {
				$data['errors'] = array("errors" => $this->upload->display_errors());
			}
		}
		//
		$data = array('namaklinik' => $namaklinik,
					  'alamat' => $alamat,
					  'limitstok' => $limitstok,
					  'limitkadaluarsa' => $limitkadaluarsa,
					  'pendapatan_obat' => $pendapatan_obat,
					  'pendapatan_periksa' => $pendapatan_periksa,
					  'logo' => $logo,
					  'nohp' => $nohp);
		$ekz = $this->master->simpan_setting($data);
		if($ekz){
			echo "
			<link href='".base_url()."/assets/sweetalert/sweetalert.css' rel='stylesheet' />
			<script src='".base_url()."/assets/bsb/plugins/jquery/jquery.min.js'></script>
			<script src='".base_url()."/assets/sweetalert/sweetalert.min.js'></script>
			 <script type='text/javascript'>
			  setTimeout(function () {  
			   swal({
				title: 'Berhasil Menyimpan',
				text: 'Aplikasi ".$namaklinik." Siap Digunakan',
				type: 'success',
				timer: 4000,
				showConfirmButton: false
			   });  
			  },10); 
			  window.setTimeout(function(){ 
			  window.location.href='".base_url('/admin/setting/')."';	
			  } ,2100); 
			 </script>"; 
			//echo "<script>alert('Berhasil Menyimpan Data Aplikasi.');window.location.href='".base_url('/admin/setting')."' </script>";
		}
		else{
			echo "
			<link href='".base_url()."/assets/sweetalert/sweetalert.css' rel='stylesheet' />
			<script src='".base_url()."/assets/bsb/plugins/jquery/jquery.min.js'></script>
			<script src='".base_url()."/assets/sweetalert/sweetalert.min.js'></script>
			 <script type='text/javascript'>
			  setTimeout(function () {  
			   swal({
				title: 'Gagal Menyimpan',
				text: 'Data Aplikasi Tidak Berhasil Disimpan',
				type: 'error',
				timer: 4000,
				showConfirmButton: false
			   });  
			  },10); 
			  window.setTimeout(function(){ 
			  window.location.href='".base_url('/admin/setting/')."';	
			  } ,2100); 
			 </script>"; 
			//echo "<script>alert('Gagal Menyimpan Data Aplikasi.');window.location.href='".base_url('/admin/setting')."' </script>";
		}
	}
	public function lap_obat()
	{
		$data['namaklinik'] = $this->namaklinik;
		$data['alamatklinik'] = $this->alamatklinik;
		$data['nohpklinik'] = $this->nohpklinik; 
		$data['judul'] = "Laporan Obat - ".$this->namaklinik."";
		$data['nama'] = $this->session->userdata('nama'); 
		$data['username'] = $this->session->userdata('username'); 
		$jumlahdata = $this->master->page_limitobat();
		$this->load->library('pagination');
		$config['base_url'] = base_url("admin/lap_obat/");
		$config['total_rows'] = $jumlahdata;
		$config['per_page'] = 10;
		$from = $this->uri->segment(3);
		// $config['page_query_string'] = TRUE;
		//$config['use_page_numbers'] = TRUE;
		$config['query_string_segment'] = 'page';
		$config['full_tag_open'] = '<div ><ul class="pagination">';
		$config['full_tag_close'] = '</ul></div><!--pagination-->';
		$config['first_link'] = '&laquo; First';
		$config['first_tag_open'] = '<li class="prev page">';
		$config['first_tag_close'] = '</li>';
		$config['last_link'] = 'Last &raquo;';
		$config['last_tag_open'] = '<li class="next page">';
		$config['last_tag_close'] = '</li>';
		$config['next_link'] = 'Next &rarr;';
		$config['next_tag_open'] = '<li class="next page">';
		$config['next_tag_close'] = '</li>';
		$config['prev_link'] = '&larr; Previous';
		$config['prev_tag_open'] = '<li class="prev page">';
		$config['prev_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li class="page">';
		$config['num_tag_close'] = '</li>';
		$config['anchor_class'] = 'follow_link';
		$this->pagination->initialize($config);	
		$data['obat'] = $this->master->data_limitobat($config['per_page'],$from);
		$this->load->view('/admin/header', $data);
		$this->load->view('/admin/lap_obat');
		$this->load->view('/admin/footer');
	}
	public function edit_stok($id_obat)
	{
		if($id_obat == ""){
			echo "<script>window.location.href='".base_url('/admin/mobat')."' </script>";
		}
		$data['namaklinik'] = $this->namaklinik;
		$data['alamatklinik'] = $this->alamatklinik;
		$data['nohpklinik'] = $this->nohpklinik; 
		$data['judul'] = "Edit Stok Obat - ".$this->namaklinik."";
		$data['nama'] = $this->session->userdata('nama'); 
		$data['username'] = $this->session->userdata('username'); 
		$this->load->view('/admin/header', $data);
		$data['mobat'] = $this->master->edit_obat($id_obat); 
		$this->load->view('/admin/edit_stok', $data);
		$this->load->view('/admin/footer');
	}
	public function simpan_stok($id_obat)
	{
		if($id_obat == ""){
			echo "<script>window.location.href='".base_url('/admin/lap_obat')."' </script>";
		}
		
		$stok = $this->input->post('stok');
		$data = array ('stok' => $stok);
		$ekz = $this->master->simpan_obat($data, $id_obat);
		if($ekz){
			echo "
			<link href='".base_url()."/assets/sweetalert/sweetalert.css' rel='stylesheet' />
			<script src='".base_url()."/assets/bsb/plugins/jquery/jquery.min.js'></script>
			<script src='".base_url()."/assets/sweetalert/sweetalert.min.js'></script>
			 <script type='text/javascript'>
			  setTimeout(function () {  
			   swal({
				title: 'Berhasil Menyimpan',
				text: 'Stok Berhasil Dirubah Menjadi ".$stok."',
				type: 'success',
				timer: 4000,
				showConfirmButton: false
			   });  
			  },10); 
			  window.setTimeout(function(){ 
			  window.location.href='".base_url('/admin/lap_obat/')."';	
			  } ,2100); 
			 </script>"; 
			//echo "<script>alert('Berhasil Menyimpan Stok Data Obat.');window.location.href='".base_url('/admin/lap_obat')."' </script>";
		}
		else{
			echo "
			<link href='".base_url()."/assets/sweetalert/sweetalert.css' rel='stylesheet' />
			<script src='".base_url()."/assets/bsb/plugins/jquery/jquery.min.js'></script>
			<script src='".base_url()."/assets/sweetalert/sweetalert.min.js'></script>
			 <script type='text/javascript'>
			  setTimeout(function () {  
			   swal({
				title: 'Gagal Menyimpan',
				text: 'Tidak Berhasil Mengubah Data Stok Obat',
				type: 'error',
				timer: 4000,
				showConfirmButton: false
			   });  
			  },10); 
			  window.setTimeout(function(){ 
			  window.location.href='".base_url('/admin/lap_obat/')."';	
			  } ,2100); 
			 </script>"; 
			//echo "<script>alert('Gagal Menyimpan Stok Data Obat.');window.location.href='".base_url('/admin/lap_obat')."' </script>";
		}
	}
	public function lihat_lap_obat(){
		$tanggalmulai = $this->input->post('tanggalmulai');
		$tanggalsampai = $this->input->post('tanggalsampai');
		$data['tanggalmulai'] = $tanggalmulai;
		$data['tanggalsampai'] = $tanggalsampai;
		$data['namaklinik'] = $this->namaklinik;
		$data['alamatklinik'] = $this->alamatklinik;
		$data['nama'] = $this->session->userdata('nama');
		$data['nohpklinik'] = $this->nohpklinik; 
		$data['obat'] = $this->master->lihat_lap_obat($tanggalmulai, $tanggalsampai);
		$this->load->view('/admin/lihat_lap_obat', $data);
	}
	public function lap_detail()
	{
		$data['namaklinik'] = $this->namaklinik;
		$data['alamatklinik'] = $this->alamatklinik;
		$data['nohpklinik'] = $this->nohpklinik; 
		$data['judul'] = "Laporan Obat - ".$this->namaklinik."";
		$data['nama'] = $this->session->userdata('nama'); 
		$data['username'] = $this->session->userdata('username'); 
		$this->load->view('/admin/header', $data);
		$lengkaptahun = date('20y-01-01');
		$lengkaptahunx = date('20y-12-01');
		
		$obtsthn = $this->master->lengkaptahun($lengkaptahun, $lengkaptahunx);
		$ungsthn = $this->master->lengkaptahunx($lengkaptahun, $lengkaptahunx);
		foreach($obtsthn as $obt){
			foreach($ungsthn as $ung){
				$data['obatsetahun'] = $obt->hitung;
				$data['uangsetahun'] = $ung->hitung;
			}
		}
		$obtsm = $this->master->lengkapsemua();
		$ungsm = $this->master->lengkapsemuax();
		foreach($obtsm as $obtsmx){
			foreach($ungsm as $ungsmx){
				$data['obatsemua'] = $obtsmx->hitung;
				$data['uangsemua'] = $ungsmx->hitung;
			}
		}
		
		$this->load->view('/admin/lap_detail', $data);
		$this->load->view('/admin/footer');
	}
	public function lihat_lap_lengkap()
	{
		$data['namaklinik'] = $this->namaklinik;
		$data['alamatklinik'] = $this->alamatklinik;
		$data['nohpklinik'] = $this->nohpklinik; 
		$data['judul'] = "Laporan Pendapatan Lengkap - ".$this->namaklinik."";
		$tahun = $this->input->post('tahun');
		$bulan = $this->input->post('bulan');
		$t1 =  "".$tahun."-".$bulan."-01";
		$t2 =  "".$tahun."-".$bulan."-02";
		$t3 =  "".$tahun."-".$bulan."-03";
		$t4 =  "".$tahun."-".$bulan."-04";
		$t5 =  "".$tahun."-".$bulan."-05";
		$t6 =  "".$tahun."-".$bulan."-06";
		$t7 =  "".$tahun."-".$bulan."-07";
		$t8 =  "".$tahun."-".$bulan."-08";
		$t9 =  "".$tahun."-".$bulan."-09";
		$t10 =  "".$tahun."-".$bulan."-10";
		$t11 =  "".$tahun."-".$bulan."-11";
		$t12 =  "".$tahun."-".$bulan."-12";
		$t13 =  "".$tahun."-".$bulan."-13";
		$t14 =  "".$tahun."-".$bulan."-14";
		$t15 =  "".$tahun."-".$bulan."-15";
		$t16 =  "".$tahun."-".$bulan."-16";
		$t17 =  "".$tahun."-".$bulan."-17";
		$t18 =  "".$tahun."-".$bulan."-18";
		$t19 =  "".$tahun."-".$bulan."-19";
		$t20 =  "".$tahun."-".$bulan."-20";
		$t21 =  "".$tahun."-".$bulan."-21";
		$t22 =  "".$tahun."-".$bulan."-22";
		$t23 =  "".$tahun."-".$bulan."-23";
		$t24 =  "".$tahun."-".$bulan."-24";
		$t25 =  "".$tahun."-".$bulan."-25";
		$t26 =  "".$tahun."-".$bulan."-26";
		$t27 =  "".$tahun."-".$bulan."-27";
		$t28 =  "".$tahun."-".$bulan."-28";
		$t29 =  "".$tahun."-".$bulan."-29";
		$t30 =  "".$tahun."-".$bulan."-30";
		$t31 =  "".$tahun."-".$bulan."-31";
		$data['h1'] = $this->master->hitungpendapatan($t1);
		$data['h2'] = $this->master->hitungpendapatan($t2);
		$data['h3'] = $this->master->hitungpendapatan($t3);
		$data['h4'] = $this->master->hitungpendapatan($t4);
		$data['h5'] = $this->master->hitungpendapatan($t5);
		$data['h6'] = $this->master->hitungpendapatan($t6);
		$data['h7'] = $this->master->hitungpendapatan($t7);
		$data['h8'] = $this->master->hitungpendapatan($t8);
		$data['h9'] = $this->master->hitungpendapatan($t9);
		$data['h10'] = $this->master->hitungpendapatan($t10);
		$data['h11'] = $this->master->hitungpendapatan($t11);
		$data['h12'] = $this->master->hitungpendapatan($t12);
		$data['h13'] = $this->master->hitungpendapatan($t13);
		$data['h14'] = $this->master->hitungpendapatan($t14);
		$data['h15'] = $this->master->hitungpendapatan($t15);
		$data['h16'] = $this->master->hitungpendapatan($t16);
		$data['h17'] = $this->master->hitungpendapatan($t17);
		$data['h18'] = $this->master->hitungpendapatan($t18);
		$data['h19'] = $this->master->hitungpendapatan($t19);
		$data['h20'] = $this->master->hitungpendapatan($t20);
		$data['h21'] = $this->master->hitungpendapatan($t21);
		$data['h22'] = $this->master->hitungpendapatan($t22);
		$data['h23'] = $this->master->hitungpendapatan($t23);
		$data['h24'] = $this->master->hitungpendapatan($t24);
		$data['h25'] = $this->master->hitungpendapatan($t25);
		$data['h26'] = $this->master->hitungpendapatan($t26);
		$data['h27'] = $this->master->hitungpendapatan($t27);
		$data['h28'] = $this->master->hitungpendapatan($t28);
		$data['h29'] = $this->master->hitungpendapatan($t29);
		$data['h30'] = $this->master->hitungpendapatan($t30);
		$data['h31'] = $this->master->hitungpendapatan($t31);
		
		foreach($data['h1'] as $h1){$data['t1'] = $h1->hitung;}
		foreach($data['h2'] as $h2){$data['t2'] = $h2->hitung;}
		foreach($data['h3'] as $h3){$data['t3'] = $h3->hitung;}
		foreach($data['h4'] as $h4){$data['t4'] = $h4->hitung;}
		foreach($data['h5'] as $h5){$data['t5'] = $h5->hitung;}
		foreach($data['h6'] as $h6){$data['t6'] = $h6->hitung;}
		foreach($data['h7'] as $h7){$data['t7'] = $h7->hitung;}
		foreach($data['h8'] as $h8){$data['t8'] = $h8->hitung;}
		foreach($data['h9'] as $h9){$data['t9'] = $h9->hitung;}
		foreach($data['h10'] as $h10){$data['t10'] = $h10->hitung;}
		foreach($data['h11'] as $h11){$data['t11'] = $h11->hitung;}
		foreach($data['h12'] as $h12){$data['t12'] = $h12->hitung;}
		foreach($data['h13'] as $h13){$data['t13'] = $h13->hitung;}
		foreach($data['h14'] as $h14){$data['t14'] = $h14->hitung;}
		foreach($data['h15'] as $h15){$data['t15'] = $h15->hitung;}
		foreach($data['h16'] as $h16){$data['t16'] = $h16->hitung;}
		foreach($data['h17'] as $h17){$data['t17'] = $h17->hitung;}
		foreach($data['h18'] as $h18){$data['t18'] = $h18->hitung;}
		foreach($data['h19'] as $h19){$data['t19'] = $h19->hitung;}
		foreach($data['h20'] as $h20){$data['t20'] = $h20->hitung;}
		foreach($data['h21'] as $h21){$data['t21'] = $h21->hitung;}
		foreach($data['h22'] as $h22){$data['t22'] = $h22->hitung;}
		foreach($data['h23'] as $h23){$data['t23'] = $h23->hitung;}
		foreach($data['h24'] as $h24){$data['t24'] = $h24->hitung;}
		foreach($data['h25'] as $h25){$data['t25'] = $h25->hitung;}
		foreach($data['h26'] as $h26){$data['t26'] = $h26->hitung;}
		foreach($data['h27'] as $h27){$data['t27'] = $h27->hitung;}
		foreach($data['h28'] as $h28){$data['t28'] = $h28->hitung;}
		foreach($data['h29'] as $h29){$data['t29'] = $h29->hitung;}
		foreach($data['h30'] as $h30){$data['t30'] = $h30->hitung;}
		foreach($data['h31'] as $h31){$data['t31'] = $h31->hitung;}
		
		///pemasukan dari pasien
		
		$data['h1x'] = $this->master->hitungpendapatanx($t1);
		$data['h2x'] = $this->master->hitungpendapatanx($t2);
		$data['h3x'] = $this->master->hitungpendapatanx($t3);
		$data['h4x'] = $this->master->hitungpendapatanx($t4);
		$data['h5x'] = $this->master->hitungpendapatanx($t5);
		$data['h6x'] = $this->master->hitungpendapatanx($t6);
		$data['h7x'] = $this->master->hitungpendapatanx($t7);
		$data['h8x'] = $this->master->hitungpendapatanx($t8);
		$data['h9x'] = $this->master->hitungpendapatanx($t9);
		$data['h10x'] = $this->master->hitungpendapatanx($t10);
		$data['h11x'] = $this->master->hitungpendapatanx($t11);
		$data['h12x'] = $this->master->hitungpendapatanx($t12);
		$data['h13x'] = $this->master->hitungpendapatanx($t13);
		$data['h14x'] = $this->master->hitungpendapatanx($t14);
		$data['h15x'] = $this->master->hitungpendapatanx($t15);
		$data['h16x'] = $this->master->hitungpendapatanx($t16);
		$data['h17x'] = $this->master->hitungpendapatanx($t17);
		$data['h18x'] = $this->master->hitungpendapatanx($t18);
		$data['h19x'] = $this->master->hitungpendapatanx($t19);
		$data['h20x'] = $this->master->hitungpendapatanx($t20);
		$data['h21x'] = $this->master->hitungpendapatanx($t21);
		$data['h22x'] = $this->master->hitungpendapatanx($t22);
		$data['h23x'] = $this->master->hitungpendapatanx($t23);
		$data['h24x'] = $this->master->hitungpendapatanx($t24);
		$data['h25x'] = $this->master->hitungpendapatanx($t25);
		$data['h26x'] = $this->master->hitungpendapatanx($t26);
		$data['h27x'] = $this->master->hitungpendapatanx($t27);
		$data['h28x'] = $this->master->hitungpendapatanx($t28);
		$data['h29x'] = $this->master->hitungpendapatanx($t29);
		$data['h30x'] = $this->master->hitungpendapatanx($t30);
		$data['h31x'] = $this->master->hitungpendapatanx($t31);
		
		foreach($data['h1x'] as $h1x){$data['t1x'] = $h1x->hitung;}
		foreach($data['h2x'] as $h2x){$data['t2x'] = $h2x->hitung;}
		foreach($data['h3x'] as $h3x){$data['t3x'] = $h3x->hitung;}
		foreach($data['h4x'] as $h4x){$data['t4x'] = $h4x->hitung;}
		foreach($data['h5x'] as $h5x){$data['t5x'] = $h5x->hitung;}
		foreach($data['h6x'] as $h6x){$data['t6x'] = $h6x->hitung;}
		foreach($data['h7x'] as $h7x){$data['t7x'] = $h7x->hitung;}
		foreach($data['h8x'] as $h8x){$data['t8x'] = $h8x->hitung;}
		foreach($data['h9x'] as $h9x){$data['t9x'] = $h9x->hitung;}
		foreach($data['h10x'] as $h10x){$data['t10x'] = $h10x->hitung;}
		foreach($data['h11x'] as $h11x){$data['t11x'] = $h11x->hitung;}
		foreach($data['h12x'] as $h12x){$data['t12x'] = $h12x->hitung;}
		foreach($data['h13x'] as $h13x){$data['t13x'] = $h13x->hitung;}
		foreach($data['h14x'] as $h14x){$data['t14x'] = $h14x->hitung;}
		foreach($data['h15x'] as $h15x){$data['t15x'] = $h15x->hitung;}
		foreach($data['h16x'] as $h16x){$data['t16x'] = $h16x->hitung;}
		foreach($data['h17x'] as $h17x){$data['t17x'] = $h17x->hitung;}
		foreach($data['h18x'] as $h18x){$data['t18x'] = $h18x->hitung;}
		foreach($data['h19x'] as $h19x){$data['t19x'] = $h19x->hitung;}
		foreach($data['h20x'] as $h20x){$data['t20x'] = $h20x->hitung;}
		foreach($data['h21x'] as $h21x){$data['t21x'] = $h21x->hitung;}
		foreach($data['h22x'] as $h22x){$data['t22x'] = $h22x->hitung;}
		foreach($data['h23x'] as $h23x){$data['t23x'] = $h23x->hitung;}
		foreach($data['h24x'] as $h24x){$data['t24x'] = $h24x->hitung;}
		foreach($data['h25x'] as $h25x){$data['t25x'] = $h25x->hitung;}
		foreach($data['h26x'] as $h26x){$data['t26x'] = $h26x->hitung;}
		foreach($data['h27x'] as $h27x){$data['t27x'] = $h27x->hitung;}
		foreach($data['h28x'] as $h28x){$data['t28x'] = $h28x->hitung;}
		foreach($data['h29x'] as $h29x){$data['t29x'] = $h29x->hitung;}
		foreach($data['h30x'] as $h30x){$data['t30x'] = $h30x->hitung;}
		foreach($data['h31x'] as $h31x){$data['t31x'] = $h31x->hitung;}
		//pasien
		$data['h1z'] = $this->master->hitungpasien($t1);
		$data['h2z'] = $this->master->hitungpasien($t2);
		$data['h3z'] = $this->master->hitungpasien($t3);
		$data['h4z'] = $this->master->hitungpasien($t4);
		$data['h5z'] = $this->master->hitungpasien($t5);
		$data['h6z'] = $this->master->hitungpasien($t6);
		$data['h7z'] = $this->master->hitungpasien($t7);
		$data['h8z'] = $this->master->hitungpasien($t8);
		$data['h9z'] = $this->master->hitungpasien($t9);
		$data['h10z'] = $this->master->hitungpasien($t10);
		$data['h11z'] = $this->master->hitungpasien($t11);
		$data['h12z'] = $this->master->hitungpasien($t12);
		$data['h13z'] = $this->master->hitungpasien($t13);
		$data['h14z'] = $this->master->hitungpasien($t14);
		$data['h15z'] = $this->master->hitungpasien($t15);
		$data['h16z'] = $this->master->hitungpasien($t16);
		$data['h17z'] = $this->master->hitungpasien($t17);
		$data['h18z'] = $this->master->hitungpasien($t18);
		$data['h19z'] = $this->master->hitungpasien($t19);
		$data['h20z'] = $this->master->hitungpasien($t20);
		$data['h21z'] = $this->master->hitungpasien($t21);
		$data['h22z'] = $this->master->hitungpasien($t22);
		$data['h23z'] = $this->master->hitungpasien($t23);
		$data['h24z'] = $this->master->hitungpasien($t24);
		$data['h25z'] = $this->master->hitungpasien($t25);
		$data['h26z'] = $this->master->hitungpasien($t26);
		$data['h27z'] = $this->master->hitungpasien($t27);
		$data['h28z'] = $this->master->hitungpasien($t28);
		$data['h29z'] = $this->master->hitungpasien($t29);
		$data['h30z'] = $this->master->hitungpasien($t30);
		$data['h31z'] = $this->master->hitungpasien($t31);
		$data['ttlz'] = $this->master->sumpasien($t1, $t31);
		
		foreach($data['h1z'] as $h1z){$data['t1z'] = $h1z->hitung;}
		foreach($data['h2z'] as $h2z){$data['t2z'] = $h2z->hitung;}
		foreach($data['h3z'] as $h3z){$data['t3z'] = $h3z->hitung;}
		foreach($data['h4z'] as $h4z){$data['t4z'] = $h4z->hitung;}
		foreach($data['h5z'] as $h5z){$data['t5z'] = $h5z->hitung;}
		foreach($data['h6z'] as $h6z){$data['t6z'] = $h6z->hitung;}
		foreach($data['h7z'] as $h7z){$data['t7z'] = $h7z->hitung;}
		foreach($data['h8z'] as $h8z){$data['t8z'] = $h8z->hitung;}
		foreach($data['h9z'] as $h9z){$data['t9z'] = $h9z->hitung;}
		foreach($data['h10z'] as $h10z){$data['t10z'] = $h10z->hitung;}
		foreach($data['h11z'] as $h11z){$data['t11z'] = $h11z->hitung;}
		foreach($data['h12z'] as $h12z){$data['t12z'] = $h12z->hitung;}
		foreach($data['h13z'] as $h13z){$data['t13z'] = $h13z->hitung;}
		foreach($data['h14z'] as $h14z){$data['t14z'] = $h14z->hitung;}
		foreach($data['h15z'] as $h15z){$data['t15z'] = $h15z->hitung;}
		foreach($data['h16z'] as $h16z){$data['t16z'] = $h16z->hitung;}
		foreach($data['h17z'] as $h17z){$data['t17z'] = $h17z->hitung;}
		foreach($data['h18z'] as $h18z){$data['t18z'] = $h18z->hitung;}
		foreach($data['h19z'] as $h19z){$data['t19z'] = $h19z->hitung;}
		foreach($data['h20z'] as $h20z){$data['t20z'] = $h20z->hitung;}
		foreach($data['h21z'] as $h21z){$data['t21z'] = $h21z->hitung;}
		foreach($data['h22z'] as $h22z){$data['t22z'] = $h22z->hitung;}
		foreach($data['h23z'] as $h23z){$data['t23z'] = $h23z->hitung;}
		foreach($data['h24z'] as $h24z){$data['t24z'] = $h24z->hitung;}
		foreach($data['h25z'] as $h25z){$data['t25z'] = $h25z->hitung;}
		foreach($data['h26z'] as $h26z){$data['t26z'] = $h26z->hitung;}
		foreach($data['h27z'] as $h27z){$data['t27z'] = $h27z->hitung;}
		foreach($data['h28z'] as $h28z){$data['t28z'] = $h28z->hitung;}
		foreach($data['h29z'] as $h29z){$data['t29z'] = $h29z->hitung;}
		foreach($data['h30z'] as $h30z){$data['t30z'] = $h30z->hitung;}
		foreach($data['h31z'] as $h31z){$data['t31z'] = $h31z->hitung;}
		foreach($data['ttlz'] as $ttlz){$data['totalpasien'] = $ttlz->hitung;}
		
		//tanggal
		$data['tggl1'] =$t1;
		$data['tggl2'] =$t2;
		$data['tggl3'] =$t3;
		$data['tggl4'] =$t4;
		$data['tggl5'] =$t5;
		$data['tggl6'] =$t6;
		$data['tggl7'] =$t7;
		$data['tggl8'] =$t8;
		$data['tggl9'] =$t9;
		$data['tggl10'] =$t10;
		$data['tggl11'] =$t11;
		$data['tggl12'] =$t12;
		$data['tggl13'] =$t13;
		$data['tggl14'] =$t14;
		$data['tggl15'] =$t15;
		$data['tggl16'] =$t16;
		$data['tggl17'] =$t17;
		$data['tggl18'] =$t18;
		$data['tggl19'] =$t19;
		$data['tggl20'] =$t20;
		$data['tggl21'] =$t21;
		$data['tggl22'] =$t22;
		$data['tggl23'] =$t23;
		$data['tggl24'] =$t24;
		$data['tggl25'] =$t25;
		$data['tggl26'] =$t26;
		$data['tggl27'] =$t27;
		$data['tggl28'] =$t28;
		$data['tggl29'] =$t29;
		$data['tggl30'] =$t30;
		$data['tggl31'] =$t31;
		
		$data['nama'] = $this->session->userdata('nama'); 
		$data['username'] = $this->session->userdata('username');
		$data['tanggal1'] = $t1;
		$data['jumlahpendapatan'] = "";
		$this->load->view('/admin/header', $data);
		$this->load->view('/admin/lihat_lap_lengkap', $data);
		$this->load->view('/admin/footer');
	}
	//data beli obat
	public function bobat()
	{
		$data['namaklinik'] = $this->namaklinik;
		$data['alamatklinik'] = $this->alamatklinik;
		$data['nohpklinik'] = $this->nohpklinik; 
		$data['judul'] = "Master Obat - ".$this->namaklinik."";
		$data['nama'] = $this->session->userdata('nama'); 
		$data['username'] = $this->session->userdata('username'); 
		$this->load->view('/admin/header', $data);
		$jumlahdata = $this->master->page_bobat();
		$this->load->library('pagination');
		$config['base_url'] = base_url("admin/bobat/");
		$config['total_rows'] = $jumlahdata;
		$config['per_page'] = 10;
		$from = $this->uri->segment(3);
		// $config['page_query_string'] = TRUE;
		//$config['use_page_numbers'] = TRUE;
		$config['query_string_segment'] = 'page';
		$config['full_tag_open'] = '<div ><ul class="pagination">';
		$config['full_tag_close'] = '</ul></div><!--pagination-->';
		$config['first_link'] = '&laquo; First';
		$config['first_tag_open'] = '<li class="prev page">';
		$config['first_tag_close'] = '</li>';
		$config['last_link'] = 'Last &raquo;';
		$config['last_tag_open'] = '<li class="next page">';
		$config['last_tag_close'] = '</li>';
		$config['next_link'] = 'Next &rarr;';
		$config['next_tag_open'] = '<li class="next page">';
		$config['next_tag_close'] = '</li>';
		$config['prev_link'] = '&larr; Previous';
		$config['prev_tag_open'] = '<li class="prev page">';
		$config['prev_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li class="page">';
		$config['num_tag_close'] = '</li>';
		$config['anchor_class'] = 'follow_link';
		$this->pagination->initialize($config);	
		$data['bobat'] = $this->master->data_bobat($config['per_page'],$from);
		$data['jd'] = $jumlahdata;
		if($from < 1){
			$data['nomor'] = 1;
		}
		if($from > 1){
			$data['nomor'] = $from+1;
		}
		$data['jenisobat'] = $this->master->lihat_data('tbl_jenisobat', '1', '1');
		$data['satuanobat'] = $this->master->lihat_data('tbl_satuanobat', '1', '1');
		$data['suplier'] = $this->master->lihat_data('tbl_suplier', '1', '1');
		$this->load->view('/admin/bobat', $data);
		$this->load->view('/admin/footer');
	}
	public function tambah_bobat(){
		$namaobat = $this->input->post('namaobat');
		$jumlahbeli = $this->input->post('jumlahbeli');
		$satuan = $this->input->post('satuan');
		$jumlahpersatuan = $this->input->post('jumlahpersatuan');
		$hargabeli = $this->input->post('hargabeli');
		$kadaluarsa = $this->input->post('kadaluarsa');
		$id_suplier = $this->input->post('id_suplier');
		$tanggalbeli = $this->input->post('tanggalbeli');
		$id_satuanobat = $this->input->post('id_satuanobat');
		$id_jenisobat = $this->input->post('id_jenisobat');
		//
		
		$stok = $jumlahbeli * $jumlahpersatuan;
		$hargaasli = $hargabeli / $stok; 
		$hargauntung = $hargaasli * $this->pendapatan_obat / 100;
		
		$hargaobat = $hargaasli + $hargauntung;
		

		//dataobat
		$dataobat = array ('namaobat' => $namaobat,
					   'id_satuanobat' => $id_satuanobat,
					   'id_jenisobat' => $id_jenisobat,
					   'id_suplier' => $id_jenisobat,
					   'hargaobat' => $hargaobat,
					   'kadaluarsa' => $kadaluarsa,
					   'stok' => $stok);
		$ekzobat = $this->master->tambah_obat($dataobat);
		$id_obat = $this->db->insert_id($ekzobat);

		//
		
		$data = array ('namaobat' => $namaobat,
						'id_obat' => $id_obat,
						'jumlahbeli' => $jumlahbeli,
						'id_jenisobat' => $id_jenisobat,
					   'satuan' => $satuan,
					   'jumlahpersatuan' => $jumlahpersatuan,
					   'hargabeli' => $hargabeli,
					   'kadaluarsa' => $kadaluarsa,
					   'id_suplier' => $id_suplier,
					   'id_satuanobat' => $id_satuanobat,
					   'tanggalbeli' => $tanggalbeli);
		$ekz = $this->master->tambah_bobat($data);
		if($ekz){
			echo "
			<link href='".base_url()."/assets/sweetalert/sweetalert.css' rel='stylesheet' />
			<script src='".base_url()."/assets/bsb/plugins/jquery/jquery.min.js'></script>
			<script src='".base_url()."/assets/sweetalert/sweetalert.min.js'></script>
			 <script type='text/javascript'>
			  setTimeout(function () {  
			   swal({
				title: 'Berhasil Menyimpan',
				text: ' Obat ".$namaobat." Berhasil Ditambahkan',
				type: 'success',
				timer: 4000,
				showConfirmButton: false
			   });  
			  },10); 
			  window.setTimeout(function(){ 
			  window.location.href='".base_url('/admin/bobat/')."';	
			  } ,2100); 
			 </script>"; 
			//echo "<script>alert('Berhasil Menambah Data Obat.');window.location.href='".base_url('/admin/mobat')."' </script>";
		}
		else{
			echo "
			<link href='".base_url()."/assets/sweetalert/sweetalert.css' rel='stylesheet' />
			<script src='".base_url()."/assets/bsb/plugins/jquery/jquery.min.js'></script>
			<script src='".base_url()."/assets/sweetalert/sweetalert.min.js'></script>
			 <script type='text/javascript'>
			  setTimeout(function () {  
			   swal({
				title: 'Gagal Menyimpan',
				text: 'Gagal Menambahkan Data Obat',
				type: 'error',
				timer: 4000,
				showConfirmButton: false
			   });  
			  },10); 
			  window.setTimeout(function(){ 
			  window.location.href='".base_url('/admin/bobat/')."';	
			  } ,2100); 
			 </script>"; 
			//echo "<script>alert('Gagal Menambah Data Obat.');window.location.href='".base_url('/admin/mobat')."' </script>";
		}
	}
	public function edit_bobat($id_beliobat)
	{
		if($id_beliobat == ""){
			echo "<script>window.location.href='".base_url('/admin/bobat')."' </script>";
		}
		$data['namaklinik'] = $this->namaklinik;
		$data['alamatklinik'] = $this->alamatklinik;
		$data['nohpklinik'] = $this->nohpklinik; 
		$data['judul'] = "Edit Obat - ".$this->namaklinik."";
		$data['nama'] = $this->session->userdata('nama'); 
		$data['username'] = $this->session->userdata('username'); 
		$this->load->view('/admin/header', $data);
		$data['bobat'] = $this->master->edit_bobat($id_beliobat); 
		$data['jenisobat'] = $this->master->lihat_data('tbl_jenisobat', '1', '1');
		$data['satuanobat'] = $this->master->lihat_data('tbl_satuanobat', '1', '1');
		$data['suplier'] = $this->master->lihat_data('tbl_suplier', '1', '1');
		$this->load->view('/admin/edit_bobat', $data);
		$this->load->view('/admin/footer');
	}
	public function simpan_bobat($id_beliobat, $id_obat){
		$namaobat = $this->input->post('namaobat');
		$jumlahbeli = $this->input->post('jumlahbeli');
		$satuan = $this->input->post('satuan');
		$jumlahpersatuan = $this->input->post('jumlahpersatuan');
		$hargabeli = $this->input->post('hargabeli');
		$kadaluarsa = $this->input->post('kadaluarsa');
		$id_suplier = $this->input->post('id_suplier');
		$tanggalbeli = $this->input->post('tanggalbeli');
		$id_satuanobat = $this->input->post('id_satuanobat');
		$id_jenisobat = $this->input->post('id_jenisobat');
		//
		
		$stok = $jumlahbeli * $jumlahpersatuan;
		$hargaasli = $hargabeli / $stok; 
		$hargauntung = $hargaasli * $this->pendapatan_obat / 100;
		
		$hargaobat = $hargaasli + $hargauntung;
		

		//dataobat
		$dataobat = array ('namaobat' => $namaobat,
					   'id_satuanobat' => $id_satuanobat,
					   'id_jenisobat' => $id_jenisobat,
					   'id_suplier' => $id_jenisobat,
					   'hargaobat' => $hargaobat,
					   'kadaluarsa' => $kadaluarsa,
					   'stok' => $stok);
		$ekzobat = $this->master->simpan_obat($dataobat, $id_obat);

		//
		
		$data = array ('namaobat' => $namaobat,
						'id_obat' => $id_obat,
						'jumlahbeli' => $jumlahbeli,
						'id_jenisobat' => $id_jenisobat,
					   'satuan' => $satuan,
					   'jumlahpersatuan' => $jumlahpersatuan,
					   'hargabeli' => $hargabeli,
					   'kadaluarsa' => $kadaluarsa,
					   'id_suplier' => $id_suplier,
					   'id_satuanobat' => $id_satuanobat,
					   'tanggalbeli' => $tanggalbeli);
		$ekz = $this->master->simpan_bobat($data, $id_beliobat);
		if($ekz){
			echo "
			<link href='".base_url()."/assets/sweetalert/sweetalert.css' rel='stylesheet' />
			<script src='".base_url()."/assets/bsb/plugins/jquery/jquery.min.js'></script>
			<script src='".base_url()."/assets/sweetalert/sweetalert.min.js'></script>
			 <script type='text/javascript'>
			  setTimeout(function () {  
			   swal({
				title: 'Berhasil Menyimpan',
				text: ' Obat ".$namaobat." Berhasil Ditambahkan',
				type: 'success',
				timer: 4000,
				showConfirmButton: false
			   });  
			  },10); 
			  window.setTimeout(function(){ 
			  window.location.href='".base_url('/admin/bobat/')."';	
			  } ,2100); 
			 </script>"; 
			//echo "<script>alert('Berhasil Menambah Data Obat.');window.location.href='".base_url('/admin/mobat')."' </script>";
		}
	}
	public function hapus_bobat($id_beliobat, $id_obat){
		if($id_beliobat == ""){
			echo "<script>window.location.href='".base_url('/admin/bobat')."' </script>";
		}
		$this->master->hapus_bobat($id_beliobat);
		$this->master->hapus_obat($id_obat);
		echo "
			<link href='".base_url()."/assets/sweetalert/sweetalert.css' rel='stylesheet' />
			<script src='".base_url()."/assets/bsb/plugins/jquery/jquery.min.js'></script>
			<script src='".base_url()."/assets/sweetalert/sweetalert.min.js'></script>
			 <script type='text/javascript'>
			  setTimeout(function () {  
			   swal({
				title: 'Berhasil Menghapus',
				text: 'Obat Berhasil Dihapus',
				type: 'success',
				timer: 4000,
				showConfirmButton: false
			   });  
			  },10); 
			  window.setTimeout(function(){ 
			  window.location.href='".base_url('/admin/bobat/')."';	
			  } ,2100); 
			 </script>"; 
		
		//redirect(base_url("/admin/mobat"));
	}
	public function post_cari_bobat(){
		$cariz = $this->input->post('namaobat');
		$carixx = urldecode($cariz); //menghilangkan %20 atau spasi
		$sesiobat['caribobat'] = $carixx;
		$this->session->set_userdata($sesiobat);
		redirect(base_url("admin/cari_bobat"));
	}
	public function cari_bobat()
	{
		$cari = $this->session->userdata('caribobat');
		if($cari == ""){
			echo "<script>window.location.href='".base_url('/admin/bobat')."' </script>";
		}
		$data['namaklinik'] = $this->namaklinik;
		$data['alamatklinik'] = $this->alamatklinik;
		$data['nohpklinik'] = $this->nohpklinik; 
		$data['judul'] = "Cari Ruangan - ".$this->namaklinik."";
		$data['nama'] = $this->session->userdata('nama'); 
		$data['username'] = $this->session->userdata('username'); 
		$this->load->view('/admin/header', $data);
		$jumlahdata = $this->master->page_cari_bobat($cari);
		$this->load->library('pagination');
		$config['base_url'] = base_url("admin/cari_bobat/");
		$config['total_rows'] = $jumlahdata;
		$config['per_page'] = 10;
		$from = $this->uri->segment(3);
		// $config['page_query_string'] = TRUE;
		//$config['use_page_numbers'] = TRUE;
		$config['query_string_segment'] = 'page';
		$config['full_tag_open'] = '<div ><ul class="pagination">';
		$config['full_tag_close'] = '</ul></div><!--pagination-->';
		$config['first_link'] = '&laquo; First';
		$config['first_tag_open'] = '<li class="prev page">';
		$config['first_tag_close'] = '</li>';
		$config['last_link'] = 'Last &raquo;';
		$config['last_tag_open'] = '<li class="next page">';
		$config['last_tag_close'] = '</li>';
		$config['next_link'] = 'Next &rarr;';
		$config['next_tag_open'] = '<li class="next page">';
		$config['next_tag_close'] = '</li>';
		$config['prev_link'] = '&larr; Previous';
		$config['prev_tag_open'] = '<li class="prev page">';
		$config['prev_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li class="page">';
		$config['num_tag_close'] = '</li>';
		$config['anchor_class'] = 'follow_link';
		$this->pagination->initialize($config);	
		$data['bobat'] = $this->master->data_cari_bobat($config['per_page'],$from, $cari);
		$data['jd'] = $jumlahdata;
		if($from < 1){
			$data['nomor'] = 1;
		}
		if($from > 1){
			$data['nomor'] = $from+1;
		}
		$this->load->view('/admin/bobat', $data);
		$this->load->view('/admin/footer');
	}
	public function sms()
	{
		$data['namaklinik'] = $this->namaklinik;
		$data['alamatklinik'] = $this->alamatklinik;
		$data['nohpklinik'] = $this->nohpklinik; 
		$data['judul'] = "SMS Gratis - ".$this->namaklinik."";
		$data['nama'] = $this->session->userdata('nama'); 
		$data['username'] = $this->session->userdata('username'); 
		$this->load->view('/admin/header', $data);
		$jumlahdata = $this->master->page_sms();
		$this->load->library('pagination');
		$config['base_url'] = base_url("admin/sms/");
		$config['total_rows'] = $jumlahdata;
		$config['per_page'] = 10;
		$from = $this->uri->segment(3);
		// $config['page_query_string'] = TRUE;
		//$config['use_page_numbers'] = TRUE;
		$config['query_string_segment'] = 'page';
		$config['full_tag_open'] = '<div ><ul class="pagination">';
		$config['full_tag_close'] = '</ul></div><!--pagination-->';
		$config['first_link'] = '&laquo; First';
		$config['first_tag_open'] = '<li class="prev page">';
		$config['first_tag_close'] = '</li>';
		$config['last_link'] = 'Last &raquo;';
		$config['last_tag_open'] = '<li class="next page">';
		$config['last_tag_close'] = '</li>';
		$config['next_link'] = 'Next &rarr;';
		$config['next_tag_open'] = '<li class="next page">';
		$config['next_tag_close'] = '</li>';
		$config['prev_link'] = '&larr; Previous';
		$config['prev_tag_open'] = '<li class="prev page">';
		$config['prev_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li class="page">';
		$config['num_tag_close'] = '</li>';
		$config['anchor_class'] = 'follow_link';
		$this->pagination->initialize($config);	
		$data['bobat'] = $this->master->data_sms($config['per_page'],$from);
		$data['jd'] = $jumlahdata;
		if($from < 1){
			$data['nomor'] = 1;
		}
		if($from > 1){
			$data['nomor'] = $from+1;
		}
		$this->load->view('/admin/sms',$data);
		$this->load->view('/admin/footer');
	}
	public function sms_baru()
	{
		$data['namaklinik'] = $this->namaklinik;
		$data['alamatklinik'] = $this->alamatklinik;
		$data['nohpklinik'] = $this->nohpklinik; 
		$data['judul'] = "SMS Baru - ".$this->namaklinik."";
		$data['nama'] = $this->session->userdata('nama'); 
		$data['username'] = $this->session->userdata('username'); 
		$this->load->view('/admin/header', $data);
		$jumlahdata = $this->master->page_sms();
		$data['jd'] = $jumlahdata;
		$data['pasien'] = $this->master->smspasien();
		$this->load->view('/admin/sms_baru',$data);
		$this->load->view('/admin/footer');
	}
	public function kirim_sms()
	{
	    $ekz= "";
	    $tanggal = date('20y-m-d');
	    function kode_acak($n = 10) {
     	$aKod = NULL;
     	$kode = "0123456789"; //jumlah kode = 63
  
  		for ($i=0; $i<$n; $i++) {
     		$acakAngka = rand(1, strlen($kode));
     		$aKod .= substr($kode, $acakAngka, 1);
  			}
  			return $aKod;
  		}
		$kode = kode_acak($n = 10);
	    $id_pasien = $this->input->post('idpasien');
	    $isi = $this->input->post('isi');
	    $jumlah = sizeof($id_pasien);
		for( $i = 0; $i < $jumlah; $i++){ 
		$datapasien = $this->master->lihat_pasien($id_pasien[$i]);
		foreach($datapasien as $dp){
		   
		         $data[$i] = array('kode' => $kode,
						           'nohp' => $dp->nohp,
						           'nama' => $dp->namapasien,
						           'isi' => $isi,
						           'tanggal' => $tanggal);
		$ekz  = $this->master->kirim_sms($data[$i]);
	    $namaklinik = $this->namaklinik;
		//sms gateway
     	$nohp = $dp->nohp;
     	$message = " ".$isi." - ".$namaklinik."";
     	$userkey="rekberindo"; // userkey 
		$passkey="bagiankiri767"; // set passkey 

		$url = "http://www.freesms4us.com/kirimsms.php";
		$curlHandle = curl_init();
		curl_setopt($curlHandle, CURLOPT_URL, $url);
		curl_setopt($curlHandle, CURLOPT_POSTFIELDS, 'user='.$userkey.'&pass='.$passkey.'&no='.$nohp.'&isi='.urlencode($message));
		curl_setopt($curlHandle, CURLOPT_HEADER, 0);
		curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curlHandle, CURLOPT_TIMEOUT,30);
		curl_setopt($curlHandle, CURLOPT_POST, 1);
		$results = curl_exec($curlHandle);
		curl_close($curlHandle);
        //
		}
	    }
	    	if($ekz){
			echo "
			<link href='".base_url()."/assets/sweetalert/sweetalert.css' rel='stylesheet' />
			<script src='".base_url()."/assets/bsb/plugins/jquery/jquery.min.js'></script>
			<script src='".base_url()."/assets/sweetalert/sweetalert.min.js'></script>
			 <script type='text/javascript'>
			  setTimeout(function () {  
			   swal({
				title: 'SMS Berhasi Dikirim',
				text: ' Berhasil mengirim sms ke pasien',
				type: 'success',
				timer: 4000,
				showConfirmButton: false
			   });  
			  },10); 
			  window.setTimeout(function(){ 
			  window.location.href='".base_url('/admin/lihat_sms/'.$kode.'')."';	
			  } ,2100); 
			 </script>"; 
			//echo "<script>alert('Berhasil Menambah Data Obat.');window.location.href='".base_url('/admin/mobat')."' </script>";
		}
		else{
			echo "
			<link href='".base_url()."/assets/sweetalert/sweetalert.css' rel='stylesheet' />
			<script src='".base_url()."/assets/bsb/plugins/jquery/jquery.min.js'></script>
			<script src='".base_url()."/assets/sweetalert/sweetalert.min.js'></script>
			 <script type='text/javascript'>
			  setTimeout(function () {  
			   swal({
				title: 'SMS Gagal Dikirim',
				text: 'Gagal Mengirim SMS',
				type: 'error',
				timer: 4000,
				showConfirmButton: false
			   });  
			  },10); 
			  window.setTimeout(function(){ 
			  window.location.href='".base_url('/admin/lihat_sms/$kode')."';	
			  } ,2100); 
			 </script>"; 
			//echo "<script>alert('Gagal Menambah Data Obat.');window.location.href='".base_url('/admin/mobat')."' </script>";
		}
	}
	public function lihat_sms($kode)
	{
		$data['namaklinik'] = $this->namaklinik;
		$data['alamatklinik'] = $this->alamatklinik;
		$data['nohpklinik'] = $this->nohpklinik; 
		$data['judul'] = "Lihat SMS - ".$this->namaklinik."";
		$data['nama'] = $this->session->userdata('nama'); 
		$data['username'] = $this->session->userdata('username'); 
		$this->load->view('/admin/header', $data);
		$jumlahdata = $this->master->page_sms();
		$data['jd'] = $jumlahdata;
		$data['sms1'] = $this->master->lihat_sms1($kode);
		$data['sms2'] = $this->master->lihat_sms2($kode);
		$this->load->view('/admin/lihat_sms',$data);
		$this->load->view('/admin/footer');
	}
	public function teruskan_sms($kode)
	{
		$data['namaklinik'] = $this->namaklinik;
		$data['alamatklinik'] = $this->alamatklinik;
		$data['nohpklinik'] = $this->nohpklinik; 
		$data['judul'] = "Teruskan SMS - ".$this->namaklinik."";
		$data['nama'] = $this->session->userdata('nama'); 
		$data['username'] = $this->session->userdata('username'); 
		$this->load->view('/admin/header', $data);
		$jumlahdata = $this->master->page_sms();
		$data['jd'] = $jumlahdata;
		$data['sms1'] = $this->master->lihat_sms1($kode);
		$data['sms2'] = $this->master->lihat_sms2($kode);
		$data['pasien'] = $this->master->smspasien();
		$this->load->view('/admin/teruskan_sms',$data);
		$this->load->view('/admin/footer');
	}
	//alergi
	public function ubah_alergi($id_pasien)
	{
		$data['namaklinik'] = $this->namaklinik;
		$data['alamatklinik'] = $this->alamatklinik;
		$data['nohpklinik'] = $this->nohpklinik; 
		$data['judul'] = "Ubah Alergi - ".$this->namaklinik."";
		$data['nama'] = $this->session->userdata('nama'); 
		$data['username'] = $this->session->userdata('username'); 
		$this->load->view('/admin/header', $data);
		$data['alergi'] = $this->master->lihat_alergi($id_pasien); 
		$this->load->view('/admin/ubah_alergi',$data);
		$this->load->view('/admin/footer');
	}
	public function simpan_alergi($id_pasien){
		
		$alergi = $this->input->post('alergi');
		$statusalergi = $this->input->post('statusalergi');
		$dataalergi = array('alergi' => $alergi,
							'statusalergi' => $statusalergi);
		$this->master->simpan_alergi($dataalergi, $id_pasien);
		echo  "<script type='text/javascript'>";
		echo "window.close();";
        echo "</script>";
	
	}
	public function uploadobat(){
		$file= $this->input->post('file');
        $fileName = time().$_FILES['file']['name'];
         
        $config['upload_path'] =  FCPATH.'/assets/masterobat/'; //buat folder dengan nama assets di root folder
        $config['file_name'] = $fileName;
        $config['allowed_types'] = 'xls|xlsx|csv';
        $config['max_size'] = 10000;
         
        $this->load->library('upload');
        $this->upload->initialize($config);
         
        if(! $this->upload->do_upload('file') )
        $this->upload->display_errors();
             
        $media = $this->upload->data('file');
        $inputFileName = FCPATH.'assets/masterobat/'.$fileName;
         
        try {
                $inputFileType = IOFactory::identify($inputFileName);
                $objReader = IOFactory::createReader($inputFileType);
                $objPHPExcel = $objReader->load($inputFileName);
            } catch(Exception $e) {
                die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
            }
 
            $sheet = $objPHPExcel->getSheet(0);
            $highestRow = $sheet->getHighestRow();
            $highestColumn = $sheet->getHighestColumn();
             
            for ($row = 2; $row <= $highestRow; $row++){                  //  Read a row of data into an array                 
                $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row,
                                                NULL,
                                                TRUE,
                                                FALSE);
                                                 
                //Sesuaikan sama nama kolom tabel di database                                
                 $data = array(
                    "namaobat"=> $rowData[0][0],
                    "hargaobat"=> $rowData[0][1],
                    "satuanobat"=> $rowData[0][2],
                    "kadaluarsa"=> $rowData[0][3],
                    "stok"=> $rowData[0][4]
                );
                 
                //sesuaikan nama dengan nama tabel
                $insert = $this->db->insert("tbl_obat",$data);
                delete_files($media['file_path']);
                     
            }
			$totalobat = $highestRow-1;
		echo "
			<link href='".base_url()."/assets/sweetalert/sweetalert.css' rel='stylesheet' />
			<script src='".base_url()."/assets/bsb/plugins/jquery/jquery.min.js'></script>
			<script src='".base_url()."/assets/sweetalert/sweetalert.min.js'></script>
			 <script type='text/javascript'>
			  setTimeout(function () {  
			   swal({
				title: 'Import Data Obat Berhasil',
				text: ' Berhasil menambahkan ".$totalobat." ke master obat.',
				type: 'success',
				timer: 4000,
				showConfirmButton: false
			   });  
			  },10); 
			  window.setTimeout(function(){ 
			  window.location.href='".base_url('/admin/mobat')."';	
			  } ,2100); 
			 </script>"; 
    }
	public function exportpasien(){
       // $ambildata = $this->master->exportpasien();
		
		$data['nama'] = $this->session->userdata('nama');
		$data['namaklinik'] = $this->namaklinik;
		$data['alamatklinik'] = $this->alamatklinik;
		$data['nohpklinik'] = $this->nohpklinik; 
		$data['selisih'] = 0; 
		$data['v'] = $this->master->exportpasien();
		$this->load->view('/admin/print_pasien', $data);
	}
}