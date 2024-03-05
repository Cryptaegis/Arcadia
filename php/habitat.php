<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Habitat</title>
</head>
<body>
<?php include "_partial/header.php"; ?>
    <?php include "_partial/navbar.php"; ?>
   
    <h1>Habitat</h1>
   <!--Article de l'environnement de la savane et le bien être des animaux qui y vivent-->
    
 

   <?php
    require('connexion.php');
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // display only the validate comments
    $query = "SELECT * FROM habitat WHERE validate = 1 ORDER BY id DESC";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
    ?>

   
        <?php foreach ($row as $row): ?>
            <h2><?php echo $row['nom']; ?></h2>
            <div class="container">
            </div>
            <!--display the description of the habitat-->
                <p><?php echo $row['descriptionHabitat']; ?></p>
            <h3>Les animaux de cet habitat</h3>
            <!--display the animals in the habitat IN LIST  FORM -->
            <p>Apprenez à les découvrir et vous rapprocher d'eux</p>
            <ul class="list-group">
                <li class="list-group-item"><?php echo $row['animaux']; ?>
                <?php if (strpos($row['animaux'], 'lion') !== false) : ?>
                        <a id="savane" href="savane.php" >dans la savane</a>
                    <?php elseif (strpos($row['animaux'], 'girafe') !== false) : ?>
                        <a id ="savane" href="savane.php" >dans la savane</a>
                    <?php elseif (strpos($row['animaux'], 'zèbre') !== false) : ?>
                        <a id="savane" href="savane.php" >dans la savane</a>
                    <?php elseif (strpos($row['animaux'], 'chimpanze') !== false) : ?>
                        <a id="foret" href="jungle.php">dans la Jungle</a>
                    <?php elseif (strpos($row['animaux'], 'aigle') !== false) : ?>
                        <a id="montagne" href="jungle.php">dans la Jungle</a>
                    <?php elseif (strpos($row['animaux'], 'jaguar') !== false) : ?>
                        <a id="foret" href="jungle.php" >dans la Jungle</a>
                    <?php elseif (strpos($row['animaux'], 'cigogne') !== false) : ?>
                        <a id="marais" href="marais.php" >dans le marais</a>
                    <?php elseif (strpos($row['animaux'], 'canard') !== false) : ?>
                        <a id="marais" href="marais.php" >dans le marais</a>
                    <?php elseif (strpos($row['animaux'], 'loutre') !== false) : ?>
                        <a id="riviere" href="marais.php" >dans le marais</a>
                    <?php else : 
                        echo 'Pas en habitat naturel';
                        ?>
                    <?php endif; ?>
                </li>
            </ul>
            
        </div>
        <?php endforeach; ?>


        <button onclick="history.back()">Go Back</button>
        <a href="admin.php">Home</a>

</body>
</html>
