<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if (! function_exists('filde_change'))
{
	function filde_change()
	{
		$arr = array('name'=>'姓名','sex'=>'性别','university'=>'学校','college'=>'学院','snum'=>'学号','phone'=>'手机号','email'=>'邮箱');
		return $arr;
	}
}
if (! function_exists('inf_change'))
{
	function inf_change()
	{
		$arr = array('iname'=>'报名项目','tname'=>'报名表');
		return $arr;
	}
}