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
    <div class="card central-card">
      <div class="card-body central-card">
        <h3 class="card-title"><?php echo $animal['prenom']; ?></h3>
        <p class="card-text"><?php echo $animal['habitat']; ?></p>
        <p href="#"><?php echo $animal['race']; ?>
          <?php if (strpos($animal['race'], 'lion') !== false) : ?>
            <br>
            <img src="../images/lion1.jpg" alt="Lion" class="card-img-top">
            <br>
            <a id="savane" href="Lion_sante.php" onclick="<?php updateView($animal['id']) ?>" class="btn btn-primary form-btn">dans la savane</a>
          <?php elseif (strpos($animal['race'], 'girafe') !== false) : ?>
            <br>
            <img src="../images/girafe1.jpg" alt="Girafe" class="card-img-top">
            <br>
            <a id="savane" href="girafe_sante.php" onclick="<?php updateView($animal['id']) ?>" class="btn btn-primary form-btn">dans la savane</a>
          <?php elseif (strpos($animal['race'], 'zèbre') !== false) : ?>
            <br>
            <img src="../images/zebra2.jpg" alt="Zèbre" class="card-img-top">
            <br>
            <a id="savane" href="zebre_sante.php" onclick="<?php updateView($animal['id']) ?>" class="btn btn-primary form-btn">dans la savane</a>
          <?php elseif (strpos($animal['race'], 'chimpanze') !== false) : ?>
            <br>
            <img src="../images/chimpanzee3.jpg" alt="Chimpanze" class="card-img-top">
            <br>
            <a id="jungle" href="chimpanze_sante.php" onclick="<?php updateView($animal['id']) ?>" class="btn btn-primary form-btn">dans la Jungle</a>
          <?php elseif (strpos($animal['race'], 'aigle') !== false) : ?>
            <br>
            <img src="../images/aigle1.jpg" alt="Aigle" class="card-img-top">
            <br>
            <a id="jungle" href="aigle_sante.php" onclick="<?php updateView($animal['id']) ?>" class="btn btn-primary form-btn">dans la Jungle</a>
          <?php elseif (strpos($animal['race'], 'jaguar') !== false) : ?>
            <br>
            <img src="../images/jaguar1.jpg" alt="Jaguar" class="card-img-top">
            <br>
            <a id="jungle" href="jaguar_sante.php" onclick="<?php updateView($animal['id']) ?>" class="btn btn-primary form-btn">dans la Jungle</a>
          <?php elseif (strpos($animal['race'], 'cigogne') !== false) : ?>
            <br>
            <img src="../images/cigogne1.jpg" alt="Cigogne" class="card-img-top">
            <br>
            <a id="marais" href="cigogne_sante.php" onclick="<?php updateView($animal['id']) ?>" class="btn btn-primary form-btn">dans le marais</a>
          <?php elseif (strpos($animal['race'], 'canard') !== false) : ?>
            <br>
            <img src="../images/duck3.jpg" alt="Canard" class="card-img-top">
            <br>
            <a id="marais" href="canard_sante.php" onclick="<?php updateView($animal['id']) ?>" class="btn btn-primary form-btn">dans le marais</a>
          <?php elseif (strpos($animal['race'], 'loutre') !== false) : ?>
            <br>
            <img src="../images/loutre1.jpg" alt="Loutre" class="card-img-top">
            <br>
            <a id="riviere" href="loutre_sante.php" onclick="<?php updateView($animal['id']) ?>" class="btn btn-primary form-btn">dans le marais</a>
          <?php else : ?>
            Bientôt dans Arcadia
          <?php endif; ?>
        </p>
      </div>
    </div>
  <?php endforeach; ?>






  <!-- Pagination -->
  <?php if (empty($animal)) : ?>
    <p>No animals found.</p>
  <?php endif; ?>

  <br>
  <?php include "_partial/footer.php"; ?>
  <br>

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>