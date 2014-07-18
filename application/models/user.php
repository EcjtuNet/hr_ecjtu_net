<?php
class User extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function select_w($sel,$whe)
	{
		$this->db->select($sel);
		$query = $this->db->get_where('user',$whe);
		return $query->result();
	}
}