<?php 
/**
 *
 * 日新网2012招新专题
 * 
 * @package   hr_ecjtu_net
 * @author    homker
 * @datatime  2013-09-01
 * @link    http://hr.ecjtu.net/index.php/admin
 * @version   1.0.1
 */
  
 // ------------------------------------------------------------------------//

/**
 *
 *  hr_ecjtu_net 后台控制器
 *
 *  主要用于将报名信息显示
 *
 */
class Admin extends CI_Controller 
{
  public function __construct()
  {
    parent::__construct();
    $this->load->helper(array('form', 'url'));
    $this->load->library('form_validation');
    $this->load->library('session');
    $this->load->library('table');
    public $access=5;
  }
 
  public function index()
  {
    $this->load->view('login');
  }
  public function chenck()
  {
    if($this->loginchenck())
    {
      $name     =$this->input->post('loginName');
      $password =$this->input->post('passWord');
      $this->load->model('Admin');
      if($result=$this->Admin->password_chenck($name,$password))
      {
          $name         =$result['0']->username;
          $center       =$result['0']->center;
          $department   =$result['0']->department;
          $this->access =$result['0']->access;
          $session=array('name'=>$name,'center'=>$center,'department'=>$department,'access'=>$this->access);
          $this->session->set_userdata($session);
          $this->display();
      }
      else
      {
        echo "密码错误~！";
        $this->load->view('login');
      }
    }
  }
  public function loginchenck()
  {
    $this->form_validation->set_rules('loginName','用户名','trim|require|xss_clean|callback_namechenck');
    $this->form_validation->set_rules('passWord','密码','require|md5');
    if($this->form_validation->run()==false) $this->load->view('login');
    else return true;
  }
  public function namechenck($str)
  {
    $this->load->model('Admin_mdl');
    if($this->Admin_mdl->Name_chenck($str)) return true;
    else return false;
  }
  public function display()
  {
    if($this->access<5)
    {
      $this->load->model('Admin_mdl');
      $department=$this->session->userdata('department');
      if($this->access==1) $result=$this->Admin_mdl->get_info($department);
      else if($this->access==2||$this->access==3) $result=$this->Admin_mdl->get_all_info();
      $data['name']   =$this->session->userdata('name');
      $data['access'] =$this->session->userdata('access');
      $data['info']   =$result;
      $this->load->view('loginsuccess',$data);
    }
    else
    {
      echo "请先行登入";
      $this->load->view('login');
    }
  }
}
//////////////////////////the end of php  ,the bground of hr_ecjtu_net; 
//////////////////////////power by homker 20130901;