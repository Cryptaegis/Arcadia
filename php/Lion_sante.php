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
  <h1>Carnet de santé du Lion</h1>
  <br>
  <!--section  lion-->

  <h2>Description</h2>
  <br>
  <p class="ac-p">Le lion, également connu sous le nom de "roi de la jungle", est un animal majestueux et puissant. Avec sa crinière distinctive qui encadre son visage imposant, le lion est un prédateur redoutable. Sa silhouette gracieuse et sa musculature développée en font un symbole de force et de grâce. Les visiteurs du zoo seront fascinés par son allure regale et sa présence imposante, rappelant les vastes plaines africaines où il règne en tant que prédateur suprême.
  </p>
  <h2>Habitat</h2>
  <br>
  <?php

  require 'connexion.php';

  // Data lion
  $query = "SELECT * FROM observation WHERE animal = 'Lion'";
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
  <br>
  <p class="ac-p">Le lion, en captivité dans un zoo, occupe généralement un enclos spacieux qui imite autant que possible son habitat naturel. Cet espace est équipé de rochers, d'arbres et de points d'ombre pour permettre au lion de se reposer et de se cacher. Des éléments stimulants tels que des jouets et des structures d'escalade peuvent être ajoutés pour encourager l'activité physique et mentale.</p>
  <h2>Alimentation</h2>
  <br>
  <?php
  // Data lion
  $sql = "SELECT * FROM alimentation WHERE animal = 'Lion'";
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
  <p class="ac-p">Il est important de fournir une alimentation adaptée à ses besoins nutritionnels. Cela peut inclure environ 3 à 5 kilogrammes de viande maigre par jour, telle que le bœuf ou le cheval, complétée par des suppléments vitaminiques et minéraux appropriés. Il est également essentiel de varier son régime avec des os ou des carcasses pour favoriser l'usure de ses dents et des fibres végétales en petites quantités pour stimuler la digestion.</p>
  <br>
  <br>
  <?php include "_partial/footer.php"; ?>
  <br>

</body>

</html>