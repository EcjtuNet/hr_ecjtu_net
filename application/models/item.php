<?php
class Item extends CI_Model{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function insert($data)
	{
		$sql = $this->db->insert_string('item',$data);
		$query = $this->db->query($sql);
		$num = $this->db->affected_rows();
		return $num;
	}
	public function select($data)
	{
		$this->db->select($data);
		$query = $this->db->get('item');
		return $query->result();
	}
	public function select_w($sel,$whe)
	{
		$this->db->select($sel);
		$this->db->where($whe);
		$query = $this->db->get('item');
		return $query->result();
	}
	
	public function delete($sel)
	{		
		$this->db->delete('item',$sel);
	}
}