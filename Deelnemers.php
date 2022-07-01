<?php
    include_once "./classes/VerkiezingDB.php";
    $db = new VerkiezingDB();
    ?>

<!DOCTYPE html>
<html>
<head>
    <title>Verkiezingen Database</title>
    <link rel="stylesheet" href="css/Deelnemers.css ">
</head>
<body>
  <div class="container">
  <?php require "Partials/header.php"?>
  <?php require "Partials/nav.php"?>  


<div class="form">
  <br><br><br>
    <table>
        <tr>
            <th>Partij ID</th>
            <th>Naam</th>
            <th>Adres</th>
            <th>Postcode</th>
            <th>Gemeente</th>
            <th>Emailadres</th>
            <th>Telefoonnummer</th>
        </tr>
        </div>
        <?php
        $rows = $db->selectPartijen();
        foreach($rows as $row)
        {
            echo "<tr >   
                    <td class='border_bottom'>$row[partij_id]</td>
                    <td class='border_bottom'>$row[naam]</td>
                    <td class='border_bottom'>$row[adres]</td>
                    <td class='border_bottom'>$row[postcode]</td>
                    <td class='border_bottom'>$row[gemeente]</td>
                    <td class='border_bottom'>$row[emailadres]</td>
                    <td class='border_bottom'>$row[telefoonnummer]</td>
                    <td>
                  </tr>";
        }
        ?>
  
</html>