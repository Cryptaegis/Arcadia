<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Carnet de santé</title>
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
  <h1>Carnet de santé du Jaguar</h1>
  <br>
  <!--section description du Jaguar-->
  <h2>Description</h2>
  <p class="ac-p">Dans le zoo, le jaguar est une créature majestueuse et puissante. Avec son pelage tacheté et sa silhouette gracieuse, il attire rapidement l'attention des visiteurs. Ce prédateur furtif et gracieux possède une force redoutable et une agilité remarquable, ce qui en fait l'un des animaux les plus fascinants à observer. Sa présence imposante et son regard perçant rappellent la nature sauvage dans laquelle il évolue habituellement.</p>
  <br>
  <!--section habitat du Jaguar-->
  <h2>Habitat</h2>
  <br>
  <p class="ac-p">L'habitat du jaguar dans un zoo doit être conçu pour offrir un environnement similaire à son habitat naturel. Il devrait inclure un espace spacieux avec de la végétation dense, des arbres pour grimper, des rochers et des zones d'eau pour la baignade. Il devrait également y avoir des cachettes et des plateformes pour que le jaguar puisse se reposer et observer son environnement. La sécurité est primordiale, avec des barrières solides pour séparer les jaguars des visiteurs. Un éclairage tamisé et des éléments naturels permettraient de créer une atmosphère apaisante et authentique pour les jaguars.</p>
  <br>
  <?php

  require 'connexion.php';

  //Data jaguar
  $query = "SELECT * FROM observation WHERE animal = 'jaguar'";
  $resultat = mysqli_query($conn, $query);
  $row = mysqli_fetch_all($resultat, MYSQLI_ASSOC);
  mysqli_free_result($resultat);

  ?>
  <table class="border-form">
    <tr>
      <th>Date</th>
      <th>Time</th>
      <th>Observation</th>
      <th>Etat</th>
      <th>Amelioration</th>
    </tr>
    <?php foreach ($row as $rows) : ?>
      <tr>
        <td><?php echo $rows['date']; ?></td>
        <td><?php echo $rows['time']; ?></td>
        <td><?php echo $rows['observation']; ?></td>
        <td><?php echo $rows['etat']; ?></td>
        <td><?php echo $rows['amelioration']; ?></td>
      </tr>
    <?php endforeach; ?>
  </table>
  <h2>Alimentation</h2>
  <br>
  <p class="ac-p">L'alimentation d'un jaguar dans un zoo est composée de viande fraîche, tels que des morceaux de boeuf, poulet ou mouton, généralement distribués en portions de 2 à 3 kilogrammes pour assurer un apport nutritif adéquat. Les jaguars sont des carnivores, donc leur alimentation se compose principalement de viande, avec parfois l'ajout de compléments alimentaires pour garantir un régime équilibré.</p>
  <br>
  <?php
  $sql = "SELECT * FROM alimentation WHERE animal = 'jaguar'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
  mysqli_free_result($result);

  ?>
  <table class="border-form">
    <tr>
      <th>Date</th>
      <th>Time</th>
      <th>Nourriture</th>
      <th>Quantite</th>
    </tr>
    <?php foreach ($row as $rows) : ?>
      <tr>
        <td><?php echo $rows['date']; ?></td>
        <td><?php echo $rows['time']; ?></td>
        <td><?php echo $rows['nourriture']; ?></td>
        <td><?php echo $rows['quantite']; ?></td>
      </tr>
    <?php endforeach; ?>
  </table>
  <br>
  <br>
  <?php include "_partial/footer.php"; ?>
  <br>
</body>

</html>