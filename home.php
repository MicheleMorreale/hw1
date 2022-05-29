<!DOCTYPE html>
<html>
<head>
<title>Listen</title>
<link rel="stylesheet" href="mhw1.css" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;600&display=swap" rel="stylesheet">
<script src="mhw3.js" defer="true"></script>
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
                             <img id="profilo_foto" src="icona.png" alt="" width="30px" height="30px">
                             <a>Utente</a>
                        </div>

                </div>

        </nav>
            <div id="main">

            <h1>LISTEN</h1>
            <h2>Applicazione web che consente la riproduzione di brani musicali e podcast</h2>

              </div>

    </header>

    <section>
      
      <!-- <h3>I tuoi generi più ascoltati</h3>
      <div class="generi">
        <a id="hiphop">Hip Hop</a>
        <a id="pop">Pop</a>
        <a id="rap">Rap</a>
        <a id="rock">Rock</a>
      </div> -->

      <div id="sezione_podcast">
        <h3>Scopri i nuovi podcast</h3>
        <div> <a>
         <img src="trasferimento.png" height="315px"width="315px">         
        </a>
          <p>Ogni settimana recensioni, news, trailer reaction, anteprime,rubriche e
             tutto quanto riguardi Cinema e Serie TV!
             CineFacts è il podcast più cinefilo e divertente del web!</p>
          </div>
         
      </div>

      <div class="topalbum">
          <h3>Album più popolari</h3> 
            <div id="album1"> <a><img src="lazza.jpg" height="315" width="315" ></a>
              <h4>Sirio</h4>
              <h5>Lazza</h5>
            </div>

          <div id="album2"> <a><img src="blanco.jpg" height="315" width="315" > </a>
              <h4>Blu Celeste</h4>
              <h5>Blanco</h5>
          </div>

        <div id="album3"> <a> <img src="marracash.jpg" height="315" width="315" > </a>
          <h4>Noi, Loro, gli altri</h4>
          <h5>Marracash</h5>
        </div>     

      </div> 

      <div class="sezione_recensioni">
         <h3>Ultime recensioni utenti</h3>
        <div id="Recensione1">
         <a> <img src="mace.jpg" alt="" height="400" width="400"></a>
          <h4>Obe</h4>
          <h5>Mace</h5>
          <p>È raro trovare una tale lucidità nell'interpretare la scena contemporanea pop,
             muovendosi fra l'hip-hop e tutte le sfumature dell'urban
              ma anche lambendo i lidi di un it-pop che,
             pur stravolto dalla trap ubiquitaria,
             rimane ancora vitale e capace di spunti creativi.</p>
             <p class="voto">Voto: 9</p>
             <a><h6>Utente</h6></a>
        </div>

        <div id="Recensione2">
         <a><img src="marracash.jpg" alt="" height="400" width="400"></a>
          <h4>Noi, loro, gli altri</h4>
          <h5>Marracash</h5>
          <p>La produzione è sempre di altissimo livello e il flow di Marra
             è da sempre una garanzia per qualsiasi cosa cui si presti.</p>
             <p class="voto">Voto: 8.5</p>
             <a><h6>Utente</h6></a>
        </div>

        <div id="Recensione3">
          <a><img src="madame.jpg" alt="" height="400" width="400"></a>
          <h4>Madame</h4>
          <h5>Madame</h5>
          <p>Il primo album di Madame è una danza di linguaggi e di modalità di canto diverse,
             di musiche per nulla banali e di voci che si intrecciano.</p>
             <p class="voto">Voto: 7.5</p>
             <a><h6>Utente</h6></a>
        </div>
      </div>
    </section>
      <section id="search-view" class="hide">
        
      </section>
      <section id="show-content">
        
      </section>
      <footer>
        <div>
        <p>Minihomework 1 <br>
          Web Programming <br>
          Michele Morreale <br>
          1000001953
        </p>
      </div>
      </footer>
    
</body>
</html>