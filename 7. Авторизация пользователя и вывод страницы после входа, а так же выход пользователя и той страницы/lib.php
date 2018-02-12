<?php
//include_once("config.php");

function auth($aLogin,$aPassword){

	if($aLogin == "Vasiliy" && $aPassword == "secret")
		return true;
	else
		return false;
	/*
	global $dbh;
	$st = $dbh->prepare("SELECT * from `users` 
	   WHERE `login` = :login and `password` = MD5(:password)");
	$st->bindParam(":login", $aLogin, PDO::PARAM_STR, 50);   
	$st->bindParam(":password", $aPassword, PDO::PARAM_STR);   
	$st->execute();
	$result = $st->fetchAll();
	//var_dump($result);
	if(count($result) > 0) return true;
	return false;
	*/
}

function auth_form($aErrorList){
?>
	<form action="?" method="POST">
		
		<input type="text" placeholder="Login" name="login"/><br>
		<input type="password" placeholder="Password" name="password"/><br>
		<input type="submit" value = "send"/>
	</form>
	
<?php
	if(count($aErrorList)){
		echo "<ul>";
		foreach($aErrorList as $mess){
			echo "<li>".$mess."</li>";
		}
		echo "</ul>";
	}
}