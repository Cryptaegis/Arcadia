<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Animaux</title>
</head>

<body>
  <?php
  session_start();
  require('connexion.php');

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }


  $query = "SELECT * FROM animaux";
  $result = mysqli_query($conn, $query);
  
  if ($result) {
    $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
    
  } else {
    echo "Error: " . mysqli_error($conn) . $row . $query;
  }
  function updateView($id)
{     
    global $conn; 
    $sql = 'UPDATE animaux SET view = view + 1 WHERE id = ?';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);
    return $stmt->execute();   
    if ($stmt) {
    echo "View incremented.";
    } else {
    echo "Error: Invalid";
    }
}

  
  ?>


  <h1>Animaux</h1>


  <div class="card-deck">
    <?php foreach ($row as $animal) : ?>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><?php echo $animal['id']; ?></h5>
                <h5 class="card-title"><?php echo $animal['prenom']; ?></h5>
                <p class="card-text"><?php echo $animal['race']; ?>
                    <?php if (strpos($animal['race'], 'lion') !== false) : ?>
                        <a id="savane" href="Lion_sante.php" onclick="<?php updateView($animal['id'])?>">dans la savane</a>
                    <?php elseif (strpos($animal['race'], 'girafe') !== false) : ?>
                        <a id ="savane" href="girafe_sante.php" onclick="<?php updateView($animal['id'])?>">dans la savane</a>
                    <?php elseif (strpos($animal['race'], 'zèbre') !== false) : ?>
                        <a id="savane" href="zebre_sante.php" onclick="<?php updateView($animal['id'])?>">dans la savane</a>
                    <?php elseif (strpos($animal['race'], 'chimpanze') !== false) : ?>
                        <a id="foret" href="chimpanze_sante.php" onclick="<?php updateView($animal['id'])?>">dans la Jungle</a>
                    <?php elseif (strpos($animal['race'], 'aigle') !== false) : ?>
                        <a id="montagne" href="aigle_sante.php" onclick="<?php updateView($animal['id'])?>">dans la Jungle</a>
                    <?php elseif (strpos($animal['race'], 'jaguar') !== false) : ?>
                        <a id="foret" href="jaguar_sante.php" onclick="<?php updateView($animal['id'])?>">dans la Jungle</a>
                    <?php elseif (strpos($animal['race'], 'cigogne') !== false) : ?>
                        <a id="marais" href="cigogne_sante.php" onclick="<?php updateView($animal['id'])?>">dans le marais</a>
                    <?php elseif (strpos($animal['race'], 'canard') !== false) : ?>
                        <a id="marais" href="canard_sante.php" onclick="<?php updateView($animal['id'])?>">dans le marais</a>
                    <?php elseif (strpos($animal['race'], 'loutre') !== false) : ?>
                        <a id="riviere" href="loutre_sante.php" onclick="<?php updateView($animal['id'])?>">dans le marais</a>
                    <?php else : ?>
                        Bientôt dans Arcadia
                    <?php endif; ?>
                </p>
                <p class="card-text"><?php echo $animal['habitat']; ?></p>
            </div>
        </div>
    <?php endforeach; ?>
</div>





<!-- Pagination -->
  <?php if (empty($animal)) : ?>
    <p>No animals found.</p>
  <?php endif; ?>

  <button onclick="history.back()">Go Back</button>
  <a href="admin.php">Home</a>

</body>

</html>