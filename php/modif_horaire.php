<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ajout horaires</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="../css/styles.css" />
</head>

<body class="ac-admin titre-admin">
    <h1> Horaire</h1>
    <?php
    require('connexion.php');
    if ($conn->connect_error) {
        die("ERROR: Could not connect. " . $conn->connect_error);
    }

    $sql = 'SELECT * FROM horaire WHERE nom = "Zoo"';
    $sql1 = 'SELECT * FROM horaire WHERE nom = "Restaurant"';
    $sql2 = 'SELECT * FROM horaire WHERE nom = "Train"';
    $sql3 = 'SELECT * FROM horaire WHERE nom = "Guide"';

    $resultat = mysqli_query($conn, $sql);
    if (mysqli_num_rows($resultat) > 0) {
        while ($row = mysqli_fetch_assoc($resultat)) {
            echo '<div id="horaire">', $row['nom'], '</div>';
            echo "<p class='border-form'> Jour: " . $row["jour"] . " - Heure de début: " . $row["heureDebut"] . " - Heure de fin: " . $row["heureFin"] . "</p>";
            echo '<a href="modif_horaire.php?delete=<?php echo $row[\'id\']; ?>" class="form-btn">Delete</a>';
            echo '</div> ';
        }
    } else {
        echo "0 results";
    }

    $result = mysqli_query($conn, $sql1);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<div id="horaire">', $row['nom'], '</div>';
            echo "<p class='border-form'> Jour: " . $row["jour"] . " - Heure de début: " . $row["heureDebut"] . " - Heure de fin: " . $row["heureFin"] . "</p>";
            echo '<a href="modif_horaire.php?delete=<?php echo $row[\'id\']; ?>" class="form-btn">Delete</a>';
            echo '</div> ';
        }
    } else {
        echo "0 results";
    }
    $res = mysqli_query($conn, $sql2);
    if (mysqli_num_rows($res) > 0) {
        while ($row = mysqli_fetch_assoc($res)) {
            echo '<div id="horaire">', $row['nom'], '</div>';
            echo "<p class='border-form'> Jour: " . $row["jour"] . " - Heure de début: " . $row["heureDebut"] . " - Heure de fin: " . $row["heureFin"] . "</p>";
            echo '<a href="modif_horaire.php?delete=<?php echo $row[\'id\']; ?>" class="form-btn">Delete</a>';
            echo '</div> ';
        }
    } else {
        echo "0 results";
    }
    $re = mysqli_query($conn, $sql3);
    if (mysqli_num_rows($re) > 0) {
        while ($row = mysqli_fetch_assoc($re)) {
            echo '<div id="horaire">', $row['nom'], '</div>';
            echo "<p class='border-form'> Jour: " . $row["jour"] . " - Heure de début: " . $row["heureDebut"] . " - Heure de fin: " . $row["heureFin"] . "</p>";
            echo '<a href="modif_horaire.php?delete=<?php echo $row[\'id\']; ?>" class="form-btn">Delete</a>';
            echo '</div> ';
        }
    } else {
        echo "0 results";
    }




    if (isset($_GET['delete'])) {
        $id = $_GET['delete'];
        $query = "DELETE FROM horaire WHERE id = `id`";
        mysqli_query($conn, $query);
        if ($conn->query($query) == TRUE) {
            echo "Supprimer.";
        } else {
            echo "Error deleting record:  " . $conn->error;
        }
    }

    ?>


    <nav aria-label="breadcrumb" style="width:50%; margin:auto;">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="admin.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="ajout_horaire.php">Ajouter un horaire</a></li>
            <li class="breadcrumb-item"><a href="modif_horaire.php">Modification horaire</a></li>
        </ol>
    </nav>

    <button onclick="history.back()" class="form-btn">Go Back</button><br>
</body>

</html>