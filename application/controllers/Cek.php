<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cek extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_home');
	}

	public function index()
	{
		$keyword = $this->input->post('nbi');
		$data['getAll'] = $this->M_home->getAll($keyword)->result();
		$this->load->view('v_views', $data);		
	}

}

/* End of file cek.php */
/* Location: ./application/controllers/cek.php */