<?php

session_start();
    $dati=array();
    for($i=0;$i<=$_POST['pagine'];$i++){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "$_POST[rq]".'&type=artist&limit=50&offset=' .$i*50.);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1 );
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json' ,'Authorization: Bearer ' ."$_SESSION[access_token]")); 
    $result=curl_exec($ch);
    curl_close($ch);
    $dati[$i]=$result;
    
} $dati=json_encode($dati);
echo $dati;
    


    ?>