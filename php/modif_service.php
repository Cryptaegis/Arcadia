<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--create a form that modify the data from the table 'services'-->
    <h1>Modification de services</h1>
    <?php
    // Attempt to connect to the database
    require("connexion.php");
    // Check connection
    if($conn === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    // Attempt select query execution
    $sql = "SELECT * FROM services";
    if(!$result = mysqli_query($conn,$sql)){die('Error in SQL');
    }
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>id</th>";
                echo "<th>service</th>";
                echo "<th>description</th>";
                echo "</tr>";


            
               
        while($row = mysqli_fetch_array($result)){
            echo "<form action='' method='post'>";
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td><input type='text' name='libelle' value='" . $row['libelle'] . "'></td>";
            echo "<td><input type='text' name='descriptionService' value='" . $row['descriptionService'] . "'></td>";
            echo "<td><input type='hidden' name='id' value='" . $row['id'] . "'></td>";
            echo "<td><input type='submit' value='Valider'></td>";
            echo "<td><input type='submit' name='delete' value='Supprimer'></td>";
            echo "</tr>";
            echo "</form>";
        }
        echo "</table>";
        
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
    //Modification des données
    if
    (isset($_POST['libelle']) && isset($_POST['descriptionService']) && isset($_POST['id'])){
        $libelle = htmlspecialchars($_POST['libelle'], ENT_QUOTES);

        $descriptionService = htmlspecialchars($_POST['descriptionService'], ENT_QUOTES);
        $id = $_POST['id'];
        $sql = "UPDATE services SET libelle= '$libelle', descriptionService= '$descriptionService' WHERE id= '$id'";
        if(mysqli_query($conn, $sql)){
            echo "Records were updated successfully.";
        } else{
            echo "ERROR: Could not able to execute $sql. ";
            }

        }
        //suppression des données 
        if(isset($_POST["delete"])) {
            $id=$_POST["id"];
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
                }
                $sql="DELETE FROM `services` WHERE id= '$id'";
                if ($conn->query($sql) == TRUE) {
                    echo "Je vous félicite vous venez de supprimer un service.";
                }
                else {
                    echo "Error deleting record: " . $conn->error;
                }
            }

    

    ?>
    <!--link-->
    <a href="service.php">Retour aux services</a>

</body>
</html>