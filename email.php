<?php

if($_POST["message"]) {


	mail("dalamcd@gmail.com", $_POST["name"],
	
	
	$_POST["message"]. $_POST["email"]);
	
	
	}

?>