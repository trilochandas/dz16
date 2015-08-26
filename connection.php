<?php 
$project_root=__DIR__;
require_once $project_root."/dbsimple/config.php";
require_once "DbSimple/Generic.php";

if (file_exists('user.txt')) {
    $loginConfig = unserialize( file_get_contents('user.txt') );
} else {
    header('Location: install.php');
}

$db = (new DbSimple_Generic)->connect( "mysql://{$loginConfig['username']}:{$loginConfig['password']}@{$loginConfig['host']}/{$loginConfig['db']}" );
// Устанавливаем обработчик ошибок.
$db->setErrorHandler('databaseErrorHandler');
$db->query("SET NAMES UTF8");