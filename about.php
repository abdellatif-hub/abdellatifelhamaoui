<?php
        session_start();
        if(!$_SESSION["id"]){
            header("location:login.php");
        }
        ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>about</title>
        <link rel="icon" type="image/x-icon" href="favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="home.php">Crud Php</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="gerer client.php"><pre> Manage 
customer</pre></a></li>
                        <li class="nav-item"><a class="nav-link" href="gerer.travel.php"><pre>Manage
travel</pre></a></li>
                        <li class="nav-item"><a class="nav-link" href="find a trip.php"><pre>   travel 
 disponible</pre></a></li>
 <li class="nav-item"><a class="nav-link" href="ajouter.php"><pre>  add 
customer</pre></a></li>
                        <li class="nav-item"><a class="nav-link" href="ajoutertravel.php"><pre> add
travel</pre></a></li>                        <li class="nav-item"><a class="nav-link" href="deconnexion.php">deconnexion</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
                <div class="d-flex justify-content-center">
                    <div class="text-center"><br><br><br><br><br><br><br>
                        
                        <h2 class="text-white-50 mx-auto mt-2 mb-5">Travel can be defined as the act of moving from one place to another, typically over a distance. It often involves journeying to different geographical locations, either for leisure, business, exploration, or other purposes. Travel can encompass various modes of transportation, such as by air, land, or sea, and can involve short trips or extended stays in different destinations. It is a fundamental human activity that has cultural, economic, and personal significance, offering opportunities for discovery, learning, and experiencing different cultures and environments.</h2>
                    </div>
                </div>
            </div>
        </header>

        </body>
        </html>
        