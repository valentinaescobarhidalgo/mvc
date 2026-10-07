<?php
$host = "127.0.0.1";
$dbname = "web";
$username = "root";
$password="";
try {

    $conexion = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);

    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {

    
    die("Error crítico de conexión: " . $e->getMessage());

}


?>
