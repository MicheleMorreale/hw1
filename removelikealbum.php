<?php
session_start();
$id_song=$_POST['id_album'];
$nome=$_POST['nome'];
$artista=$_POST['artista'];
$user_id=$_SESSION['id'];
$conn=mysqli_connect("localhost","root","","Listen") or die( "Errore:".mysqli_connect_error()); 
$query="DELETE FROM liked_album where id_album ='".$id_album."' and user_id ='".$user_id."'";
 $res=mysqli_query($conn,$query) or die( "Errore:".mysqli_error($conn));
if(($res)== true){
    echo "done";
    
}mysqli_close($conn);



?>