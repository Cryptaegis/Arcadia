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
//incremente by 1 the view column of the animal onclick
  if (isset($_POST['view'])) {
    $view = $_POST['view'];
    $query2 = "UPDATE animaux SET view = view + 1 WHERE view = '$view'";
    $story = mysqli_query($conn, $query2);
    if ($story) {
      echo "View incremented.";
        }else {
        echo "Error: Invalid". $query2;
        }
  }

  function displayButton()
  {
    echo '<form method="post" action="">';
    echo '<button  type="submit" name="view" value="view"> dans la savane</button>';
    echo '</form>';
  }
?>


  <h1>Animaux</h1>


  <!-- Display all animals in bootstrap card -->
  <div class="card-deck">
    <?php foreach ($row as $animal) : ?>
      <div class="card">
        <!--<img src="img/<?php echo $animal['image']; ?>" class="card-img-top" alt="...">-->
        <div class="card-body">
          <h5 class="card-title"><?php echo $animal['prenom']; ?></h5>
          <p class="card-text"><?php echo $animal['race'];
          // create a for boucle that search the word lion or girafe
            if (strpos($animal['race'],'lion') !== false) {
            
            }elseif ( strpos($animal['race'],'girafe')!==false){
            echo '<a href="Girafe_sante.php"> dans la savane</a>';
            }else{echo 'Bientôt dans Arcadia';} ?></p>
          <p class="card-text"><?php echo $animal['habitat']; ?></p>
          <p class="card-text"><?php echo $animal['view']; ?></p>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
 

  <?php if (empty($animal)) : ?>
    <p>No animals found.</p>
  <?php endif; ?>

  <button onclick="history.back()">Go Back</button>
  <a href="admin.php">Home</a>

</body>

</html>