<?php
session_start();
include "php/login.php";

$errorList = array();
//$_SESSION["auth"]=false;
if(isset($_POST["sendAuth"])) {
    if (empty($_POST["login"]) && empty($_POST["password"]))
        echo("<script>location.href='index.php'</script>");
}
if(!empty($_POST["login"]) && !empty($_POST["password"])){
    if(auth($getUsersReal)){
        $_SESSION["auth"] = true;

        if($_POST["login"]=="admin")
        $_SESSION["admin"] = true;

    }else{
        $errorList[] = "Не правильный логин или пароль";

    }
}

if(isset($_GET["logout"])){
    $_SESSION = array();
    session_destroy();
}


if(isset($_SESSION["auth"])){
?>
<html>
    <head>
        <title>База мобильных номеров</title>
        <link href="css/main.css" rel="stylesheet">
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    </head>

    <body>
    <div id="windowTelBase">
        <div id="exit">X</div>
    <?php
    include "php/addPhone.php";
    ?>

<h1>База мобильных номеров</h1>
<form id="searchform" method="post">
    <div>

        <input type="text" name="search_term" autofocus placeholder="Поиск" id="search_term"/>
<!--        <input type="submit" value="Найти" id="search_button"/>-->
    </div>
</form>
<div id="search_results1"><?php include 'php/getPhone.php' ?></div>
<div id="search_results"></div>
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>
<?php


    //echo '<a class="logout" href="?logout">Выйти</a>';
}else{
    auth_form($errorList);
}
?>