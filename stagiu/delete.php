<?php
if(isset($_GET['id'])){//daca este setat id-ul url
    $id=$_GET['id'];
    $con = mysqli_connect("localhost", "root", "", "stagiu"); //-- host, username, fara parola,baza de data numele  -->
    $sql = "DELETE FROM `sir` WHERE `id`=$id";
     mysqli_query($con, $sql);
header("Location:index.php");
}

?>

