<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Animaux</title>
     <!-- Latest compiled and minified CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <!-- css -->
  <link rel="stylesheet" type="text/css" href="../css/styles.css" />
</head>

<body class='vitrine-accueil'>
<?php include "_partial/header.php"; ?>
    <br>
    <?php include "_partial/navbar.php"; ?>
    <br>
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


    <?php foreach ($row as $animal) : ?>
      <div class="card" style="width:100%; margin:auto 0;">
        <img src="export.php?id=3" class="card-img-top" alt="identity picture animal">
  <div class="card-body">
    <h5 class="card-title"><?php echo $animal['prenom']; ?></h5>
    <p class="card-text"><?php echo $animal['habitat']; ?></p>
    <a href="#" class="btn btn-primary"><?php echo $animal['race']; ?>
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
                  </a>
  </div>
</div>
          
    <?php endforeach; ?>
</div>





<!-- Pagination -->
  <?php if (empty($animal)) : ?>
    <p>No animals found.</p>
  <?php endif; ?>

  <br>
    <?php include "_partial/footer.php"; ?>
    <br>
    <button onclick="history.back()">Go Back</button>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>