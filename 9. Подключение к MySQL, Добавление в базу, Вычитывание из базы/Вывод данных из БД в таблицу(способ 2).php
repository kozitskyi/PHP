<?php
$dsn = 'mysql:dbname=win;host=127.0.0.1:3306';
$user = 'root';
$password = '';

try {
    $dbh = new PDO($dsn, $user, $password,array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
//    $sth = $dbh->prepare("INSERT INTO `users` (name,login,password,email,phone) VALUES (?,?,MD5(?),?,?)");
//    $sth->execute(array("user1", "user1","123","mail@mail.a","2332323"));
//    $sth->execute(array("user2", "user2","234","rar@mail.a","1231231"));
    $sel=$dbh->query("SELECT name,login,email,phone,state  FROM `users`");
    $userdb=new user();
    $userdb->show($sel);

} catch (PDOException $e) {
    echo 'Подключение не удалось: ' . $e->getMessage();
}
class user{
    public $name,$email,$phone,$state;
    public function show($table){
        $buf="<table><tr>";
        foreach ($table as $item){
            $buf.="<td style='border:solid 1px black'>".$item["name"]."</td>";
            $name[]=$item["name"];
            $buf.="<td style='border:solid 1px black'>".$item["login"]."</td>";
            $login[]=$item["login"];
            $buf.="<td style='border:solid 1px black'>".$item["phone"]."</td>";
            $phone[]=$item["phone"];
            $buf.="<td style='border:solid 1px black'>".$item["state"]."</td></tr>";
            $state[]=$item["state"];
        }
        $buf.="</table>";
       echo $buf;
    }

//    public function sho(){
//        foreach ($this->name as $item){
//
//        }
//    }

}
