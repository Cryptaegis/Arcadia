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
  <h1>Carnet de santé du Canard</h1>
  <br>
  <!--section description du canard-->
  <h2>Description</h2>
  <p class="ac-p">Au zoo, vous pourrez admirer un magnifique canard aux plumes vibrantes et variées. Avec son bec jaune vif et ses yeux perçants, ce canard est un véritable spectacle à lui tout seul. Il se déplace gracieusement dans l'eau, voguant paisiblement, et on peut même l'entendre barboter joyeusement. Les visiteurs seront captivés par la beauté et l'élégance de ce canard, qui évoque à merveille la tranquillité et la nature sauvage des étendues d'eau où il réside.</p>
  <br>
  <!--section habitat du canard-->
  <h2>Habitat</h2>
  <br>
  <p class="ac-p">L'habitat du canard dans un zoo est spécialement conçu pour refléter son environnement naturel. Il comprend un étang ou une mare avec une végétation aquatique abondante, des zones herbeuses pour se nourrir et se reposer, ainsi que des abris pour se protéger des intempéries. L'eau est maintenue propre et filtrée régulièrement pour assurer la santé et le bien-être des canards, tandis que des aménagements supplémentaires, tels que des rochers et des troncs d'arbres, sont ajoutés pour créer un espace stimulant et naturel pour les canards.</p>
  <br>
  <?php

  require 'connexion.php';

  $query = "SELECT * FROM observation WHERE animal = 'canard'";
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
  <p class="ac-p">L'alimentation d'un canard se compose généralement d'un mélange de grains et de légumes, avec une quantité recommandée de 200 à 250 grammes par jour. Ces oiseaux sont omnivores et ont besoin d'une alimentation équilibrée pour maintenir leur santé et leur niveau d'énergie. Il est essentiel de fournir une variété d'aliments pour répondre à leurs besoins nutritionnels, tels que des céréales, des légumes verts, des fruits, et de l'eau fraîche en quantité suffisante. Il est également important de surveiller leur alimentation pour éviter un surpoids et les complications associées.</p>
  <br>
  <?php
  $sql = "SELECT * FROM alimentation WHERE animal = 'canard'";
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