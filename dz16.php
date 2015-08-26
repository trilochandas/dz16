<?php
error_reporting(E_ERROR|E_WARNING|E_PARSE|E_NOTICE);
ini_set('display_errors', 1);
header("Content-Type: text/html; charset=utf-8");

// $smarty_root = __DIR__."/smarty/";
$project_root=__DIR__;
// require $smarty_root.'libs/Smarty.class.php';
require $project_root.'/functions.php';
require $project_root.'/smarty-include.php';
// $smarty = new Smarty;
// $smarty->compile_check=true;
// $smarty->debugging=false;

// $smarty->template_dir=$smarty_root.'/templates/';
// $smarty->compile_dir=$smarty_root.'/templates_c/';
// $smarty->cache_dir = $smarty_root . 'cache';
// $smarty->config_dir = $smarty_root . 'configs';



include_once('connection.php');
require_once('classes.php');

$instance = AdsStore::instance();
$instance->getAllAdsFromDb()->prepareForOut()->getSelects();

// insert advert to form
if ( isset($_GET['id']) ) { // просмотр объявления
    $id = (int) $_GET['id'];
    $instance->advertForForm($id); 
}

$instance->display(); 