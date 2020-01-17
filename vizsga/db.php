<?php 
$db = [
    "host" => "localhost",
    "username" => "root",
	"password" => "",
	"database" => "casino"
	];
	
	$connection = mysqli_connect($db["host"], $db["username"], $db["password"], $db["database"]);
	
	if(!$connection)
	{
		die('Hiba az adatbázishoz kapcsolódás során! ' . mysqli_connect_error($connection));
	}
?>