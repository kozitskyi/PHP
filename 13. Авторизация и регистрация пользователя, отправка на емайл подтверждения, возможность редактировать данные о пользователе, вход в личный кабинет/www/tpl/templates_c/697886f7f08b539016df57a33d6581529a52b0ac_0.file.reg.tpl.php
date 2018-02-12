<?php
/* Smarty version 3.1.30, created on 2018-02-11 01:02:43
  from "C:\OpenServer\domains\trainee\tpl\templates\reg.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a7f6c030c5383_90636511',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '697886f7f08b539016df57a33d6581529a52b0ac' => 
    array (
      0 => 'C:\\OpenServer\\domains\\trainee\\tpl\\templates\\reg.tpl',
      1 => 1518300142,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a7f6c030c5383_90636511 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="form_design reg_form">
    <div class="head_form">Регистрация</div>
    <form action="/registration.php" method="POST" >
        <input type="text" name="name" placeholder="Введите имя" autofocus>
        <input type="text" name="login" placeholder="Введите логин">
        <input type="password" name="password" placeholder="Введите пароль">
        <input type="password" name="confirm_password" placeholder="Повторите пароль">
        <input type="text" name="email" placeholder="Введите e-mail">
        <input type="submit" name="submit" value="Зарегистрироваться" class="btn_reg">
    </form>
    <div class="reg_error"><?php echo $_smarty_tpl->tpl_vars['reg_error']->value;?>
</div>
</div><?php }
}
