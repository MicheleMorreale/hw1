<?php

session_start();

if(isset($_POST["username"]) && isset($_POST["password"])){

$conn=mysqli_connect("localhost","root","","Listen") or die( "Errore:".mysqli_connect_error());
$username= mysqli_real_escape_string($conn, $_POST["username"]);
$password= mysqli_real_escape_string($conn, $_POST["password"]);
$query="Select username,password from users where username='".$username."' and password ='".$password."'";
$res=mysqli_query($conn,$query) or die( "Errore:".mysqli_error($conn));
if (mysqli_num_rows($res)>0){

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
   

    $query="Select id,nome,cognome from users where username='".$username."' and password ='".$password."'";
    $res=mysqli_query($conn,$query) or die( "Errore:".mysqli_error($conn));
    $row = mysqli_fetch_assoc($res);
    $_SESSION["id"]=$row["id"];
    $_SESSION["name"]=$row["nome"];
    $_SESSION["lastname"]=$row["cognome"];
    $_SESSION["username"]=$_POST["username"];
    $_SESSION["access_token"]=$accessToken;
    header("Location: profile.php");
    exit;



}else 
echo "<h4 class='errore'>";
echo "Credenziali non valide";
echo "</h4>";

}



?>





<html>
<head>
<title>Listen</title>
<link rel="stylesheet" href="login.css" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;600&display=swap" rel="stylesheet">
<script src="login.js" defer="true"></script>
<meta name="viewport"
content="width=device-width, initial-scale=1">
</head>
<body>
    <div>
        <h1>Listen</h1>
    <form name='form-login' method='post'>
    <h3>Inserisci username</h3>
       <label><input id="username" type="text" name='username'></label>
       <h3>Inserisci password</h3>
       <label><input id="password" type="password" name='password'></label>
      <label><input id="Bottone" type="submit" value="Entra"></label> 
    </form>
    <p>Non hai un account? <a href="signup.php">Registrati</a>
    </div>
</body>
</html>