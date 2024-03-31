<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modification services</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="../css/styles.css" />
</head>

<body class="ac-admin titre-admin">
    <a href="admin.php">
        <img class="logo-arcadia background" src="../images/arcadia_logo.png" alt="Arcadia logo">
    </a>
    <h1>Modification de services</h1>
    <?php
    // Attempt to connect to the database
    require("connexion.php");
    // Check connection
    if ($conn === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    // Attempt select query execution
    $sql = "SELECT * FROM services";
    if (!$result = mysqli_query($conn, $sql)) {
        die('Error in SQL');
    }
    if (mysqli_num_rows($result) > 0) {
        echo "<table  class='border-form'>";
        echo "<tr>";
        echo "<th>id</th>";
        echo "<th>service</th>";
        echo "<th>description</th>";
        echo "</tr>";




        while ($row = mysqli_fetch_array($result)) {
            echo "<form action='' method='post' >";
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td><input type='text' name='libelle' value='" . $row['libelle'] . "'></td>";
            echo "<td><input type='text' name='descriptionService' value='" . $row['descriptionService'] . "'></td>";
            echo "<td><input type='hidden' name='id' value='" . $row['id'] . "'></td>";
            echo "<td><input type='submit' value='Valider'></td>";
            echo "<td><input type='submit' name='delete' value='Supprimer' ></td>";
            echo "</tr>";
            echo "</form>";
        }
        echo "</table>";
        echo "<br>";


        mysqli_free_result($result);
    } else {
        echo "No records matching your query were found.";
    }
    if (isset($_POST['libelle']) && isset($_POST['descriptionService']) && isset($_POST['id'])) {
        $libelle = htmlspecialchars($_POST['libelle'], ENT_QUOTES);

        $descriptionService = htmlspecialchars($_POST['descriptionService'], ENT_QUOTES);
        $id = $_POST['id'];
        $sql = "UPDATE services SET libelle= '$libelle', descriptionService= '$descriptionService' WHERE id= '$id'";
        if (mysqli_query($conn, $sql)) {
            echo "Records were updated successfully.";
        } else {
            echo "ERROR: Could not able to execute $sql. ";
        }
    }
    //btn delete 
    if (isset($_POST["delete"])) {
        $id = $_POST["id"];
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "DELETE FROM `services` WHERE id= '$id'";
        if ($conn->query($sql) == TRUE) {
            echo "Je vous félicite vous venez de supprimer un service.";
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    }



    ?>
    <!--link-->
    <br>

    <nav aria-label="breadcrumb" style="width:50%; margin:auto;">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="admin.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="modif_service.php">Modifier services</a></li>
            <li class="breadcrumb-item"><a href="form_service.php">Ajout services</a></li>
            <li class="breadcrumb-item"><a href="service.php">Page service</a></li>
        </ol>
    </nav>
    <br>
    <button onclick="history.back()" class="form-btn">Go Back</button><br>

</body>

</html>