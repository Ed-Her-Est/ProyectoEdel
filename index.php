<?php
// Aquí puedes incluir cualquier lógica de PHP que necesites antes de mostrar la página
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StarFit</title>

    <!-- Enlaces a Bootstrap para estilos básicos -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        body {
            /* Añade la imagen de fondo */
            background-image: url('pngtree-gym-is-reflected-in-an-odd-light-picture-image_2773779.jpg'); /* Reemplaza 'ruta/imagen-fondo.jpg' con la ruta real de tu imagen de fondo */
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            /* Añade estilos adicionales según sea necesario */
        }

        .logo {
            /* Añade estilos para el logo */
            max-width: 200px; /* Ajusta el tamaño según sea necesario */
            margin: 20px;
            /* Añade más estilos según sea necesario */
        }

        .container {
            /* Estilos adicionales para el contenido principal */
            text-align: center;
            color: #fff; /* Color del texto */
            /* Añade más estilos según sea necesario */
        }

        h1 {
            font-size: 3em; /* Ajusta el tamaño de la fuente según sea necesario */
        }

        .btn-iniciar {
            margin-top: 20px;
        }
    </style>
</head>

<body>

    <div class="container">
        <!-- Logo del gimnasio -->
        <img class="logo" src="pngwing.com (45).png" alt="Logo del Gimnasio"> <!-- Reemplaza 'ruta/logo-gimnasio.png' con la ruta real de tu logo -->
<h1></h1>
<h1></h1>
        <h1 class="display-1"><mark>Bienvenido a StarFit</mark></h1>
        
        <p><mark>
            Transforma tu cuerpo, transforma tu vida.</mark></p>

        <!-- Botón para iniciar registro -->
        <a href="usuario/mostrarUsuario.php" button type="button" class="btn btn-primary btn-lg" btn-iniciar">Iniciar Registro</a>

        <!-- Otros elementos HTML y contenido de la página aquí -->

    </div>

    <!-- Scripts de Bootstrap y otros -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
