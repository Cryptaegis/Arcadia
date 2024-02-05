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
$query = "SELECT * FROM comments WHERE validate = 0";
$result = mysqli_query($conn, $query);
$comments = mysqli_fetch_all($result, MYSQLI_ASSOC);
//ajouter un bouton validate ET delete
echo "<h1>Comments to validate OR DELETE</h1>\n";
foreach ($comments as $comment){
    echo "<h2>{$comment['username']}</h2>\n";
    echo "<p>{$comment['comment']}</p>\n";
    echo "<a href='check_comment.php?validate={$comment['id']}'>Validate</a>\n";
    echo "<a href='check_comment.php?delete={$comment['id']}'>Delete</a>\n";
}

// si, le bouton validate est cliqué, le commentaire est validé et s'affiche dans la page avis.php
if (isset($_GET['validate'])) {
    $id = $_GET['validate'];
    $query = "UPDATE comments SET validate = 1 WHERE id = $id";
    mysqli_query($conn, $query);
    header('location: avis.php');
}
//si, le button delete
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $query = "DELETE FROM comments WHERE id = $id";
    mysqli_query($conn, $query);
    header('location: avis.php');
}



?>

<!--button to go back to the previous page -->
<button onclick="history.back()">Go Back</button>
 
 <a href="ac-regul.php">HOME</a>

</body>
</html>
