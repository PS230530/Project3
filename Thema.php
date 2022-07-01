<?php
    include_once "./classes/ThemaDB.php";
    $db = new ThemaDB();
    ?>

<!DOCTYPE html>
<html>
<head>
    <title>Verkiezingen Database</title>
    <link rel="stylesheet" href="css/Thema.css">
</head>
<body>
  <div class="container">
  <?php require "Partials/header.php"?>
  <?php require "Partials/nav.php"?>

  
<div class="form">
  <br><br><br>
    <table>
        <tr>
            <th>Thema ID</th>
            <th>Thema</th>
        </tr>
        </div>
        <?php
        $rows = $db->selectPartijen();
        foreach($rows as $row)
        {
            echo "<tr >   
                    <td class='border_bottom'>$row[thema_id]</td>
                    <td class='border_bottom'><a href='ThemaStandpunten.php?thema=$row[thema]'>$row[thema]</a></td>
                  </tr>";
        }
        ?>
    </table>
</html>