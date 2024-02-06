<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout services</title>
</head>
<body>
    <!--Ajout de nouveau services sur la base de donnée-->
    <h1>Ajout de services</h1>


    <?php
    // Attempt to connect to the database
    require("connexion.php");
  

    if(isset($_POST["submit"])){
        // Validate libelle
        $libelle = htmlspecialchars(strip_tags($_POST['libelle']));
        $descriptionService = htmlspecialchars(strip_tags($_POST['descriptionService']));

      
            // Prepare an insert statement
            $sql = "INSERT into `services` (libelle, descriptionService) VALUES ('$libelle', '$descriptionService')";

            $stmt = mysqli_query($conn, $sql);
            // Check if the query was executed
            if($stmt === false){
                die("ERROR Could not execute: " . htmlspecialchars($sql) . "<br>" . mysqli_error($conn));
            } else{
                echo 'réussi';
            }
        }
    ?>
    <form action="service.php" method="post">
        <div>
            <label for="libelle">Libellé</label>
            <input type="text" id="libelle" name="libelle" required>
        </div>
        <div>
            <label for="descriptionService">Description</label>
            <input type="text" id="descriptionService" name="descriptionService" required>
        </div>
        <div>
            <input type="submit" name="submit" value="Ajouter">
        </div>
    </form>

<br>
<button onclick="history.back()">Go Back</button>
<br>
<a href="admin.php">HOME</a>
<br>

</body>
</html>