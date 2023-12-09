<?php
include('connection.php');
   
$con = connection();
$sql = "SELECT * FROM grupos";
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
                    <a class="nav-link" href="#">Grupos</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="mb-4">
            <h1>Crear Grupo</h1>
            <form action="insertarGrupos.php" method="POST">
                <!-- Cambios en los nombres de los campos y eliminación de campos no necesarios -->
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="nombre_grupo">Nombre del Grupo</label>
                        <input type="text" class="form-control" name="nombre_grupo" placeholder="Nombre del Grupo" required value="">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="horario_id">ID del Horario</label>
                        <input type="text" class="form-control" name="horario_id" placeholder="ID del Horario" value="">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Agregar Grupo</button>
            </form>
        </div>

        <div>
            <h2>Grupos Registrados</h2>
            <table class="table table-bordered table-hover">
                <thead class="thead-light">
                    <tr>
                        <th>ID</th>
                        <th>Nombre del Grupo</th>
                        <th>ID del Horario</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Contenido de la tabla -->
                    <?php while ($row = mysqli_fetch_array($query)): ?>
                        <tr>
                            <td><?= $row['grupo_id'] ?></td>
                            <td><?= ucwords($row['nombre_grupo']) ?></td>
                            <td><?= $row['horario_id'] ?></td>
                            <td>
                                <!-- Enlace para editar -->
                                <a class="btn btn-warning" href="updateGrupos.php?id=<?= $row['grupo_id'] ?>">Editar</a>
                            </td>
                            <td>
                                <!-- Formulario para eliminar -->
                                <a class="btn btn-danger" href="deleteGrupos.php?id=<?= $row['grupo_id'] ?>">Eliminar</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table> 
            <a class="btn btn-success" href="respaldarGrupos.php">Descargar Datos</a>
            <!-- Agregar enlace para ver más detalles si es necesario -->
        </div>
    </div>

    <!-- Scripts de Bootstrap y otros -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
