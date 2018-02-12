
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
    <link href="css/main.css" rel="stylesheet">
    <title>Авторизация</title>
</head>
<body>
<div class="loginHead">Авторизация</div>
<form action="index.php" method="post" class="login">

    <input type="text" name="login" autofocus placeholder="Введите логин"><br>

    <input type="password" name="password" placeholder="Введите пароль"><br>
    <input type="submit" name="sendAuth" value="Войти">
    <input type="button" value="Зарегистрироваться" onClick='location.href="registration.php"'>

</form>

<?php
if(count($aErrorList)){
   echo"<br>";
    foreach($aErrorList as $mess){
        echo "<div class='error'>".$mess."</div>";
    }

}
}


$getName = array();
$getPass = array();
$getUsersReal = array();
$file_handle = fopen("RegisteredUsers.txt", "r");
while (!feof($file_handle)) {
    $line = fgets($file_handle);
   // echo $line;
    preg_match("/^(.*?)(:)/", $line, $getName[]);
    preg_match("/[^:]*$/", $line, $getPass[]);
}


for($i=0; $i<count($getPass)-1; $i++)
    $getUsersReal[$getName[$i][1]] = $getPass[$i][0];
//print_r( $getPass[strlen($getName)-2]);
//print_r ($getUsersReal["login "]);
echo "<br>";
fclose($file_handle);

//auth($getUsersReal);


function auth($getUsersReal){
$login = $getUsersReal[$_POST["login"]];
$pass = $_POST["password"];
$truepass="";
$truname="";
    for($i=0; $i<strlen($login)-2; $i++){
        $truepass.=$login[$i];
        $truname.=$pass[$i];
    }
    if($truepass==$pass&&$truepass&&$pass) {
    return true;
    }
    else
        return false;

}

?>


</body>
</html>