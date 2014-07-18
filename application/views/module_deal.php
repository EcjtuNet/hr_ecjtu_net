<?php
if (@$str)
{
	echo $str;	
}
foreach ($mods as $mod)
{
	echo "<li><a href=./item_deal/{$mod->mid} >{$mod->mname}</a></li>";
}
 echo validation_errors(); 

 echo form_open('create/add_m') ;
 
 echo "<p><span>新建模块：</span>".form_input('mname')."</p>";
 echo "<p>".form_submit('','提交表单')."</p>";
 echo form_close();
 ?>