<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('master'); //meload master model	
		date_default_timezone_set("Asia/Jakarta");// set timezone jekardah
		// if($this->session->userdata('id_siswa')==null){
			// redirect(base_url());
		// }
		$data['situs'] = $this->master->situs();
		foreach($data['situs'] as $situs){
			$this->namaklinik = $situs->namaklinik;
			$this->alamatklinik = $situs->alamat;
			$this->nohpklinik = $situs->nohp;
		}
		
	}
	public function index()
	{
		$data['namaklinik'] = $this->namaklinik;
		$data['alamatklinik'] = $this->alamatklinik;
		$data['nohpklinik'] = $this->nohpklinik; 
		$data['judul'] = "Login - Klinik ".$this->namaklinik."";;
		$this->load->view('index', $data);
	}
	public function cekmasuk(){
		$username = $this->input->post('username', TRUE);
		$password = $this->input->post('password', TRUE);
		$md5 = md5($password);
		$data = array('username' => $username, 
					  'password' => $md5);
		$hasil = $this->master->cekmasuk($data);
		if ($hasil->num_rows() > 0){
			$data['akun'] = $this->master->dataakunadmin($username);
			foreach ($data['akun'] as $akun) {
				$sesi['nama'] = $akun->nama;
				$sesi['username'] = $username;
				$sesi['id_admin'] = $akun->id_user;
				$this->session->set_userdata($sesi);
				
				redirect(base_url('/admin'));
			}
		}
		else{
			echo "
			<link href='".base_url()."/assets/sweetalert/sweetalert.css' rel='stylesheet' />
			<script src='".base_url()."/assets/bsb/plugins/jquery/jquery.min.js'></script>
			<script src='".base_url()."/assets/sweetalert/sweetalert.min.js'></script>
			 <script type='text/javascript'>
			  setTimeout(function () {  
			   swal({
				title: 'Login Gagal !',
				text: 'Periksa Username dan Password Anda Kembali',
				type: 'error',
				timer: 4000,
				showConfirmButton: false
			   });  
			  },10); 
			  window.setTimeout(function(){ 
			  window.location.href='".base_url('')."';	
			  } ,2100); 
			 </script>"; 
			//echo "<script>alert('Username / Password Anda Salah !');window.location.href='".base_url('/app')."' </script>";
		}
	}
	
}
