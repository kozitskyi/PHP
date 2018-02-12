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
        foreach ($getUsersReal as $key => $value) {
            if($_POST['regLogin']==$key) {
                echo("<div class='error'>Логин занят</div>");
                $flag =true;
            }

        }
if($flag==false) {
    if (empty($_POST['regLogin']) or empty($_POST['regPass']) or empty($_POST['regPassRepeat'])) echo("<div class='error'>Заполните все данные</div>");
    if (!empty($_POST['regLogin']) && !empty($_POST['regPass']) && !empty($_POST['regPassRepeat']) && $_POST['regPass'] == $_POST['regPassRepeat']) {

        $users = array();
        $users[$_POST["regLogin"]] = $_POST["regPass"];
// открываем файл, если файл не существует,
//делается попытка создать его
        $fileUsers = fopen("RegisteredUsers.txt", "a");
// записываем в файл текст
        foreach ($users as $key => $value) {
            fwrite($fileUsers, $key . ":" . $users[$key] . PHP_EOL);
        }
// закрываем
        fclose($fileUsers);
         echo("<script>location.href='index.php'</script>");
    } elseif ($_POST['regPass'] != $_POST['regPassRepeat']) echo("<div class='error'>Пароли не совпадают</div>");
}
    }



?>
</body>
</html>