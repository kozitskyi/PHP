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
<?php
//=================================================
?>
    <a href="?action=register">link1</a><br>
    <a href="?action=register&a=123&b=456">link1</a><br>
    <pre>
    <?php
        print_r($_GET);
    ?>
    </pre>
<?php
//=================================================
?>

</body>
</html>
