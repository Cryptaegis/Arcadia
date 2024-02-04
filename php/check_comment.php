<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
  require('connexion.php');
    // Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//afficher les commentaires non validés
$query = "SELECT * FROM comments WHERE validate = 0";
$result = mysqli_query($conn, $query);
$comments = mysqli_fetch_all($result, MYSQLI_ASSOC);
//afficher les commentaires


//ajouter un bouton validate pour valider les commentaires
foreach ($comments as $comments) {
    echo "<div>";
    echo "<p>{$comment['username']}</p>";
    echo "<p>{$comment['visitRating']}</p>";
    echo "<p>{$comment['date']}</p>";
    echo "<p>{$comment['accompagnant']}</p>";
    echo "<p>{$comment['comment']}</p>";
    echo "<a href='avis.php'>Validate</a>";
    echo "</div>";
}
//si, bouton valider changer le champ validate a 1 dans la base de données
if (isset($_GET['validate'])) {
    $id = $_GET['validate'];
    $query = "UPDATE comments SET validate = 1 WHERE id = $id";
    mysqli_query($conn, $query);
    header('Location: check_comment.php');
    exit;
}
?>



<!--button to go back to the previous page -->
<button onclick="history.back()">Go Back</button>
 
 <a href="ac-regul.php">HOME</a>

</body>
</html>
