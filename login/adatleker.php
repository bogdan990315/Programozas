<?php include "db.php";?>
<?php include "functions.php";?>

<?php 
showCustomData();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Adat bekérés</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        
        <style>
            *
            {
                margin: 10px;
            }
        </style>
    </head>
    <body>
        <div class="col-xs-6">
            <div class="form-group">
                <form action="" method="post">
                   
                    <div class="form-group">
                        <select name="id">
                            <?php
                                showIds();
                            ?>
                        </select>
                    </div>
                <input type="submit" name="submit" value="Lekérdez" class="btn btn-primary">
                
                </form>
            </div>
        </div>	
    </body>
</html>