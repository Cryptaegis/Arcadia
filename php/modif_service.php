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
                //create a form that modify the data from the table 'services' each I click on validate
                echo "<th>validate</th>";
            echo "</tr>";
            while($row = mysqli_fetch_assoc($result)){
                echo "<form action='service.php' method='post'>";
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td><input type='text' name='libelle' value='" . $row['libelle'] . "'></td>";
                echo "<td><input type='text' name='descriptionService' value='" . $row['descriptionService'] . "'></td>";
                echo "<td><input type='hidden' name='id' value='" . $row['id'] . "'></td>";
                /*add an input submit with the name 'action' and the value 'modify'
                to send the data to the page service.php*/
                echo "<td><input type='submit' name='action' value='modify'></td>";
                echo "</tr>";
                echo "</form>";
            }
            echo "</table>";
            // Free result set
            //si le bouton est cliqué, renvoyer vers la page service.php avec les nouvelles données dans $_POST[]
    if (isset($_POST['submit'])){
        $libelle = $_POST['libelle'];
        $descriptionService = $_POST['descriptionService'];
        $id = $_POST['id'];
        $sql = "UPDATE services SET libelle= '$libelle', descriptionService= '$descriptionService' WHERE id= '$id'";
        if(mysqli_query($conn, $sql)){
            echo "Records were updated successfully.";
        } else{
            echo "ERROR: Could not able to execute $sql. ";
        }
        }}
            ?>
            
               
        while($row = mysqli_fetch_array($result)){
            echo "<form action='service.php' method='post'>";
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td><input type='text' name='libelle' value='" . $row['libelle'] . "'></td>";
            echo "<td><input type='text' name='descriptionService' value='" . $row['descriptionService'] . "'></td>";
            echo "<td><input type='hidden' name='id' value='" . $row['id'] . "'></td>";
            echo "<td><input type='submit' value='Valider'></td>";
            echo "</tr>";
            echo "</form>";
        }
        echo "</table>";
        
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
    //si le bouton est cliqué, renvoyer vers la page service.php avec les nouvelles données dans $_POST[]
    if
    (isset($_POST['libelle']) && isset($_POST['descriptionService']) && isset($_POST['id'])){
        $libelle = $_POST['libelle'];
        $descriptionService = $_POST['descriptionService'];
        $id = $_POST['id'];
        $sql = "UPDATE services SET libelle= '$libelle', descriptionService= '$descriptionService' WHERE id= '$id'";
        if(mysqli_query($conn, $sql)){
            echo "Records were updated successfully.";
        } else{
            echo "ERROR: Could not able to execute $sql. ";
        }
        }
    

    ?>
</body>
</html>