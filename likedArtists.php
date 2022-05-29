<?php
session_start();

if(!isset($_SESSION["id"]) && !isset($_POST["username"])){

    
  header("Location: login.php");}



?>
<html>
<head>
<title>Listen</title>
<link rel="stylesheet" href="profile.css" />
<link rel="stylesheet" href="liked_artists.css" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;600&display=swap" rel="stylesheet">
<script src="liked_artists.js" defer="true"></script>
<script src="home_2.js" defer="true"></script>
<meta name="viewport"
content="width=device-width, initial-scale=1">
</head>
<body>
    <header>
        <nav>
            <div id="logo">              
            </div>
            <div id="menu_icon">
              <img src="menu.png" height="50" width="50">
            </div>
                <div id="searchbar">
                  <div id="lente" ><img src="https://www.seekpng.com/png/full/920-9209972_magnifying-glass-png-white-search-icon-white-png.png" alt="" width="20px" height="20px"></div>
                  <div id="barra" class="hide">
                  <div><form >
                    <select id="scelte" name="">
                    <option value="Song">Song</option>
                    <option value="Artist">Artist</option>
                    <option value="Album">Album</option>
                     </select>
                     <div ><input id="Testo" type="text" value=""></div>
                  <div ><input id="Bottone" type="submit" value="Cerca" ></div>
                  </form></div>           
                </div>
              </div>
                 <div id="menubar">
                    <a>Home</a>
                    <a>Explore</a>
                    <a>Charts</a>
                    <a>About</a>

                        <div id="profilo"> 
                             <img id="profilo_foto" src="https://www.business2community.com/wp-content/uploads/2017/08/blank-profile-picture-973460_640.png" alt="" width="30px" height="30px">
                             <a href="profile.php"> <?php echo "$_SESSION[username]" ?></a>
                        </div>

                </div>

        </nav> 
       
        
        
       
        </header>

        <section id="general">
        <div id="profilo2">
        <div id="immagine">
            <img src="https://www.business2community.com/wp-content/uploads/2017/08/blank-profile-picture-973460_640.png" height="150px" width="150px" alt="">
        </div>
        <div id="intestazione">
            <p><?php echo "$_SESSION[name]" ?></p>
            <p><?php echo "$_SESSION[lastname]" ?></p>
        </div>
        </div>
      <section id="liked_artist">
          <div id="artist-container">
          <h1>Le tue canzoni preferite</h1>
        </div>        
      </section>
      </section>

      
      <section id="search-view" class="hide">
        
      </section>
      <section id="show-content">
        
      </section>
          
      </body>
</html>