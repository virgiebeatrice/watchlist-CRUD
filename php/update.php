<?php
include 'connection.php';
$updateMessage = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $genre = $_POST['genre'];
    $photo = $_POST['photo']; 
    $rating = $_POST['rating'];
    $category = $_POST['category'];

    $sql = "UPDATE movie SET Genre='$genre', Photo='$photo', Rating='$rating', Category='$category' WHERE Movie_Name='$name'";

    $nameCapitalized = ucwords($name);

    if ($conn->query($sql) === TRUE) {
        $updateMessage = "Update successful";

        header("Location: home.php");
        exit();
    } else {
        // Use errorInfo() to get the error details
        $errorInfo = $conn->errorInfo();
        $updateMessage = "Error updating record: " . $errorInfo[2];
    }
}

// Close the PDO connection by setting it to null
$conn = null;
?>
