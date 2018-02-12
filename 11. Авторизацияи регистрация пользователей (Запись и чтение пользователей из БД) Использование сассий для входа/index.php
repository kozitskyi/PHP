<?php
session_start();
include "login.php";



$errorList = array();
//$_SESSION["auth"]=false;
if(isset($_POST["sendAuth"])) {
    if (empty($_POST["login"]) && empty($_POST["password"]))
        echo("<script>location.href='index.php'</script>");
}
if(!empty($_POST["login"]) && !empty($_POST["password"])){
    if(auth($getUsersReal)){
        $_SESSION["auth"] = true;

    }else{
        $errorList[] = "Не правильный логин или пароль";

    }
}

if(isset($_GET["logout"])){
    $_SESSION = array();
    session_destroy();
}


if(isset($_SESSION["auth"])){
    include "entered.php";


    //echo '<a class="logout" href="?logout">Выйти</a>';
}else{
     auth_form($errorList);
}
?>