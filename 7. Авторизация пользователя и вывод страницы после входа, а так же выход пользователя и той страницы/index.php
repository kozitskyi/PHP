<?php
	session_start();
	include_once("lib.php");
	
	$errorList = array();
	
	if(!empty($_POST["login"]) && !empty($_POST["password"])){
		if(auth($_POST["login"],$_POST["password"])){
			$_SESSION["auth"] = true;
		}else{
			$errorList[] = "Invalid login or password.";
		}
	}
	
	if(isset($_GET["logout"])){
		$_SESSION = array();
		session_destroy();
	}
	
	
	if(isset($_SESSION["auth"])){
		echo "Wellcome.";
		echo '<a href="?logout">Logut...</a>';
	}else{
		auth_form($errorList);
	}
	
	
	
	
	//var_dump($r);