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
            <div class="container px-4 px-lg-5  h-100 align-items-center "><br><br><br><br><br><br><br><br><br>
                <div class="">
                    <div class="text text-white">
                    <?php
    include("conect.php");
    if(isset($_GET["id"])){
        $id=$_GET["id"];
    }
    if(isset($_POST["submit"])){
        $cin=htmlspecialchars(trim($_POST["fname"]));
        $name=htmlspecialchars(trim($_POST["nname"]));
        $prenom=htmlspecialchars(trim($_POST["pname"]));
        $email=htmlspecialchars(trim($_POST["ename"]));
        $query="UPDATE client SET cin='$cin' , nom='$name',prenom='$prenom', email='$email' WHERE idclient='$id'";
        mysqli_query($con,$query);
        header("location:gerer client.php");
    }
    ?>
                    <?php
                        include("conect.php");
                        if(isset($_GET["id"])){
                            $id=$_GET["id"];
                        }
    $sel="SELECT * FROM client WHERE idclient='$id'";
    $rs=mysqli_query($con,$sel);
    foreach($rs as $row){?>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="fname">new cin</label>
                            <input type="text" name="fname" class="form-control" value="<?php echo $row["cin"]?>"><br>
                        </div>
                        <div class="form-group">
                            <label for="nname">new first name</label>
                            <input type="text" name="nname" class="form-control" value="<?php echo $row["nom"]?>" ><br>
                        </div>
                        <div class="form-group">
                            <label for="pname">new last name</label>
                            <input type="text" name="pname" class="form-control" value="<?php echo $row["prenom"]?>" ><br>
                        </div>
                        <div class="form-group">
                            <label for="ename">new email</label>
                            <input type="email" name="ename" class="form-control" value="<?php echo $row["email"]?>" >
                        </div>
                        <button type="submit" name="submit" class="btn btn-success " id="b4">update</button>
                    </form>
    <?php
    }
    ?>

                    </div>
                </div>
            </div>
        </header>

        </body>
        </html>
        
        
        