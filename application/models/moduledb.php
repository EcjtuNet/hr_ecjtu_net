<?php
class Moduledb extends CI_Model{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function select($data)
	{
		$this->db->select($data);
		$query = $this->db->get('module');
		return $query->result();
	}
	public function insert($data)
	{
		$sql = $this->db->insert_string('module',$data);
		$query = $this->db->query($sql);
		$num = $this->db->affected_rows();
		return $num;
	}
	public function select_whe($sel,$whe)
	{
		$this->db->select($sel);
		$query = $this->db->get_where('module',$whe);
		return $query->result();
	}
}