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
        $descriptionService = htmlspecialchars($_POST['descriptionService'], ENT_QUOTES);
        echo $descriptionService;
        $libelle = $_POST['libelle'];
      
            $sql = "INSERT into `services` (libelle, descriptionService) VALUES ('$libelle', '$descriptionService')";

            $stmt = mysqli_query($conn, $sql);
            if($stmt === false){
                die("ERROR Could not execute: " . htmlspecialchars($sql) . "<br>" . mysqli_error($conn));
            } else{
                echo 'réussi';
            }
        }
    ?>
    <form action="" method="post">
        <div>
            <label for="libelle">Libellé</label>
            <input type="text" id="libelle" name="libelle" required>
        </div>
        <div>
            <!--textarea that does allow apostrophe? -->
            <label for="descriptionService">Description du service</label>
            <textarea style="height:250px; resize: none;" id="descriptionService" name="descriptionService" required></textarea>
             <br>
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