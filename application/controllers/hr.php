<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 *
 * ������2012����ר��
 *
 * @package		hr_ecjtu_net
 * @author		Polly
 * @datatime	2012-08-16
 * @link		http://hr.ecjtu.net/
 * @version		1.0.0
 *
 */

 // ------------------------------------------------------------------------//

/**
 *
 *  hr_ecjtu_net hr������
 *
 *	��Ҫ���ڿ���ר���ҳ����ʾ���л��Ĺ���ʵ��
 *
 */
class Hr extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
	}
	/** ����ר����ҳ **/
	public function index()
	{
		//var_dump($this->uri->uri_string());
		$this->load->view('index');
	}
	/** �����������Ľ���ҳ **/
	public function intro_manager()
	{
		$this->load->view('intro_manager');
	}
	/** ���ؼ������Ľ���ҳ **/
	public function intro_tech()
	{
		$this->load->view('intro_tech');
	}
	/** ���ز�Ʒ���Ľ���ҳ **/
	public function intro_news()
	{
		$this->load->view('intro_news');
	}
	/** ���ز�Ʒ���Ľ���ҳ **/
	public function intro_product()
	{
		$this->load->view('intro_product');
	}
	/** ��������ר��ҳ **/
	public function intro_newcomer()
	{
		$this->load->view('intro_newcomer');
	}
	/** ����ר�ⱨ��ע��ҳ **/
	public function register()
	{
		$this->load->view('register');
	}
	public function create_xls()
	{
		header("Content-Type: application/download");
		header("Content-type:application/vnd.ms-excel");
		header("Content-Disposition:filename='111.xls'");
		$this->load->model('table');
		$sql = "SELECT user_name,user_sex,user_college,user_major,user_phone,user_qq,hr_department FROM hr_info,hr_user,user_info WHERE `user_info`.`user_id`=`hr_user`.`user_id` AND `hr_user`.`hr_id`=`hr_info`.`hr_id`";
		//$sql = "SELECT * FROM hr_info";
		$data = $this->table->que($sql);
		$str = '';
		foreach($data as $row)
		{
			foreach($row as $val)
			{
				$str .= $val."\t";
			}
			$str .= "\n";
		}
		echo $str;
	}
}
/* End of file hr.php */
/* Location: ./application/controllers/hr.php */
