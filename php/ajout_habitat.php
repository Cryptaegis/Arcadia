<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout Habitat</title>
</head>
<body>
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
    <form action ="" method="post">
    <label for="nom">Nom:</label>
      <input class="box-input" type="text" id="nom" name="nom" required>
      <br>
     
      <label for="descriptionHabitat">Description Habitat:</label>
        <br>
      <textarea id="descriptionHabitat" name="descriptionHabitat"   rows="10" cols="100"  minlength="10" maxlength="10000" wrap="soft" required></textarea>
      <br>
   
      <label for="animaux">Animaux autorisés :</label>
        <br>
      <textarea id="animaux" name="animaux" rows="4" cols="50" required></textarea>
      <br>
     
      <input type="submit" name="submit" value="Ajout Animal">

    </form>
    <button onclick="history.back()">Go Back</button><br>
    <a href="admin.php">Home</a>

</body>
</html>