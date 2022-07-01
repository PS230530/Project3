<?php
    include_once "./classes/VerkiezingDB.php";
    $db = new VerkiezingDB();
    ?>

<!DOCTYPE html>
<html>
<body>
<head>
<title class="title">Nederlandse Verkiezingen</title>
<link rel="stylesheet" href="css/Index.css">

</head>
  <div class="container">
  <?php require "Partials/header.php"?>
  <?php require "Partials/nav.php"?>

  

<br><br><br>

<div class="Lform">
  <p><br><br><br><br> We kiezen welke partijen en ministers er in de Tweede Kamer komen. We kiezen de gemeenteraad. Maar daarnaast mogen we ook stemmen voor de Eerste Kamer, de Provinciale Staten, het Europees Parlement en de waterschappen. Maar die krijgen vaak veel minder aandacht. <br><br>
                      We stemmen eens in de vier jaar op alle bovenstaande verkiezingen, behalve de Europese. Die zijn iedere vijf jaar. 
                      De Tweede Kamerverkiezingen zijn het populairst. De partijen zijn continue in de media en het hele land praat erover. De bevolking kiest rechtstreeks de 150 leden van de Tweede Kamer.
  </p>
</div>

<div class="Mform">
  <a href="Deelnemers.php">
  <img class="Stemfoto" src="img/verkiezingen-potlood-1600-.jpg" alt="Stemfoto">
  </a>
</div>

<div class="Rform">
<p> <br><br>  Eens in de vier jaar kunnen Nederlanders van 18 jaar en ouder stemmen op de Tweede Kamerverkiezingen. Nederland is een representatieve democratie, dus wij kiezen de mensen die opkomen voor onze belangen in de regering. Het aantal stemmen wordt omgezet in procenten en aan de hand daarvan worden het aantal zetels toegekend aan de verschillende partijen. Maar hoe zit het precies? 
    <br><br>  Stemmen mag als je een Nederlands staatsburgen bent van minimaal 18 jaar oud. Je kan dan actief stemmen of zelf gekozen worden. Mensen die langer dan vijf jaar in Nederland wonen maar geen Nederlandse nationaliteit hebben, mogen alleen met de gemeenteraadsverkiezingen meedoen. Je mag niet stemmen als je onder curatele staat of als de rechter je kiesrecht heeft afgenomen.
</p>
</div>
</body>

</html>