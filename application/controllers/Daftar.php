<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_home');
	}

	public function index()
	{
		$this->load->view('v_daftar', '');	
	}

	public function save(){
		$id 			= $this->input->post('nbi');
		$nama 			= $this->input->post('nama');
		$jenis_kelamin 	= $this->input->post('jenis_kelamin');
		$alamat 		= $this->input->post('alamat');
		$jurusan		= $this->input->post('jurusan');
		$fakultas 		= $this->input->post('fakultas');
		$no_hp 			= $this->input->post('nohp');
		$penyakit 		= $this->input->post('penyakit');
		$motivasi		= $this->input->post('motivasi');
		$tanggal_lahir	= $this->input->post('tanggal_lahir');
		
		$nbi = str_replace(' ', '', $id);

		//$tanggal= $this->input->post('tanggal');
		//$bulan 	= $this->input->post('bulan');
		//$tahun 	= $this->input->post('tahun');
		//$tanggal_lahir = $tahun."-".$bulan."-".$tanggal;

		$data = array(
			"nbi" => $nbi,
			"nama" => $nama,
			"jenis_kelamin" => $jenis_kelamin,
			"tanggal_lahir" => $tanggal_lahir,
			"alamat" => $alamat,
			"jurusan" => $jurusan,
			"fakultas" => $fakultas,
			"nohp" => $no_hp,
			"motivasi" => $motivasi
		);

		// var_dump($data);
		$cek_duplikat = $this->M_home->edit($nbi)->row();
		if($cek_duplikat) {
		    echo "NBI yang anda gunakan sudah pernah didaftarkan";
		} else {
		    $insert = $this->M_home->insertData($data);
		    if ($insert > 0) {
			redirect(base_url('cek'),'refresh');
			} else {
			    echo "Gagal";
		    }
		}
	}
}

/* End of file Daftar.php */
/* Location: ./application/controllers/Daftar.php */