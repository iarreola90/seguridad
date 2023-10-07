<?php
session_start();

// Comprobando si el usuario está logueado
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true){
    header('Location: login.php'); // Redirigir al usuario a la página de login si no está logueado
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/styles.css">
    <style>
        .btn-custom {
            background-color: #D81B60;
            color: #ffffff; 
            border: none; 
        }

        .btn-custom:hover {
            background-color: #B71450; 
        }
        .btn-official {
            background-color: #B71450;
            color: #ffffff; 
            border: none; 
        }

        .btn-official:hover {
            background-color: #9F123E; 
        }

    </style>
</head>
<body>
    <div class="container mt-5">
        <!-- Botón para cerrar sesión -->
        <div class="text-right mb-3">
            <a href="cerrar_sesion.php" class="btn btn-danger">Cerrar Sesión</a>
        </div>

        <div class="jumbotron text-center">
            <h1 class="display-4">¡Bienvenido!</h1>
            <p class="lead">Has iniciado sesión exitosamente. Bienvenido a la plataforma del INE.</p>
            <hr class="my-4">
            <p>Selecciona alguna de nuestras opciones.</p>

            <!-- Enlace al sitio oficial del INE -->
            <p class="mt-4">
                <a href="https://www.ine.mx" target="_blank" class="btn btn-official">Visita nuestro sitio oficial</a>
            </p>
            
            <!-- Enlace al aviso de privacidad del INE -->
            <p class="mt-2">
                <a href="https://www.ine.mx/avisoprivacidad-padronycredencializacion-validaqr/" target="_blank" class="btn btn-custom">Consulta nuestro aviso de privacidad</a>
            </p>
        </div>
    </div>

    
</body>
</html>
