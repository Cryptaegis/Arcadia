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
  <h1>Carnet de santé du Zèbre</h1>
  <br>
  <!--section description du zèbre-->
  <h2>Description</h2>
  <p class="ac-p">Le zèbre est un animal herbivore appartenant à la famille des équidés et caractérisé par son pelage à rayures noires et blanches. Il a un corps musclé et élancé, une tête allongée avec de grandes oreilles, et de puissantes jambes lui permettant de se déplacer rapidement. Le zèbre est souvent observé dans les zoos où il vit dans un enclos spacieux, offrant aux visiteurs l'opportunité d'admirer sa beauté naturelle et sa nature sociable.</p>
  <br>
  <!--section habitat du zèbre-->
  <h2>Habitat</h2>
  <br>
  <p class="ac-p">L'habitat du zèbre dans un zoo est spécialement conçu pour recréer leur environnement naturel des plaines africaines. Il est constitué d'une vaste prairie herbeuse, clôturée de manière sécurisée, avec des buissons et quelques arbres dispersés. L'habitat offre également des zones ombragées, des points d'eau et des abris pour garantir le bien-être des zèbres. Il est conçu pour stimuler leur comportement naturel, leur permettant de se déplacer librement et de satisfaire leurs besoins physiques et mentaux.</p>
  <br>
  <?php
  require 'connexion.php';

  // les data Lion du tableau observation pour les afficher à chaque ajout
  $query = "SELECT * FROM observation WHERE animal = 'zebre'";
  $resultat = mysqli_query($conn, $query);
  $row = mysqli_fetch_all($resultat, MYSQLI_ASSOC);
  mysqli_free_result($resultat);



  // Check for errors
  if ($resultat === false) {
    die("Error executing view: $result");
  } else {
    echo "Observation view successfully";
  }
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
  <p class="ac-p">L'alimentation d'un zèbre dans un zoo se compose généralement d'une variété de plantes et de foin. Il consomme environ 5 à 10 kilogrammes de nourriture par jour, comprenant principalement des herbes, des feuilles et des tiges. Le régime alimentaire est complété avec des légumes frais et des suppléments nutritionnels pour assurer une alimentation équilibrée et satisfaire les besoins nutritionnels spécifiques du zèbre en captivité.</p>
  <?php
  // les data Lion du tableau Alimentation pour les afficher à chaque ajout
  $sql = "SELECT * FROM alimentation WHERE animal = 'zebre'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
  mysqli_free_result($result);



  // Check for errors
  if ($result === false) {
    die("Error executing view: $result");
  } else {
    echo "Nourriture view successfully";
  }
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