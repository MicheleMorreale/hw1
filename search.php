<?php
   session_start();
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,            "$_POST[rq]" );
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1 );
    curl_setopt($ch, CURLOPT_HTTPHEADER,     array('Content-Type: application/json' ,'Authorization: Bearer ' ."$_SESSION[access_token]")); 
    $result=curl_exec($ch);
    curl_close($ch);
    echo $result;



    ?>