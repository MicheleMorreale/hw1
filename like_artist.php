<?php
session_start();
$id_artist=$_POST['id_artist'];
$nome=$_POST['nome'];
$user_id=$_SESSION['id'];
$conn=mysqli_connect("localhost","root","","Listen") or die( "Errore:".mysqli_connect_error());
 $query="INSERT INTO liked_artists(id_artist, nome, user_id) VALUES ('$id_artist','$nome','$user_id')";
 $res=mysqli_query($conn,$query) or die( "Errore:".mysqli_error($conn));
if (($res)== true){

   echo("done");



 }



?>