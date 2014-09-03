<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 *
 * 日新网2012招新专题
 * 
 * @package		hr_ecjtu_net
 * @author		homker
 * @datatime	2013-09-01
 * @link		http://hr.ecjtu.net/
 * @version		1.0.1
 */
 
 // ------------------------------------------------------------------------

/**
 *
 * hr_ecjtu_net 后台登入模型
 *
 * 连接后台数据库，获取相应信息
 *
 */
class Admin_mdl extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	function Admin_select()
	{
		$this->db->select("*");
		if($query=$this->db->get("admin")) return $query->result();
		else return false;
	}
	function Name_chenck($str)
	{
		$this->db->where("username",$str);
		if($this->Admin_select()) return true;
		else return false;
	}
	function password_chenck($name,$password)
	{
		$this->db->where("username",$name);
		$this->db->where("password",$password);
		if ($result=$this->Admin_select()) return $result;
		else return false;
	}
	public function get_all_info($num,$offset)
	{
		$this->db->select('user_info.user_id,user_info.user_name,user_info.user_sex,hr_info.hr_center,hr_info.hr_department,user_info.user_college,user_info.user_major,user_info.user_phone,user_info.user_qq,user_info.user_remarks');
		$this->db->from('hr_user');
		$this->db->join('user_info','user_info.user_id = hr_user.user_id');
		$this->db->join('hr_info','hr_info.hr_id = hr_user.hr_id');
		$this->db->where('term','2014.1');
		$query=$this->db->get("admin",$num,$offset);
		$result = $query->result();
		if($query)
		{
			return $result;
		}
		else return false;
	}
	public function get_info($department,$num,$offset)
	{
		$this->db->where('hr_info.hr_department',$department);
		if($result=$this->get_all_info($num,$offset))
		{
			return $result;
		}
		else return false;
	}
	public function get_rows()
	{		
		$this->db->select('user_info.user_name,user_info.user_sex,hr_info.hr_center,hr_info.hr_department,user_info.user_college,user_info.user_major,user_info.user_phone,user_info.user_qq,user_info.user_remarks');
		$this->db->from('hr_user');
		$this->db->join('user_info','user_info.user_id = hr_user.user_id');
		$this->db->join('hr_info','hr_info.hr_id = hr_user.hr_id');
		$this->db->where('term','2014.1');
		$query=$this->db->get();
		$result = $query->num_rows();
		if($query)
		{
			return $result;
		}
		else return false;
	}
	public function get_some_rows($department)
	{
		$this->db->select('user_info.user_name,user_info.user_sex,hr_info.hr_center,hr_info.hr_department,user_info.user_college,user_info.user_major,user_info.user_phone,user_info.user_qq,user_info.user_remarks');
		$this->db->from('hr_user');
		$this->db->join('user_info','user_info.user_id = hr_user.user_id');
		$this->db->join('hr_info','hr_info.hr_id = hr_user.hr_id');
		$this->db->where('term','2014.1');
		$this->db->where('hr_info.hr_department',$department);
		$query=$this->db->get();
		$result = $query->num_rows();
		if($query)
		{
			return $result;
		}
		else return false;
	}
	public function insert($arr)
	{
		if($this->db->insert("admin",$arr)) return true;
		else return false;
	}

	function update($id,$arr1,$arr2)
	{
		$this->db->where("user_id",$id);
		if($this->db->update("hr_user",$arr1)||$this->db->update("user_info",$arr2)) return true;
		else return false;
	}

	function del($id)
	{
		$this->db->where("user_id",$id);
		if($this->db->delete("hr_user"))
		{
			$this->db->where("user_id",$id);
			if($this->db->delete("user_info")) return true;
			else return false;
		} else return false;
	}
}


  //////////////////////////the end of php  ,the bground of hr_ecjtu_net; 
  //////////////////////////power by homker 20130901;
