<?php
//adatbázis adatok
$db = [
		'hostname' => 'localhost',
		'username' => 'root',
		'password' => '',
		'database' => 'loginapp'
	];

	//csatlakozik az adatbázishoz
	$connection = mysqli_connect($db['hostname'], $db['username'], $db['password'], $db['database']);
	
	//ha csatlakozott az adatbázishoz
	if(!$connection)
	{
		//legyen vége a lefutásnak
		die("Sikertelen csatlakozás az adatbázishoz!");
	}