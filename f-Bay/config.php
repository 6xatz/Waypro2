<?php
$host = "127.0.0.1";
$user = "root";
$password = "";
$database = "db_kuliner";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function executeQuery($conn, $query, $params = [])
{
    $stmt = $conn->prepare($query);
    if ($params) {
        $stmt->bind_param(...$params);
    }
    $stmt->execute();
    return $stmt;
}
?>
