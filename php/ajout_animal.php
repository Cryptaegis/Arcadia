<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ajout Animaux</title>
     <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <!-- css -->
  <link rel="stylesheet" type="text/css" href="../css/styles.css" />
</head>
<body class="ac-admin titre-admin" >
    <br>
    <a href="admin.php">
      <img class="logo-arcadia background" src="../images/arcadia_logo.png" alt="Arcadia logo">
    </a>
    <br>
    <br>
    <h1>Ajout Animaux</h1>

    <?php
    // Attempt to connect to the database
    require("connexion.php");
    // Check connection
    if($conn === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    if(isset($_POST['submit'])){
        $prenom = $_POST['prenom'];
        $race = $_POST['race'] ; 
        $habitat = $_POST['habitat'];
        //insert into the database
            $sql = "INSERT INTO `animaux`( prenom, race, habitat) values( '$prenom', '$race', ' $habitat')";
            if(mysqli_query($conn, $sql)){
                echo "Animaux added successfully!";
            } else{
                echo "ERROR: Could not able to execute $sql. ";
                }}
    
?> 
    <!--create a form-->
    <form action ="" method="post" class="border-form style-form">
    <label for="prenom">prenom:</label>
    <br>
      <input class="box-input" type="text" id="prenom" name="prenom" required>
      <br>
     
      <label for="race">Race:</label>
      <br>
      <input class="box-input" type="text" id="race" name="race" required>
      <br>
   
      <label for="habitat">Habitat:</label>
      <br>
      <input class="box-input" type="text" id="habitat" name="habitat" required>
      <br>
      <br>
      <input type="submit" name="submit" value="Ajout animal" class="form-btn">

    </form>
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