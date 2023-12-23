<?php

$host = "localhost";
$port = "5432";  // Default PostgreSQL port
$dbname = "cina_flix";
$user = "postgres";  // Replace with your PostgreSQL username
$password = "virgie04";  // Replace with your PostgreSQL password

$dsn = "pgsql:host=$host;port=$port;dbname=$dbname;user=$user;password=$password";
try {
    $conn = new PDO($dsn);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    die();
}
?>
