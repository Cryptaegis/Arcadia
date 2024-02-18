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
    $sql = "SELECT * FROM animaux";
    if (!$result = mysqli_query($conn, $sql)) {
        die('Error in SQL');
    }
    $query = "SELECT * FROM animaux";
$result = mysqli_query($conn, $query);
$animaux = mysqli_fetch_all($result, MYSQLI_ASSOC);

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $query = "DELETE FROM animaux WHERE id = $id";
    mysqli_query($conn, $query);
if ($conn->query($query) == TRUE) {
    echo "Je vous félicite vous venez de supprimer un habitat.";
}else {
    echo "Error deleting record:  " . $conn->error;
}}
?>
    <table>
        <tr>
            <th>Prenom</th>
            <th>Race</th>
            <th>Habitat</th>
        </tr>
        <!-- Affichage des résultats -->
        <?php foreach ($animaux as $row): ?>
        <tr>
            <td><?php echo $row['prenom']; ?></td>
            <td><?php echo $row['race'] ?></td>
            <td><?php echo $row["habitat"]; ?></td>
            <td><a href="modif_animal.php?delete=<?php echo $row['id']; ?>">Delete</a></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <br>
    <button onclick="history.back()">Go Back</button><br>
    <a href="admin.php">Home</a>

</body>

</html>