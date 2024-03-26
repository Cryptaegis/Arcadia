<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Animaux modification</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="../css/styles.css" />
</head>

<body class="ac-admin titre-admin">
    <br>
    <a href="admin.php">
        <img class="logo-arcadia background" src="../images/arcadia_logo.png" alt="Arcadia logo">
    </a>
    <br>
    <br>
    <h1>Animaux modification</h1>

    <?php
    // Attempt to connect to the database
    require("connexion.php");
    // Check connection
    if ($conn === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    // Attempt select query execution
    $sql = "SELECT * FROM animaux";
    if (!$result = mysqli_query($conn, $sql)) {
        die('Error in SQL');
    }
    $query = "SELECT * FROM animaux";
    $result = mysqli_query($conn, $query);
    $animaux = mysqli_fetch_all($result, MYSQLI_ASSOC);

    if (isset($_GET['delete'])) {
        $id = $_GET['delete'];
        $query = "DELETE FROM animaux WHERE id = $id";
        mysqli_query($conn, $query);
        if ($conn->query($query) == TRUE) {
            echo "Je vous félicite vous venez de supprimer un animal.";
        } else {
            echo "Error deleting record:  " . $conn->error;
        }
    }
    ?>
    <table class="border-form">
        <tr>
            <th>Prenom</th>
            <th>Race</th>
            <th>Habitat</th>
        </tr>
        <!-- display result -->
        <?php foreach ($animaux as $row) : ?>
            <tr>
                <td><?php echo $row['prenom']; ?></td>
                <td><?php echo $row['race'] ?></td>
                <td><?php echo $row["habitat"]; ?></td>
                <td><a href="modif_animal.php?delete=<?php echo $row['id']; ?>" class="form-btn">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <br>
    <br>

    <nav aria-label="breadcrumb" style="width:50%; margin:auto;">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="admin.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="ajout_animal.php">Ajouter un animal</a></li>
            <li class="breadcrumb-item"><a href="modif_animal.php">Modifier les animaux</a></li>
            <li class="breadcrumb-item"><a href="animal.php">Page animaux</a></li>
        </ol>
    </nav>
    <br>
    <button onclick="history.back()">Go Back</button><br>

</body>

</html>