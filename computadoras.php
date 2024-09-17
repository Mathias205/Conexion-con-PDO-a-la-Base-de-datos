<?php
require 'conexion.php';

function getComponets() {
    global $pdo;
    $stmt = $pdo->query('SELECT * FROM components');
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

$componentes = getComponets();
echo json_encode($componentes, JSON_PRETTY_PRINT);
