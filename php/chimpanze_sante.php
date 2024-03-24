<!DOCTYPE html>
<html>

<head>
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
  <h1>Carnet de santé du Chimpanze</h1>
  <br>
  <!--section description du Chimpanze-->
  <h2>Description</h2>
  <p class="ac-p">Le chimpanzé dans ce zoo est une créature fascinante et hautement évoluée, attirant l'attention de tous les visiteurs. Avec sa fourrure dense, sa posture gracieuse et son visage expressif, le chimpanzé dégage un mélange de charme et de puissance. Les spectateurs peuvent observer ses interactions sociales complexes, sa capacité à utiliser des outils et son intelligence remarquable. Ce primate intelligent et curieux est le véritable protagoniste du zoo, nous rappelant la proximité entre l'Homme et ses cousins primates.</p>
  <br>
  <h2>Habitat</h2>
  <br>
  <p class="ac-p">L'habitat des chimpanzés dans un zoo doit créer un environnement similaire à celui de leur habitat naturel. Il devrait offrir des espaces spacieux et arborés, avec des structures pour grimper, se balancer et se reposer. Il devrait également inclure des zones pour l'exploration, la socialisation et les activités enrichissantes, telles que des cachettes, des jeux et des puzzles. L'habitat doit être aménagé de manière à permettre aux chimpanzés d'exprimer leurs comportements naturels, de socialiser avec leurs congénères et de vivre dans des conditions qui favorisent leur bien-être physique et mental.</p>
  <br>
  <?php
  require 'connexion.php';

  // les data Lion du tableau observation pour les afficher à chaque ajout
  $query = "SELECT * FROM observation WHERE animal = 'Chimpanze'";
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
  <p class="ac-p">Dans le zoo, l'alimentation d'un chimpanzé est soigneusement préparée pour répondre à ses besoins nutritionnels. Il reçoit en moyenne 300 grammes de fruits variés par jour, tels que des bananes, des pommes et des oranges, ainsi que 200 grammes de légumes, comme des carottes et des feuilles vertes. De plus, il est nourri avec 500 grammes de grains et de noix pour fournir les protéines et les graisses nécessaires à sa santé. Enfin, le chimpanzé reçoit également des suppléments vitaminiques pour compléter son régime alimentaire équilibré.</p>
  <br>
  <?php
  // les data Lion du tableau Alimentation pour les afficher à chaque ajout
  $sql = "SELECT * FROM alimentation WHERE animal = 'Chimpanze'";
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