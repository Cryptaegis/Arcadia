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
  <h1>Carnet de santé de la Loutre</h1>
  <br>
  <!--section description de la loutre-->
  <h2>Description</h2>
  <br>
  <p class="ac-p">La loutre est une créature charmante et joueuse que l'on peut observer dans notre zoo. Avec son pelage brun foncé et son ventre plus clair, elle est connue pour ses gestes agiles et sa faculté à nager avec grâce. Les visiteurs peuvent se divertir en regardant la loutre sauter, plonger et glisser dans l'eau, ainsi que se prélasser au soleil sur les rochers. Les loutres sont curieuses de nature et font preuve d'une grande intelligence, ce qui rend leur observation encore plus fascinante. Une visite au zoo ne serait pas complète sans l'occasion de voir cette petite créature espiègle en action.</p>
  <br>
  <!--section habitat de la loutre-->
  <h2>Habitat</h2>
  <br>
  <p class="ac-p">L'habitat de la loutre dans le zoo est conçu pour recréer une zone aquatique naturelle et stimulante. Il comprend une grande piscine avec des jets d'eau, des cascades et des rochers pour permettre à la loutre de nager, plonger et grimper. Des plantes aquatiques et des troncs d'arbres sont également présents pour offrir des cachettes et créer un environnement semblable à leur habitat naturel. Leur enclos a une disposition spacieuse avec des plateformes en hauteur pour se reposer et observer les visiteurs, ainsi que des zones d'ombre pour se protéger du soleil. Cet habitat permet aux loutres de s'épanouir en offrant un environnement enrichissant et adapté à leurs besoins.</p>
  <br>
  <?php
  require 'connexion.php';

  // les data Lion du tableau observation pour les afficher à chaque ajout
  $query = "SELECT * FROM observation WHERE animal = 'loutre'";
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
  <p class="ac-p">L'alimentation d'une loutre dans un zoo comprendra généralement une variété d'aliments tels que des poissons (environ 100-200 grammes par repas), des crustacés (environ 50-100 grammes par repas), des mollusques (environ 50-100 grammes par repas), ainsi que des fruits et des légumes (environ 50 grammes par repas). Cette alimentation équilibrée assure la santé et le bien-être de la loutre en captivité.</p>
  <br>
  <?php
  // les data Lion du tableau Alimentation pour les afficher à chaque ajout
  $sql = "SELECT * FROM alimentation WHERE animal = 'loutre'";
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