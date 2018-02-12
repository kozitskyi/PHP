<?php




    $itemSearch = $_POST["search_term"];
    function printPeopleInfo($getFromBD)
    {
        echo "<table id='tablePhones'>";
        echo "<td class='idColumn'>ID</td>";
        echo "<td class='idColumn'>ФАМИЛИЯ</td>";
        echo "<td class='idColumn'>ИМЯ</td>";
        echo "<td class='idColumn'>ОТЧЕСТВО</td>";
        echo "<td class='idColumn'>ТЕЛЕФОН</td>";
        while (($row = $getFromBD->fetch_assoc()) != false) {
            echo "<tr>";
            // echo $row['surname']." ".$row['name']." ".$row['patronymic']." ".$row['telephone'];
            echo "<td class='idColumn'>" . $row['id'] . "</td>";
            echo "<td>" . $row['surname'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['patronymic'] . "</td>";
            echo "<td>" . $row['telephone'] . "</td>";


            echo "</tr>";

        }
        echo "Количество номеров: ".$getFromBD->num_rows;
        echo "</table>";
    }

    $mysqli = new mysqli("localhost", "root", "", people);
    $getFromBD = $mysqli->query("SELECT * FROM `phones` WHERE `name` LIKE ('%$itemSearch%') OR `surname` LIKE ('%$itemSearch%') 
OR `telephone` LIKE ('%$itemSearch%') OR `patronymic` LIKE ('%$itemSearch%') ORDER  BY `surname` ASC ");
    printPeopleInfo($getFromBD);

?>
