<?php

session_start();


if(!empty($_POST["username"]) && !empty($_POST["nome"])&& !isset($_POST["cognome"]) && !isset($_POST["email"])&&!isset($_POST["password"])){

    $conn=mysqli_connect("localhost","root","","Listen") or die( "Errore:".mysqli_connect_error());    
    $nome=mysqli_real_escape_string($conn, $_POST["nome"]);
    $cognome=mysqli_real_escape_string($conn, $_POST["cognome"]);
    $email=mysqli_real_escape_string($conn, $_POST["email"]);    
    $password= mysqli_real_escape_string($conn, $_POST["password"]);

    if(!preg_match('/^[a-zA-Z0-9_]{1,15}$/',$_POST['username'])){

        $error[]="Username non valido";



    }else{

        $username= mysqli_real_escape_string($conn, $_POST["username"]);
        $query="Select username from users where username='".$_POST["username"]."'";
        $res=mysqli_query($conn,$query) or die( "Errore:".mysqli_error($conn));
        if (mysqli_num_rows($res)>0){
    
            $error[]="Username già esistente";
    
        }

    }

    if(strlen($_POST["password"])<8){

        $error[]="Numero caratteri insufficiente";
    }

    if(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){

        $error[]="Email non valida";


    }

    if(count($error)===0){
        
        $username= mysqli_real_escape_string($conn, $_POST["username"]);
        $nome=mysqli_real_escape_string($conn, $_POST["nome"]);
        $cognome=mysqli_real_escape_string($conn, $_POST["cognome"]);
        $email=mysqli_real_escape_string($conn, $_POST["email"]);    
        $password= mysqli_real_escape_string($conn, $_POST["password"]);
        $query="INSERT INTO users(username,nome,cognome,email,password) VALUES('$username','$nome','$cognome','$email','$password')";
        
        if (mysqli_query($conn,$query)){
    
            $_SESSION["username"]=$_POST["username"];
            $_SESSION["user_id"]=mysqli_insert_id($conn);
            header("Location: profile.php");
            mysqli_close($conn);
            exit;
    
        }



    }


   
   


else 
echo "<h4 class='errore'>";
echo "Credenziali non valide";
echo "</h4>";

}



?>





<html>
<head>
<title>Listen</title>
<link rel="stylesheet" href="signup.css" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;600&display=swap" rel="stylesheet">
<script src="signup.js" defer="true"></script>
<meta name="viewport"
content="width=device-width, initial-scale=1">
</head>
<body>
    <div>
        <h1>Listen</h1>
    <form name='form-signup' method='post' action="signup.php">
        <div id="div-username">
    <h3>Username</h3>
       <label><input id="username" type="text" name='username' placeholder="Insert username"></label>
       </div>
       <div id="div-nome">
       <h3>Nome</h3>
       <label><input id="nome" type="text" name='nome' placeholder="Insert name"></label>
       </div>
       <div id="div-cognome">
       <h3>Cognome</h3>
       <label><input id="cognome" type="text" name='cognome' placeholder="Insert your last name"></label>
       </div>
       <div id="div-email">
       <h3>Email</h3>
       <label><input id="email" type="text" name='email' placeholder="Insert your email"></label>
       </div>
       <div id="div-password">
       <h3>Password</h3>
       <label><input id="password" type="password" name='password' placeholder="Insert password"></label>
       </div>
       <div id="div-password2">
       <h3>Conferma password</h3>
       <label><input id="password2" type="password" name='password2'placeholder="Insert again password"></label>
       </div>
      <label><input id="Bottone" type="submit" value="Registrati"></label> 
    </form>
    <h3>Hai già un account? <a href="login.php">Entra</a> </h3>
    </div>
</body>
</html>