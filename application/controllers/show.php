<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Show extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('date');
	}
	public function module_list()
	{		
		$this->load->model('moduledb');
		$data = array('mname','mid');
		$data['mods'] = $this->moduledb->select($data);
		$this->load->view('module_list',$data);
	}
	public function item_list($mid)
	{
		$date =  mdate("%Y/%m/%d",time());
		$this->load->model('item');
		$sel = array('iname','tname');
		$whe = array('mid'=>$mid,'start_time <='=>$date,'end_time >='=>$date);
		$data['items'] = $this->item->select_w($sel,$whe);
		$this->load->view('item_list',$data);
	}
	public function apply_form($tname)
	{
		
		$this->load->helper(array('form','url'));
		$this->load->library('form_validation');
		$this->load->model('item');
		$sel = array('iname');
		$date =  mdate("%Y/%m/%d",time());
		$whe = array('tname'=>$tname,'start_time <='=>$date,'end_time >='=>$date);	
		$data['items'] = $this->item->select_w($sel,$whe);
		if (! empty($data['items']))
		{	
			$this->load->model('applyta');
			$sel = array('content','iname','tname');
			$whe = array('tname'=>$tname);	
			$data['fildes'] = $this->applyta->select('item',$sel,$whe);
			$data['tname'] = $tname;
			$data['error'] = '';
			$this->load->view('menujs');
			$this->load->view('apply',$data);
		}
		else 
		{
			echo "报名系统已关闭";
		}
	}
}