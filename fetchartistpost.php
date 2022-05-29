<?php
session_start();
$user_id=$_SESSION['id'];


$conn=mysqli_connect("localhost","root","","Listen") or die( "Errore:".mysqli_connect_error()); 
$query="Select * from artist_posts where user_id ='".$user_id."'";
 $res=mysqli_query($conn,$query) or die( "Errore:".mysqli_error($conn));
 $num=mysqli_num_rows($res);
 $first=0;
 $second=0;
 $third=0;
 $final=array();
 $i=0;


 while($row = mysqli_fetch_assoc($res) and $i<$num){
      
        $final[$i]=$row;
        


 }
$final=json_encode($final);
echo $final;
mysqli_close($conn);
    


?>