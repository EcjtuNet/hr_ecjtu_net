<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Handle extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url'));
	}
	public function apply($tname)
	{
		$config['upload_path'] = 'uploads/'.$tname.'/';
		$config['allowed_types'] = 'gif|jpg|png|php';
		$config['max_size'] = '1000';
		$config['remove_spaces'] = TRUE;
		$this->load->library('upload',$config);
		$data = $this->input->post();
		if (isset($data['isfile']))
		{
			if (! is_dir($config['upload_path']))
			{
				mkdir($config['upload_path'],0777,TRUE);
				chmod($config['upload_path'], 0777);
			}
			
			$this->upload->do_upload();
			$file = $this->upload->data();
			$data['file'] = $file['full_path'];
			unset($data['isfile']);
		}
		$this->load->model('applyta');
		$num = $this->applyta->insert($tname,$data);
		if ($this->upload->do_upload() and $num > 0)
		{
			echo "success";
		}
		else 
		{
		   $error = array('error' => $this->upload->display_errors());
	
		   echo $error;
		   header('Location: ../show/apply_form/'.$tname);
		}
	}
	
}