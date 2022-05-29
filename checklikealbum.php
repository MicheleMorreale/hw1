<?php
session_start();
$id_album=$_POST['id_album'];
$nome=$_POST['nome'];
$artista=$_POST['artista'];
$user_id=$_SESSION['id'];
$conn=mysqli_connect("localhost","root","","Listen") or die( "Errore:".mysqli_connect_error()); 
$query="Select * from liked_album where id_album ='".$id_album."' and user_id ='".$user_id."'";
 $res=mysqli_query($conn,$query) or die( "Errore:".mysqli_error($conn));
if(mysqli_num_rows($res)>0){
    $response=array('exists' => true);
    }else{
    $response=array('exists' => false);
    }
    echo json_encode($response);
    mysqli_close($conn);



?>