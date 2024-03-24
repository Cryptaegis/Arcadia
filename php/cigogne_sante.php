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
  <h1>Carnet de santé de la Cigogne</h1>
  <br>
  <!--section description de la cigogne-->
  <h2>Description</h2>
  <br>
  <p class="ac-p">Dans le zoo, se trouve une cigogne majestueuse. Dotée d'un long bec pointu et de longues pattes élancées, elle se tient fièrement sur une de ses jambes tout en gardant l'autre repliée. Son plumage blanc brillant est orné de quelques touches de noir sur ses ailes et sa queue. Sa tête, surmontée d'une petite crête, est couronnée d'un bec rouge vif qui lui confère une allure noble. Observée avec curiosité par les visiteurs, cette cigogne captive par sa grâce et sa prestance, rappelant son rôle mythique de messagère de la nature.</p>
  <br>
  <!--section habitat de la cigogne-->
  <h2>Habitat</h2>
  <br>
  <p class="ac-p">L'habitat de la cigogne dans le zoo est soigneusement aménagé pour recréer son environnement naturel. Le grand enclos spacieux est orné de verdure luxuriante et d'un petit étang où la cigogne peut se prélasser et rechercher de la nourriture. Des arbres et des rochers offrent des perchoirs où la cigogne peut construire son nid et se reposer. Cet habitat fournit à la cigogne un espace confortable, sûr et similaire à son milieu naturel, permettant aux visiteurs du zoo d'observer cette magnifique espèce dans des conditions proches de la réalité.</p>
  <br>
 <?php
  require 'connexion.php';

  // les data Lion du tableau observation pour les afficher à chaque ajout
  $query = "SELECT * FROM observation WHERE animal = 'cigogne'";
  $resultat = mysqli_query($conn,$query);
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
    <?php foreach ($row as $rows): ?>
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
<p class="ac-p">L'alimentation d'une cigogne dans un zoo se compose généralement de poissons, de grenouilles, de petits mammifères et d'insectes. Elle consomme en moyenne 300 grammes de poissons, 200 grammes de grenouilles, 100 grammes de petits mammifères et 50 grammes d'insectes par jour. Ce régime alimentaire est adapté pour satisfaire les besoins nutritionnels de la cigogne et maintenir sa santé dans le contexte du zoo.</p>
<br>
<?php
// les data Lion du tableau Alimentation pour les afficher à chaque ajout
  $sql = "SELECT * FROM alimentation WHERE animal = 'cigogne'";
  $result = mysqli_query($conn,$sql);
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
    <?php foreach ($row as $rows): ?>
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