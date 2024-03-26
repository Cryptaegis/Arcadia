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
  <h1>Carnet de santé de la Girafe</h1>
  <br>
  <!--section description de la girafe-->
  <h2>Description</h2>
  <p class="ac-p">Dans un zoo, la girafe est une créature majestueuse et imposante. Avec son long cou gracieux, ses grandes pattes et son pelage tacheté, elle attire l'attention de tous les visiteurs. Son regard curieux et sa démarche élégante ajoutent à son charme. Les visiteurs peuvent observer fascinés cette espèce adaptée à la vie dans la savane, se nourrissant des feuilles des arbres les plus hauts. La girafe est un symbole de grâce et d'élégance au sein du zoo.</p>
  <br>
  <!--section habitat de la girafe-->
  <h2>Habitat</h2>
  <br>
  <p class="ac-p">L'habitat de la girafe dans un zoo est spécialement conçu pour offrir un environnement similaire à son habitat naturel. Il comprend généralement une grande zone avec de l'herbe, des arbres ou d'autres plantes pour imiter la savane. Il y a également de l'espace pour permettre à la girafe de se déplacer librement et des plateformes surélevées pour lui permettre de s'étirer le cou et atteindre les feuilles des arbres, favorisant ainsi son comportement alimentaire naturel. Des structures de protection et de l'eau sont également incluses pour répondre à ses besoins fondamentaux.</p>
  <br>
  <?php
  require 'connexion.php';

  // Data girafe
  $query = "SELECT * FROM observation WHERE animal = 'girafe'";
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
  <p class="ac-p">L'alimentation d'une girafe dans un zoo est principalement composée de feuilles d'acacia, qui représentent environ 75% de son régime alimentaire. Elle consomme en moyenne 30 kg de feuilles par jour. De plus, elle se nourrit également de branches, de fruits et de graines, totalisant environ 15 kg supplémentaires. Pour compléter son alimentation, elle ingère environ 10 kg de foin et de légumes, ce qui lui permet d'avoir un apport équilibré en nutriments.</p>
  <br>
  <?php
  $sql = "SELECT * FROM alimentation WHERE animal = 'girafe'";
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