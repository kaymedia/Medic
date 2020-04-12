<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Model{
	function __construct(){
		parent::__construct();
		date_default_timezone_set("Asia/Jakarta");// set timezone jekardah	
	}
	public function cekmasuk($data) {
		$perintahmasuk = $this->db->get_where('tbl_user', $data);
		return $perintahmasuk;
	}
	public function dataakunadmin($username) {
		$query =$this->db->query("SELECT * FROM `tbl_user` where username = '$username'");
        return $query->result();
	}
	//GLOBAL FUNCTIONS
	public function lihat_data($tabel, $kolom, $id_nya){
		$this->db->select('*');
		$this->db->from($tabel);
		$this->db->where($kolom, $id_nya);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}
	public function simpan_data($tabel,$kolom, $id_nya, $data)
	{
		$this->db->where($kolom, $id_nya);
		$this->db->update($tabel, $data);
		return true;
	}
	public function hapus_data($tabel, $kolom, $id_nya){
		$this->db->where($kolom, $id_nya);
		$this->db->delete($tabel);
	}
	public function tambah_data($namatabel, $data)
	{
		$jalan = $this->db->insert($namatabel, $data);
		return $jalan;
	}
	//
	//PENGATURAN SITUS
	public function situs() {
		$query =$this->db->query("SELECT * FROM `tbl_situs`");
        return $query->result();
	}
	public function simpan_setting($data){
		$this->db->update('tbl_situs', $data);
		return true;
			
	}
	////////////////////////////////////////////////////////
	//USER
	public function user() {
		$query =$this->db->query("SELECT * FROM `tbl_user`");
        return $query->result();
	}
	public function page_user(){
        $query =$this->db->query("SELECT * FROM `tbl_user`");
        return $query->num_rows();
	}
	public function data_user($dari, $sampai){
		//return $query = $this->db->get('pembayaran',$dari,$sampai)->result();
		if($this->uri->segment(3)==null){
			$sampai = 0;
		}
		else{
			$sampai = $from = $this->uri->segment(3);
		}
        $query =$this->db->query("SELECT * FROM `tbl_user` order by id_user DESC LIMIT $sampai, $dari ");
        return $query->result();	
	}
	public function tambah_user($data){
		$eksekusi = $this->db->insert('tbl_user', $data);
		return $eksekusi;
	}
	public function edit_user($id_user) {
		$query =$this->db->query("SELECT * FROM `tbl_user` where id_user ='$id_user'");
        return $query->result();
	}
	public function simpan_user($data, $id_user){
		$this->db->where('id_user', $id_user);
		$this->db->update('tbl_user', $data);
		return true;
			
	}
	public function hapus_user($id_user){
        $query =$this->db->query("DELETE FROM `tbl_user` where id_user = ".$this->db->escape($id_user));
        return $query;
	}
	///////////////////////////////////////////////////////
	//PENDAFTARAN PASIEN
	public function pendaftaran($data){
		$eksekusi = $this->db->insert('tbl_pasien', $data);
		return $eksekusi;
	}
	public function simpan_nokartu($data, $id_pasien){
		$this->db->where('id_pasien', $id_pasien);
		$this->db->update('tbl_pasien', $data);
		return true;
			
	}
	///////////////////////////////////////////////////////
	//RUANGAN
	public function tambah_ruangan($data){
		$eksekusi = $this->db->insert('tbl_ruangan', $data);
		return $eksekusi;
	}
	public function page_ruangan(){
        $query =$this->db->query("SELECT * FROM `tbl_ruangan`");
        return $query->num_rows();
	}
	public function data_ruangan($dari, $sampai){
		//return $query = $this->db->get('pembayaran',$dari,$sampai)->result();
		if($this->uri->segment(3)==null){
			$sampai = 0;
		}
		else{
			$sampai = $from = $this->uri->segment(3);
		}
        $query =$this->db->query("SELECT * FROM `tbl_ruangan` order by id_ruangan DESC LIMIT $sampai, $dari ");
        return $query->result();	
	}
	public function edit_ruangan($id_ruangan) {
		$query =$this->db->query("SELECT * FROM `tbl_ruangan` where id_ruangan ='$id_ruangan'");
        return $query->result();
	}
	public function simpan_ruangan($data, $id_ruangan){
		$this->db->where('id_ruangan', $id_ruangan);
		$this->db->update('tbl_ruangan', $data);
		return true;
			
	}
	public function hapus_ruangan($id_ruangan){
        $query =$this->db->query("DELETE FROM `tbl_ruangan` where id_ruangan = ".$this->db->escape($id_ruangan));
        return $query;
	}
	public function page_cari_ruangan($cari){
        $query =$this->db->query("SELECT * FROM `tbl_ruangan` where namaruangan like '%$cari%'");
        return $query->num_rows();
	}
	public function data_cari_ruangan($dari, $sampai, $cari){
		//return $query = $this->db->get('pembayaran',$dari,$sampai)->result();
		if($this->uri->segment(3)==null){
			$sampai = 0;
		}
		else{
			$sampai = $from = $this->uri->segment(3);
		}
        $query =$this->db->query("SELECT * FROM `tbl_ruangan` where namaruangan like '%$cari%' order by id_ruangan DESC LIMIT $sampai, $dari ");
        return $query->result();	
	}
	//////////////////////////////////////////////////MASTER BELI OBAT
	public function tambah_bobat($data){
		$eksekusi = $this->db->insert('tbl_beliobat', $data);
		return $eksekusi;
	}
	public function page_bobat(){
        $query =$this->db->query("SELECT * FROM `tbl_beliobat`");
        return $query->num_rows();
	}
	public function data_bobat($dari, $sampai){
		//return $query = $this->db->get('pembayaran',$dari,$sampai)->result();
		if($this->uri->segment(3)==null){
			$sampai = 0;
		}
		else{
			$sampai = $from = $this->uri->segment(3);
		}
        $query =$this->db->query("SELECT * FROM `tbl_beliobat`, tbl_satuanobat, tbl_jenisobat, tbl_suplier where tbl_beliobat.id_jenisobat = tbl_jenisobat.id_jenisobat and tbl_beliobat.id_satuanobat = tbl_satuanobat.id_satuanobat and tbl_beliobat.id_suplier = tbl_suplier.id_suplier order by id_beliobat DESC LIMIT $sampai, $dari ");
        return $query->result();	
	}
	public function edit_bobat($id_beliobat) {
		$query =$this->db->query("SELECT * FROM `tbl_beliobat` where id_beliobat ='$id_beliobat'");
        return $query->result();
	}
	public function simpan_bobat($data, $id_beliobat){
		$this->db->where('id_beliobat', $id_beliobat);
		$this->db->update('tbl_beliobat', $data);
		return true;
			
	}
	public function hapus_bobat($id_beliobat){
        $query =$this->db->query("DELETE FROM `tbl_beliobat` where id_beliobat = ".$this->db->escape($id_beliobat));
        return $query;
	}
	public function page_cari_bobat($cari){
        $query =$this->db->query("SELECT * FROM `tbl_beliobat` where namaobat like '%$cari%'");
        return $query->num_rows();
	}
	public function data_cari_bobat($dari, $sampai, $cari){
		//return $query = $this->db->get('pembayaran',$dari,$sampai)->result();
		if($this->uri->segment(3)==null){
			$sampai = 0;
		}
		else{
			$sampai = $from = $this->uri->segment(3);
		}
        $query =$this->db->query("SELECT * FROM `tbl_beliobat` where namaobat like '%$cari%' order by id_beliobat DESC LIMIT $sampai, $dari ");
        return $query->result();	
	}
	///////////////////////////////////////////////////////
	//MASTER OBAT
	public function tambah_obat($data){
		$eksekusi = $this->db->insert('tbl_obat', $data);
		return $eksekusi;
	}
	public function page_obat(){
        $query =$this->db->query("SELECT * FROM `tbl_obat`");
        return $query->num_rows();
	}
	public function data_obat($dari, $sampai){
		//return $query = $this->db->get('pembayaran',$dari,$sampai)->result();
		if($this->uri->segment(3)==null){
			$sampai = 0;
		}
		else{
			$sampai = $from = $this->uri->segment(3);
		}
        $query =$this->db->query("SELECT * FROM `tbl_obat` order by id_obat DESC LIMIT $sampai, $dari ");
        return $query->result();	
	}
	public function edit_obat($id_obat) {
		$query =$this->db->query("SELECT * FROM `tbl_obat` where id_obat ='$id_obat'");
        return $query->result();
	}
	public function simpan_obat($data, $id_obat){
		$this->db->where('id_obat', $id_obat);
		$this->db->update('tbl_obat', $data);
		return true;
			
	}
	public function hapus_obat($id_obat){
        $query =$this->db->query("DELETE FROM `tbl_obat` where id_obat = ".$this->db->escape($id_obat));
        return $query;
	}
	public function page_cari_obat($cari){
        $query =$this->db->query("SELECT * FROM `tbl_obat` where namaobat like '%$cari%'");
        return $query->num_rows();
	}
	public function data_cari_obat($dari, $sampai, $cari){
		//return $query = $this->db->get('pembayaran',$dari,$sampai)->result();
		if($this->uri->segment(3)==null){
			$sampai = 0;
		}
		else{
			$sampai = $from = $this->uri->segment(3);
		}
        $query =$this->db->query("SELECT * FROM `tbl_obat` where namaobat like '%$cari%' order by id_obat DESC LIMIT $sampai, $dari ");
        return $query->result();	
	}
	
	/////////////////////////////////////////////////////
	
	
	//JADWAL
	public function page_mjadwal(){
        $query =$this->db->query("SELECT tbl_pasien.id_pasien, tbl_pasien.namapasien, tbl_pasien.alamat, tbl_jadwal.tanggal, tbl_jadwal.id_jadwal from tbl_pasien, tbl_jadwal where tbl_jadwal.id_pasien = tbl_pasien.id_pasien");
        return $query->num_rows();
	}
	public function data_mjadwal($dari, $sampai){
		//return $query = $this->db->get('pembayaran',$dari,$sampai)->result();
		if($this->uri->segment(3)==null){
			$sampai = 0;
		}
		else{
			$sampai = $from = $this->uri->segment(3);
		}
        $query =$this->db->query("SELECT tbl_pasien.id_pasien,  tbl_pasien.nomorkartu, tbl_pasien.namapasien, tbl_pasien.alamat, tbl_jadwal.tanggal, tbl_jadwal.status, tbl_jadwal.id_jadwal from tbl_pasien, tbl_jadwal where tbl_jadwal.id_pasien = tbl_pasien.id_pasien LIMIT $sampai, $dari ");
        return $query->result();	
	}
	public function page_cari_jadwal($cari){
        $query =$this->db->query("SELECT * FROM `tbl_pasien` where namapasien like '%$cari%' or id_pasien like '%$cari%'");
        return $query->num_rows();
	}
	public function data_cari_jadwal($dari, $sampai, $cari){
		//return $query = $this->db->get('pembayaran',$dari,$sampai)->result();
		if($this->uri->segment(3)==null){
			$sampai = 0;
		}
		else{
			$sampai = $from = $this->uri->segment(3);
		}
        $query =$this->db->query("SELECT * FROM `tbl_pasien` where namapasien like '%$cari%' or id_pasien like '%$cari%' LIMIT $sampai, $dari ");
        return $query->result();	
	}
	public function view_pasien_jadwal($id_pasien){
        $query =$this->db->query("SELECT * FROM `tbl_pasien` where id_pasien = '$id_pasien'");
        return $query->result();
	}
	public function view_pasien_jadwal2($id_jadwal){
        $query =$this->db->query("SELECT * FROM `tbl_jadwal` where id_jadwal = '$id_jadwal'");
        return $query->result();
	}
	public function tambah_jadwaL($data){
		$eksekusi = $this->db->insert('tbl_jadwal', $data);
		return $eksekusi;
	}
	public function simpan_jadwal($data, $id_jadwal){
		$this->db->where('id_jadwal', $id_jadwal);
		$this->db->update('tbl_jadwal', $data);
		return true;
			
	}
	///////////////////////////////////////////////////
	//PEMERIKSAAAN
	public function obat_periksa(){
        $query =$this->db->query("SELECT * FROM `tbl_obat` where stok >= 10");
        return $query->result();
	}
	public function tampil_periksa1($kode){
        $query =$this->db->query("SELECT tbl_pemeriksaan.diagnosa, tbl_pemeriksaan.keluhan, tbl_pemeriksaan.tanggal,tbl_pemeriksaan.tindakan, tbl_pemeriksaan.biaya, tbl_pemeriksaan.dosis, tbl_pemeriksaan.tinggi, tbl_pemeriksaan.berat, tbl_pemeriksaan.tekanandarah, tbl_pemeriksaan.suhu, tbl_pemeriksaan.kode, tbl_pemeriksaan.id_pemeriksaan FROM `tbl_pemeriksaan` where kode = '$kode' ");
        return $query->result();
	}
	public function tampil_periksa2($kode){
        $query =$this->db->query("SELECT tbl_pemeriksaan.diagnosa, tbl_pemeriksaan.keadaanumum, tbl_pemeriksaan.kesadaran, tbl_pemeriksaan.kepala, tbl_pemeriksaan.textkepala, `mata`, `textmata`, `hidung`, `texthidung`, `gigimulut`, `textgigimulut`, `tenggorokan`, `texttenggorokan`, `telinga`, `texttelinga`, `leher`, `textleher`, `thoraks`, `textthoraks`, `jantung`, `textjantung`, `paru`, `textparu`, `abdomen`, `textabdomen`, `genetalia`, `textgenetalia`, `extrimitas`, `textextrimitas`, `kulit`, `textkulit`, `jumlahobat`, tbl_pemeriksaan.tanggal, tbl_pemeriksaan.tindakan, tbl_pemeriksaan.biaya, tbl_pemeriksaan.dosis, tbl_pemeriksaan.tinggi, tbl_pemeriksaan.berat, tbl_pemeriksaan.tekanandarah, tbl_pemeriksaan.suhu, tbl_pemeriksaan.kode, tbl_pemeriksaan.id_pemeriksaan, tbl_obat.namaobat FROM `tbl_pemeriksaan`, tbl_obat where kode = '$kode' and tbl_pemeriksaan.id_obat = tbl_obat.id_obat limit 0,1");
        return $query->result();
	}
	public function tampil_periksa3($kode){
        $query =$this->db->query("SELECT tbl_pemeriksaan.diagnosa, tbl_pemeriksaan.jumlahobat, tbl_pemeriksaan.keterangan, tbl_pemeriksaan.tanggal,tbl_pemeriksaan.tindakan, tbl_pemeriksaan.biaya, tbl_pemeriksaan.dosis, tbl_pemeriksaan.tinggi, tbl_pemeriksaan.berat, tbl_pemeriksaan.tekanandarah, tbl_pemeriksaan.suhu, tbl_pemeriksaan.kode, tbl_pemeriksaan.id_pemeriksaan, tbl_obat.namaobat, tbl_obat.hargaobat, tbl_obat.satuanobat FROM `tbl_pemeriksaan`, tbl_obat where kode = '$kode' and tbl_pemeriksaan.id_obat = tbl_obat.id_obat");
        return $query->result();
	}
	public function simpan_periksa($data){
		$eksekusi = $this->db->insert('tbl_pemeriksaan', $data);
		return $eksekusi;
	}
	public function pilih_ruangan(){
        $query =$this->db->query("SELECT * FROM `tbl_ruangan`");
        return $query->result();
	}
	public function simpan_pilih_ruangan($data, $kode){
		$this->db->where('kode', $kode);
		$this->db->update('tbl_pemeriksaan', $data);
		return true;
			
	}
	//////////////////////////////////////////////////
	//PASIEN
	public function page_mpasien(){
        $query =$this->db->query("SELECT * FROM tbl_pasien");
        return $query->num_rows();
	}
	public function data_mpasien($dari, $sampai){
		//return $query = $this->db->get('pembayaran',$dari,$sampai)->result();
		if($this->uri->segment(3)==null){
			$sampai = 0;
		}
		else{
			$sampai = $from = $this->uri->segment(3);
		}
        $query =$this->db->query("SELECT * FROM tbl_pasien LIMIT $sampai, $dari ");
        return $query->result();	
	}
	public function lihat_pasien($id_pasien){
        $query =$this->db->query("SELECT * FROM `tbl_pasien` where id_pasien = '$id_pasien'");
        return $query->result();
	}
	public function simpan_pasien($data, $id_pasien){
		$this->db->where('id_pasien', $id_pasien);
		$this->db->update('tbl_pasien', $data);
		return true;
			
	}
	public function hapus_pasien($id_pasien){
        $query =$this->db->query("DELETE FROM `tbl_pasien` where id_pasien = ".$this->db->escape($id_pasien));
        return $query;
	}
	public function rekam_medis($id_pasien){
        $query =$this->db->query("SELECT distinct(kode) , diagnosa, tindakan, biaya, tanggal FROM `tbl_pemeriksaan` where id_pasien = '$id_pasien' ");
        return $query->result();
	}
	public function rekam_medis1($id_pasien){
        $query =$this->db->query("SELECT tbl_pemeriksaan.diagnosa, tbl_pemeriksaan.jumlahobat, tbl_pemeriksaan.keterangan, tbl_pemeriksaan.tanggal,tbl_pemeriksaan.tindakan, tbl_pemeriksaan.biaya, tbl_pemeriksaan.dosis, tbl_pemeriksaan.tinggi, tbl_pemeriksaan.berat, tbl_pemeriksaan.tekanandarah, tbl_pemeriksaan.suhu, tbl_pemeriksaan.kode, tbl_pemeriksaan.id_pemeriksaan, tbl_obat.namaobat, tbl_obat.hargaobat, tbl_obat.satuanobat FROM `tbl_pemeriksaan`, tbl_obat where tbl_pemeriksaan.id_pasien = '$id_pasien' and tbl_pemeriksaan.id_obat = tbl_obat.id_obat");
        return $query->result();
	}
	public function page_cari_pasien($cari){
        $query =$this->db->query("SELECT * FROM `tbl_pasien` where namapasien like '%$cari%' or id_pasien like '%$cari%'");
        return $query->num_rows();
	}
	public function data_cari_pasien($dari, $sampai, $cari){
		//return $query = $this->db->get('pembayaran',$dari,$sampai)->result();
		if($this->uri->segment(3)==null){
			$sampai = 0;
		}
		else{
			$sampai = $from = $this->uri->segment(3);
		}
        $query =$this->db->query("SELECT * FROM `tbl_pasien` where namapasien like '%$cari%' or id_pasien like '%$cari%' LIMIT $sampai, $dari ");
        return $query->result();	
	}
	/////////////////////////////////////////////////
	//PASIEN RAWAT
	public function page_mpasien_rawat(){
        $query =$this->db->query("SELECT distinct(tbl_pemeriksaan.kode) , tbl_pemeriksaan.id_pasien, tbl_pasien.kelamin,tbl_pasien.nomorkartu, tbl_pasien.namapasien , tbl_pasien.alamat, tbl_pemeriksaan.status FROM tbl_pemeriksaan INNER JOIN tbl_pasien ON (tbl_pemeriksaan.id_pasien = tbl_pasien.id_pasien)");
        return $query->num_rows();
	}
	public function data_mpasien_rawat($dari, $sampai){
		//return $query = $this->db->get('pembayaran',$dari,$sampai)->result();
		if($this->uri->segment(3)==null){
			$sampai = 0;
		}
		else{
			$sampai = $from = $this->uri->segment(3);
		}
        $query =$this->db->query("SELECT distinct(tbl_pemeriksaan.kode) , tbl_pemeriksaan.id_pasien, tbl_pasien.kelamin, tbl_pasien.namaortu, tbl_pasien.nomorkartu, tbl_pasien.namapasien , tbl_pasien.alamat, tbl_pemeriksaan.status FROM tbl_pemeriksaan INNER JOIN tbl_pasien ON (tbl_pemeriksaan.id_pasien = tbl_pasien.id_pasien) group by tbl_pemeriksaan.kode desc LIMIT $sampai, $dari ");
        return $query->result();	
	}
	public function page_cari_rawat($cari){
        $query =$this->db->query("SELECT distinct(tbl_pemeriksaan.kode) , tbl_pemeriksaan.id_pasien, tbl_pasien.kelamin, tbl_pasien.nomorkartu, tbl_pasien.namapasien , tbl_pasien.alamat, tbl_pemeriksaan.status FROM tbl_pemeriksaan INNER JOIN tbl_pasien ON (tbl_pemeriksaan.id_pasien = tbl_pasien.id_pasien)  and ( tbl_pasien.namapasien like '%$cari%' or tbl_pemeriksaan.id_pasien like '%$cari%') group by tbl_pemeriksaan.kode desc");
        return $query->num_rows();
	}
	public function data_cari_rawat($dari, $sampai, $cari){
		//return $query = $this->db->get('pembayaran',$dari,$sampai)->result();
		if($this->uri->segment(3)==null){
			$sampai = 0;
		}
		else{
			$sampai = $from = $this->uri->segment(3);
		}
        $query =$this->db->query("SELECT distinct(tbl_pemeriksaan.kode) , tbl_pemeriksaan.id_pasien, tbl_pasien.kelamin, tbl_pasien.nomorkartu, tbl_pasien.namaortu, tbl_pasien.namapasien , tbl_pasien.alamat, tbl_pemeriksaan.status FROM tbl_pemeriksaan INNER JOIN tbl_pasien ON (tbl_pemeriksaan.id_pasien = tbl_pasien.id_pasien)  and ( tbl_pasien.namapasien like '%$cari%' or tbl_pemeriksaan.id_pasien like '%$cari%') group by tbl_pemeriksaan.kode desc LIMIT $sampai, $dari ");
        return $query->result();	
	}
	
	////////////////////////////////////////////////

	//LAPORAN
	public function hitungpendapatan($tanggal){
        $query =$this->db->query("select sum(tbl_pemeriksaan.biaya+(tbl_pemeriksaan.jumlahobat*tbl_obat.hargaobat)) as hitung from tbl_pemeriksaan, tbl_obat where tbl_pemeriksaan.id_obat = tbl_obat.id_obat and tbl_pemeriksaan.tanggal= '$tanggal' order by kode");
		return $query->result();
	}
	public function hitungpendapatanx($tanggal){
        $query =$this->db->query("select sum(jumlah) as hitung from tbl_pemasukan where tanggal = '$tanggal' order by kode");
		return $query->result();
	}
	public function hitungpasien($tanggal){
        $query =$this->db->query("select count(id_pasien) as hitung from tbl_pasien where tanggal = '$tanggal'");
		return $query->result();
	}
	public function sumpasien($tanggalmulai, $tanggalsampai){
        $query =$this->db->query("select count(id_pasien) as hitung from tbl_pasien where tanggal >= '$tanggalmulai' and tanggal <= '$tanggalsampai'");
		return $query->result();
	}
	public function print_pendapatan($tanggalmulai, $tanggalsampai){
        $query =$this->db->query("SELECT tbl_pemeriksaan.kode, tbl_pemeriksaan.tanggal, tbl_pemeriksaan.biaya, tbl_pemeriksaan.id_pemeriksaan, tbl_pasien.namapasien, tbl_pasien.id_pasien, tbl_pasien.alamat, tbl_pasien.nohp FROM `tbl_pemeriksaan`, tbl_pasien where tbl_pemeriksaan.tanggal >= '$tanggalmulai' and tbl_pemeriksaan.tanggal <= '$tanggalsampai' and tbl_pemeriksaan.id_pasien = tbl_pasien.id_pasien group by kode");
        return $query->result();
	}
	///////
	public function lengkaptahun($lengkaptahun, $lengkaptahunx){
        $query =$this->db->query("select sum(tbl_pemeriksaan.biaya+(tbl_pemeriksaan.jumlahobat*tbl_obat.hargaobat)) as hitung from tbl_pemeriksaan, tbl_obat where tbl_pemeriksaan.id_obat = tbl_obat.id_obat and tbl_pemeriksaan.tanggal >= '$lengkaptahun' and tbl_pemeriksaan.tanggal <= '$lengkaptahunx' order by kode");
		return $query->result();
	}
	public function lengkaptahunx($lengkaptahun, $lengkaptahunx){
        $query =$this->db->query("select sum(jumlah) as hitung from tbl_pemasukan where tanggal >= '$lengkaptahun' and tanggal <= '$lengkaptahunx' order by kode");
		return $query->result();
	}
	public function lengkapsemua(){
        $query =$this->db->query("select sum(tbl_pemeriksaan.biaya+(tbl_pemeriksaan.jumlahobat*tbl_obat.hargaobat)) as hitung from tbl_pemeriksaan, tbl_obat where tbl_pemeriksaan.id_obat = tbl_obat.id_obat order by kode");
		return $query->result();
	}
	public function lengkapsemuax(){
        $query =$this->db->query("select sum(jumlah) as hitung from tbl_pemasukan order by kode");
		return $query->result();
	}
	///////////////////////////////////////////////
	//revisi
	public function ambildataobat($id_obat){
        $query =$this->db->query("SELECT stok FROM `tbl_obat` where id_obat = '$id_obat'");
        return $query->result();
	}
	public function lap_obat(){
        $query =$this->db->query("SELECT * FROM `tbl_obat` where stok >= '10'");
        return $query->result();
	}
	public function page_limitobat(){
        $query =$this->db->query("SELECT * FROM `tbl_obat` where stok <= '10'");
        return $query->num_rows();
	}
	public function data_limitobat($dari, $sampai){
		//return $query = $this->db->get('pembayaran',$dari,$sampai)->result();
		if($this->uri->segment(3)==null){
			$sampai = 0;
		}
		else{
			$sampai = $from = $this->uri->segment(3);
		}
        $query =$this->db->query("SELECT * FROM `tbl_obat` where stok <= '10' LIMIT $sampai, $dari ");
        return $query->result();	
	}
	public function lihat_lap_obat($tanggalmulai, $tanggalsampai){
		$query =$this->db->query("SELECT tbl_pemeriksaan.tanggal, tbl_pemeriksaan.kode, tbl_pemeriksaan.jumlahobat, tbl_pemeriksaan.dosis, tbl_obat.namaobat , tbl_obat.hargaobat, tbl_obat.kadaluarsa, tbl_pasien.namapasien, tbl_pasien.nomorkartu from tbl_pemeriksaan, tbl_obat, tbl_pasien where tbl_pemeriksaan.id_obat = tbl_obat.id_obat and tbl_pemeriksaan.id_pasien = tbl_pasien.id_pasien and tbl_pemeriksaan.tanggal >= '$tanggalmulai' and tbl_pemeriksaan.tanggal <= '$tanggalsampai' order by id_pemeriksaan desc");
        return $query->result();
	}
	public function akhir_id($id){
        $query =$this->db->query("SELECT * FROM `tbl_pemeriksaan` where id_pemeriksaan = '$id'");
        return $query->num_rows();
	}
	public function simpan_pemasukan($data){
		$eksekusi = $this->db->insert('tbl_pemasukan', $data);
		return $eksekusi;
	}
	public function lihat_pemasukan($kode){
        $query =$this->db->query("SELECT * FROM `tbl_pemasukan` where kode = '$kode'");
        return $query->result();
	}
	
	public function simpan_pemasukan2($data, $kode){
		$this->db->where('kode', $kode);
		$this->db->update('tbl_pemasukan', $data);
		return true;
			
	}
	//////////////////////////////////////////////
	// V.2.4
	public function datapasien(){
        $query =$this->db->query("SELECT * FROM `tbl_pasien`");
        return $query->result();
	}
	public function dataruangan(){
        $query =$this->db->query("SELECT * FROM `tbl_ruangan`");
        return $query->result();
	}
	/////////////////////////////////////////////
	//SMS
	public function page_sms(){
        $query =$this->db->query("SELECT * FROM `tbl_sms` group by kode");
        return $query->num_rows();
	}
	public function data_sms($dari, $sampai){
		//return $query = $this->db->get('pembayaran',$dari,$sampai)->result();
		if($this->uri->segment(3)==null){
			$sampai = 0;
		}
		else{
			$sampai = $from = $this->uri->segment(3);
		}
        $query =$this->db->query("SELECT * FROM `tbl_sms` group by kode LIMIT $sampai, $dari ");
        return $query->result();	
	}
	public function smspasien(){
        $query =$this->db->query("SELECT * FROM `tbl_pasien`");
        return $query->result();
	}
	public function kirim_sms($data){
		$eksekusi = $this->db->insert('tbl_sms', $data);
		return $eksekusi;
	}
	public function lihat_sms1($kode){
        $query =$this->db->query("SELECT * FROM `tbl_sms` where kode = '$kode'");
        return $query->result();
	}
	public function lihat_sms2($kode){
        $query =$this->db->query("SELECT * FROM `tbl_sms` where kode = '$kode' group by kode");
        return $query->result();
	}
	//ALERGI
	public function tambah_alergi($data){
		$eksekusi = $this->db->insert('tbl_alergi', $data);
		return $eksekusi;
	}
	public function simpan_alergi($data, $id_pasien){
		$this->db->where('id_pasien', $id_pasien);
		$this->db->update('tbl_alergi', $data);
		return true;
			
	}
	public function lihat_alergi($id_pasien){
        $query =$this->db->query("SELECT * FROM `tbl_alergi` where id_pasien = '$id_pasien'");
        return $query->result();
	}
	function exportpasien(){
        $query = $this->db->query("SELECT * from tbl_pasien order by id_pasien ASC");
         
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
	}
	public function page_satuanobat(){
        $query =$this->db->query("SELECT * FROM `tbl_satuanobat`");
        return $query->num_rows();
	}
	public function data_satuanobat($dari, $sampai){
		//return $query = $this->db->get('pembayaran',$dari,$sampai)->result();
		if($this->uri->segment(3)==null){
			$sampai = 0;
		}
		else{
			$sampai = $from = $this->uri->segment(3);
		}
        $query =$this->db->query("SELECT * FROM `tbl_satuanobat` order by id_satuanobat DESC LIMIT $sampai, $dari ");
        return $query->result();	
	}
	public function page_suplier(){
        $query =$this->db->query("SELECT * FROM `tbl_suplier`");
        return $query->num_rows();
	}
	public function data_suplier($dari, $sampai){
		//return $query = $this->db->get('pembayaran',$dari,$sampai)->result();
		if($this->uri->segment(3)==null){
			$sampai = 0;
		}
		else{
			$sampai = $from = $this->uri->segment(3);
		}
        $query =$this->db->query("SELECT * FROM `tbl_suplier` order by id_suplier DESC LIMIT $sampai, $dari ");
        return $query->result();	
	}
	public function page_jenisobat(){
        $query =$this->db->query("SELECT * FROM `tbl_jenisobat`");
        return $query->num_rows();
	}
	public function data_jenisobat($dari, $sampai){
		//return $query = $this->db->get('pembayaran',$dari,$sampai)->result();
		if($this->uri->segment(3)==null){
			$sampai = 0;
		}
		else{
			$sampai = $from = $this->uri->segment(3);
		}
        $query =$this->db->query("SELECT * FROM `tbl_jenisobat` order by id_jenisobat DESC LIMIT $sampai, $dari ");
        return $query->result();	
	}
	public function page_bahanhabispakai(){
        $query =$this->db->query("SELECT * FROM `tbl_bahan_habis_pakai`");
        return $query->num_rows();
	}
	public function data_bahanhabispakai($dari, $sampai){
		if($this->uri->segment(3)==null){
			$sampai = 0;
		}
		else{
			$sampai = $from = $this->uri->segment(3);
		}
        $query =$this->db->query("SELECT * FROM `tbl_bahan_habis_pakai` order by id_bahan DESC LIMIT $sampai, $dari ");
        return $query->result();	
	}
	public function page_tindakan(){
        $query =$this->db->query("SELECT * FROM `tbl_tindakan`");
        return $query->num_rows();
	}
	public function data_tindakan($dari, $sampai){
		if($this->uri->segment(3)==null){
			$sampai = 0;
		}
		else{
			$sampai = $from = $this->uri->segment(3);
		}
        $query =$this->db->query("SELECT * FROM `tbl_tindakan` order by id_tindakan DESC LIMIT $sampai, $dari ");
        return $query->result();	
	}

}