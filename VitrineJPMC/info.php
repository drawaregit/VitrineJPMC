<?php
echo '
<div class="container-fluid" >
    <div class="row" style="cursor: none;">
        <div class="col-sm-7">
            <div id="demo" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                <ul class="carousel-indicators">
                  <li data-target="#demo" data-slide-to="0" class="active"></li>
                  <li data-target="#demo" data-slide-to="1"></li>
                  <li data-target="#demo" data-slide-to="2"></li>
                </ul>

                <!-- The slideshow -->
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="'.$Img1.'">
                  </div>
                  <div class="carousel-item">
                    <img src="'.$Img2.'">
                  </div>
                  <div class="carousel-item">
                    <img src="'.$Img3.'">
                  </div>
                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                  <span class="carousel-control-next-icon"></span>
                </a>

            </div>
        </div>
        <div class="col-sm-5">
                      <h1>'.$Libelle.'</h1>
                      <p style="color: #626262; font-size: 110%;"><i>'.$Fabriquant.'</i></p>
                      <h5>Système d\'exploitation : '.($OS == 0? '<i class="fa-brands fa-windows"></i>' : ($OS == 1? '<i class="fa-brands fa-apple"></i>' : '<i class="fa-brands fa-linux"></i>')).'</h5>
                      <h5>Dimensions : <strong>'.$Dimensions.' cm</strong></h5>
                      <h5>Taille de l\'écran : <strong>'.$TailleEcran.' pouces</strong></h5>
                      <h5>Ports : <strong>'.$Ports.'</strong></h5>
                      <h5>Bluetooth : '.($Bluetooth == 1? '<i class="fa-solid fa-check"></i>' : '<i class="fa-solid fa-ban"></i>').'</h5>
                      <h5>Lecteur DVD : '.($DVD == 1? '<i class="fa-solid fa-check"></i>' : '<i class="fa-solid fa-ban"></i>').'</h5>
                      <h5>Web Cam : '.($Camera == 1? '<i class="fa-solid fa-check"></i>' : '<i class="fa-solid fa-ban"></i>').'</h5>
                      <h5>Microphone : '.($Micro == 1? '<i class="fa-solid fa-check"></i>' : '<i class="fa-solid fa-ban"></i>').'</h5>
                      <h5>Tactile : '.($Tactile == 1? '<i class="fa-solid fa-check"></i>' : '<i class="fa-solid fa-ban"></i>').'</h5>
                      <p style = "font-size: 120%;">Grade : <u><strong style = "font-size: 150%;">'.$Grade.'</strong></u></p>
                      <h3>Prix:</h3><p style = "font-size: 500%; color: red;"><strong>'.$Prix.' Euros</strong></p>
        </div>
        
        </div>
        
    </div>
</div>

<footer class="footer">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-2">
        <h4>Processeur</h4><br>
        <h3><i class="fa-solid fa-microchip"></i> '.$Processeur.'</h3>
      </div>
      <div class="col-sm-2">
        <h4>Mémoire Vive</h4><br>
        <h3><i class="fa-solid fa-memory"></i> '.$Ram.'</h3>
      </div>
      <div class="col-sm-2">
        <h4>Carte Graphique</h4><br>
        <h3><i class="fa-solid fa-brain"></i> '.$GPU.'</h3>
      </div>
      <div class="col-sm-2">
        <h4>Stockage</h4><br>
        <h3><i class="fa-solid fa-hard-drive"></i> '.$Stockage.'</h3>
      </div>
      <div class="col-sm-2">
        <h4>Résolution</h4><br>
        <h3><i class="fa-solid fa-display"></i> '.$Resolution.'</h3>
      </div>
      <div class="col-sm-2">
        <h4>Batterie</h4><br>
        <h3><i class="fa-solid fa-car-battery"></i> '.$Batterie.'</h3>
      </div>
    </div>
  </div>
</footer>';
