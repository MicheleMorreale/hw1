<?php
session_start();
$id_artist=$_POST['id_artist'];
$nome=$_POST['nome'];
$user_id=$_SESSION['id'];
$conn=mysqli_connect("localhost","root","","Listen") or die( "Errore:".mysqli_connect_error()); 
$query="Select * from liked_artists where id_artist ='".$id_artist."' and user_id ='".$user_id."'";
 $res=mysqli_query($conn,$query) or die( "Errore:".mysqli_error($conn));
if(mysqli_num_rows($res)>0){
    $response=array('exists' => true);
    }else{
    $response=array('exists' => false);
    }
    echo json_encode($response);
    mysqli_close($conn);



?>