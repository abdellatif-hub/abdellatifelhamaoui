<?php
include("conect.php");
if(isset($_GET["id"])){
    $id=$_GET["id"];
}
$query="DELETE FROM client WHERE idclient='$id'";
mysqli_query($con,$query);
header("location:gerer client.php")
?>