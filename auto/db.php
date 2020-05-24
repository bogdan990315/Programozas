<?php 

$db = [
    "host" => "localhost",
    "username" => "root",
	"password" => "",
    "database" => "autok"
    ];

// Csatlakozás létrehozása
$connection = mysqli_connect($db["host"], $db["username"], $db["password"]);

// Csatlakozás tesztelése
if (!$connection)
{
    die("Connection failed: " . mysqli_connect_error($connection));
}

// Adatbázis létrehozása (ha még nincs)
$query = "CREATE DATABASE IF NOT EXISTS " . $db["database"];
$result = mysqli_query($connection, $query);

if (!$result)
{
    die("Connection failed: " . mysqli_connect_error($connection));
}
                             
// csatlakozáshoz adatbázis név rendelés
$connection = mysqli_connect($db["host"], $db["username"], $db["password"], $db["database"]);

?>