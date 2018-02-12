<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="/js/validation.js"></script>
    <script src="/js/profileWindow.js"></script>
    <script src="/js/ajaxEditProfile.js"></script>
    <title>{$title}</title>
</head>
<body>
<div id="header">
    <div class="container_header">HTML/CSS/JS/PHP</div>
</div>



<div id="menu">
    <ul>
        <li class="main"><a href="/">Главная</a></li>
        {if $auth}
        <li class=""><a href="./?logout">Выйти</a></li>
        <li class=""><a href="./?page=profile">Мой профиль</a></li>
            {else}
            <li class=""><a href="/registration.php">Регистрация</a></li>
            <li class=""><a href="/login.php">Вход</a></li>
        {/if}
    </ul>
</div>

<div id="content">
{$content_page}
</div>


<div id="footer">
    <div class="container_footer">Козицкий Вадим</div>
</div>
</body>
</html>