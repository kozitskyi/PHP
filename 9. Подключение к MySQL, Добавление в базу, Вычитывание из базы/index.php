<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Вывод из БД</title>
    <link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>

</body>
</html>
<?php
/* Подключение к базе данных MySQL, используя вызов драйвера */
$dsn = 'mysql:dbname=kozitskiyBD;host=127.0.0.1';
$user = 'root';
$password = '';

try {
    $dbh = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_WARNING));
} catch (PDOException $e) {
    echo 'Подключение не удалось: ' . $e->getMessage();
    die();
}

    /* Выполнение запроса с передачей ему массива параметров */
    $sth = $dbh->prepare("INSERT INTO `users`(name, login,password,email,phone)VALUES(?,?,MD5(?),?,?)");
    $sth->execute(array("user1", "user1", "pass1", "mail@mail.com", "39074938475"));

function getFruit($conn) {
    $sql = 'SELECT name, color, calories FROM fruit ORDER BY name';
    foreach ($conn->query($sql) as $row) {
        print $row['name'] . "\t";
        print $row['color'] . "\t";
        print $row['calories'] . "\n";
    }
}

require "user.php";
?>