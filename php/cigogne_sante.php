<!DOCTYPE html>
<html>
  <head>
    <title>Carnet de santé</title>
  </head>
  <body>
 <?php
  // Start the session
  session_start();

  // Check if user is not logged in, redirect to login page
  if (!isset($_SESSION["username"])) {
      header("Location: login.php");
      exit();
  }

  require 'connexion.php';

  // les data Lion du tableau observation pour les afficher à chaque ajout
  $query = "SELECT * FROM observation WHERE animal = 'cigogne'";
  $resultat = mysqli_query($conn,$query);
  $row = mysqli_fetch_all($resultat, MYSQLI_ASSOC);
  mysqli_free_result($resultat);



      // Check for errors
      if ($resultat === false) {
          die("Error executing view: $result");

      }else
      {
        echo "Observation view successfully";
      }
  ?>
<table>
    <tr>
        <th>Date</th>
        <th>Time</th>
        <th>Observation</th>
        <th>Etat</th>
        <th>Amelioration</th>
    </tr>
    <?php foreach ($row as $rows): ?>
    <tr>
        <td><?php echo $rows['date']; ?></td>
        <td><?php echo $rows['time']; ?></td>
        <td><?php echo $rows['observation']; ?></td>
        <td><?php echo $rows['etat']; ?></td>
        <td><?php echo $rows['amelioration']; ?></td>
    </tr>
    <?php endforeach; ?>
</table>


<?php
// les data Lion du tableau Alimentation pour les afficher à chaque ajout
  $sql = "SELECT * FROM alimentation WHERE animal = 'cigogne'";
  $result = mysqli_query($conn,$sql);
  $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
  mysqli_free_result($result);



      // Check for errors
      if ($result === false) {
          die("Error executing view: $result");

      }else
      {
        echo "Nourriture view successfully";
      }
  ?>
<table>
    <tr>
        <th>Date</th>
        <th>Time</th>
        <th>Nourriture</th>
        <th>Quantite</th>
    </tr>
    <?php foreach ($row as $rows): ?>
    <tr>
        <td><?php echo $rows['date']; ?></td>
        <td><?php echo $rows['time']; ?></td>
        <td><?php echo $rows['nourriture']; ?></td>
        <td><?php echo $rows['quantite']; ?></td>
    </tr>
    <?php endforeach; ?>
</table>
<button onclick="history.back()">Go Back</button>

  </body>
</html>