<?php 
$smarty_root = __DIR__."/smarty/";
require $smarty_root.'libs/Smarty.class.php';

$smarty = new Smarty;
$smarty->compile_check=true;
$smarty->debugging=false;

$smarty->template_dir=$smarty_root.'/templates/';
$smarty->compile_dir=$smarty_root.'/templates_c/';