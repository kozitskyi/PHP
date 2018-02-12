<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="?action=abc" method="post">
    Text1 <input name="text1" type="text"><br>
    Text2 <input name="text2" type="text"><br>
    <input type="submit" value="send">
</form>
<?php
    echo "<pre>";

    print_r($_GET);
    print_r($_POST);

echo "</pre>";
?>
</body>
</html>
