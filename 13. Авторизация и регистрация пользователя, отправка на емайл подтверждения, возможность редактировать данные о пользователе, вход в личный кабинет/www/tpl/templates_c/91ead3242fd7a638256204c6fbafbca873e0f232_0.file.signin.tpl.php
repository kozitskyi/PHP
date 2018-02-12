<?php
/* Smarty version 3.1.30, created on 2018-02-08 13:30:49
  from "C:\OpenServer\domains\trainee\tpl\templates\signin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a7c26d9857486_72200164',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '91ead3242fd7a638256204c6fbafbca873e0f232' => 
    array (
      0 => 'C:\\OpenServer\\domains\\trainee\\tpl\\templates\\signin.tpl',
      1 => 1518085846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a7c26d9857486_72200164 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="form_design signin_form">
    <div class="head_form">Вход</div>
    <form action="../signin.php" method="POST">
        <input type="text" name="login" placeholder="Введите логин" autofocus>
        <input type="password" name="password" placeholder="Введите пароль">
        <input type="submit" value="Войти">
    </form>
</div><?php }
}
