<?php
#! /etc/php5 -q
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Email extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
	}
	public function create_xls($tname='qcby')
	{
		$this->load->helper('global');
		//header("Content-Type: application/download");
		header("Content-type:application/vnd.ms-excel");
		header("Content-Disposition:filename='111.xls'");
		$this->load->model('table');
		$sel = array('*');
		$data = $this->table->select($tname,$sel);
		$strk = "编号\t";
		$strv = "";
		$fildes = filde_change();
		foreach ($data as $inf) 
		{
			//echo "ok";
			//var_dump($inf);
			foreach ($inf as $key => $value)
			{
				//echo $key;
				foreach ($fildes as $fildek=>$fildev)
				{
					switch ($key)
					{
						case $fildek: $strk .= $fildev."\t";
					}
				}
			}
			$strk .= "\n";
			break;
		}
		foreach ($data as $inf2) 
		{
			foreach ($inf2 as $infk => $infv)
			{
				$strv .= $infv."\t";
			}
			$strv .= "\n";
		}
		echo $strk;
		echo $strv;
	}

	public function send($tname='qcby'){
		$this->load->helper('url');
		$url = array('email','create',$tname);
        $mail_body = '下载报名结果点击下面链接'."\n".site_url($url);
        $this->load->library('mailer');
        $this->mailer->sendmail(
            '1185577580@qq.com',
            '收件人',
            '报名结果 '.date('Y-m-d H:i:s'),
            $mail_body
        );
    }
}