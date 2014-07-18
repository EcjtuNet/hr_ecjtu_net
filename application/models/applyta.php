<?php
class Applyta extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function select($tname,$data,$whe)
	{
		$this->db->select($data);
		$query = $this->db->get_where($tname,$whe);
		return $query->result();
	}
	public function insert($tname,$data)
	{
		$sql = $this->db->insert_string($tname,$data);
		$query = $this->db->query($sql);
		$num = $this->db->affected_rows();
		return $num;
	}
}