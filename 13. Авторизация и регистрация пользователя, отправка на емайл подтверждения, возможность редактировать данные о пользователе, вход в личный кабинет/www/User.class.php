<?php
session_start();
class User
{
    public $id;
    public $name;
    public $login;
    public $password;
    public $confirm_password;
    public $email;
    public $form;
    public $user_info = [];
    private $err;

    public function regInit($name, $login, $password, $confirm_password, $email, $form)
    {
        $this->name = $name;
        $this->login = $login;
        $this->password = $password;
        $this->confirm_password = $confirm_password;
        $this->email = $email;
        $this->form = $form;
    }

    //подключение к базе данных
    public function connect()
    {
        $db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        if (!$db) {
            exit("No connection with database");
        } else return $db;
    }

    //проверка форм на валидность
    public function validationForm()
    {
        $emailRegular = "/[a-z_-]+@[a-z]+\.[a-z]+/";
        $loginRegular = "/[A-Za-z]+_?[A-Za-z]+\d*/";

        //проверяем что к нам пришло в класс на проверку (регистрация(reg)/редактирование(profile)) пользователя
        if($this->form == "profile") {
            $flag = false;
            if ($this->email != "") {
                if (!preg_match($emailRegular, $this->email) == true) $flag=true;

            }
            if($this->login!=""){
                if(!preg_match($loginRegular, $this->login) == true) $flag=true;

            }

            if($this->password!=""){
                if($this->password!=$this->confirm_password) $flag=true;

            }
            if($flag) return false;
            else return true;
        }

        //проверяем что к нам пришло в класс на проверку (регистрация(reg)/редактирование(profile)) пользователя
        if($this->form == "reg") {
            if (preg_match($loginRegular, $this->login) == true && preg_match($emailRegular, $this->email) == true && $this->password == $this->confirm_password)
                return true;
            else {
                $this->err = "Данные заданы не корректно";
                return false;
            }
        }
    }

    //проверка пользователя на уникальность (регистрация/редактирования) пользователя
    public function uniqueUser()
    {
        $all_users = $this->connect()->query("SELECT * FROM `users`");
        while (($row = $all_users->fetch_assoc()) != false) {
            if (strtolower($row["login"]) == strtolower($this->login)) {
                $this->err = "Логин занят";
                return false;
            } elseif ($row["email"] == $this->email) {
                $this->err = "E-mail занят";
                return false;
            }
        }
        return true;
    }

    //авторизация пользователя после проверок еть ли такой и подтвердил ли он свой email
    public function authUserSuccess($login, $password)
    {
        $all_users = $this->connect()->query("SELECT * FROM `users`");
        while (($row = $all_users->fetch_assoc()) != false) {
            if (strtolower($row["login"]) == strtolower($login) && $row["password"] == $password && $row["status"]=="2")
            {
                $_SESSION["auth"] = $login;
                return true;
            }
        }
            $this->err = "Неверный логин или пароль";
            return false;
    }

    //активируем пользователя по временной ссылке, если он подтвердил свой email
    public function activationEmail($act_code)
    {
        $all_users = $this->connect()->query("SELECT * FROM `users`");
        while (($row = $all_users->fetch_assoc()) != false) {
            if ($row["activation"] == $act_code && $row["status"]=='1')
            {
                $query = $this->connect()->query("SELECT id FROM `users` WHERE activation='$act_code'");
                $row = $query->fetch_assoc();
                $id = $row["id"];
                $this->connect()->query("UPDATE `users` SET status='2' WHERE id ='$id'");
                $this->connect()->query("UPDATE `users` SET activation='' WHERE id='$id'");
                return true;
            }
        }
        $this->err = "Вы уже прошли подтверждение или ссылка на подтверждение не валидна";
        return false;
    }

    //отправляем email с подтверждением пользователя
    public function sendMail($act){
        $mailFrom = MAIL_FROM;
        $mailTo = $this->email;
        $subject = "Подтверждение E-mail адреса";
        $host = $_SERVER['HTTP_HOST'];
        $message = "Здравствуйте! Для подтверждения регистрации перейдите пожалуйста по ссылке: http://$host/activate.php?activation=".$act;

        $headers = "From: $mailFrom" . "\r\n" .
            "Reply-To: $mailFrom " . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
        mail($mailTo, $subject, $message, $headers);
    }

    //регистрируем пользователя, который прошел все проверки
    public function regUserSuccess()
    {
        if($this->uniqueUser() && $this->validationForm()) {
            $act = md5($this->email . time());
            $this->sendMail($act);
            $login = strtolower($this->login);
            $this->connect()->query("INSERT INTO `users`(`name`,`login`,`password`,`email`,`activation`,`status`) VALUES
('$this->name','$login', '$this->password','$this->email','$act',1)");
            return true;
        }
        else return false;
    }

    //редактируем пользователя, который прошел все проверки
    public function editUserSuccess()
    {
        if($this->uniqueUser() && $this->validationForm()) {
            $id = $this->getInfoUser()["id"];
            $empty_pass = md5("");
            if($this->name!="")
                $this->connect()->query("UPDATE `users` SET name='$this->name' WHERE id='$id'");
           if($this->email!="")
            $this->connect()->query("UPDATE `users` SET email='$this->email' WHERE id='$id'");

            if($this->password!=$empty_pass && $this->confirm_password!=$empty_pass) {
                $this->connect()->query("UPDATE `users` SET password='$this->password' WHERE id='$id'");
            }

            if($this->login!=""){
                $this->connect()->query("UPDATE `users` SET login='$this->login' WHERE id='$id'");
                $_SESSION["auth"] = $this->login;
            }

            return true;
        }
        else {

            return false;
        }

    }
    //получаем информацию о пользователях из БД
    public function getInfoUser(){
        if($_SESSION["auth"]){
            $login = $_SESSION["auth"];
            $query = $this->connect()->query("SELECT * FROM `users` WHERE login = '$login'");
            $row = $query->fetch_assoc();
            $this->user_info["id"] = $row["id"];
            $this->user_info["name"] = $row["name"];
            $this->user_info["email"] = $row["email"];
            return $this->user_info;
        }
    }

    //передаем ошибку в случае ложной отработки метода
    public function error()
    {
        return $this->err;
    }

    //уничтожаем работу сессии (выход из кабинета)
    public function logout()
    {
        session_destroy();
    }
}
?>