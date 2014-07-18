<?php echo validation_errors(); 

$iname = $fildes[0]->iname;
echo form_open_multipart("handle/apply/{$tname}"); 
    $fildes = explode(',', $fildes[0]->content);
    $str = "<li>{$iname}</li>";
	foreach ($fildes as $filde)
	{
		switch ($filde)
		{
			case 'name':      $str .= "<li><span>名字：</span>".form_input('name')."</li>";break;
			case 'menu':      $str .= "分级下拉菜单: <select id=\"number\" onChange=\"validate();\"><option value=\"1\">三好学生</option><option value=\"5\">优秀团员</option></select><select id=\"dataMessage\"><option>查看此处</option></select>";
			case 'sex':       $str .= "<li><span>性别：</span>男".form_radio('sex','男',TRUE)."女".form_radio('sex','女')."</li>";break;
			case 'university':$str .= "<li><span>学校：</span>".form_input('university')."</li>";break;
			case 'college':   $str .= "<li><span>学院：</span>".form_input('college')."</li>";break;
			case 'profession':$str .= "<li><span>专业：</span>".form_input('profession')."</li>";break;
			case 'snum':      $str .= "<li><span>学号：</span>".form_input('snum')."</li>";break;
			case 'phone':     $str .= "<li><span>手机号：</span>".form_input('phone')."</li>";break;
			case 'qq':    	  $str .= "<li><span>QQ号：</span>".form_input('qq')."</li>";break;
			case 'email':     $str .= "<li><span>邮箱：</span>".form_input('email')."</li>";break;
			case 'file':      $str .= "<li><span>上传文件：</span>".form_upload('userfile').form_hidden('isfile','true')."</li>";break;
			case 'about':     $str .= "<li><span>个人简介：</span>".form_textarea()."</li>";break;
		}
	} 
	$str .= form_submit('','提交表单');
	echo $str;
echo form_close()?>