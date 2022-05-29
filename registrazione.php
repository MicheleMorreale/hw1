<?php

$username= mysqli_real_escape_string($conn, $_POST["username"]);
$nome=mysqli_real_escape_string($conn, $_POST["nome"]);
$cognome=mysqli_real_escape_string($conn, $_POST["cognome"]);
$email=mysqli_real_escape_string($conn, $_POST["email"]);    
$password= mysqli_real_escape_string($conn, $_POST["password"]);
$query="INSERT INTO users(username,nome,cognome,email,password) VALUES('$username','$nome','$cognome','$email','$password')";


    $_SESSION["username"]=$_POST["username"];
    $_SESSION["user_id"]=mysqli_insert_id($conn);
    header("Location: profile.php");
    mysqli_close($conn);
    exit;

?>
