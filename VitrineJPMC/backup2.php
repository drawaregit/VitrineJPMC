
<head>
  <?php include 'refferences.php'; ?>
</head>
<style>
    .div-garanti {
        background-color: #EBEBEB; 
    }
    h1 {
        font-weight: bold;
    }
    .footer { 
    position: fixed; 
    bottom: 0; 
    left: 0; 
    z-index: 10;
}

/* Header styles */

.header.container-fluid {
  max-width: 1200px; /* set a maximum width for the container */
  margin: 0 auto; /* center the container */
}

.header.row {
  align-items: center; /* vertically center the row contents */
}

.header.col-sm-4 {
  padding: 0; /* remove padding from the logo column */
}

.header.col-sm-8 {

}

.header img {
  width: 100%; /* make the logo image full width */
  height: auto; /* maintain the image aspect ratio */
  margin: 0 auto; /* center the image */
}



div.c-wrapper{
    width: 100%; /* for example */
    margin: auto;
}

.carousel-inner > .item > img, 
.carousel-inner > .item > a > img{
width: 100%; /* use this, or not */
margin: auto;

}

body {
  margin: 0;
  padding: 0;
  height: 100vh; /* set body height to full viewport height */
  display: flex;
  flex-direction: column;
}



.main-container {
  flex: 1; /* make main container take up remaining space */
  display: flex;
  flex-direction: column;
  overflow: hidden; /* hide scrollbar */
}

.container-fluid {

  flex: 1; /* make container-fluid take up remaining space */
  display: flex;
  flex-direction: column;
}

.carousel-inner {
  height: 100%; /* make carousel take up full height of container-fluid */
  overflow: hidden; /* hide carousel scrollbar */
}

.carousel-item {
  height: 100%; /* make carousel item take up full height of carousel-inner */
}

.carousel-item img {
  height: 100%; /* make carousel image take up full height of carousel item */
  object-fit: contain; /* scale image down to fit container */
}

.text-content {
  font-size: calc(1.5vw + 1rem); /* scale font size based on viewport width */
}

.footer {
  background-color: #fff; /* set footer background color */

  text-align: center;
}


</style>
<body>
<div class="header">
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-4">
            <img class="img-fluid" src="Images/logo horizontal.png">
        </div>
        <div class="col-sm-8 d-flex justify-content-center align-items-center div-garanti" style="background-image: url('Images/fondDiagnal.png');">
            <strong><h1>Reconditionné et garanti 1 an !</h1></strong>
        </div>
    </div>
</div>
</div>

  <?php $Libelle = 'Latitude E5570'; /* Nom PC*/
      $Img1 = 'Images\Win\dell\Latitude E5570-1.jpg';
      $Img2 = 'Images\Win\dell\Latitude E5570-2.jpg';
      $Img3 = 'Images\Win\dell\Latitude E5570-3.jpg';
$Fabriquant = 'Dell'; /* Nom Fabriquant*/
$Ports = '3x USB, 1x HDMI, 1x VGA, 1x Ethernet, 1x Jack, 1x SD'; /* Liste des ports*/
$Sortie = 'HDMI, VGA'; /* Liste des sorties vidéos */
$Dimensions = '2.4 x 37.7 x 25.2'; /* Dimensions */
$TailleEcran = '15,6'; /* Taille de l'écran en pouces*/
$Bluetooth = '1'; /* 1 si l'appareil possède le Bluetooth, sinon 0 */
$DVD = '0'; /* 1 si l'appareil possède un lecteur DVD, sinon 0 */
$Camera = '1'; /* 1 si l'appareil possède une webcam intégrée, sinon 0 */
$Micro = '1'; /* 1 si l'appareil possède un microphone, sinon 0 */
$Tactile = '0'; /* 1 si l'appareil possède un écran tactile, sinon 0 */
$Batterie = 'A DETERMINER'; /*Autonomie de la batterie*/
$OS = '0'; /* 0 = Windows, 1 = Mac, 2 = Linux*/
$Processeur = 'Intel Core I5 6200U'; /*Modèle de CPU*/
$Ram = '8 Go'; /*Quantité de RAM installée*/
$GPU = 'Intégré'; /* Carte graphique*/
$Stockage = 'SSD nvme 240 Go'; 
$Resolution = '1366x768'; /* Résolution longueur x largeur*/
$Grade = 'B'; /* Grade de l'appareil*/
$Prix = '360'; /* En euro*/
?>

<div class="main-container">
<div class="container-fluid" style="background-color: #EBEBEB;">
    <div class="row" >
        <div class="col-sm-7">
            <div id="demo" class="carousel slide" data-ride="carousel" style=" margin: 0; position: absolute; top: 50%; transform: translateY(-50%);">

                <!-- Indicators -->
                <ul class="carousel-indicators">
                  <li data-target="#demo" data-slide-to="0" class="active"></li>
                  <li data-target="#demo" data-slide-to="1"></li>
                  <li data-target="#demo" data-slide-to="2"></li>
                </ul>

                <!-- The slideshow -->
                <div class="carousel-inner" >
                  <div class="carousel-item active">
                    <img class="d-block mx-auto"src="<?php echo $Img1?> ">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block mx-auto" src="<?php  echo $Img2?>">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block mx-auto" src="<?php  echo $Img3?>">
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
                      <h1><?php echo $Libelle?></h1>
                      <p style="color: #626262; font-size: 110%;"><i><?php echo $Fabriquant?></i></p>
                      <h5>Système d'exploitation : <?php if  ($OS == 0) {echo '<i class="fa-brands fa-windows"></i>';} elseif ($OS == 1) {echo '<i class="fa-brands fa-apple"></i>';} else {echo '<i class="fa-brands fa-linux"></i>';}?></i></h5>
                      <h5>Dimensions : <strong><?php echo $Dimensions?> cm</strong></h5>
                      <h5>Taille de l'écran : <strong><?php echo $TailleEcran?> pouces</strong></h5>
                      <h5>Ports : <strong><?php echo $Ports?></strong></h5>
                      <h5>Bluetooth : <?php if  ($Bluetooth == 1) {echo '<i class="fa-solid fa-check"></i>';} else {echo '<i class="fa-solid fa-ban">';}?></i></h5>
                      <h5>Lecteur DVD : <?php if  ($DVD == 1) {echo '<i class="fa-solid fa-check"></i>';} else {echo '<i class="fa-solid fa-ban">';}?></i></h5>
                      <h5>Web Cam : <?php if  ($Camera == 1) {echo '<i class="fa-solid fa-check"></i>';} else {echo '<i class="fa-solid fa-ban">';}?></i></h5>
                      <h5>Microphone : <?php if  ($Micro == 1) {echo '<i class="fa-solid fa-check"></i>';} else {echo '<i class="fa-solid fa-ban">';}?></i></h5>
                      <h5>Tactile : <?php if  ($Micro == 1) {echo '<i class="fa-solid fa-check"></i>';} else {echo '<i class="fa-solid fa-ban">';}?></i></h5>
                      <p style = "font-size: 120%;">Grade : <u><strong style = "font-size: 150%;"><?php echo $Grade?></strong></u></p>
                      <h3>Prix:</h3><p style = "font-size: 500%;"><strong><?php echo $Prix ?> Euro</strong></p>
        </div>
        
        </div>
        
    </div>
</div>
</div>
<footer class="footer">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-2">
        <h4>Processeur</h4><br>
        <h3><i class="fa-solid fa-microchip"></i> <?php echo $Processeur ?></h3>
      </div>
      <div class="col-sm-2">
        <h4>Mémoire Vive</h4><br>
        <h3><i class="fa-solid fa-memory"></i> <?php echo $Ram ?></h3>
      </div>
      <div class="col-sm-2">
        <h4>Carte Graphique</h4><br>
        <h3><i class="fa-solid fa-memory"></i> <?php echo $GPU ?></h3>
      </div>
      <div class="col-sm-2">
        <h4>Stockage</h4><br>
        <h3><i class="fa-solid fa-hard-drive"></i> <?php echo $Stockage ?></h3>
      </div>
      <div class="col-sm-2">
        <h4>Résolution</h4><br>
        <h3><i class="fa-solid fa-display"></i> <?php echo $Resolution ?></h3>
      </div>
      <div class="col-sm-2">
        <h4>Batterie</h4><br>
        <h3><i class="fa-solid fa-car-battery"></i> <?php echo $Batterie ?></h3>
      </div>
    </div>
  </div>
</footer>
</body>

