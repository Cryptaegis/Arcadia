<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ajout services</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="../css/styles.css" />
</head>

<body class="ac-admin titre-admin">
    <a href="admin.php">
        <img class="logo-arcadia background" src="../images/arcadia_logo.png" alt="Arcadia logo">
    </a>
    <h1>Ajout de services</h1>


    <?php
    // Attempt to connect to the database
    require("connexion.php");


    if (isset($_POST["submit"])) {
        $descriptionService = htmlspecialchars($_POST['descriptionService'], ENT_QUOTES);
        echo $descriptionService;
        $libelle = htmlspecialchars($_POST['libelle'], ENT_QUOTES);
        $sql = "INSERT into `services` (libelle, descriptionService) VALUES ('$libelle', '$descriptionService')";

        $stmt = mysqli_query($conn, $sql);
        if ($stmt === false) {
            die("ERROR Could not execute: " . htmlspecialchars($sql) . "<br>" . mysqli_error($conn));
        } else {
            echo 'réussi';
        }
    }
    ?>
    <form class="border-form" action="" method="post">
        <div>
            <label for="libelle">Libellé</label>
            <br>
            <input type="text" id="libelle" name="libelle" required>
        </div>
        <div>
        
            <label for="descriptionService">Description du service</label>
            <br>
            <textarea style="height:150px;  resize: none; width:100%;" id="descriptionService" name="descriptionService" required></textarea>
            <br>
            <input type="submit" name="submit" value="Ajouter" class="form-btn">
        </div>
    </form>

    <br>
    <br>

    <nav aria-label="breadcrumb" style="width:50%; margin:auto;">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="admin.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="form_service.php">Ajout services</a></li>
            <li class="breadcrumb-item"><a href="modif_service.php">Modifier services</a></li>
            <li class="breadcrumb-item"><a href="service.php">Page service</a></li>
        </ol>
    </nav>
    <br>

    <button onclick="history.back()" class="form-btn">Go Back</button>
    <br>
    <a href="admin.php">HOME</a>
    <br>

</body>

</html>