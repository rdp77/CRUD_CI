<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_home');
	}

	public function index()
	{
		$this->load->view('v_index', '');
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */