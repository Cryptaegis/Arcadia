<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout horaires</title>
</head>
<body>
    <h1>Ajout Horaire</h1>

    <?php
// Attempt to connect to the database
require("connexion.php");
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

?>