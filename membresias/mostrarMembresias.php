<?php
include('connection.php');
   
$con = connection();
$sql = "SELECT * FROM membresias"; // Cambiar el nombre de la tabla
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
                    <a class="nav-link" href="#">Membresías</a> <!-- Cambiar el enlace activo -->
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="mb-4">
            <h1>Crear Membresía</h1> <!-- Cambiar el título -->
            <form action="insertarMembresias.php" method="POST"> <!-- Cambiar el archivo de acción -->
                <!-- Cambios en los nombres de los campos y eliminación de campos no necesarios -->
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="nombre_membresia">Nombre de la Membresía</label> <!-- Cambiar el nombre del campo -->
                        <input type="text" class="form-control" name="nombre_membresia" placeholder="Nombre de la Membresía" required value="">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="duracion_semanas">Duración en Semanas</label> <!-- Cambiar el nombre del campo -->
                        <input type="number" class="form-control" name="duracion_semanas" placeholder="Duración en Semanas" required value="">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="costo">Costo</label> <!-- Cambiar el nombre del campo -->
                        <input type="text" class="form-control" name="costo" placeholder="Costo" required value="">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Agregar Membresía</button> <!-- Cambiar el texto del botón -->
            </form>
        </div>

        <div>
            <h2>Membresías Registradas</h2> <!-- Cambiar el título -->
            <table class="table table-bordered table-hover">
                <thead class="thead-light">
                    <tr>
                        <th>ID</th>
                        <th>Nombre de la Membresía</th> <!-- Cambiar el nombre de la columna -->
                        <th>Duración en Semanas</th> <!-- Cambiar el nombre de la columna -->
                        <th>Costo</th> <!-- Cambiar el nombre de la columna -->
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Contenido de la tabla -->
                    <?php while ($row = mysqli_fetch_array($query)): ?>
                        <tr>
                            <td><?= $row['membresia_id'] ?></td> <!-- Cambiar el nombre de la columna -->
                            <td><?= ucwords($row['nombre_membresia']) ?></td> <!-- Cambiar el nombre de la columna -->
                            <td><?= $row['duracion_semanas'] ?></td> <!-- Cambiar el nombre de la columna -->
                            <td><?= $row['costo'] ?></td> <!-- Cambiar el nombre de la columna -->
                            <td>
                                <!-- Enlace para editar -->
                                <a class="btn btn-warning" href="updateMembresias.php?id=<?= $row['membresia_id'] ?>">Editar</a> <!-- Cambiar el nombre del archivo -->
                            </td>
                            <td>
                                <!-- Formulario para eliminar -->
                                <a class="btn btn-danger" href="deleteMembresias.php?id=<?= $row['membresia_id'] ?>">Eliminar</a> <!-- Cambiar el nombre del archivo -->
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table> 
            <a class="btn btn-success" href="respaldarMembresias.php">Descargar Datos</a>
            <!-- Agregar enlace para ver más detalles si es necesario -->
        </div>
    </div>

    <!-- Scripts de Bootstrap y otros -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
