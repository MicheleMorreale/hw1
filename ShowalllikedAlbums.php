<?php
session_start();
$user_id=$_SESSION['id'];


$conn=mysqli_connect("localhost","root","","Listen") or die( "Errore:".mysqli_connect_error()); 
$query="Select id_album from liked_album where user_id ='".$user_id."'";
 $res=mysqli_query($conn,$query) or die( "Errore:".mysqli_error($conn));
 $num=mysqli_num_rows($res);
 $first=0;
 $second=0;
 $third=0;
 $final=array();
 $i=0;


 while($row = mysqli_fetch_assoc($res)){
     
    
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,            "https://api.spotify.com/v1/albums/"."$row[id_album]");
         curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1 );
        curl_setopt($ch, CURLOPT_HTTPHEADER,     array('Content-Type: application/json' ,'Authorization: Bearer ' ."$_SESSION[access_token]")); 
        $result=curl_exec($ch);
        $final[$i]=$result;;
        $i++;        
curl_close($ch);


 }
$final=json_encode($final);
echo $final;
mysqli_close($conn);
    


?>