<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Create extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function create_item_t()
	{
		$data = $this->input->post();
		$data['content'] = implode(',', $this->input->post('content'));
		if (isset($data['menu_1'])||isset($data['menu_2']))
		{
			$xml['menu_1'] = $data['menu_1'];
			$xml['menu_2'] = $data['menu_2']; 
			var_dump($xml['menu_2']);
			unset($data['menu_1']);
			unset($data['menu_2']);
		}
		//$this->load->model('item');
	    //$num = $this->item->insert($data);
	    $num = 1;
		if($num != 0)
		{
			$content = explode(',', $data['content']);
			$fields['id'] = array('type'=>'INT','constraint'=>'5', 'auto_increment' => TRUE,'primary'=>TRUE);
			foreach ($content as $field)
			{
				switch ($field)
				{
					case 'name':      $fields['name'] = array('type'=>'VARCHAR','constraint'=>'20');break;
					case 'sex':       $fields['sex'] = array('type'=>'ENUM','constraint'=>"'男','女'");break;
					case 'university':$fields['university'] = array('type'=>'VARCHAR','constraint'=>'40');break;
					case 'college':   $fields['college'] = array('type'=>'VARCHAR','constraint'=>'40');break;
					case 'snum':      $fields['snum'] = array('type'=>'VARCHAR','constraint'=>'20');break;
					case 'phone':     $fields['phone'] = array('type'=>'VARCHAR','constraint'=>'20');break;
					case 'email':     $fields['email'] = array('type'=>'VARCHAR','constraint'=>'40');break;
					case 'file':      $fields['file'] = array('type'=>'VARCHAR','constraint'=>'80');break;
					case 'menu':      $xml['name'] = $data['tname'];  $this->xmlfile($xml);break;
				}
			}
			exit();
			//$this->load->model('table');
			//$keys = array('id');
			//$this->table->create($fields,$keys,$data['tname']);
			//header("Location: ../admin/item_deal/{$data['mid']}");
			
		}
		else 
		{
			echo "filed";
		}
	}
	
	public function add_m()
	{
		$data = $this->input->post();
		$this->load->model('moduledb');
		$num = $this->moduledb->insert($data);
		header('Location:../admin/module_deal');
	}
	public function delete()
	{
		if ($this->input->post('iid'))
		{
			$iid = $this->input->post('iid');
			$this->load->model('item');
			$sel = array('tname');
			$whe = array('iid'=>$iid);
			$tname = $this->item->select_w($sel,$whe);
			$tname = $tname[0]->tname;
			if ($tname)
			{
				$sel = array('iid'=>$iid);
				$this->item->delete($sel);
				$this->load->model('table');
				$this->table->drop($tname);
			}
			header('Location: ../admin/module_deal');
		}
		
	}
	private function xmlfile($xml)
	{
		$this->load->helper('file');
		foreach ($xml['menu_2'] as $menu_2) {
			$me_2[] = explode(',', $menu_2);
		}
		for ($i =0;$i<count($me_2);$i++) {
			$str[$i] = '';
			foreach ($me_2[$i] as $value) {
				$str[$i] .= '<second>'.$value.'</second>'; 
			}
			//print_r ($str[$i]);
		}
		
		$body = "<?php header('Content-type: text/xml');"."\n".'$xml=\'<?xml version=\'1.0\' encoding=\'utf-8\'?>\';'.'$str= array(';
		foreach ($str as $str2)
		{
			$body .= $str2.',';
		}
		$body .= ")\n";
		$body .= '$menu=1;$menu=$GET[\'$menu_1\'];'.'$content = $str[$menu_1]';
		//$fh = fopen("view/menuxml/{$xml['name']}.php", 'w+');
		//echo $body;
		if ( ! write_file("views/menuxml/{$xml['name']}.php", $body))
		{
		     echo 'Unable to write the file';
		}
		else
		{
		     echo 'File written!';
		}
	}
}