<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 *
 * 日新网2012招新专题
 * 
 * @package		hr_ecjtu_net
 * @author		Polly
 * @datatime	2012-08-16
 * @link		http://hr.ecjtu.net/
 * @version		1.0.0
 */

 // ------------------------------------------------------------------------

/**
 *
 * hr_ecjtu_net excel_mdl模型
 *
 * 主要用于显示报名注册的信息
 *
 */
class Excel_mdl extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	/** 查询报名用户信息 **/
	public function get_user_info()
	{
		$this->db->from('user_info');
		$query=$this->db->get();
		if($query){
			return $query;
		}
		else{
			echo "没有查找结果~!";
		}
	}
	public function get_total_info()
	{
		$this->db->select('user_info.user_name,user_info.user_sex,hr_info.hr_center,hr_info.hr_department,user_info.user_college,user_info.user_major,user_info.user_phone,user_info.user_qq,user_info.user_remarks');
		$this->db->from('hr_user');
		$this->db->join('user_info','user_info.user_id = hr_user.user_id');
		$this->db->join('hr_info','hr_info.hr_id = hr_user.hr_id');
		$query=$this->db->get();
		$result = $query->result();
		if($query){
			return $query;
		}
		else{
			echo "未查询到结果~!";
		}
	}
}
/* End of file excel_mdl.php */
/* Location: ./application/models/excel_mdl.php */