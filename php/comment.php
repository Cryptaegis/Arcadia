<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--form that will allow the user to add a comment -->
    <h2>Add Comment: </h2>
    <form action="check_comment.php" method="post">

    <input type="text" name="username" placeholder="Identifiant">
        <br><br>
        <h3>Rate your visit to the zoo:</h3>
        <input type="radio" id="rateCircle" name="visitRating" value="1">
        <label for="rateCircle">1/5</label><br>
        <input type="radio" id="rateCircle" name="visitRating" value="2">
        <label for="rateCircle">2/5</label><br>
        <input type="radio" id="rateCircle" name="visitRating" value="3">
        <label for="rateCircle">3/5</label><br>
        <input type="radio" id="rateCircle" name="visitRating" value="4">
        <label for="rateCircle">4/5</label><br>
        <input type="radio" id="rateCircle" name="visitRating" value="5">
        <label for="rateCircle">5/5</label><br>
        <br><br>        
        <input type="date" name="date" placeholder="Date of Visit">
        <br><br>
        <input type="text" name="accompagnant" placeholder="Accompagnant">
        <br><br>
        <textarea rows="4" cols="50" name="comment" placeholder="Votre avis nous intéresse, n'hésitez pas à nous faire part de vos remarques, suggestions ou critiques. Votre commentaire sera publié après validation."></textarea>
        <br><br>
        <input type="submit" name="submit" value="Add Comment">
    </form>

    <!--button to go back to the previous page -->
    <button onclick="history.back()">Go Back</button>
    <!--send date to the table comments in the database -->
    <?php
    require('connexion.php');
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // Check if the submit button was clicked
    if (isset($_POST['submit'])) {
        // Get the data from the form
        $username = $_POST['username'];
        $visitRating = $_POST['visitRating'];
        $date = $_POST['date'];
        $accompagnant = $_POST['accompagnant'];
        $comment = $_POST['comment'];
        // Insert the data into the table 'comments'
        $sql = "INSERT INTO `comments` (`userName`, `visitRating`, `date`, `accompagnant`, `comment`) VALUES ( '$username', '$visitRating', '$date', '$accompagnant', '$comment')";
        // Execute the query
        if (mysqli_query($conn, $query)) {
            echo "Comment added successfully!";
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
        }
        }
    ?>

<a href="ac-regul.php">HOME</a>


</body>
</html>