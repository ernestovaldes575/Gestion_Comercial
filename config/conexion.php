<?php
    //Conexion a la base de datos de Gestion_Comercial
    $host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "gestion_comercial";

    //?Conexion con mysqli(Recomendado utilizar PDO ya que proporciona mayor seguridad)
    $conn = new mysqli($host, $db_user, $db_password, $db_name);

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }