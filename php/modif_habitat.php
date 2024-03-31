<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Habitat modification</title>
         <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <!-- css -->
  <link rel="stylesheet" type="text/css" href="../css/styles.css" />
</head>

<body class="ac-admin titre-admin">
<a href="admin.php">
        <img class="logo-arcadia background" src="../images/arcadia_logo.png" alt="Arcadia logo">
    </a>
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
//button validate and delete
echo "<h1>Habitat to validate OR DELETE</h1>\n";
foreach ($habitats as $habitat){
    echo "<div  class='border-form'>\n";
    echo "<h2>{$habitat['nom']}</h2>\n";
    echo "<p><strong>Description : </strong></p>\n";
    echo "<p>{$habitat['descriptionHabitat']}</p>\n";
    echo "<p>{$habitat['animaux']}</p>\n";
    echo "<a href='modif_habitat.php?validate={$habitat['id']}' class='form-btn'>Validate</a>\n";
    echo "<a href ='modif_habitat.php?delete={$habitat['id']}' class='form-btn'>Delete</a>\n";
    echo '</div>';
}

// if, click validate and send to accueil.php
if (isset($_GET['validate'])) {
    $id = $_GET['validate'];
    $query = "UPDATE habitat SET validate = 1 WHERE id = $id";
    mysqli_query($conn, $query);
    if ($conn->query($query) == TRUE) {
        echo "Je vous félicite vous venez d'ajouter un habitat!.";
    }else {
        echo "Error deleting record:  " . $conn->error;
    }}
//if, click delete
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
    <br>

    <nav aria-label="breadcrumb" style="width:50%; margin:auto;">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="admin.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="modif_habitat.php">Modifier les habitats</a></li>
            <li class="breadcrumb-item"><a href="ajout_habitat.php">Ajouter un habitat</a></li>
            <li class="breadcrumb-item"><a href="habitat.php">Page habitats</a></li>
        </ol>
    </nav>
    <br>
    <br>
    <button onclick="history.back()" class="form-btn">Go Back</button><br>

</body>

</html>