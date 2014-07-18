<?php
header('Content-type: text/xml');
$xml="<?xml version='1.0' encoding='utf-8'?>";

$menu_1=$_GET['first'];
$menu_2 = array('<second>技术研发员</second>');
$content = $menu_2[$menu_1];
echo $content;
