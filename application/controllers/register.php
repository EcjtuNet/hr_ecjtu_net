<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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

 // ------------------------------------------------------------------------//

/**
 *
 *  hr_ecjtu_net register控制器
 *
 *	主要用于控制专题报名注册的功能实现（包含验证表单、核对信息、写入数据库、发送邮件、最终提示等）
 *
 */
class Register extends CI_Controller{
	/** 加载模型类 **/
	public function __construct()
	{
		parent::__construct();
		$this->load->model('register_mdl');
		$this->load->model('mail_mdl');
		$this->load->helper(array('form', 'url'));//载入多个辅助函数（用数组的方式）,表单辅助函数 和URL 辅助函数

	}
	public function say()
	{
		echo 'hello';
	}
	/** 加载报名注册页 **/
	public function reg()
	{
		$this->load->view('register');
	}
	/** 表单验证函数 **/
	public function _check()
	{
		$this->load->library('form_validation');//加载验证辅助函数
		$this->form_validation->set_rules('user_name','用户名','trim|required|min_length[2]|max_length[6]|xss_clean|xianzhi');
		$this->form_validation->set_rules('user_sex','性别','required');
		$this->form_validation->set_rules('user_center','中心','required');
		$this->form_validation->set_rules('user_department','中心、部门','required');
		$this->form_validation->set_rules('user_college','学院','required');
		$this->form_validation->set_rules('user_major','专业','trim|required|xianzhi|min_length[2]');
		$this->form_validation->set_rules('user_phone','手机','trim|required|numeric|exact_length[11]');
		$this->form_validation->set_rules('user_qq','QQ','trim|required|numeric|min_length[5]|max_length[10]');
		$this->form_validation->set_rules('user_remarks','备注','trim|required|xss_clean');
		return $this->form_validation->run();
		//trim是去除两端空白符号，可以忽略，required是必填，min_length、max、exact_length是最短、最长、敲好的长度，限制是由郭斌添加的，不允许用户添加非法字符串。
		//xss_clean是（我也忘了这个具体意思了……对了，记得是用户名的一个验证，算了，等下在查吧，我做的时候参考网上的一个表单认证，用户民名里有加这个）    ，numeric是数字
	}
	/** 电脑端表单提交 **/
	public function check()
	{
		if($this->_check()==FALSE){
            $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters('', '');
            $errors = array(
                'user_name' => form_error('user_name'),
                'user_sex' => form_error('user_sex'),
                'user_center' => form_error('user_center'),
                'user_department' => form_error('user_department'),
                'user_college' => form_error('user_college'),
                'user_major' => form_error('user_major'),
                'user_phone' => form_error('user_phone'),
                'user_qq' => form_error('user_qq'),
                'user_remarks' => form_error('user_remarks')
            );
            echo json_encode($errors);
		}
		else
		{
			if($this->insert_info()==true)
			{
                echo 'success';
			}
			else
			{
                echo 'don\'t register again';
			}
		}
	}
	/** 手机端表单提交 **/
	public function ajax_check()
	{
		if($this->_check()==FALSE)
		{
			echo json_encode(array('status'=>'error','error_code'=>'1','msg'=>'Check form failed.'));
		}
		elseif($this->insert_info()==true)
		{
			echo json_encode(array('status'=>'success','error_code'=>'','msg'=>'Success!'));
		}
		else
		{
			echo json_encode(array('status'=>'error','error_code'=>'2','msg'=>'Have already registered.'));
		}
	}
	/** 用户信息写入数据库 **/
	public function insert_info()
	{
		$user_name       = $_POST['user_name'];
		$user_sex        = $_POST['user_sex'];
		$user_college    = $_POST['user_college'];
		$user_major      = $_POST['user_major'];
		$user_phone      = $_POST['user_phone'];
		$user_qq         = $_POST['user_qq'];
		$user_remarks    = $_POST['user_remarks'];
		$hr_center       = $_POST['user_center'];
		$hr_department   = $_POST['user_department'];
		$user_mail       = $user_qq."@qq.com";

		$data_user = array(
			'user_name'    => $user_name,
			'user_sex'     => $user_sex,
			'user_college' => $user_college,
			'user_major'   => $user_major,
			'user_phone'   => $user_phone,
			'user_qq'      => $user_qq,
			'user_remarks' => $user_remarks
		  );
		 if($this->register_mdl->get_user_id($user_name, $user_phone)==NULL){
			 $this->register_mdl->insert_user_info($data_user);
		 }

		 $user_id = $this->register_mdl->get_user_id($user_name, $user_phone);
		 $hr_id   = $this->register_mdl->get_hr_id($hr_center, $hr_department);
		 $data_register = array(
			'user_id' => $user_id,
			'hr_id'   => $hr_id,
		 );
		 if($this->register_mdl->get_inserted($user_id, $hr_id)==NULL){
		 	$this->register_mdl->insert_register_info($data_register);
			$this->mail_mdl->send_mail($user_mail);
			return true;
		 }
		 else{
			 /*
			echo <<< EOT
				<span style=" display:block; width:150px; height:40px; margin:200px auto;">不好意思，你已经注册过咯~！</span>
			EOT;
			*/
			//echo "<span style=\" display:block; width:250px; height:40px; margin:350px auto; color:red; text-align:center;\"><b>对不起，您已经申请过该部门~！</b></span>";
			//echo '不好意思，你已经注册过咯~！';
			return false;
		 }
	 }
}
/* End of file register.php */
/* Location: ./application/controllers/register.php */
