<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Habitat</title>
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

    <h1>Habitat</h1>
    <?php
    require('connexion.php');
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // only the validate comments
    $query = "SELECT * FROM habitat WHERE validate = 1 ORDER BY id DESC";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
    ?>


    <?php foreach ($row as $row) : ?>
        <h2><?php echo $row['nom']; ?></h2>
        <!--the description of the habitat-->
        <p class="description-habitat"><?php echo $row['descriptionHabitat']; ?></p>
        <!--the animals in the habitat  -->
        <p>Apprenez à les découvrir et vous rapprocher d'eux</p>
        <div class="card_habitat" style="max-width: 18rem;">
            <div class="card-header">Les animaux de cet habitat</div>
            <div class="card-body">
                <h5 class="card-title"><?php echo $row['animaux']; ?></h5>
                <?php if (strpos($row['animaux'], 'lion') !== false) : ?>
                    <a class="btn_habitat" id="savane" href="savane.php">Ils n'attendent que toi</a>
                <?php elseif (strpos($row['animaux'], 'girafe') !== false) : ?>
                    <a id="savane" href="savane.php" class="btn_habitat">Ils n'attendent que toi</a>
                <?php elseif (strpos($row['animaux'], 'zèbre') !== false) : ?>
                    <a id="savane" href="savane.php" class="btn_habitat">Ils n'attendent que toi</a>
                <?php elseif (strpos($row['animaux'], 'chimpanze') !== false) : ?>
                    <a id="jungle" href="jungle.php" class="btn_habitat">Ils n'attendent que toi</a>
                <?php elseif (strpos($row['animaux'], 'aigle') !== false) : ?>
                    <a id="jungle" href="jungle.php" class="btn_habitat">Ils n'attendent que toi</a>
                <?php elseif (strpos($row['animaux'], 'jaguar') !== false) : ?>
                    <a id="jungle" href="jungle.php" class="btn_habitat">Ils n'attendent que toi</a>
                <?php elseif (strpos($row['animaux'], 'cigogne') !== false) : ?>
                    <a id="marais" href="marais.php" class="btn_habitat">Ils n'attendent que toi</a>
                <?php elseif (strpos($row['animaux'], 'canard') !== false) : ?>
                    <a id="marais" href="marais.php" class="btn_habitat">Ils n'attendent que toi</a>
                <?php elseif (strpos($row['animaux'], 'loutre') !== false) : ?>
                    <a id="marais" href="marais.php" class="btn_habitat">Ils n'attendent que toi</a>
                <?php else : echo 'Pas en habitat naturel'; ?>
                <?php endif; ?>
            </div>
        </div>

    <?php endforeach; ?>
    <br><br>
    <?php include "_partial/footer.php"; ?>
    <br>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>