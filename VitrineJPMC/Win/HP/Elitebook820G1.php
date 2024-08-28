<head>
  <?php include '../../refferences.php'; ?>
</head>
  <?php include '../../header.php'; ?>

  <?php $Libelle = 'Elitebook 820 G1'; /* Nom PC*/
      $Img1 = '../../Images\Win\hp\Elitebook 820 G1-1.jpg';
      $Img2 = '../../Images\Win\hp\Elitebook 820 G1-2.jpg';
      $Img3 = '../../Images\Win\hp\Elitebook 820 G1-3.jpg';
$Fabriquant = 'HP'; /* Nom Fabriquant*/
$Ports = '3x USB, 1x DisplayPort, 1x VGA, 1x Ethernet, 1x Jack, 1x SD, 1xLecteur Cartes'; /* Liste des ports*/
$Sortie = 'HDMI, VGA'; /* Liste des sorties vidéos */
$Dimensions = '2.25 x 38.3 x 25.1'; /* Dimensions */
$TailleEcran = '12,5'; /* Taille de l'écran en pouces*/
$Bluetooth = '1'; /* 1 si l'appareil possède le Bluetooth, sinon 0 */
$DVD = '0'; /* 1 si l'appareil possède un lecteur DVD, sinon 0 */
$Camera = '1'; /* 1 si l'appareil possède une webcam intégrée, sinon 0 */
$Micro = '1'; /* 1 si l'appareil possède un microphone, sinon 0 */
$Tactile = '0'; /* 1 si l'appareil possède un écran tactile, sinon 0 */
$Batterie = 'A DETERMINER'; /*Autonomie de la batterie*/
$OS = '0'; /* 0 = Windows, 1 = Mac, 2 = Linux*/
$Processeur = 'Intel Core I5 4310U'; /*Modèle de CPU*/
$Ram = '8 Go'; /*Quantité de RAM installée*/
$GPU = 'Intégré'; /* Carte graphique*/
$Stockage = 'SSD 256 Go'; 
$Resolution = '1366 x 768'; /* Résolution longueur x largeur*/
$Grade = 'A'; /* Grade de l'appareil*/
$Prix = '215'; /* En euro*/
include '../../info.php';?>