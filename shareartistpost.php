<?php
session_start();
$artista=$_POST['artista'];
$descrizione=$_POST['descrizione'];
$immagine=$_POST['immagine'];
$user_id=$_SESSION['id'];
$conn=mysqli_connect("localhost","root","","Listen") or die( "Errore:".mysqli_connect_error());
 $query="INSERT INTO artist_posts(artista,descrizione, immagine, user_id) VALUES ('$artista','$descrizione','$immagine','$user_id')";
 $res=mysqli_query($conn,$query) or die( "Errore:".mysqli_error($conn));
if (($res)== true){

   echo("done");



 }



?>