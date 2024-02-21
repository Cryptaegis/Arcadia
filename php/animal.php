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
    echo "Error: " . mysqli_error($conn) . $row;
  }
  //si bouton view click envoyer on incremente de 1 la colonne view
  if (isset($_POST['view'])) {
    $view = $_POST['view'];
    $query = "UPDATE animaux SET view = view + 1 WHERE view = '$view'";
    $result = mysqli_query($conn, $query);
    if ($result) {
      //header('location: animal.php');
      echo 'View incremented successfully';

    } else {
      echo "Error: " . mysqli_error($conn);
    }
  }
 // si le bouton animal détail est clické, envoyer vers la page qui correspond à l'animal selectionné
  if (isset($_POST['animal'])) {
    $animal = $_POST['race'];
    if ($animal == 'Lion') {
      header('location: Lion_sante.php');
    } elseif
    ($animal == 'zebre') {
      header('location: zebre_sante.php');
    } elseif
    ($animal == 'girafe') {
      header('location: girafe_sante.php');
    } elseif
    ($animal == 'Chimpanze') {
      header('location: chimpanze_sante.php');
    } elseif
    ($animal == 'aigle') {
      header('location: aigle_sante.php');
    }
  }
  ?>
 
     
  <h1>Animaux</h1>

  <!-- Display all animals -->
  <div class="table-responsive">
    <table class="table table-bordered">
      <tr>
        <th>Id</th>
        <th>Prenom</th>
        <th>Habitat</th>
        <th>Race</th>
        <th>View</th>
      </tr>
      <?php foreach ($row as $animal) : ?>
        <tr>
          <td><?php echo  $animal['id'] ?></td>
          <td><?php echo $animal['prenom']; ?></td>
          <td><?php echo $animal['habitat']; ?></td>
          <td><?php echo $animal['race']; ?></td>
          <td><?php echo $animal['view']; ?></td>
          <td>
            <form action="animal.php" method="post">
              <input type="hidden" name="view" value="<?php echo $animal['view']; ?>">
              <input type="submit" value="View">
              <!--link qui envoie vers les détails de l'naimal-->
              <a href="animal_detail.php?id=<?php echo $animal['id']; ?>">Details</a>
          <!--si race = lion envoyer vers la page lion_sante.php-->
              <input type="hidden" name="id" value="<?php echo $animal['id']; ?>"/>
              <button type="button" onclick="showSanté(this)" class="btn btn-primary">Santé</button>
            </form>
          </td>
        </tr>
      <?php endforeach; ?>
    </table>
  </div>


  <?php if (empty($animal)): ?>
        <p>No animals found.</p>
    <?php endif; ?>

  <button onclick="history.back()">Go Back</button>
  <a href="admin.php">Home</a>

</body>

</html>