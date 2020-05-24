<?php
$db = [
		'hostname' => 'localhost',
		'username' => 'root',
		'password' => '',
		'database' => 'loginapp'
];

function kiiras($szam1, $szam2)
{
	echo $szam1 + $szam2;
}


if(isset($_POST['submit']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if($username && $password)
	{
		echo $username . '<br>' . $password . '<br>';
		
		$connection = mysqli_connect($db['hostname'], $db['username'], $db['password'], $db['database']);
		
		if($connection)
		{
			echo 'Sikeres csatlakozás az adatbázishoz!';
		}
		else
		{
			die("Sikertelen csatlakozás az adatbázishoz!");
		}
	}
	
}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>login</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	</head>
	<body>
		<div class="container">
			<div class="col-xs-6">
				<form action="" method="post">
					<div class="form-group">
					<label for="username">Username</label>
					<input type="text" name="username" class="form-control">
					</div>
					
					<div class="form-group">
					<label for="password">Password</label>
					<input type="password" name="password" class="form-control">
					</div>
					
					<input type="submit" name="submit" class="btn btn-primary">
				</form>
			</div>
		</div>
	
	
	</body>
</html>

