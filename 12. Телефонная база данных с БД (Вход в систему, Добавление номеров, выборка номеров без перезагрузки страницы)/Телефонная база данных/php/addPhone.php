
<!--<div class="addPhoneForm">Авторизация</div>-->
<?php
if(isset($_SESSION["auth"]) && isset($_SESSION["admin"])) {
    ?>
    <form action="../?phones" method="post" class="addPhoneForm">
        <input type="text" name="surname" autofocus placeholder="Фамилия">
        <input type="text" name="name"  placeholder="Имя">
        <input type="text" name="patronymic" placeholder="Отчество">
        <input type="text" name="telephone" placeholder="Телефон">
        <input type="submit" name="btnAddNumber" value="Добавить">

    </form>
    <style>
        h1{
            margin-top: 10px;
        }

    </style>
    <?php
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $patronymic = $_POST["patronymic"];
    $phone = $_POST["telephone"];
    if($_POST['patronymic']=="")$_POST['patronymic']=" ";

        if (isset($_POST["btnAddNumber"])) {



                function CheckTel($getFromBD)
                {

                    while (($row = $getFromBD->fetch_assoc()) != false) {


                        if($row["telephone"]==$_POST["telephone"]){
                            return true;
                        }

                        // echo $row['surname']." ".$row['name']." ".$row['patronymic']." ".$row['telephone'];



                    }

                }

            $mysqli = new mysqli("localhost", "root", "", people);
            $getFromBD = $mysqli->query("SELECT telephone FROM `phones`");

            if(!CheckTel($getFromBD)) {
                if (!preg_match("/0(67|99|95|73|63|50|68|98|97|96|66|93|71)[0-9]{7}/", $_POST['telephone']) ||
                    !preg_match("/[А-Я][а-я]+/", $_POST['surname']) ||
                    !preg_match("/[А-Я][а-я]{2,25}/", $_POST['name']) ||
                    !preg_match("/([А-Я][а-я]{2,25}| )/", $_POST['patronymic'])) echo "Данные введены не корректно";
                else {

                    $mysqli = new mysqli("localhost", "root", "", people);
                    $success = $mysqli->query("INSERT INTO `phones`(`name`,`surname`,`patronymic`,`telephone`,`added`) VALUES
('$name','$surname', '$patronymic','$phone','".date("d.m.Y")."')");


//$delete = $mysqli->query("DELETE FROM `users` WHERE `users`.`login` = 'vadik1'");
//$mysqli->query("ALTER TABLE `users` auto_increment = 1");


                    $mysqli->close();
                    echo "Номер добавлен";
                }
            }
            else{
                echo "Номер уже существует в базе!";
            }
        }

}
?>