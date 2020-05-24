<?php include "db.php"; ?>

<?php
global $connection;

$query = "SELECT * FROM audi";
$result = mysqli_query($connection, $query);

//Ha üresek a táblák, töltse fel teszt adatokkal
error_reporting(0);
if(!mysqli_num_rows($result))
{
    
$query = "CREATE TABLE IF NOT EXISTS autok.citroen ( 
        id INT NOT NULL AUTO_INCREMENT , 
        model VARCHAR(255) NOT NULL , 
        leiras TEXT NOT NULL , 
        leiras_angol TEXT NOT NULL , 
        kep_src VARCHAR(250) NOT NULL , 
        hasznalt_link TEXT NOT NULL , 
        uj_link TEXT NOT NULL , 
        PRIMARY KEY (id))";

$result = mysqli_query($connection, $query);

$query = "CREATE TABLE IF NOT EXISTS seat LIKE citroen";
$result = mysqli_query($connection, $query);
$query = "CREATE TABLE IF NOT EXISTS audi LIKE citroen";
$result = mysqli_query($connection, $query);
$query = "CREATE TABLE IF NOT EXISTS nissan LIKE citroen";
$result = mysqli_query($connection, $query);
    
    echo "A táblák sikeresen elkészültek!";
}
else
{
    echo "Már léteznek a táblák!";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Táblák elkészítése</title>

</head>
<body>
    <a href="fill_tables.php">Ide</a> kattintva feltöltheti a táblákat teszt adatokkal!<br>
    <a href="auto.php">Ide</a> kattintva átmehet a főoldalra!
</body>
</html>