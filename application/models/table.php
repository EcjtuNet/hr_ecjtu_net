<?php
class Table extends CI_Model{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->dbforge();
	}
	public function create($fields,$keys,$tname)
	{
		$this->dbforge->add_field($fields);
		$this->dbforge->add_key($keys);
		$this->dbforge->create_table($tname,TRUE);
	}
	public function drop($tname)
	{
		$this->dbforge->drop_table($tname);
	}
	public function select($tname,$sel)
	{
		$this->db->select($sel);
		$query = $this->db->get($tname);
		return $query->result();
	}
	public function que($sql)
	{
		$data = $this->db->query($sql);
		return $data->result();
	}
}