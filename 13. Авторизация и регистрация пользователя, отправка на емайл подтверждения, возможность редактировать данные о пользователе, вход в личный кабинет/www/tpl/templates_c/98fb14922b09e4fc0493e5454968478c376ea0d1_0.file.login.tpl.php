<?php
/* Smarty version 3.1.30, created on 2018-02-11 02:12:50
  from "C:\OpenServer\domains\trainee\tpl\templates\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a7f7c7297b117_72221585',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98fb14922b09e4fc0493e5454968478c376ea0d1' => 
    array (
      0 => 'C:\\OpenServer\\domains\\trainee\\tpl\\templates\\login.tpl',
      1 => 1518302814,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a7f7c7297b117_72221585 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="form_design signin_form">
    <div class="head_form">Вход</div>
    <form action="/login.php" method="POST">
        <input type="text" name="login" placeholder="Введите логин" autofocus>
        <input type="password" name="password" placeholder="Введите пароль">
        <input type="submit" name="submit" value="Войти">
        <div class="login_error"><?php echo $_smarty_tpl->tpl_vars['login_error']->value;?>
</div>
    </form>
</div><?php }
}
