<?php

include 'connection.php';

if (isset($_POST['username']) && isset($_POST['password'])) {
    session_start();
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $query = "SELECT * FROM new_user WHERE username=:username AND password=:password";
    
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    $stmt->execute();
    
    $rowCount = $stmt->rowCount();

    if ($rowCount > 0) {
        $_SESSION['username'] = $username;
        header("location:home.php");
    } else {
        echo '<script>alert("Username atau password salah")</script>';
    }
}

?>
