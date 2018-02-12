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
    <div class="reg_error">{$reg_error}</div>
</div>