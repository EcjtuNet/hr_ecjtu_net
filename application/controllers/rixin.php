<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Rixin extends CI_Controller{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('date');
		$this->load->helper('url');
	}
	public function index()
	{
		$this->load->view('index');
	}
	public function introduce($depart)
	{
		$data['depart'] = $depart;
		$this->load->view('template/rixin_head',$data);
		$this->load->view('introduce');
		$this->load->view('template/rixin_foot');
		
	}
}