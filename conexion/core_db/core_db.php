<?php 
    //session_start();

	$conn = new PDO('mysql:host=localhost; dbname=preubamussa','root','');
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$conn->exec("SET CHARACTER SET utf8");
?>