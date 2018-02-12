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


<?php



    if(isset($_GET["action"]) && $_GET["action"] == "link1"){
        echo "Link 1";
    }else{
        echo "<a href='?action=link1'>Link 1</a>";
    }
    echo "&nbsp;&nbsp;";
    if(isset($_GET["action"]) && $_GET["action"] == "link2"){
        echo "Link 2";
    }else{
        echo "<a href='?action=link2'>Link 2</a>";
    }

    echo "<br>";

    if(isset($_GET["action"])){
        switch($_GET["action"]){
            case "link1":{
                echo "<h1>Page 1</h1>";
            }break;
            case "link2":{
                echo "<h1>Page 2</h1>";
            }break;
        }
    }else{
        echo "<h1>Index</h1>";
    }
?>

<?php
//=================================================
?>

</body>
</html>
