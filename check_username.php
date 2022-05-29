<?php


 $conn=mysqli_connect("localhost","root","","Listen") or die( "Errore:".mysqli_connect_error());
 $username= mysqli_real_escape_string($conn, "$_POST[username]");
 $query="Select username from users where username='".$username."'";
 $res=mysqli_query($conn,$query) or die( "Errore:".mysqli_error($conn));
 if(mysqli_num_rows($res)>0){
 $response=array('exists' => true);
 }else{
 $response=array('exists' => false);
 }
 echo json_encode($response);
 mysqli_close($conn);

?>
