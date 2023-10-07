<?php
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre_apellido'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    
    
    $salt = bin2hex(random_bytes(32));
    $saltedPassword = $_POST['password'] . $salt;
    $hashedPassword = hash('sha256', $saltedPassword);

    $sql = "INSERT INTO usuarios (nombre_apellido, tel, email, password, salt) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$nombre, $tel, $email, $hashedPassword, $salt]);

    header("Location: login.php"); 
    exit;
}
?>
