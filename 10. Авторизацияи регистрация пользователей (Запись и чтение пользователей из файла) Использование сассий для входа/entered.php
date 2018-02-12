<?php

if(isset($_SESSION["auth"])) {

    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <link rel="shortcut icon" href="vadim/images/logo.ico">
        <link rel="stylesheet" href="vadim/css/main.css">
        <link rel="stylesheet" href="css/main.css">
        <meta charset="UTF-8">
        <title>Vadim Kozitskiy</title>
    </head>
    <body>
    <div class="main">
        <div class="logout"><a href="index.php?logout">Выйти</a></div>
        <div class="image1"><a href="vadim/photo.php"><img src="vadim/images/1.png"></a></div>
        <div class="Vadim"><a href="http://kozitskiy.ru">Vadim Kozitskiy</a></div>
        <div class="kacap"><a href="vadim/nefa.php">Видео</a></div>
    </div>
    </body>
    </body>
    </html>

    <?php

}

else
    echo "Error"
        ?>