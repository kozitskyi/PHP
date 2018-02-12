<?php
/* Smarty version 3.1.30, created on 2018-02-07 21:19:25
  from "C:\OpenServer\domains\trainee\templates\reg.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a7b432dda3bc1_89832463',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0a01445141a337881c33d5ce8dfc2077aa5bdfc' => 
    array (
      0 => 'C:\\OpenServer\\domains\\trainee\\templates\\reg.tpl',
      1 => 1518027565,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a7b432dda3bc1_89832463 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <title>Регистрация</title>
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
    <div class="form_design reg_form">
        <div class="head_form">Регистрация</div>
        <form action="../reg.php" method="POST">
            <input type="text" name="name" placeholder="Введите имя" autofocus>
            <input type="text" name="login" placeholder="Введите логин">
            <input type="password" name="password" placeholder="Введите пароль">
            <input type="password" name="confirm_password" placeholder="Повторите пароль">
            <input type="email" name="email" placeholder="Введите e-mail">
            <input type="submit" value="Зарегистрироваться">
        </form>
    </div>
</div>


<div id="footer">
    <div class="container_footer">Козицкий Вадим (R)</div>
</div>
</body>
</html><?php }
}
