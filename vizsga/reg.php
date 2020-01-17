<?php include "db.php";?>
<?php 
	global $connection;
	if(isset($_POST["submit"]))
	{
		
		$username = $_POST["username"];
		$password = $_POST["password"];
		$email = $_POST["email"];
		$date = $_POST["date_of_birth"];
			
		/* felhasználónév ellenőrzés*/
		$query = "SELECT * FROM users WHERE username = '$username'";
		$result = mysqli_query($connection, $query);
		
		if(mysqli_num_rows($result)>=1)
		{
			die ("Ez a felhasználónév már foglalt!");
		}
		
		/* email ellenőrzés */
		$query = "SELECT * FROM users WHERE email = '" . $email . "'";
		$result = mysqli_query($connection, $query);
		
		if(mysqli_num_rows($result)>=1)
		{
			die ("Ez az email cím már regisztrálva van!");
		}
		
		/* jelszó ellenőrzés */
		
		if($_POST["password"] != $_POST["password2"])
		{
			die("Nem egyeznek a jelszavak!");
		}
		
		
		$query = "INSERT INTO users ";
		$query .= "(username, password, email, date_of_birth) ";
		$query .= "VALUES ";
		$query .= "('$username', '$password', '$email', '$date')";
		
		$result = mysqli_query($connection, $query);
		
		echo "Sikeres regisztráció!";
	}
	
	


?>
<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	
	<script>
		
	$(function() {
	
	});

	</script>
	
	<style>
		#reg_div
		{
			margin: 20px;
			width: 30%;
		}

	</style>
	
	</head>
	<body>
		
		<!-- REGISTRATION -->
		<div id="reg_div">
			<form action="" method="post">
				<div class="form-group">
					<label for="inputUsername">Felhasználónév</label>
					<input type="username" name="username" class="form-control" id="inputUsername" placeholder="Felhasználónév" required>
				</div>
				<div class="form-group">
					<label for="inputPassword1">Jelszó</label>
					<input type="password" name="password" class="form-control" id="inputPassword" placeholder="Jelszó" required>
				</div>
				<div class="form-group">
					<label for="inputPassword2">Jelszó ismét</label>
					<input type="password" name="password2" class="form-control" id="inputPassword2" placeholder="Jelszó ismét" required>
				</div>
				<div class="form-group">
					<label for="inputEmail">Email cím</label>
					<input type="email" name="email" class="form-control" id="inputEmail" placeholder="proba@pelda.com" required>
					<small id="emailHelp" class="form-text text-muted">Email címed nem adjuk ki senkinek!</small>
				</div>
				<div class="form-group">
					<label for="dateOfBirth">Születési dátum</label>
					<input type="date" name="date_of_birth" class="form-control" id="date_of_birth" required>
				</div>
				<div class="form-check">
					<input type="checkbox" class="form-check-input" id="check" required>
					<label class="form-check-label" for="check">Elfogadom a <a href="felhasznalasi.php">felhasználási feltételek</a>et!</label>
				</div>
				
				<button type="submit" name="submit" class="btn btn-primary" style="margin: 10px 0px;">Elküld</button>
				
			</form>
		</div>

	</body>
</html>