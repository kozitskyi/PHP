<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="game.css">
    <link rel="stylesheet" href="game_table.css">
    <title>Парсинг</title>
</head>
<body>

<div id="show_table_game">

<?php


$ali=file_get_contents("https://gg.bet/ru/betting/s");
$out=[];
preg_match_all("/<section class=\"container reduser betting__wrapper\">.*<\/section>/s",$ali,$out);
//$fout=preg_replace("/\s<i class=\"zap\"><\/i>/","",$out[1]);

echo($out[0][0]);
echo ('<br>');
?>

</div>

</body>
</html>




