<?php
include 'db.php';

function agregarUsuario($nombre, $rol, $usuario, $password) {
    global $conn;
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $stmt = $conn->prepare("INSERT INTO usuarios (nombre, rol, usuario, password) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $nombre, $rol, $usuario, $hash);
    return $stmt->execute();
}

function autenticarUsuario($usuario, $password) {
    global $conn;
    $stmt = $conn->prepare("SELECT password FROM usuarios WHERE usuario = ?");
    $stmt->bind_param("s", $usuario);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return password_verify($password, $row['password']);
    }
    return false;
}

function obtenerUsuarios() {
    global $conn;
    $result = $conn->query("SELECT * FROM usuarios");
    return $result->fetch_all(MYSQLI_ASSOC);
}