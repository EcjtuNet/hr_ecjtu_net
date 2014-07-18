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
 
 // ------------------------------------------------------------------------

/**
 *
 * hr_ecjtu_net mail_mdl模型
 *
 * 主要用于在用户提交注册信息成功后，向用户发送邮件
 *
 */
class Mail_mdl extends CI_Model{
	
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		echo 'hello';
	}
	/** 配置邮件发送信息并发送 **/
	public function send_mail($user_mail)
	{
		$config = array(
			'protocol'  => 'smtp',
			'smtp_host' => 'smtp.163.com',
			'smtp_port' => 25,
			'smtp_user' => 'wangbaolivip@163.com',
			'smtp_pass' => 'Polly1989',
			'mailtype'  => 'html',
			'validate'  => true,
			'priority'  => 1,
			'crlf'      => '\r\n',
			'wordwrap'  => true
		);
		$this->email->initialize($config);
		$this->email->from('wangbaolivip@163.com', '日新网');
		$this->email->to($user_mail);
		$this->email->subject('恭喜您提交申请成功');
		$this->email->message("恭喜您提交申请成功！日新网人资管理部将尽快处理您的应聘申请，谢谢您对日新网的支持与热爱！<br /><a href=\"http://www.ecjtu.net\" style=\" text-algin:center; \">回日新网看一看</a>"); 
		
		$this->email->send();	
	}
}
/* End of file mail_mdl.php */
/* Location: ./application/models/mail_mdl.php */