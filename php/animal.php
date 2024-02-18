<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Animaux</title>
</head>
<body>
   
    <h1>Animaux</h1>
   <!--show only the validate habitat-->
   <?php
    require('connexion.php');
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // display only the validate comments
    $query = "SELECT * FROM animaux";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
    ?>
        
        <?php foreach ($row as $row): ?>
<div class="card">
  <div class="card-body">
    <h5 class="card-title"><?php echo $row['prenom']; ?></h5>
    <p class="card-text"><?php echo $row['race']; ?></p>
    <p class="card-text"><small class="text-muted"><?php echo $row['habitat']; ?></small></p>
    <a href="Lion_sante.php" class="btn btn-primary fiche">Carnet de santé</a>
  </div>
  <img class="card-img-bottom" src="../images/lion1.jpg" alt="Card image cap">
</div>
<?php endforeach; ?>
    
<!--if link from the card is click add 1 to view in the animaux table?-->
        <?php
        if(){
            $query = "UPDATE animaux SET view = view + 1 WHERE id = 1";
            mysqli_query($conn, $query);

        }
   
        ?>
        <br>
    
        <button onclick="history.back()">Go Back</button>
        <a href="admin.php">Home</a>

</body>
</html>
