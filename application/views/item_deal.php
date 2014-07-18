<?php
if (! empty($items))
{
    echo validation_errors(); 

	echo form_open('create/delete');
	
	foreach ($items as $item)
	{
		echo "<p><span><a href='../item_inf/{$item->iid}'\>".$item->iname."</a></span>".form_hidden('iid',$item->iid).form_submit('del','删除')."</p>";
	}
	
	echo form_close();
}
echo "<a href='../create_item_f'>创建报名项目</a>";
