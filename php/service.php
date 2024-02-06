<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services Arcadia</title>
</head>
<body>
    <h1>Services Arcadia</h1>
    <h2>Services</h2>
    <p>Voici la liste des services que nous proposons:</p>
    <!--ajout de la liste des services à partir de la base donnée avec un bouton modifier qui envoie vers une autre page-->      
    <?php
    // Attempt to connect to the database   
    require "connexion.php";
    // Check connection
    if($conn === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    // Attempt select query execution
    $sql = "SELECT * FROM services";
    if($result = mysqli_query($conn, $sql)){
        if(mysqli_num_rows($result) > 0){
            echo "<table>";
                echo "<tr>";
                    echo "<th>id</th>";
                    echo "<th>service</th>";
                    echo "<th>description</th>";
                    echo "<th
                    >prix</th>";
                echo "</tr>";
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['libelle'] . "</td>";
                echo "<td>" . $row['descriptionService'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
            // Free result set
            mysqli_free_result($result);
        } else{
            echo "No records matching your query were found.";
        }
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn
            );}
            ?>

         
    <h2>Modifier les services</h2>
    <p>Vous pouvez modifier les services ci-dessus en cliquant sur le lien <a href="modif_service.php">"Modifier"</a>.
    Oublie pas de retirer le lien pour que seul les admin puisse y accéder!<br/>
</p>
<!--links-->
<br>
<button onclick="history.back()">Go Back</button>
<br>
<a href="admin.php">HOME</a>


</body>
</html>