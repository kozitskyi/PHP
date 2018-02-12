
<?php
function auth_form($aErrorList){
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
    <link href="../css/main.css" rel="stylesheet">
    <title>Авторизация</title>
</head>
<body>
<div class="loginHead">Авторизация</div>
<form action="../?phones" method="post" class="login">

    <input type="text" name="login" autofocus placeholder="Введите логин"><br>

    <input type="password" name="password" placeholder="Введите пароль"><br>
    <input type="submit" name="sendAuth" value="Войти">

</form>

<?php
if(count($aErrorList)){
    echo"<br>";
    foreach($aErrorList as $mess){
        echo "<div class='error'>".$mess."</div>";

    }

}
}

$getUsersReal = array();

function auth($getUsersReal){
    function printResult ($user_info,$user_login,$user_password){
        while(($row = $user_info->fetch_assoc())!=false){
            if($row["login"]==$user_login && $row["password"]==$user_password)

                return true;
        }

    }

    $user_login= $_POST["login"];
    $user_password = md5($_POST["password"]);

    $mysqli = new mysqli("localhost", "root", "", people);


    $user_info = $mysqli->query("SELECT * FROM `logins`");

    $mysqli->close();



    if(printResult($user_info,$user_login,$user_password)) {
        return true;
    }
    else
        return false;

}

?>


</body>
</html>