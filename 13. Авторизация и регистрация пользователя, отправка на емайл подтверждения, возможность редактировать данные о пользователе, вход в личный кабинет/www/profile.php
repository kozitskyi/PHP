<?php
if(!$_POST["ajax"]) exit;
include_once "User.class.php";
include_once "config.php";

if(!$_SESSION["auth"]){$smarty->display('index.tpl'); exit;}
$name = $_POST["name"];
$login = $_POST["login"];
$pass = md5($_POST["password"]);
$confirm_pass = md5($_POST["confirm_password"]);
$email = $_POST["email"];
$form = "profile";

$auth = $_SESSION["auth"];
$user = new User();
$user_info = $user->getInfoUser();
$user->regInit($name, $login, $pass, $confirm_pass, $email, $form);
if($user->editUserSuccess()!=true){
    $err = $user->error();
    echo $err;
    return;
}
$to_ajax_info = ["login" => $login, "name" => $name, "email" => $email];
echo json_encode($to_ajax_info);
?>