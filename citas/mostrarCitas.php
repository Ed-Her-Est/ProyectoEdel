<?php
include('connection.php');
   
$con = connection();
$sql = "SELECT * FROM citas"; // Cambiado de 'clientes' a 'citas'
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
                    <a class="nav-link" href="#">Citas</a> <!-- Cambiado de 'Clientes' a 'Citas' -->
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="mb-4">
            <h1>Crear Cita</h1> <!-- Cambiado de 'Cliente' a 'Cita' -->
            <form action="insertarCitas.php" method="POST"> <!-- Cambiado de 'insertarClientes.php' a 'insertarCitas.php' -->
                <!-- Cambios en los nombres de los campos y eliminación de campos no necesarios -->
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="cliente_id">Cliente ID</label> <!-- Cambiado de 'nombre' a 'cliente_id' -->
                        <input type="text" class="form-control" name="cliente_id" placeholder="Cliente ID" required value="">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="grupo_id">Grupo ID</label> <!-- Nuevo campo -->
                        <input type="text" class="form-control" name="grupo_id" placeholder="Grupo ID" required value="">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="instructor_id">Instructor ID</label> <!-- Nuevo campo -->
                        <input type="text" class="form-control" name="instructor_id" placeholder="Instructor ID" required value="">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="fecha_cita">Fecha de Cita</label> <!-- Nuevo campo -->
                        <input type="date" class="form-control" name="fecha_cita" required value="">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="hora_cita">Hora de Cita</label> <!-- Nuevo campo -->
                        <input type="time" class="form-control" name="hora_cita" required value="">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="created_at">Fecha de Creación</label> <!-- Nuevo campo -->
                        <input type="text" class="form-control" name="created_at" placeholder="Fecha de Creación" value="">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Agregar Cita</button> <!-- Cambiado de 'Agregar Cliente' a 'Agregar Cita' -->
            </form>
        </div>

        <div>
            <h2>Citas Registradas</h2> <!-- Cambiado de 'Clientes' a 'Citas' -->
            <table class="table table-bordered table-hover">
                <thead class="thead-light">
                    <tr>
                        <th>ID</th>
                        <th>Cliente ID</th> <!-- Cambiado de 'Nombre' a 'Cliente ID' -->
                        <th>Grupo ID</th> <!-- Nuevo campo -->
                        <th>Instructor ID</th> <!-- Nuevo campo -->
                        <th>Fecha de Cita</th> <!-- Nuevo campo -->
                        <th>Hora de Cita</th> <!-- Nuevo campo -->
                        <th>Fecha de Creación</th> <!-- Nuevo campo -->
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Contenido de la tabla -->
                    <?php while ($row = mysqli_fetch_array($query)): ?>
                        <tr>
                            <td><?= $row['cita_id'] ?></td> <!-- Cambiado de 'cliente_id' a 'cita_id' -->
                            <td><?= $row['cliente_id'] ?></td> <!-- Cambiado de 'nombre' a 'cliente_id' -->
                            <td><?= $row['grupo_id'] ?></td> <!-- Nuevo campo -->
                            <td><?= $row['instructor_id'] ?></td> <!-- Nuevo campo -->
                            <td><?= $row['fecha_cita'] ?></td> <!-- Nuevo campo -->
                            <td><?= $row['hora_cita'] ?></td> <!-- Nuevo campo -->
                            <td><?= $row['created_at'] ?></td> <!-- Nuevo campo -->
                            <td>
                                <!-- Enlace para editar -->
                                <a class="btn btn-warning" href="updateCitas.php?id=<?= $row['cita_id'] ?>">Editar</a> <!-- Cambiado de 'updateClientes.php' a 'updateCitas.php' -->
                            </td>
                            <td>
                                <!-- Formulario para eliminar -->
                                <a class="btn btn-danger" href="deleteCitas.php?id=<?= $row['cita_id'] ?>">Eliminar</a> <!-- Cambiado de 'deleteClientes.php' a 'deleteCitas.php' -->
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table> 
            <a class="btn btn-success" href="respaldarCitas.php">Descargar Datos</a>
            <!-- Agregar enlace para ver más detalles si es necesario -->
        </div>
    </div>

    <!-- Scripts de Bootstrap y otros -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
