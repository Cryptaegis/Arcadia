<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Comment</title>
</head>
<body>
    

   
   
<!-- Form to add a comment -->
<h2>Add Comment:</h2>
    <form action="" method="post">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" placeholder="Identifiant"><br><br>

        <h3>Rate your visit to the zoo:</h3>
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

        <label for="date">Date of Visit:</label><br>
        <input type="date" id="date" name="date"><br><br>

        <label for="accompagnant">Accompaniment:</label><br>
        <input type="text" id="accompagnant" name="accompagnant" placeholder="Accompagnant"><br><br>

        <label for="comment">Comment:</label><br>
        <textarea id="comment" name="comment" rows="4" cols="50" placeholder="Your feedback is important to us. Please share your thoughts, suggestions, or criticisms. Your comment will be published after moderation."></textarea><br><br>

        <input type="submit" name="submit" value="Add Comment">
    </form>
    <!-- php code to add data to the table comments  if the form is submitted -->
<?php
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $visitRating = $_POST['visitRating'] ?? 0 ; 
        $time = date('H:i:s');
        $date = date_create($_POST["date"].$time);
        $date = date_format($date, 'Y-m-d H:i:s');
        $accompagnant = $_POST['accompagnant'];
        $comment = $_POST['comment'];

        //connect to the 
        require('connexion.php'); 
        
        //insert into the database
      
            $stmt = $conn->prepare("INSERT INTO `comments`( username, visitRating, date, accompagnant, comment) values( '$username', '$visitRating', '$date', ' $accompagnant', '$comment')");
            $stmt->execute();
            echo "Comment added successfully...";
            //si réussis afficher les données dans la page check_comment
            header('location: check_comment.php');
            }else{
                echo "error"; 
        }
?>  

 <!--button to go back to the previous page -->
 <button onclick="history.back()">Go Back</button>
<a href="ac-regul.php">HOME</a>


</body>
</html>