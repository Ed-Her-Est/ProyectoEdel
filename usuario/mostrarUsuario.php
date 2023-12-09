<?php
include('connection.php');
   
$con = connection();
$sql = "SELECT * FROM Usuario";
$query = mysqli_query($con, $sql);

// Generar un color hexadecimal aleatorio
$randomColor = '#' . substr(md5(rand()), 0, 6);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Enlace a Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Establecer el color de fondo del cuerpo de la página con el color aleatorio */
        body {
            background-color: <?php echo $randomColor; ?>;
        }

        /* Agregar estilos personalizados aquí si es necesario */
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">StarFit</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Servicios</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Usuarios</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="mb-4">
            <h1>Crear Usuario</h1>
            <form action="insertarUsuario.php" method="POST">
                <!-- Cambios en los nombres de los campos y eliminación de campos no necesarios -->
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" name="nombre" placeholder="Nombre" required value="">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="apellidoPaterno">Apellido Paterno</label>
                        <input type="text" class="form-control" name="apellidoPaterno" placeholder="Apellido Paterno" required value="">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="apellidoMaterno">Apellido Materno</label>
                        <input type="text" class="form-control" name="apellidoMaterno" placeholder="Apellido Materno" required value="">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="usuario">Usuario</label>
                        <input type="text" class="form-control" name="usuario" placeholder="Usuario" required value="">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="contrasenia">Contraseña</label>
                        <input type="password" class="form-control" name="contrasenia" placeholder="Contraseña" required value="">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="email">Correo Electrónico</label>
                        <input type="email" class="form-control" name="email" placeholder="Correo Electrónico" required value="">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Agregar Usuario</button>
            </form>
        </div>

        <div>
            <h2>Usuarios Registrados</h2>
            <table class="table table-bordered table-hover">
                <thead class="thead-light">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Usuario</th>
                        <th>Correo Electrónico</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Contenido de la tabla -->
                    <?php while ($row = mysqli_fetch_array($query)): ?>
                        <tr>
                            <td><?= $row['ID_Usuario'] ?></td>
                            <td><?= ucwords($row['nombre']) ?></td>
                            <td><?= ucwords($row['apellidoPaterno']) ?></td>
                            <td><?= ucwords($row['apellidoMaterno']) ?></td>
                            <td><?= $row['usuario'] ?></td>
                            <td><?= $row['email'] ?></td>
                            <td>
                                <!-- Enlace para editar -->
                                <a class="btn btn-warning" href="updateUsuario.php?id=<?= $row['ID_Usuario'] ?>">Editar</a>
                            </td>
                            <td>
                                <!-- Formulario para eliminar -->
                                <a class="btn btn-danger" href="deleteUsuario.php?id=<?= $row['ID_Usuario'] ?>">Eliminar</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table> 
            <a class="btn btn-success" href="respaldarUsuario.php">Descargar Datos</a>
            <!-- Agregar enlace para ver más detalles si es necesario -->
        </div>
    </div>

    <!-- Scripts de Bootstrap y otros -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
