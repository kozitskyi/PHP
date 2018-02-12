<div class="form_design signin_form">
    <div class="head_form">Вход</div>
    <form action="/login.php" method="POST">
        <input type="text" name="login" placeholder="Введите логин" autofocus>
        <input type="password" name="password" placeholder="Введите пароль">
        <input type="submit" name="submit" value="Войти">
        <div class="login_error">{$login_error}</div>
    </form>
</div>