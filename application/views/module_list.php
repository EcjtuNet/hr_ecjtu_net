<?php
foreach ($mods as $mod)
{
	echo "<li><a href=./item_list/{$mod->mid} >{$mod->mname}</a></li>";
}