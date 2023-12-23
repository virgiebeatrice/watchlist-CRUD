<?php
include 'connection.php';
    $name = $_GET['name'];
    $sql = "DELETE FROM movie WHERE Movie_Name ='$name'";
    $conn->query($sql);
    header("Location: home.php");
?>