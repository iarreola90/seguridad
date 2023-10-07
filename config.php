<?php

// Configuración de la base de datos
$DB_HOST = 'localhost';
$DB_USER = 'ivan';
$DB_PASS = '[jXFVqXRfdjJ7vxt';
$DB_NAME = 'seguridad';
$charset = 'utf8mb4';


$dsn = "mysql:host=$DB_HOST;dbname=$DB_NAME;charset=$charset";


$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

// Conexión a la base de datos usando PDO
try {
    $conn = new PDO($dsn, $DB_USER, $DB_PASS, $options);
} catch (\PDOException $e) {
    die("Error al conectar a la base de datos: " . $e->getMessage());
}

?>
