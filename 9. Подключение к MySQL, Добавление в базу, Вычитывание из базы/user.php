<?php
class User{
    function getInfo($connection){
        $sql = 'SELECT id, name, login, password, email, phone FROM users ORDER BY name';
        echo"<table>";
        foreach ($connection->query($sql) as $row) {

            echo"<tr>";
            echo "<td>";print $row['id'];echo"</td>";
            echo "<td>";print $row['name'];echo"</td>";
            echo "<td>";print $row['login'];echo"</td>";
            echo "<td>";print $row['password'];echo"</td>";
            echo "<td>";print $row['email'];echo"</td>";
            echo "<td>"; print $row['phone'];echo"</td>";
            echo"<tr>";
        }
        echo"</table>";

    }
}
$user = new User;
$user->getInfo($dbh);