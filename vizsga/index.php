<?php include "functions.php";?>
<!DOCTYPE html>
<html lang="hu">
    <head>
        
        <!-- CHARSET -->
        <meta charset="utf-8">
        
        <!-- MOBILE RESPONSIVITY  -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- BOOTSTRAP CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        
        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        
        <!-- BOOTSTRAP SCRIPT -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        
        
        <!-- Additional css -->
        <link rel="stylesheet" href="css/login.css">

        
       
       
       
       
        <!-- FONT -->
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
        
        <style>
		
		html, body 
		{
			height: 100%;
			width: 100%;
			font-family: 'Poppins', sans-serif;
		}
		
		.navbar-nav > li
		{
			margin-right: 3rem;
		}
		
		.nav-link
		{
			font-size: 1.1em !important;
		}
		
		.carousel-inner img
		{
			width: 100%;
			height: 100%;
		}
		
		.carousel-caption
		{
			position: absolute;
			top: 50%;
		}
		
		.carousel-caption h1
		{
			font-size: 300%;
			text-shadow: 1px 1px 10px #000;
			-webkit-text-stroke: 1px black;
		}
		
		.carousel-caption h3
		{
			font-size: 140%;
			font-weight: 600;
			color: black;
			text-shadow: 5px 1px 10px white;
			padding-bottom: 1rem;
		}
		#carousel1
		{
			right: 27%;
			transform: translateX(50%);
		}
		
		#carousel2
		{
			top: 5%;
			left: 20%;
			transform: translateX(-40%);
		}
		
		.btn-primary
		{
			background-color: #739ac1;
			border-color: #204f87;
		}
		
		.btn-primary:hover
		{
			background-color: #204f87;
		}
		
		.jumbotron
		{
			padding: 1rem;
			text-align: center;
			background-color: #dadee3;
		}
		
		.padding
		{
			padding-bottom: 2rem;
		}
		
		.welcome
		{
			width: 50%;
			margin: 0 auto;
			padding: 3rem;
		}
		
		.welcome hr
		{
			border-top: 2px solid #b4b4b4;
			width: 65%;
		}
		
		footer
		{
			background-color: #3f3f3f;
			color: #d5d5d5;
			padding-top: 2rem;
		}
		
		hr.light
		{
			border-top: 1px solid #d5d5d5;
			width: 75%;
			margin-top: .8rem;
			margin-bottom: 1rem;
		}
		
		hr.light-100
		{
			border-top: 1px solid #d5d5d5;
			width: 100%;
			margin-top: .8rem;
			margin-bottom: 1rem;
		}
		
		@media (max-width: 992px)
		{
			.carousel-caption
			{
				top: 50%;
			}
			
			.carousel-caption h1
			{
				font-size: 200%;
			}
			
			.carousel-caption h3
			{
				font-size: 100%;
				font-weight: 500;
			}
			
			#carousel1
			{
				right: 25%;
			}
		
			.carousel-caption .btn
			{
				font-size: 85%;
				padding: 8px 14px;
			}
			
			.display-4
			{
				font-size: 250%;
			}
		}
		@media (max-width: 768px)
		{
			.carousel-caption
			{
				top: 45%;
			}
			
			.carousel-caption h1
			{
				font-size: 150%;
			}
			
			.carousel-caption h3
			{
				font-size: 80%;
				font-weight: 400;
				padding-bottom: .5rem;
			}
			
			#carousel1
			{
				right: 25%;
			}
			
			.carousel-caption .btn
			{
				font-size: 60%;
				padding: 8px 14px;
			}
			
			.display-4
			{
				font-size: 200%;
			}
		}
		@media (max-width: 576px)
		{
			.carousel-caption
			{
				top: 50%;
			}
			
			.carousel-caption h1
			{
				font-size: 100%;
			}
			
			.carousel-caption h3
			{
				font-size: 50%;
				font-weight: 200;
				padding-bottom: .3rem;
			}
			
			#carousel1
			{
				right: 20%;
			}
			
			.carousel-caption .btn
			{
				font-size: 60%;
				padding: 5px 10px;
			}
			
			.carousel-indicators
			{
				display: none;
			}
			
			.display-4
			{
				font-size: 100%;
			}
		}
		
        </style>

        
    </head>
    <body id="index_body">
        
        <!------------------------------------------ NAVBAR --------------------------------------------------->
        <nav class="navbar navbar-expand-xl navbar-dark bg-dark">  
            <!-- NAVBAR KÉP-->
            <a class="navbar-brand pl-5 pr-5" href="index.php">
                <img src="img/logos/BogdanCasino2.png" width="130" height="55" alt="casino_logo">
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
        </nav>
        
        <!--------------------------------------------- NAVBAR VÉGE ----------------------------------------->
        
        <!--------------------------------------------- IMG SLIDER ---------------------------------------------->
        <div id="slides" class="carousel slide" data-ride="carousel">
           <ul class="carousel-indicators">
               <li data-target="#slides" data-slide-to="0" class="active"></li>
               <li data-target="#slides" data-slide-to="1"></li>
           </ul>
           <div class="carousel-inner">
               <div class="carousel-item active">
                   <img src="img\casino\slider\main_slider.png">
                   <div id="carousel1"  class="carousel-caption">
                       <h1 class="display-3">Üdvözlünk az oldalon!</h1>
                       <h3>Megjött a kedved egy kis játékhoz?</h3>
                       <button type="button" class="btn btn-outline-light btn-dark btn-lg">Kattints ide!</button>
                   </div>
               </div>
               <div class="carousel-item">
                   <img src="img\casino\slider\main_slider2.png">
                   <div id="carousel2" class="carousel-caption">
                       <h1>Még nem vagy tag?</h1>
                       <button type="button" class="btn btn-outline-light btn-dark btn-lg">Regisztrálok!</button>
                   </div>
               </div>
			   
           </div>
        </div>
        <!------------------------------------------ IMG SLIDER VÉGE -------------------------------------------->
        
        <!--------------------------------------------- Jumbotron -------------------------------------------->
        
        <div class="container-fluid">
            <div class="row jumbotron">
                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
                    <p class="lead">Nem tudod hogyan legyél tag az oldalon? Esetleg nem vagy tisztában a játékszabályokkal?</p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
                    <a href="faq.php"><button type="button" class="btn btn-outline-secondary btn-lg ">Válaszok itt!</button></a>
                </div>
            </div>
        </div>
        
        <!------------------------------------------- Jumbotron vége ----------------------------------------->
        
        <!--------------------------------------------- JÁTÉKOK ---------------------------------------------->
        
        <!-- cím -->
        
        <div class="container-fluid padding">
            <div class="row welcome text-center">
                <div class="col-12">
                    <h1 class="display-4">Játékok</h1>
                </div>
                <hr>
            </div>
        </div>

        <!-- játékok -->
        
        <div class="container-fluid padding">
            <div class="row padding">
                <div class="col-md-4 mb-2">
                    <div class="card h-100 p-2">
                        <img class="card-img-top" src="img/casino/parallax/blackjack.png">
                        <div class="card-body">
                            <h4 class="card-title">Black Jack</h4>
                            <p class="card-text">(Huszonegy)</p>
                            <p class="card-text">A szabály egyszerű: győzd le az osztó kezét anélkül, hogy túlmennél 21-en.</p>   
                        </div>
                        <div class="card-footer text-center"> 
                            <a href="#" class="btn btn-outline-dark btn-sm float-left">Szabályok</a>
                            <a href="#" class="btn btn-primary btn-sm float-right">Játszom!</a>
                        </div> 
                    </div>
                </div>
                
                <div class="col-md-4 mb-2">
                    <div class="card h-100 p-2">
                        <img class="card-img-top" src="img/casino/parallax/roulette.png">
                        <div class="card-body">
                            <h4 class="card-title">Roulette</h4>
                            <p class="card-text">(Rulett)</p>
                            <p class="card-text">A játékosok minden kör elején tehetik meg tétjeiket a tábla különböző részeire, majd a kerék megpörgetésre kerül. Amint megpördül a kerék, a téteket nem lehet módosítani a következő kör kezdetéig.</p>
                        </div>
                        <div class="card-footer text-center"> 
                            <a href="#" class="btn btn-outline-dark btn-sm float-left">Szabályok</a>
                            <a href="#" class="btn btn-primary btn-sm float-right">Játszom!</a>
                        </div> 
                    </div>
                </div>
                
                <div class="col-md-4 mb-2">
                    <div class="card h-100 p-2">
                        <img class="card-img-top" src="img/casino/parallax/slotmachine.png">
                        <div class="card-body">
                            <h4 class="card-title">Slot machine</h4>
                            <p class="card-text">(Nyerőgép)</p>
                            <p class="card-text">A nyerőgép lényege, hogy a betett pénzünk fejében tudunk "pörgetni". Amennyiben 3db ugyanolyan szimbólumot kapunk, az adott szimbólum értékének megfelelő összeggel megszorzott tétünket kapjuk vissza nyereményül.</p>
                        </div>
                        <div class="card-footer text-center"> 
                            <a href="#" class="btn btn-outline-dark btn-sm float-left">Szabályok</a>
                            <a href="#" class="btn btn-primary btn-sm float-right">Játszom!</a>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
            
        <!------------------------------------------- JÁTÉKOK VÉGE ---------------------------------------------------------------------->
 
        <!----------------------------------------------- FOOTER ------------------------------------------------------------------------>
        
        <footer>
            <div class="container-fluid" padding>
                <div class="row text-center">
                    <div class="col-md-4">
                        <img src="img/logos/BogdanCasino.png" height="75px" width="auto">
                        <hr class="light">
                        <p>555-555-5555</p>
                        <p>email@myemail.com</p>
                    </div>
                    <div class="col-md-4">
                        <hr class="light">
                        <h5>Nyitvatartás</h5>
                        <hr class="light">
						<p>Hétfő: Zárva</p>
                        <p>Hétköznap: 16:00-2:00</p>
                        <p>Hétvégén: 10:00-4:00</p>
                    </div>
                    <div class="col-md-4">
                        <hr class="light">
                        <h5>Székhely</h5>
                        <hr class="light">
                        <p>Budapest, 1079</p>
                        <p>Albert Flórián út 2</p>
                    </div>
                    <div class="col-12">
                        <hr class="light-100">
                        <h5>&copy; BogdanCasino.com</h5>
                    </div>
                </div>
            </div>
            
        </footer>
        
        <!-- Additional js -->
		<script src="js/login.js"></script>
   
   
    </body>
</html>