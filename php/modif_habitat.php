<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // Attempt to connect to the database
    require("connexion.php");
    // Check connection
    if ($conn === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    // Attempt select query execution
    $sql = "SELECT * FROM habitat";
    if (!$result = mysqli_query($conn, $sql)) {
        die('Error in SQL');
    }
    $query = "SELECT * FROM habitat WHERE validate = 0";
$result = mysqli_query($conn, $query);
$habitats = mysqli_fetch_all($result, MYSQLI_ASSOC);
//ajouter un bouton validate ET delete
echo "<h1>Habitat to validate OR DELETE</h1>\n";
foreach ($habitats as $habitat){
    echo "<h2>{$habitat['nom']}</h2>\n";
    //when description display all of the textarea
    echo "<p><strong>Description : </strong></p>\n";
    echo "<p>{$habitat['descriptionHabitat']}</p>\n";
    echo "<p>{$habitat['animaux']}</p>\n";
    echo "<a href='modif_habitat.php?validate={$habitat['id']}'>Validate</a>\n";
    echo "<a href ='modif_habitat.php?delete={$habitat['id']}'>Delete</a>\n";
}

// si, le bouton validate est cliqué, le commentaire est validé et s'affiche dans la page avis.php
if (isset($_GET['validate'])) {
    $id = $_GET['validate'];
    $query = "UPDATE habitat SET validate = 1 WHERE id = $id";
    mysqli_query($conn, $query);
    if ($conn->query($query) == TRUE) {
        echo "Je vous félicite vous venez d'ajouter un habitat!.";
    }else {
        echo "Error deleting record:  " . $conn->error;
    }}
//si, le button delete
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $query = "DELETE FROM habitat WHERE id = $id";
    mysqli_query($conn, $query);
if ($conn->query($query) == TRUE) {
    echo "Je vous félicite vous venez de supprimer un habitat.";
}else {
    echo "Error deleting record:  " . $conn->error;
}}
?>

    <br>
    <button onclick="history.back()">Go Back</button><br>
    <a href="admin.php">Home</a>

</body>

</html>