<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->table_name = "pendaftaran";
		$this->primary_key = "nbi";
	}	

	public function insertData($data)
	{
		return $this->db->insert($this->table_name, $data);
	}	

	public function getAll($keyword)
	{
		$this->db->order_by($this->primary_key, 'ASC');
		$this->db->like($this->primary_key, $keyword);
		return $this->db->get($this->table_name);
	}

	public function edit($nbi)
	{
		$this->db->where($this->primary_key, $nbi);
		return $this->db->get($this->table_name);	
	}

	public function updateData($data)
	{
		$this->db->where($this->primary_key, $data['nbi']);
		return $this->db->update($this->table_name, $data);
	}

	public function accept($nbi, $data)
	{
		$this->db->where($this->primary_key, $nbi);
		return $this->db->update($this->table_name, $data);
	}

	public function delete($nbi)
	{
		return $this->db->query("DELETE from pendaftaran where nbi = '$nbi'");
	}

}

/* End of file M_home.php */
/* Location: ./application/models/M_home.php */