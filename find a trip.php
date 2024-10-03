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
        <title>home</title>
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
                <a class="navbar-brand" href="#page-top">Crud Php</a>
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
            <div class=""><br><br><br><br><br><br><br><br><br>
                <div class="">
                    <div class="text-center">
                    <form action="" method="post">
                        <select name="select" id=""class="form-select" required>
                        <option value="" selected hidden disabled>Disponible</option>
                        <option value="yes">YES</option>
                        <option value="no">NO</option>
                        </select><br><button type="submit" name="submit" id="bb3" class="btn btn-success justify-content-center " > Search</button><br><br><br>
                    <table class="table table-hover table-border table-dark">
                    <tr class="table-danger"><th colspan="6">List of Available Flights</th></tr>

            <tr class="table-warning">
                <th>id</th>
                <th>nom trajet</th>
                <th>point depart</th>
                <th>point arrive</th>
                <th>prix</th>
                <th>disponible</th>
            </tr>
            <?php
            include("conect.php");
            if(isset($_POST["submit"])){
            $select=$_POST["select"];
            $query="SELECT * FROM travel WHERE disponible='$select'";
            $res=mysqli_query($con,$query);
            foreach($res as $row){?>
                        <tr>
                <th><?php echo $row["idtrajet"]?></th>
                <th><?php echo $row["nomtrajet"]?></th>
                <th><?php echo $row["pointdepart"]?></th>
                <th><?php echo $row["pointarrive"]?></th>
                <th><?php echo $row["prix"]?></th>
                <th><?php echo $row["disponible"]?></th>
            </tr>
            <?php
        }}?>
        </table>
        </form>
                    </div>
                </div>
            </div>
        </header>
        <?php
        // session_start();
        // if(!$_SESSION["id"]){
        //     header("location:login.php");
        // }

        ?>
        </body>
        </html>
        
        