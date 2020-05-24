<?php include "db.php"; ?>

<?php
global $connection;

session_start();

if(!isset($_SESSION['lang']))
{
    $_SESSION['lang'] = "magyar";
}

if(isset($_POST['nyelv']))
{
    if($_POST['nyelv'] == "Magyar" || $_POST['nyelv'] == "Hungarian")
    {
        $_SESSION['lang'] = "magyar";
    }
    else
    {
        $_SESSION['lang'] = "angol";
    }
}


if($_SESSION['lang'] == "magyar")
{
    $title = "autók";
    $choose = "Válasszon egy autó márkát!";
    $tipus = "Válasszon egy típust!";
    $leiras = "Az autó leírása:";
    $hasznalt = "Használt";
    $uj = "Új";
    $languages = "Elérhető nyelvek:";
    $hun = "Magyar";
    $eng = "Angol";
    $kesziteto = "Készítette: Bogdán Krisztián";
}
else if($_SESSION['lang'] == "angol")
{
    $title = "cars";
    $choose = "Choose a car type!";
    $tipus = "Choose a car model!";
    $leiras = "The car's description:";
    $hasznalt = "Used";
    $uj = "New";
    $languages = "Available languages:";
    $hun = "Hungarian";
    $eng = "English";
    $kesziteto = "Author: Krisztian Bogdan";
}



?>


<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        $(function() {
            

            //márkák
            var marka = ["Audi", "Citroen", "Nissan", "Seat"]; 

                
                // Audi tömbök feltöltése adatbázisból
                var tipus_audi = [];
                var leiras_audi = [];
                var leiras_audi_angol = [];
                var hasznalt_audi = [];
                var uj_audi = [];
                var kep_audi = [];

                <?php 
                $query = "SELECT * FROM audi";
                $result = mysqli_query($connection, $query);

                while($row = mysqli_fetch_array($result))
                {

                ?>

                tipus_audi.push("<?php echo $row['model'];?>");
                leiras_audi.push("<?php echo $row['leiras'];?>");
                leiras_audi_angol.push("<?php echo $row['leiras_angol'];?>");
                hasznalt_audi.push("<?php echo $row['hasznalt_link'];?>");
                uj_audi.push("<?php echo $row['uj_link'];?>");
                kep_audi.push("<?php echo $row['kep_src'];?>");

                <?php
                }
                ?>
            
                // Citroen tömbök feltöltése adatbázisból
                var tipus_citroen = [];
                var leiras_citroen = [];
                var leiras_citroen_angol = [];
                var hasznalt_citroen = [];
                var uj_citroen = [];
                var kep_citroen = [];

                <?php 
                $query = "SELECT * FROM citroen";
                $result = mysqli_query($connection, $query);

                while($row = mysqli_fetch_array($result))
                {

                ?>

                tipus_citroen.push("<?php echo $row['model'];?>");
                leiras_citroen.push("<?php echo $row['leiras'];?>");
                leiras_citroen_angol.push("<?php echo $row['leiras_angol'];?>");
                hasznalt_citroen.push("<?php echo $row['hasznalt_link'];?>");
                uj_citroen.push("<?php echo $row['uj_link'];?>");
                kep_citroen.push("<?php echo $row['kep_src'];?>");

                <?php
                }
                ?>
            
                // Nissan tömbök feltöltése adatbázisból
                var tipus_nissan = [];
                var leiras_nissan = [];
                var leiras_nissan_angol = [];
                var hasznalt_nissan = [];
                var uj_nissan = [];
                var kep_nissan = [];

                <?php 
                $query = "SELECT * FROM nissan";
                $result = mysqli_query($connection, $query);

                while($row = mysqli_fetch_array($result))
                {

                ?>

                tipus_nissan.push("<?php echo $row['model'];?>");
                leiras_nissan.push("<?php echo $row['leiras'];?>");
                leiras_nissan_angol.push("<?php echo $row['leiras_angol'];?>");
                hasznalt_nissan.push("<?php echo $row['hasznalt_link'];?>");
                uj_nissan.push("<?php echo $row['uj_link'];?>");
                kep_nissan.push("<?php echo $row['kep_src'];?>");

                <?php
                }
                ?>
            
                // Seat tömbök feltöltése adatbázisból
                var tipus_seat = [];
                var leiras_seat = [];
                var leiras_seat_angol = [];
                var hasznalt_seat = [];
                var uj_seat = [];
                var kep_seat = [];

                <?php 
                $query = "SELECT * FROM seat";
                $result = mysqli_query($connection, $query);

                while($row = mysqli_fetch_array($result))
                {

                ?>

                tipus_seat.push("<?php echo $row['model'];?>");
                leiras_seat.push("<?php echo $row['leiras'];?>");
                leiras_seat_angol.push("<?php echo $row['leiras_angol'];?>");
                hasznalt_seat.push("<?php echo $row['hasznalt_link'];?>");
                uj_seat.push("<?php echo $row['uj_link'];?>");
                kep_seat.push("<?php echo $row['kep_src'];?>");

                <?php
                }
                ?>
            

            //márka generálás
            var auto_select = document.getElementById("autok");
            for(i=0;i<marka.length;i++)
            {
                var option = document.createElement("option");
                option.text = marka[i];
                auto_select.add(option);
            }
            
            
            // típus változás
            var marka_select = document.getElementById("tipus");
            
            $("#autok").change(function() {
                var aktual_marka = $("#autok").val();
                
                //előző típusok törlése
                var length = marka_select.options.length;
                for (i = length-1; i >= 0; i--)
                {
                  marka_select.options[i] = null;
                }
                
                //új típusokkal való feltöltés      
                var option = document.createElement("option");
                option.text = '<?php echo $tipus; ?>';
                marka_select.add(option, marka_select[0]);
                marka_select[0].disabled = true;
                
                switch(aktual_marka)
                {
                    case marka[0]:
                        for(i=0;i<tipus_audi.length;i++)
                        {
                            var option = document.createElement("option");
                            option.text = tipus_audi[i];
                            marka_select.add(option);
                        }
                        break;
                    case marka[1]:
                        for(i=0;i<tipus_citroen.length;i++)
                        {
                            var option = document.createElement("option");
                            option.text = tipus_citroen[i];
                            marka_select.add(option);
                        }
                        break;
                    case marka[2]:
                        for(i=0;i<tipus_nissan.length;i++)
                        {
                            var option = document.createElement("option");
                            option.text = tipus_nissan[i];
                            marka_select.add(option);
                        }
                        break;
                    case marka[3]:
                        for(i=0;i<tipus_seat.length;i++)
                        {
                            var option = document.createElement("option");
                            option.text = tipus_seat[i];
                            marka_select.add(option);
                        }   
                        break;
                }

            });
            
            // leírás változás
            var aktual_tipus = $("#tipus").val();
            
            $("#tipus").change(function() {
            var selected = $("#tipus :selected").text();

            $("#auto_leiras").css("opacity", "100");
            $("#auto_leiras").css("visibility","visible");
                
                switch(selected)
                {
                    case tipus_audi[0]:
                        
                        <?php
                        if($_SESSION['lang'] == "magyar")
                        {
                        ?>
                            $("#leiras").val(leiras_audi[0]);
                        <?php
                        }
                        else if($_SESSION['lang'] == "angol")
                        {
                        ?>
                            $("#leiras").val(leiras_audi_angol[0]);
                        <?php
                        }
                        ?>
                        
                        $("#kep").attr("src", kep_audi[0]);
                        $("#hasznalt_gomb").click(function() {
                            window.open(hasznalt_audi[0],'_blank');
                        });
                        $("#uj_gomb").click(function() {
                            window.open(uj_audi[0],'_blank');
                        });
                        break;
                    case tipus_audi[1]:
                        
                        <?php
                        if($_SESSION['lang'] == "magyar")
                        {
                        ?>
                            $("#leiras").val(leiras_audi[1]);
                        <?php
                        }
                        else if($_SESSION['lang'] == "angol")
                        {
                        ?>
                            $("#leiras").val(leiras_audi_angol[1]);
                        <?php
                        }
                        ?>

                        $("#kep").attr("src", kep_audi[1]);
                        $("#hasznalt_gomb").click(function() {
                            window.open(hasznalt_audi[1],'_blank');
                        });
                        $("#uj_gomb").click(function() {
                            window.open(uj_audi[1],'_blank');
                        });
                        break;
                    case tipus_audi[2]:
                        
                        <?php
                        if($_SESSION['lang'] == "magyar")
                        {
                        ?>
                            $("#leiras").val(leiras_audi[2]);
                        <?php
                        }
                        else if($_SESSION['lang'] == "angol")
                        {
                        ?>
                            $("#leiras").val(leiras_audi_angol[2]);
                        <?php
                        }
                        ?>

                        $("#kep").attr("src", kep_audi[2]);
                        $("#hasznalt_gomb").click(function() {
                            window.open(hasznalt_audi[2],'_blank');
                        });
                        $("#uj_gomb").click(function() {
                            window.open(uj_audi[2],'_blank');
                        });
                        break;
                    case tipus_audi[3]:
                        
                        <?php
                        if($_SESSION['lang'] == "magyar")
                        {
                        ?>
                            $("#leiras").val(leiras_audi[3]);
                        <?php
                        }
                        else if($_SESSION['lang'] == "angol")
                        {
                        ?>
                            $("#leiras").val(leiras_audi_angol[3]);
                        <?php
                        }
                        ?>

                        $("#kep").attr("src", kep_audi[3]);
                        $("#hasznalt_gomb").click(function() {
                            window.open(hasznalt_audi[3],'_blank');
                        });
                        $("#uj_gomb").click(function() {
                            window.open(uj_audi[3],'_blank');
                        });
                        break;
                        
                        
                    case tipus_citroen[0]:
                        
                        <?php
                        if($_SESSION['lang'] == "magyar")
                        {
                        ?>
                            $("#leiras").val(leiras_citroen[0]);
                        <?php
                        }
                        else if($_SESSION['lang'] == "angol")
                        {
                        ?>
                            $("#leiras").val(leiras_citroen_angol[0]);
                        <?php
                        }
                        ?>
                        
                        $("#kep").attr("src", kep_citroen[0]);
                        $("#hasznalt_gomb").click(function() {
                            window.open(hasznalt_citroen[0],'_blank');
                        });
                        $("#uj_gomb").click(function() {
                            window.open(uj_citroen[0],'_blank');
                        });
                        break;
                    case tipus_citroen[1]:
                        
                        <?php
                        if($_SESSION['lang'] == "magyar")
                        {
                        ?>
                            $("#leiras").val(leiras_citroen[1]);
                        <?php
                        }
                        else if($_SESSION['lang'] == "angol")
                        {
                        ?>
                            $("#leiras").val(leiras_citroen_angol[1]);
                        <?php
                        }
                        ?>

                        $("#kep").attr("src", kep_citroen[1]);
                        $("#hasznalt_gomb").click(function() {
                            window.open(hasznalt_citroen[1],'_blank');
                        });
                        $("#uj_gomb").click(function() {
                            window.open(uj_citroen[1],'_blank');
                        });
                        break;
                    case tipus_citroen[2]:
                        
                        <?php
                        if($_SESSION['lang'] == "magyar")
                        {
                        ?>
                            $("#leiras").val(leiras_citroen[2]);
                        <?php
                        }
                        else if($_SESSION['lang'] == "angol")
                        {
                        ?>
                            $("#leiras").val(leiras_citroen_angol[2]);
                        <?php
                        }
                        ?>

                        $("#kep").attr("src", kep_citroen[2]);
                        $("#hasznalt_gomb").click(function() {
                            window.open(hasznalt_citroen[2],'_blank');
                        });
                        $("#uj_gomb").click(function() {
                            window.open(uj_citroen[2],'_blank');
                        });
                        break; 
                        
                    
                    case tipus_nissan[0]:
                        
                        <?php
                        if($_SESSION['lang'] == "magyar")
                        {
                        ?>
                            $("#leiras").val(leiras_nissan[0]);
                        <?php
                        }
                        else if($_SESSION['lang'] == "angol")
                        {
                        ?>
                            $("#leiras").val(leiras_nissan_angol[0]);
                        <?php
                        }
                        ?>

                        $("#kep").attr("src", kep_nissan[0]);
                        $("#hasznalt_gomb").click(function() {
                            window.open(hasznalt_nissan[0],'_blank');
                        });
                        $("#uj_gomb").click(function() {
                            window.open(uj_nissan[0],'_blank');
                        });
                        break;
                    case tipus_nissan[1]:
                        
                        <?php
                        if($_SESSION['lang'] == "magyar")
                        {
                        ?>
                            $("#leiras").val(leiras_nissan[1]);
                        <?php
                        }
                        else if($_SESSION['lang'] == "angol")
                        {
                        ?>
                            $("#leiras").val(leiras_nissan_angol[1]);
                        <?php
                        }
                        ?>

                        $("#kep").attr("src", kep_nissan[1]);
                        $("#hasznalt_gomb").click(function() {
                            window.open(hasznalt_nissan[1],'_blank');
                        });
                        $("#uj_gomb").click(function() {
                            window.open(uj_nissan[1],'_blank');
                        });
                        break;
                    case tipus_nissan[2]:
                        
                        <?php
                        if($_SESSION['lang'] == "magyar")
                        {
                        ?>
                            $("#leiras").val(leiras_nissan[2]);
                        <?php
                        }
                        else if($_SESSION['lang'] == "angol")
                        {
                        ?>
                            $("#leiras").val(leiras_nissan_angol[2]);
                        <?php
                        }
                        ?>

                        $("#kep").attr("src", kep_nissan[2]);
                        $("#hasznalt_gomb").click(function() {
                            window.open(hasznalt_nissan[2],'_blank');
                        });
                        $("#uj_gomb").click(function() {
                            window.open(uj_nissan[2],'_blank');
                        });
                        break;
                    case tipus_nissan[3]:
                        
                        <?php
                        if($_SESSION['lang'] == "magyar")
                        {
                        ?>
                            $("#leiras").val(leiras_nissan[3]);
                        <?php
                        }
                        else if($_SESSION['lang'] == "angol")
                        {
                        ?>
                            $("#leiras").val(leiras_nissan_angol[3]);
                        <?php
                        }
                        ?>

                        $("#kep").attr("src", kep_nissan[3]);
                        $("#hasznalt_gomb").click(function() {
                            window.open(hasznalt_nissan[3],'_blank');
                        });
                        $("#uj_gomb").click(function() {
                            window.open(uj_nissan[3],'_blank');
                        });
                        break;
                        
                        
                    case tipus_seat[0]:
                        
                        <?php
                        if($_SESSION['lang'] == "magyar")
                        {
                        ?>
                            $("#leiras").val(leiras_seat[0]);
                        <?php
                        }
                        else if($_SESSION['lang'] == "angol")
                        {
                        ?>
                            $("#leiras").val(leiras_seat_angol[0]);
                        <?php
                        }
                        ?>

                        $("#kep").attr("src", kep_seat[0]);
                        $("#hasznalt_gomb").click(function() {
                            window.open(hasznalt_seat[0],'_blank');
                        });
                        $("#uj_gomb").click(function() {
                            window.open(uj_seat[0],'_blank');
                        });
                        break;
                    case tipus_seat[1]:
                        
                        <?php
                        if($_SESSION['lang'] == "magyar")
                        {
                        ?>
                            $("#leiras").val(leiras_seat[1]);
                        <?php
                        }
                        else if($_SESSION['lang'] == "angol")
                        {
                        ?>
                            $("#leiras").val(leiras_seat_angol[1]);
                        <?php
                        }
                        ?>

                        $("#kep").attr("src", kep_seat[1]);
                        $("#hasznalt_gomb").click(function() {
                            window.open(hasznalt_seat[1],'_blank');
                        });
                        $("#uj_gomb").click(function() {
                            window.open(uj_seat[1],'_blank');
                        });
                        break;
                    case tipus_seat[2]:
                        
                        <?php
                        if($_SESSION['lang'] == "magyar")
                        {
                        ?>
                            $("#leiras").val(leiras_seat[2]);
                        <?php
                        }
                        else if($_SESSION['lang'] == "angol")
                        {
                        ?>
                            $("#leiras").val(leiras_seat_angol[2]);
                        <?php
                        }
                        ?>

                        $("#kep").attr("src", kep_seat[2]);
                        $("#hasznalt_gomb").click(function() {
                            window.open(hasznalt_seat[2],'_blank');
                        });
                        $("#uj_gomb").click(function() {
                            window.open(uj_seat[2],'_blank');
                        });
                        break;
                    case tipus_seat[3]:
                        
                        <?php
                        if($_SESSION['lang'] == "magyar")
                        {
                        ?>
                            $("#leiras").val(leiras_seat[3]);
                        <?php
                        }
                        else if($_SESSION['lang'] == "angol")
                        {
                        ?>
                            $("#leiras").val(leiras_seat_angol[3]);
                        <?php
                        }
                        ?>

                        $("#kep").attr("src", kep_seat[3]);
                        $("#hasznalt_gomb").click(function() {
                            window.open(hasznalt_seat[3],'_blank');
                        });
                        $("#uj_gomb").click(function() {
                            window.open(uj_seat[3],'_blank');
                        });
                        break;
                }
            });
        });
     
        
    </script>
</head>
<body>

    <label for="autok"></label><br>

    <select id="autok"><option style="display: none"><?php echo $choose; ?></option></select>
    <select id="tipus"></select><br>
    
    <div id="auto_leiras" style="margin-top: 100px; opacity: 0; visibility: hidden;">
        <label for="leiras"><?php echo $leiras; ?></label><br>
        <textarea id="leiras" rows="4" cols="50"></textarea><br>
        <img id="kep" src="img/"><br>
        <button id="hasznalt_gomb" style="width: 100px;"><?php echo $hasznalt; ?></button>
        <button id="uj_gomb" style="width: 100px;"><?php echo $uj; ?></button>
    </div>
    
    
    <br>
    <p><?php echo $languages; ?></p>

    <form method="post" action="auto.php">
        <input type="submit" name="nyelv" Value="<?php echo $hun; ?>">
        <input type="submit" name="nyelv" Value="<?php echo $eng; ?>">
    </form>
    <h5><?php echo $kesziteto; ?></h5>
</body>
</html>