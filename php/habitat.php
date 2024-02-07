<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Habitat</title>
</head>
<body>
   
    <h1>Habitat</h1>
   <!--show only the validate habitat-->
   <?php
    require('connexion.php');
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // display only the validate comments
    $query = "SELECT * FROM habitat WHERE validate = 1 ORDER BY id DESC";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
    ?>

    <table>
        <tr>
            <th>Nom</th>
            <th>Comment</th>
            <th>Animaux</th>
        </tr>
        <?php foreach ($row as $row): ?>
        <tr>
            <td><?php echo $row['nom']; ?></td>
            <td><?php echo $row['descriptionHabitat']; ?></td>
            <td><?php echo $row['animaux']; ?></td>
        </tr>
        <?php endforeach; ?>

        </table>
        <button onclick="history.back()">Go Back</button>
        <a href="admin.php">Home</a>

</body>
</html>
