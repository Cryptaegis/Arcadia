<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout horaires</title>
</head>
<body>
    <h1> Horaire</h1>
<?php
// Attempt to connect to the database, with some default values if not provided.
require('connexion.php');
// Check connection
if ($conn->connect_error) {
    die("ERROR: Could not connect. " . $conn->connect_error);
} 
$sql = 'SELECT * FROM `horaire`';
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<input type='hidden' name='idHour' value='".$row['idHour']."'>";
    }
} else {
    echo "0 results";
}

?>
<!--display horaire in the table-->
<table>
    <tr>
        <th>Jour</th>
        <th>Heure de début</th>
        <th>Heure de fin</th>
    </tr>
    <?php
    $sql = 'SELECT * FROM `horaire`';
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['jour'] . "</td>";
            echo "<td>" . $row['heureDebut'] . "</td>";
            echo "<td>" . $row['heureFin'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    
