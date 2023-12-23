<?php

include 'connection.php';
    $name = $_POST['name'];
    $genre = $_POST['genre'];
    $photo = $_POST['photo']; 
    $rating = $_POST['rating'];
    $category = $_POST['category'];
    $sql = "INSERT INTO movie (Movie_Name, Genre, Photo, Rating, Category) VALUES ('$name','$genre','$photo','$rating', '$category')";

    $nameCapitalized = ucwords($name);

    $conn->query($sql);
    header("Location: home.php");

?>