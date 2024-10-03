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
        <title>sign in</title>
        <link rel="icon" type="image/x-icon" href="favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="styles.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
            <div class=""><br><br><br><br><br><br><br><br><br>
                <div class="">
                    <div class="text-center">
                    <table class="table table-hover table-border table-dark">
                    <tr class="table-danger"><th colspan="6">List of Customers</th></tr>
            <tr class="table-info">
                
                <th>id</th>
                <th>cin</th>
                <th>nom</th>
                <th>prenom</th>
                <th>email</th>
                <th>action</th>
            </tr>
            <?php
            include("conect.php");
            $query="SELECT * FROM client";
            $res=mysqli_query($con,$query);
            foreach($res as $row){?>
                        <tr>
                <th><?php echo $row["idclient"]?></th>
                <th><?php echo $row["cin"]?></th>
                <th><?php echo $row["nom"]?></th>
                <th><?php echo $row["prenom"]?></th>
                <th><?php echo $row["email"]?></th>
                <th><a href="update.php?id=<?php echo $row['idclient']?>" class="btn btn-success" id="bmw">update</a><a href="delete.php?id=<?php echo $row['idclient'] ?>" class="btn btn-danger" id="bmw">delete</a></th>
            </tr>
            <?php
        }?>
        </table>
                    </div>
                </div>
            </div>
        </header>

        </body>
        </html>