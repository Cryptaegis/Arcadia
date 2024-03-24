<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ajout Habitat</title>
      <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <!-- css -->
  <link rel="stylesheet" type="text/css" href="../css/styles.css" />
</head>
<body class="ac-admin titre-admin">
<a href="admin.php">
        <img class="logo-arcadia background" src="../images/arcadia_logo.png" alt="Arcadia logo">
    </a>
    <h1>Ajout Habitat</h1>

    <?php
    // Attempt to connect to the database
    require("connexion.php");
    // Check connection
    if($conn === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    if(isset($_POST['submit'])){
        $nom = $_POST['nom'];
        $descriptionHabitat = htmlspecialchars($_POST['descriptionHabitat'], ENT_QUOTES);
        $animaux = $_POST['animaux'];
        //insert into the database
            $sql = "INSERT INTO `habitat`( nom, descriptionHabitat, animaux) values( '$nom', '$descriptionHabitat', ' $animaux')";
            if(mysqli_query($conn, $sql)){
                echo "Habitat added successfully!";
            } else{
                echo "ERROR: Could not able to execute $sql. ";
                }}
    
?> 
    <!--create a form-->
    <form action ="" method="post" class="border-form">
    <label for="nom">Nom:</label>
      <input class="box-input" type="text" id="nom" name="nom" required>
      <br>
     
      <label for="descriptionHabitat">Description Habitat:</label>
        <br>
      <textarea id="descriptionHabitat" name="descriptionHabitat"   rows="10" cols="80"  minlength="10" maxlength="10000" wrap="soft" required></textarea>
      <br>
   
      <label for="animaux">Animaux autorisés :</label>
        <br>
      <textarea id="animaux" name="animaux" rows="4" cols="50" required></textarea>
      <br>
     
      <input type="submit" name="submit" value="Ajout Animal" class="form-btn">

    </form>
    <br>
    <br>

    <nav aria-label="breadcrumb" style="width:50%; margin:auto;">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="admin.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="ajout_habitat.php">Ajouter un habitat</a></li>
            <li class="breadcrumb-item"><a href="modif_habitat.php">Modifier les habitats</a></li>
            <li class="breadcrumb-item"><a href="habitat.php">Page habitats</a></li>
        </ol>
    </nav>
    <br>
    <button onclick="history.back()">Go Back</button><br>

</body>
</html>