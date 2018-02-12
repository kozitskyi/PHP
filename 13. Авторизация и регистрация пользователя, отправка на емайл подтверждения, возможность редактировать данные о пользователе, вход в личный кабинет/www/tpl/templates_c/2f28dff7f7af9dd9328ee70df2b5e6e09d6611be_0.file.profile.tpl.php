<?php
/* Smarty version 3.1.30, created on 2018-02-10 21:47:06
  from "C:\OpenServer\domains\trainee\tpl\templates\profile.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a7f3e2a9d7093_76090560',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f28dff7f7af9dd9328ee70df2b5e6e09d6611be' => 
    array (
      0 => 'C:\\OpenServer\\domains\\trainee\\tpl\\templates\\profile.tpl',
      1 => 1518288426,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a7f3e2a9d7093_76090560 (Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="user_info">

        <table class="table_info_user">
            <tr>
                <td><b>Имя:</b> </td>
                <td class="user_name"><?php echo $_smarty_tpl->tpl_vars['fname_auth']->value;?>
</td>
            </tr>
            <tr>
                <td><b>Логин:</b> </td>
                <td class="user_login"><?php echo $_smarty_tpl->tpl_vars['name_auth']->value;?>
</td>
            </tr>
            <tr>
                <td><b>E-mail:</b> </td>
                <td class="user_email"><?php echo $_smarty_tpl->tpl_vars['email_auth']->value;?>
</td>
            </tr>
        </table>

        <button id="btn_edit_profile">Редактировать данные</button>
        <div class="data_saved">Данные успешно изменены.</div>
    </div>

    <div class="page_disabled"></div>

    <div id="window_edit_profile" class="form_design">
        <div class="close_window_edit_profile">X</div>
        <div class="head_form">Редактировать данные</div>
        <div class="content_profile_window">

            <input class="ddd" type="text" name="name" placeholder="Введите новое имя" >
            <input type="text" name="login" placeholder="Введите новый логин">
            <input type="password" name="password" placeholder="Введите новый пароль">
            <input type="password" name="confirm_password" placeholder="Повторите новый пароль">
            <input type="text" name="email" placeholder="Введите новый E-mail">


        </div>
        <div class="errors"></div>
        <button class="save_edits_profile">Сохранить</button>
    </div>
<?php }
}
