<?php
session_start();
$id_artist=$_POST['id_artist'];
$nome=$_POST['nome'];
$user_id=$_SESSION['id'];
$conn=mysqli_connect("localhost","root","","Listen") or die( "Errore:".mysqli_connect_error()); 
$query="DELETE FROM liked_artists where id_artist ='".$id_artist."' and user_id ='".$user_id."'";
 $res=mysqli_query($conn,$query) or die( "Errore:".mysqli_error($conn));
if(($res)== true){
    echo "done";
    
}mysqli_close($conn);



?>