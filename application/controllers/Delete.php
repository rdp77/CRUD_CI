<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delete extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_home');
	}

	public function index($nbi)
	{
		$delete = $this->M_home->delete($nbi);
		echo $delete;
		echo "<br>";
// 		var_dump($delete);
		if ($delete > 0) {
		    redirect(base_url('cek'), 'refresh');
		} else {
			echo "Gagal";
		}
	}

}

/* End of file Delete.php */
/* Location: ./application/controllers/Delete.php */