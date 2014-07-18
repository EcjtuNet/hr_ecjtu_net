<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<body>
<?php
class Login_model extends CI_Model{
	function __construct()
    {
        parent::__construct();
		$this->load->database();
    }
  	public function check()
  	{
		$query=$this->db->query('select * from user');
		$num=$query->num_rows();
		$i=0;
		while(@$row=$query->row_array($i))
		{
			if(($row['username']==($this->input->post('username')))&&($row['password']==($this->input->post('password'))))
			{
				echo "<script language=\"javascript\"> alert('欢迎登录！'); </script>";
				$this->load->view('formsuccess');
				break;
			}
			else
			{
				if($row['username']!=($this->input->post('username')))
				{
					$i++;
					if($i==$num)
					{
					echo "用户名错误！";break;
					}
				}
			   elseif(($row['username']==($this->input->post('username')))&&($row['password']!=($this->input->post('password'))))
			   {
				echo "密码错误'";
				break;
				}
			}
		}
	}
}
?>
</body>
</html>