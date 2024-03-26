<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Add Comment</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="../css/styles.css" />
</head>

<body class='vitrine-accueil'>


    <?php include "_partial/header.php"; ?>
    <br>
    <?php include "_partial/navbar.php"; ?>
    <br>

    <!-- Form to add a comment -->
    <h2>Donner votre avis:</h2>
    <form action="" method="post">
        <label for="username">Nom:</label><br>
        <input type="text" id="username" name="username" class="form-comment" placeholder="Identifiant"><br><br>

        <h3>Notez votre expérience : </h3>
        <label for="rate1">1/5</label>
        <input type="radio" id="rate1" name="visitRating" value="1"><br>
        <label for="rate2">2/5</label>
        <input type="radio" id="rate2" name="visitRating" value="2"><br>
        <label for="rate3">3/5</label>
        <input type="radio" id="rate3" name="visitRating" value="3"><br>
        <label for="rate4">4/5</label>
        <input type="radio" id="rate4" name="visitRating" value="4"><br>
        <label for="rate5">5/5</label>
        <input type="radio" id="rate5" name="visitRating" value="5"><br><br>

        <label for="date">La date de votre visit:</label><br>
        <input type="date" id="date" class="form-comment" name="date"><br><br>

        <label for="accompagnant">Accompagnant:</label><br>
        <input type="text" id="accompagnant" name="accompagnant" class="form-comment" placeholder="Accompagnant"><br><br>

        <label for="comment">Avis:</label><br>
        <textarea id="comment" name="comment" rows="4" cols="50" class="form-comment" placeholder="Your feedback is important to us. Please share your thoughts, suggestions, or criticisms. Your comment will be published after moderation."></textarea><br><br>

        <input type="submit" name="submit" value="Valider" class="form-btn">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $username = htmlspecialchars($_POST['username'], ENT_QUOTES);
        $visitRating = $_POST['visitRating'] ?? 0;
        $time = date('H:i:s');
        $date = date_create($_POST["date"] . $time);
        $date = date_format($date, 'Y-m-d H:i:s');
        $accompagnant = htmlspecialchars($_POST['accompagnant'], ENT_QUOTES);
        $comment = htmlspecialchars($_POST['comment'], ENT_QUOTES);
        require('connexion.php');

        $stmt = $conn->prepare("INSERT INTO `comments`( username, visitRating, date, accompagnant, comment) values( '$username', '$visitRating', '$date', ' $accompagnant', '$comment')");
        $stmt->execute();
        echo "<br><h5>Votre commentaire sera ajouté dans les plus brefs délais après examination de nos régulateurs.<br> Merci pour votre avis!</h5><br>";
    }
    ?>
    <?php include "_partial/footer.php"; ?>
    <br>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>