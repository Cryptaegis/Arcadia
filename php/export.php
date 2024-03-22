<?php
session_start();
require('connexion.php');

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$id = mysqli_real_escape_string($conn, $_GET['id']);

$sql = "SELECT * FROM img WHERE id = ? LIMIT 1";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();
$data = $result->fetch_assoc();

// Check if image exists
if ($data) {
    header('Content-Type: ' . $data["type"]);
    echo $data["bin"];
} else {
    http_response_code(404);
    echo "Image not found.";
}

if($stmt) {
    echo "image valid";
} else {
    echo "Error: Invalid";
}
?>
