<?php
    if(isset($_POST['valider'])){
        include("connexion.php");
        $req=$conn->prepare('INSERT INTO img (nom, taille, type, bin) VALUES (?,?,?,?)');
        $fichier = addslashes(file_get_contents($_FILES['image']['tmp_name']));
        $req->execute(array($_FILES['image']['name'], $_FILES['image']['size'], $_FILES['image']['type'], $fichier));

    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ajout Image</title>
     <!-- Latest compiled and minified CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <!-- css -->
  <link rel="stylesheet" type="text/css" href="../css/styles.css" />    
</head>
<body>
    <form name ="fo" method="post" action="" enctype="multipart/form-data">
        <input type="file" name="image"><br>
        <input type="submit" name="valider" value="Charger">
    </form>
    
</body>
</html>