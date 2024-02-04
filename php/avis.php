<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Avis</title>
</head>
<body>
    <?php
    echo'Bienvenue Avis';
    ?>
    <!--show only the validate comment-->
    <?php
    require('connexion.php');
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // display only the validate comments
    $query = "SELECT * FROM comments WHERE validate = 1 ORDER BY id DESC";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
    ?>

    <table>
        <tr>
            <th>Comment</th>
            <th>Username</th>
        </tr>
        <?php foreach ($row as $row): ?>
        <tr>
            <td><?php echo $row['username']; ?></td>
            <td><?php echo $row['visitRating']; ?></td>
            <td><?php echo $row['date']; ?></td>
            <td><?php echo $row['accompagnant']; ?></td>
            <td><?php echo $row['comment']; ?></td>
            <td><?php echo $row['username']; ?></td>
        </tr>
        <?php endforeach; ?>
        }

    </table>
    <a href="logout.php">Déconnexion</a>


    <a href="ac-regul.php">HOME</a>
    <a href="check_comment.php">Check Comment</a>
    <a href="comment.php">Add Comment</a>
    <button onclick="history.back()">Go Back</button>

</body>
</html>
