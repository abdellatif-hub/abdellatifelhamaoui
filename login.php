<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>login</title>
        <link rel="icon" type="image/x-icon" href="profile.png" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Tinos:ital,wght@0,400;0,700;1,400;1,700&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap" rel="stylesheet" />
        <link href="styless.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    </head>
    <body>
        <video class="bg-video" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop"><source src="bg.mp4" type="video/mp4" /></video>
        <div class="masthead">
            <div class="masthead-content text-white">
                <div class="container-fluid px-4 px-lg-0">
                    <h1 class="fst-italic lh-1 mb-4">Traveling around the world</h1>
                    <p class="mb-5">
                        Travel is the movement of people from one place to another, involving journeys that span various distances and purposes, such as tourism, business, exploration, or personal reasons.</p>

                    <form id="contactForm" data-sb-form-api-token="API_TOKEN" method="post" action="">
                        <!-- Email address input-->
                        <div class="row input-group-newsletter">
                            <div class="col"><input class="form-control" id="email" type="email" required placeholder="Enter address email..." name="login" aria-label="Enter login address..." data-sb-validations="required,email" /><br>
                                <input class="form-control" id="email" type="password" required placeholder="Enter your password..."  name="pass"  aria-label="Enter your password..." data-sb-validations="required,email"/></div>
                            <div class="col-auto"><button class="btn btn-primary" type="submit" name="submit">login </button></div>
                        </div>
                        <div class="invalid-feedback mt-2" data-sb-feedback="email:required">An email is required.</div>
                        <div class="invalid-feedback mt-2" data-sb-feedback="email:email">Email is not valid.</div>
                        <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center mb-3 mt-2">
                                <div class="fw-bolder">Form submission successful!</div>
                                To activate this form, sign up at
                                <br />
                                <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                            </div>
                        </div>
                        <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3 mt-2">Error sending message!</div></div>
                    </form>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        <?php
        include("conect.php");
        session_start();
        if(isset($_POST["submit"])){
            $email=$_POST["login"];
            $pass=$_POST["pass"];
            $query="SELECT * FROM client WHERE  email='$email' AND password='$pass'";
            $resultat=mysqli_query($con,$query);
            if(mysqli_num_rows($resultat)>0){
                foreach($resultat as $row){
                    $_SESSION["id"]=$row["idclient"];
                }
                header("location:home.php");
            }
            else{?>
                <script>
                Swal.fire({
  title: "Email or Password is incorrect",
  width: 600,
  padding: "3em",
  color: "#716add",
  background: "#fff url(/images/trees.png)",
  backdrop: `
    rgba(0,0,123,0.4)
    url("/images/nyan-cat.gif")
    left top
    no-repeat
  `
});
                </script>
            <?php
            }?>
        <?php
        }?>
<script>
    alert("email  :  user@gmail.com \npassword  : 13 ")
</script>
    </body>
</html>
