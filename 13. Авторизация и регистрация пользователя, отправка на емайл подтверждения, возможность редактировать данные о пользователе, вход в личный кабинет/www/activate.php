<?php
include_once "User.class.php";
include_once "config.php";

//подтверждаем email адресс
   if(isset($_GET["activation"])){
       $user = new User();
        $act = $_GET["activation"];
        if($user->activationEmail($act)){
            $title = "Активация";
            $smarty->assign('title', $title);
            $message = "Вы успешно подтвердили свой E-mail адрес.";
            $smarty->assign('message', $message);
            $content_page = $smarty->fetch("message.tpl");
            $smarty->assign('content_page', $content_page);
            $smarty->display('index.tpl');
        }

        else{
            $title = "Активация";
            $smarty->assign('title', $title);
            $message = $user->error();
            $smarty->assign('message', $message);
            $content_page = $smarty->fetch("message.tpl");
            $smarty->assign('content_page', $content_page);
            $smarty->display('index.tpl');
        }
   }



