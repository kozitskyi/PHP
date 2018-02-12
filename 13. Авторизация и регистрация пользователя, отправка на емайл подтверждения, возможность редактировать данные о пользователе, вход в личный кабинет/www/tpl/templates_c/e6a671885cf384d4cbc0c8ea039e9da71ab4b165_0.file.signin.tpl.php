<?php
/* Smarty version 3.1.30, created on 2018-02-07 21:22:51
  from "C:\OpenServer\domains\trainee\templates\signin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a7b43fb24f2c4_12106820',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6a671885cf384d4cbc0c8ea039e9da71ab4b165' => 
    array (
      0 => 'C:\\OpenServer\\domains\\trainee\\templates\\signin.tpl',
      1 => 1518027770,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a7b43fb24f2c4_12106820 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <title>Главная</title>
</head>
<body>
<div id="header">
    <div class="container_header">Мой сайт</div>
</div>



<div id="menu">
    <ul>
        <li class="main"><a href="/index.php">Главная</a></li>
        <li class=""><a href="/reg.php">Регистрация</a></li>
        <li class=""><a href="/signin.php">Вход</a></li>
    </ul>
</div>

<div id="content">
    <div class="form_design signin_form">
        <div class="head_form">Вход</div>
        <form action="../signin.php" method="POST">
            <input type="text" name="login" placeholder="Введите логин" autofocus>
            <input type="password" name="password" placeholder="Введите пароль">
            <input type="submit" value="Войти">
        </form>
    </div>
</div>


<div id="footer">
    <div class="container_footer">Козицкий Вадим (R)</div>
</div>
</body>
</html><?php }
}
