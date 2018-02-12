<?php
include_once "User.class.php";
include_once "config.php";

    if($_SESSION["auth"]){$smarty->display('index.tpl'); exit;}
          $title = "Регистрация";
          $smarty->assign('title', $title);
    if (isset($_POST["submit"])) {
        $name = $_POST["name"];
        $login = $_POST["login"];
        $pass = md5($_POST["password"]);
        $confirm_pass = md5($_POST["confirm_password"]);
        $email = $_POST["email"];
        $form = "reg";
        $user = new User();
        $user->regInit($name, $login, $pass, $confirm_pass, $email, $form);



        if ($user->regUserSuccess()) {
            $message = "На Ваш E-mail адрес было выслано письмо с подтверждением.";
            $smarty->assign('message', $message);
            $content_page = $smarty->fetch("message.tpl");
            $smarty->assign('content_page', $content_page);
            $smarty->display('index.tpl');
        } else {
            $reg_error = $user->error();
            $smarty->assign('reg_error', $reg_error);
            $content_page = $smarty->fetch("reg.tpl");
            $smarty->assign('content_page', $content_page);
            $smarty->display('index.tpl');
        }
    } else {
        $content_page = $smarty->fetch("reg.tpl");
        $smarty->assign('content_page', $content_page);
        $smarty->display('index.tpl');

}
?>


