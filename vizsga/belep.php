<!DOCTYPE html>
<html>
    <head>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </head>

            <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">  
            <!-- NAVBAR KÉP-->
            <a class="navbar-brand" href="index.php">
                <img src="img/logos/BogdanCasino2.png" width="100" height="45" alt="casino_logo">
            </a>
            
            <!-- MENÜ ÖSSZEZÁRÓ -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <!-- MENÜ PONTOK -->
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Főoldal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="jatekok.php">Játékok</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="szabalyok.php">Szabályzat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="faq.php">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="kapcsolat.php">Kapcsolat</a>
                    </li>
                </ul>
                
                <!-- BELÉPÉS VAGY PROFIL -->
                <ul class="navbar-nav ml-auto">
                    <?php login();?>
                </ul>
            </div>
            
    </body>  
</html>