<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Compte rendu vétérinaire</title>
      <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <!-- css -->
  <link rel="stylesheet" type="text/css" href="../css/styles.css" />
</head>
<body class="ac-admin titre-admin">
    
<a href="admin.php">
        <img class="logo-arcadia background" src="../images/arcadia_logo.png" alt="Arcadia logo">
    </a>
<br>
<br>
<?php
require('connexion.php');
require ('range.php');

$query = "SELECT * FROM observation";
  $resultat = mysqli_query($conn,$query);
  $row = mysqli_fetch_all($resultat, MYSQLI_ASSOC);
  mysqli_free_result($resultat);
  //si la requête réussis et qu'il y a des résultats
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);
    foreach ($row as $rows) {
        echo '<div class="card border-form" style="width: 18rem;">';
            echo "<h5 class='card-title'>".$rows['animal']."</h5>";
            echo "<h5 class='card-title'>".$rows['date']."</h5>";
            echo "<p class='card-text'>Observation : ".$rows['observation']."</p>";
            echo "<p class='card-text'>Etat : ".$rows['etat']."</p>";
            echo "<p class='card-text'>Amélioration : ".$rows['amelioration']."</p>";
        echo '</div>';
        echo "<br>";
    }
} else {
    echo 
    "<div class='alert alert-warning' role='alert'>
        Aucun résultat trouvé !
    </div>";
};
?>


<form action="" method="get" class="border-form">
    <label for="animal">Animal:</label>
    <select name="animal" id="animal">
        <option value="">Tous</option>
        <option value="lion">Lion</option>
        <option value="girafe">Girafe</option>
        <option value="zebre">Zèbre</option>


    </select>

    <label for="date_range">Plage de dates:</label>
    <select name="date_range" id="date_range">
        <option value="last_week">Semaine précédente</option>
        <option value="this_week">Cette semaine</option>
        </select>

    <button type="submit" class="form-btn">Filtrer</button>    
</form>
<br>
    <br>

    <nav aria-label="breadcrumb" style="width:50%; margin:auto;">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="admin.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="admin_cr.php">Carnet de santé</a></li>
        </ol>
    </nav>
    <br>



</body>
</html>
