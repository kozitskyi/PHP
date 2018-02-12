<?php
include_once "User.class.php";
include_once "lib/Smarty.class.php";
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD','');
define('DB_NAME','trainee');
define('MAIL_FROM', 'robot@check.com');

$smarty = new Smarty();
$smarty->template_dir='tpl/templates/';//указываем путь к шаблонам
$smarty->compile_dir='tpl/templates_c/';
$smarty->config_dir='tpl/configs/';
$smarty->cache_dir='tpl/cache/';

$title = "Главная";
$name_auth = $_SESSION["auth"];
?>