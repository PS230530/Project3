<?php
    include_once "./classes/StandpuntenDB.php";
    $db = new StandpuntDB();
    ?>

<!DOCTYPE html>
<html>
<head>
    <title>Verkiezingen Database</title>
    <link rel="stylesheet" href="css/ThemaStandpunten.css">
</head>
<body>
  <div class="container">
  <?php require "Partials/header.php"?>
  <?php require "Partials/nav.php"?>

  
<div class="form">
<table>
        <tr>
            <th>Thema ID</th>
            <th>Standpunt</th>

        </tr>
        </div>
        <?php
        if(isset($_GET["thema"]))
        {
          $rows = $db ->SelectStandpuntperThema($_GET["thema"]);
        }
        else 
        {
          $rows = $db->SelectStandpunt();
        }
        
        foreach($rows as $row)
        {
            echo "<tr >   
                    <td class='border_bottom'>$row[thema]</td>
                    <td class='border_bottom'>$row[standpunt]</td>
                  </tr>";
        }
        ?> 
</html>