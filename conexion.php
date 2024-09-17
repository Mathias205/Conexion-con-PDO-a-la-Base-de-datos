<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=bd_computer', 'root', '');
    //echo 'Conexion Existosa a la base de datos';
} catch (PDOException $e) {
    die('Error de conexión a la base de datos: ' . $e->getMessage());
}
