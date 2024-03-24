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
  <h1>Carnet de santé de l'Aigle</h1>
  <br>
  <!--section description de l'aigle-->
  <h2>Description</h2>
  <p class="ac-p">L'aigle arpia est une majestueuse espèce d'aigle originaire des régions tropicales d'Amérique du Sud. Avec ses plumes épaisses et puissantes et sa taille imposante, il est un spectacle captivant à observer dans le zoo. L'aigle arpia se distingue par sa tête couronnée d'une crête noire, ses yeux perçants et sa puissance lorsqu'il déploie ses ailes. Son vol gracieux et sa démarche fière en font un véritable symbole de la splendeur de la nature. Les visiteurs du zoo seront émerveillés par sa beauté et son allure majestueuse.</p>
  <br>
  <!--section habitat de l'aigle-->
  <h2>Habitat</h2>
  <br>
  <p class="ac-p">L'habitat de l'aigle arpia dans un zoo doit être spacieux et ressembler autant que possible à son environnement naturel. Il devrait être aménagé avec des arbres pour que l'aigle puisse se percher et construire son nid. Il doit y avoir suffisamment d'espace pour que l'aigle puisse voler librement et exercer ses compétences de chasse. L'habitat doit également offrir des zones ombragées pour que l'aigle puisse se reposer et se protéger du soleil. Enfin, il doit y avoir des points d'observation pour que les visiteurs puissent admirer cet impressionnant oiseau de proie.</p>
  <br>
  <?php

  require 'connexion.php';

  $query = "SELECT * FROM observation WHERE animal = 'aigle'";
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

  <h2>Alimentation</h2>
  <br>
  <p class="ac-p">L'alimentation d'un aigle arpia dans un zoo peut être composée de viandes variées, telles que du poulet, du lapin et du poisson, totalisant environ 600 grammes par jour. Ces proies sont soigneusement sélectionnées pour fournir les nutriments essentiels nécessaires à la santé et à la croissance de l'aigle arpia. De plus, des suppléments enrichis en vitamines et minéraux peuvent être ajoutés à son régime alimentaire pour assurer une alimentation équilibrée.</p>
  <br>
  <?php
  $sql = "SELECT * FROM alimentation WHERE animal = 'aigle'";
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