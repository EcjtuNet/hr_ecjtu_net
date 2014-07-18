<?php
foreach ($items as $item )
{
	echo "<p><a href='../apply_form/{$item->tname}'\>".$item->iname."</p>";
}