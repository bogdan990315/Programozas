<?php include "db.php";?>
<?php

function showIds()
{
    global $connection;
	$query = "SELECT * FROM users ";
	$result = mysqli_query($connection, $query);
	if(!$result)
	{
		die("Query failed!" . mysqli_error($connection));
	}

	while($row = mysqli_fetch_assoc($result))
	{
		$id = $row["id"];
		echo "<option value='$id'>$id</option>";
	}
}

function showCustomData()
{
    if(isset($_POST['submit']))
    {
        global $connection;
        $id = $_POST["id"];
        $query = "SELECT * FROM users ";
        $query .= "WHERE id = $id ";
        $result = mysqli_query($connection, $query);

        $user = mysqli_fetch_assoc($result);
        $uname = $user["username"];
        $pw = $user["password"];
        echo "ID: " . $id . "<br>" . "Felhasználónév: " . $uname . "<br>" . "Jelszó: " . $pw;
    }
}

function showAllData()
{
	global $connection;
	$query = "SELECT * FROM users ";
	$result = mysqli_query($connection, $query);
	if(!$result)
	{
		die("Query failed!" . mysqli_error($connection));
	}


	while($row = mysqli_fetch_assoc($result))
	{
		$id = $row['id'];
		echo "<option value='$id'>$id</option>";
	}
}

function updateTable()
{
    if(isset($_POST['submit']))
    {
        global $connection;
        $username = $_POST["username"];
        $password = $_POST["password"];
        $id = $_POST['id'];

        $query = "UPDATE users SET ";
        $query .= "username = '$username', ";
        $query .= "password = '$password' ";
        $query .= "WHERE id = $id ";

        $result = mysqli_query($connection, $query);

        if(!$result)
        {
            die("valami nem jó! " . mysqli_error($connection));
        }
        else
        {
            echo "Record updated!";
        }
    }
}

function deleteRow()
{
    if(isset($_POST['submit']))
    {
        global $connection;
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];

        $query = "DELETE FROM users ";
        $query .= "WHERE id = $id ";

        $result = mysqli_query($connection, $query);

        if(!$result)
        {
            die("valami nem jó! " . mysqli_error($connection));
        }
        else
        {
            echo "Record deleted!";
        }
    }
}

function createRow()
{
    if(isset($_POST['submit']))
    {
        global $connection;
        $username = $_POST['username'];
        $password = $_POST['password'];

        //escape characters to db
        $username = mysqli_real_escape_string($connection, $username);
        $password = mysqli_real_escape_string($connection, $password);
            
        //ha van username és password
        if($username && $password)
        {
            if(!$connection)
            {
                //legyen vége a lefutásnak
                die("Sikertelen csatlakozás az adatbázishoz!");
            }
            
            $query = 'INSERT INTO users(username, password) ';
            $query .= "VALUES ('$username', '$password')";
            $result = mysqli_query($connection, $query);
            if(!$result)
            {
                die('Query failed!' . mysqli_error($connection));
            }
            else
            {
                echo "Record Created!";
            }
        }
        //ha nincs username vagy password
        else
        {
            if(!$username)
            {
                echo "Adjon meg egy felhasználónevet!";
            }
            else
            {
                echo "Adjon meg egy jelszót!";
            }
        }
    }
}

function readRows()
{
    global $connection;
    $query = 'SELECT * FROM users';
	$result = mysqli_query($connection, $query);
	
	if(!$result)
	{
		die('Query failed!' . mysqli_error($connection));
	}
    
    while($row = mysqli_fetch_assoc($result))
    {
        print_r($row);
    }
}