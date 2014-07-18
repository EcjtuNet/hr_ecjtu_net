<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>登入验证</title>
	<style type="text/css">
		.login{ float: left; margin-top: 150px; margin-left: 550px;}
		.labe{width: 64px; height: 16px; float: left;}
			#password{width: 149px;}
		input{float: left;}
		a{float: left; margin-left: 4px; margin-top: 3px;}
		form{ width: 230px;}
		p{color: red;}
	</style>
</head>
<body>
	<fieldset class="login">
		<?php $data=array('id'=>'password','name'=>'passWord')?>
		<legend>登入验证</legend>
		<?php echo form_open('bg/chenck')?>
		<span><span class="labe">用户名：</span><?php echo form_input('loginName',set_value('loginName')).form_error('loginName')?></span><br/>
		<span><span class="labe">密&nbsp;&nbsp;码：</span><?php echo form_password($data).form_error('passWord')?></span><br/>
		<span><?php echo form_submit('login',"提交")?><?php echo form_reset('reset',"重置").anchor('bg/rlogin', '注册','title="注册登入"')?></span>
	</fieldset>
</body>
</html>