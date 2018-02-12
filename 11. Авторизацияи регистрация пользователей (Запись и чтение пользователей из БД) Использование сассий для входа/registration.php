<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Регистрация</title>
    <link href="css/main.css" rel="stylesheet">
</head>
<body>
<div class="regHead">Регистрация</div>
<form action="registration.php" method="post" class="reg">
    <input type="text" name="regLogin" autofocus placeholder="Введите логин"><br>

    <input type="password" name="regPass" placeholder="Введите пароль"><br>

    <input type="password" name="regPassRepeat" placeholder="Повторите пароль"><br>
    <input type="submit" name="sendReg" value="Зарегистрироваться">
</form>





    <?php
    include "login.php";
$flag = false;
    if (isset($_POST["sendReg"])) {
        $user_login_reg= $_POST["regLogin"];
        $user_password_reg = md5($_POST["regPass"]);


        function CheckLogin ($user_info,$user_login_reg){
            while(($row = $user_info->fetch_assoc())!=false){
                if($row["login"]==$user_login_reg) {
                    echo("<div class='error'>Логин занят</div>");
                    $flag = true;
                    return true;

            }


            }
        }


if($flag==false) {
    if (empty($_POST['regLogin']) or empty($_POST['regPass']) or empty($_POST['regPassRepeat'])) echo("<div class='error'>Заполните все данные</div>");
    if (!empty($_POST['regLogin']) && !empty($_POST['regPass']) && !empty($_POST['regPassRepeat']) && $_POST['regPass'] == $_POST['regPassRepeat']) {







        $mysqli = new mysqli("localhost", "dtnqaexg_vadim", "vadik256598", dtnqaexg_RegisteredUsersVadim);
        $user_info = $mysqli->query("SELECT * FROM `users`");
        if(CheckLogin ($user_info,$user_login_reg)) exit;
        $mysqli->query("INSERT INTO `users`(`login`,`password`,`reg_date`) VALUES
('$user_login_reg', '$user_password_reg','".date("d-m-Y")."')");

      //  $user_info = $mysqli->query("SELECT * FROM `users`");
//$delete = $mysqli->query("DELETE FROM `users` WHERE `users`.`login` = 'vadik1'");
//$mysqli->query("ALTER TABLE `users` auto_increment = 1");

        $mysqli->close();

     echo("<script>location.href='index.php'</script>");
    } elseif ($_POST['regPass'] != $_POST['regPassRepeat']) echo("<div class='error'>Пароли не совпадают</div>");
}
    }



?>
</body>
</html>