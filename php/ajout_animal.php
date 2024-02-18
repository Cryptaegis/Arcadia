<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout Animaux</title>
</head>
<body>
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
    <form action ="" method="post">
    <label for="prenom">prenom:</label>
      <input class="box-input" type="text" id="prenom" name="prenom" required>
      <br>
     
      <label for="race">Race:</label>
      <input class="box-input" type="text" id="race" name="race" required>
      <br>
   
      <label for="habitat">Habitat:</label>
      <input class="box-input" type="text" id="habitat" name="habitat" required>
      <br>
      <input type="submit" name="submit" value="Add Habitat">

    </form>
    <button onclick="history.back()">Go Back</button><br>
    <a href="admin.php">Home</a>

</body>
</html>