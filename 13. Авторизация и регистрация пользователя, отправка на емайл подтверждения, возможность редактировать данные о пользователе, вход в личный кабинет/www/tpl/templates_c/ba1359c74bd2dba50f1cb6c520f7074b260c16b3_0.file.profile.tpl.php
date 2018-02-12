<?php
/* Smarty version 3.1.30, created on 2018-02-08 01:09:28
  from "C:\OpenServer\domains\trainee\templates\profile.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a7b7918a37070_71872189',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba1359c74bd2dba50f1cb6c520f7074b260c16b3' => 
    array (
      0 => 'C:\\OpenServer\\domains\\trainee\\templates\\profile.tpl',
      1 => 1518041358,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a7b7918a37070_71872189 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=EDGE" />
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/edit_profile_window.css">

    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../js/script.js"><?php echo '</script'; ?>
>

    <title>Личный кабинет</title>
</head>
<body>
<div id="header">
    <div class="container_header">Мой сайт</div>
</div>



<div id="menu">
    <ul>
        <li class="main"><a href="/profile/profile.php">Главная</a></li>
        <li class=""><a href="/reg.php">Регистрация</a></li>
        <li class=""><a href="/signin.php">Вход</a></li>
    </ul>
</div>

<div id="content">
    <div id="user_info">

        <ul>
            <li><b>Имя</b>: Вадим</li>
            <li><b>Логин</b>: Korona</li>
            <li><b>E-mail</b>: vadim@korona.com</li>
        </ul>
        <button id="btn_edit_profile">Редактировать данные</button>
    </div>

    <div class="page_disabled"></div>

    <div id="window_edit_profile" class="form_design">
        <div class="close_window_edit_profile">X</div>
        <div class="head_form">Редактировать данные</div>
        <div class="content_profile_window">

            <input class="ddd" type="text" name="editName" placeholder="Введите новое имя" >
            <input type="text" name="editLogin" placeholder="Введите новый логин">
            <input type="text" name="enterOldPass" placeholder="Введите старый пароль">
            <input type="text" name="enterNewPass" placeholder="Введите новый пароль">
            <input type="text" name="comfirmNewPass" placeholder="Повторите новый пароль">
            <input type="text" name="editEmail" placeholder="Введите новый E-mail">
        </div>
        <button class="save_edits_profile">Сохранить</button>
        </div>
</div>


<div id="footer">
    <div class="container_footer">Козицкий Вадим (R)</div>
</div>

</body>
</html><?php }
}
