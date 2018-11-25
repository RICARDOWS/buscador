<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "buscador";

// Crear connection
$conn = new mysqli($servername, $username, $password, $dbname);
// revisar connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


?>
