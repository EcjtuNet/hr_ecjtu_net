<?php
$str = '';
$arr_i = inf_change();
$arr_f = filde_change();
foreach ($inf as $key=>$value)
{
	foreach ($arr_i as $inf_k=>$inf_v)
	{
		switch ($key)
		{
			case $inf_k: $str .= "<li><span>{$inf_v}：</span>{$value}</li>";
		}
	}
	if ($key=='content')
	{
		$str .= '<li>报名需填信息：<li>';
		foreach ($inf->fildes as $val_k=>$val_v)
		{
			foreach ($arr_f as $filde_k=>$filde_v)
			{
				switch ($val_v)
				{
					case $filde_k: $str .= "{$filde_v},";
				}
			}
		}
	}
}
echo $str;