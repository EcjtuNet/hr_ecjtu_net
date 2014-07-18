<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>后台注册</title>
<style type="text/css">
		.login{ float: left; margin-top: 150px; margin-left: 550px;}
    .labe{width: 64px; height: 16px; float: left;}
      #password{width: 149px;}
    input{float: left;}
    a{float: left; margin-left: 4px; margin-top: 3px;}
		form{ width: 230px;}
	</style>
   <script type="text/javascript" src="<?php echo base_url() ?>/js/jquery-1.9.1_2.js"></script>
   <script type="text/javascript">
    $(document).ready(function(){ 
        $("#Ranswer").focus(function cls() {
        //捕获触发事件的对象，并设置为以下语句的默认对象 
        with (event.srcElement)
        //如果当前值为默认值，则清空 
            if (value == "办公室的wifi密码") value = ""
    });
    $("#Ranswer").blur(function res() {
        //捕获触发事件的对象，并设置为以下语句的默认对象 
        with (event.srcElement)
        //如果当前值为空，则重置为默认值 
            if (value == "") value = "办公室的wifi密码"
    });
    });
    </script>
</head>
<body>
	<fieldset class="login">
    <?php $data=array('id'=>'password','name'=>'Rpassword')?>
		<legend>登入注册</legend>
		<?php echo form_open('bg/rinsert')?>
		<?php $options = array(
                  '网站建设部'         => '网站建设部',
                  '体验设计部'         => '体验设计部',
                  '安全运维部'         => '安全运维部',
                  '记者团'             => '记者团',
                  '编辑部'		         => '编辑部',
                  '办公室'		         => '办公室',
                  '财务部'		         => '财务部',
                  '企划部'		         => '企划部',
                  '市场部'		         => '市场部',
                  '人力资源部'         => '人力资源部',
                  '校园文化'	         => '校园文化',
                  '《交大青年》杂志社' => '《交大青年》杂志社',
                  'WEB应用产品项目部'  => 'WEB应用产品项目部',
                  '日新博客'		       => '日新博客',
                  '日新论坛'		       => '日新论坛',
                  '日新手机客户端'	   => '日新手机客户端',
                  '日新微博'	         => '日新微博',
                  '日新微信'	         => '日新微信',
                );
              $arr =array('技术研发中心'=>'技术研发中心','新闻出版中心'=>'新闻出版中心','行政管理中心'=>'行政管理中心','产品运营中心'=>'产品运营中心');
                ?>
		<span><span class="labe">用户名：</span><?php echo form_input('Rname',set_value('Rname')).form_error('Rname')?></span><br/>
		<span><span class="labe">密&nbsp;&nbsp;码：</span><?php echo form_password($data).form_error('Rpassword')?></span><br/>
		<span><span class="labe">验证码：</span><?php echo form_input('Ranswer','办公室的wifi密码','id="Ranswer"').form_error('Ranswer')?></span><br/>
		<span><span class="labe">中&nbsp;&nbsp;心：</span><?php echo form_dropdown('Rcenter', $arr, '技术研发中心').form_error('Rcenter')?></span><br/>
		<span><span class="labe">部&nbsp;&nbsp;门：</span><?php echo form_dropdown('Rdepartment', $options, '网站建设部').form_error('Rdepartment')?></span><br/>
		<span><?php echo form_submit('rlogin',"提交")?><?php echo form_reset('reset',"重置").anchor('bg', '返回','title="返回亲"')?></span>
	</fieldset>
</body>
</html>
