<?php

$client_id = '47d0dbdd5a1c482bb3d24f61d9187df3';
$client_secret = '9f1a840064b74ff9afc974ee1e6f6496';

$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,            'https://accounts.spotify.com/api/token' );
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1 );
    curl_setopt($ch, CURLOPT_POST,           1 );
    curl_setopt($ch, CURLOPT_POSTFIELDS,     'grant_type=client_credentials' ); 
    curl_setopt($ch, CURLOPT_HTTPHEADER,     array('Authorization: Basic '.base64_encode($client_id.':'.$client_secret))); 
    $result=curl_exec($ch); 
    $result = json_decode($result, true);
    $accessToken=($result['access_token']);
    curl_close($ch);
   echo $accessToken;
    ?>