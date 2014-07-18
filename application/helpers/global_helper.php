<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if (! function_exists('filde_change'))
{
	function filde_change()
	{
		$arr = array('name'=>'姓名','sex'=>'性别','university'=>'学校','college'=>'学院','profession'=>'专业','snum'=>'学号','phone'=>'手机号','qq'=>'QQ号','email'=>'邮箱','about'=>'个人简介','file'=>'上传文件','menu'=>'级联菜单');
		return $arr;
	}
}
if (! function_exists('inf_change'))
{
	function inf_change()
	{
		$arr = array('iname'=>'报名项目','tname'=>'报名表','start_time'=>'开始时间','end_time'=>'结束时间','person_email'=>'负责人邮箱');
		return $arr;
	}
}