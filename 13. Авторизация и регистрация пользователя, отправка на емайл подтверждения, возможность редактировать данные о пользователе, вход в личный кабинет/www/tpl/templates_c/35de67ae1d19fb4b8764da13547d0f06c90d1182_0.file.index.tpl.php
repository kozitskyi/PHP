<?php
/* Smarty version 3.1.30, created on 2018-02-11 12:06:08
  from "C:\OpenServer\domains\trainee\tpl\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a8007808e3a68_37214554',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35de67ae1d19fb4b8764da13547d0f06c90d1182' => 
    array (
      0 => 'C:\\OpenServer\\domains\\trainee\\tpl\\templates\\index.tpl',
      1 => 1518339968,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a8007808e3a68_37214554 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/js/validation.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/js/profileWindow.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/js/ajaxEditProfile.js"><?php echo '</script'; ?>
>
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>
<body>
<div id="header">
    <div class="container_header">HTML/CSS/JS/PHP</div>
</div>



<div id="menu">
    <ul>
        <li class="main"><a href="/">Главная</a></li>
        <?php if ($_smarty_tpl->tpl_vars['auth']->value) {?>
        <li class=""><a href="./?logout">Выйти</a></li>
        <li class=""><a href="./?page=profile">Мой профиль</a></li>
            <?php } else { ?>
            <li class=""><a href="/registration.php">Регистрация</a></li>
            <li class=""><a href="/login.php">Вход</a></li>
        <?php }?>
    </ul>
</div>

<div id="content">
<?php echo $_smarty_tpl->tpl_vars['content_page']->value;?>

</div>


<div id="footer">
    <div class="container_footer">Козицкий Вадим</div>
</div>
</body>
</html><?php }
}
