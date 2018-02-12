<?php
include_once "User.class.php";
include_once "config.php";

$smarty->assign('site_name', "43434343");
//include "login.php";
if(isset($_SESSION['auth']))
    $auth = true;
else
    $auth = false;

$auth = $_SESSION["auth"];
$smarty->assign('auth', $auth);

$user = new User();
$user_info = $user->getInfoUser();


if(!$_REQUEST['page']) {
    if(!isset($_SESSION["auth"])) $name_auth = "Гость";
    $smarty->assign('title', $title);
    $smarty->assign('name_auth', $name_auth);
    $content_page = $smarty->fetch("main.tpl");
    $smarty->assign('content_page', $content_page);
}

if($_REQUEST['page'] == "profile" && $auth) {
    $title = "Мой профиль";
    $name_auth = $_SESSION["auth"];
    $smarty->assign('title', $title);
    $smarty->assign('fname_auth', $user_info["name"]);
    $smarty->assign('email_auth', $user_info["email"]);
    $smarty->assign('name_auth', $name_auth);
    $content_page = $smarty->fetch("profile.tpl");
    $name_auth = $smarty->fetch("profile.tpl");
    $fname_auth = $smarty->fetch("profile.tpl");
    $email_auth = $smarty->fetch("profile.tpl");
    $smarty->assign('content_page', $content_page);
}

if($_REQUEST['page'] == "profile" && !$auth) {
    $content_page = $smarty->fetch("login.tpl");
    $smarty->assign('content_page', $content_page);
    }

if(isset($_GET["logout"])) {
    $user->logout();
    $smarty->assign('auth', "");
    $name_auth = "Гость";
    $smarty->assign('name_auth', $name_auth);
    $content_page = $smarty->fetch("main.tpl");
    $smarty->assign('content_page', $content_page);
}
    $smarty->display('index.tpl');
?>