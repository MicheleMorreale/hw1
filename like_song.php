<?php
session_start();
$id_song=$_POST['id_song'];
$nome=$_POST['nome'];
$album=$_POST['album'];
$artista=$_POST['artista'];
$user_id=$_SESSION['id'];
$conn=mysqli_connect("localhost","root","","Listen") or die( "Errore:".mysqli_connect_error());
 $query="INSERT INTO liked_song(id_song, nome, album, artista, user_id) VALUES ('$id_song','$nome','$album','$artista','$user_id')";
 $res=mysqli_query($conn,$query) or die( "Errore:".mysqli_error($conn));
if (($res)== true){


   echo("done");
    exit;



 }



?>