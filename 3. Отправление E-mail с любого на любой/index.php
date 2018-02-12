<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link style=""><link rel="stylesheet" type="text/css" href="style.css"> <meta name="viewport"

    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Отправить email</title>
</head>
<body>





<?php
echo "<div id='EmailSendForm'>";
echo "<div id=\"sendEmail\">Оправка E-mail</div>";
echo "<form action=\"?action=mail\" method=\"post\">";
echo "<label><span>От кого (E-mail)</span><input placeholder='От кого (E-mail)' autofocus  name=\"from\" type=\"text\"></label>";
echo "<span>Кому (E-mail)</span><input placeholder='Кому (E-mail)' name=\"to\" type=\"text\">";
echo "<span>Тема</span> <input placeholder='Тема' name=\"topic\" type=\"text\">";
echo "<span>Текст сообщения</span> <textarea placeholder='Текст сообщения' name=\"textarea\" type=\"text\"></textarea>";
echo "<input id='btnSend'  name=\"send\" type=\"submit\">";
echo "</form>";
echo "</div>";

if(isset($_POST["from"])&&isset($_POST["to"]) &&isset($_POST["textarea"])&&isset($_POST["topic"])) {
    $mailFrom = htmlspecialchars($_POST["from"]);
    $mailTo = htmlspecialchars($_POST["to"]);
    $textarea = htmlspecialchars($_POST["textarea"]);
    $topic = htmlspecialchars($_POST["topic"]);



    $to = "$mailTo";
    $subject = "$topic";
    $message = "$textarea";
    $headers = "From: $mailFrom" . "\r\n" .
        "Reply-To: $mailFrom " . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);
    $mailFrom = "";
    $mailTo = "";
    $textarea = "";
//
//if(isset($_POST["send"])) {
//    echo "<script>";
//    echo "   btnSend.onclick=function(){";
//    echo "        alert(\"Сообщение отправлено\");}";
//    echo "</script>";
//}


    echo '<script>var btn = document.getElementById("btnSend"); btn.value ="Отправлено"; btn.style.background = "blue"</script>';
     echo '<script> setTimeout(function(){location.replace("index.php");},800)</script>'; exit;

}

?>

</body>
</html>
