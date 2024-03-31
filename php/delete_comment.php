<?php
// Connect to the database
require('connexion.php');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the delete_comment button was clicked
if (isset($_POST['delete_comment'])) {
    // Get the comment ID from the form
    $comment_id = $_POST['comment_id'];

    // Delete the comment from the database
    $sql = "DELETE FROM comments WHERE id = $comment_id";

    if ($conn->query($sql) === TRUE) {
        echo "Comment deleted successfully";
    } else {
        echo "Error deleting comment: " . $conn->error;
    }
}



$conn->close();
?>
<a href="ac-regul.php">HOME</a>