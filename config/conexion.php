<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "gestion_comercial";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>