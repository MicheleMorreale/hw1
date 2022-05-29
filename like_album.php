<?php
session_start();
$id_album=$_POST['id_album'];
$nome=$_POST['nome'];
$artista=$_POST['artista'];
$user_id=$_SESSION['id'];
$conn=mysqli_connect("localhost","root","","Listen") or die( "Errore:".mysqli_connect_error());
 $query="INSERT INTO liked_album(id_album, nome, artista, user_id) VALUES ('$id_album','$nome','$artista','$user_id')";
 $res=mysqli_query($conn,$query) or die( "Errore:".mysqli_error($conn));
if (($res)== true){

   echo("done");



 }



?>