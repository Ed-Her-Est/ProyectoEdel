<?php
include("connection.php");
$con = connection();

$instructorID = $_GET['id'];

$sql = "SELECT * FROM instructores WHERE instructor_id='$instructorID'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Instructor</title>
    <!-- Agrega enlaces a Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .instructor-form {
            max-width: 400px;
            margin: 50px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .instructor-form input {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="instructor-form">
            <h2 class="mb-4">Editar Instructor</h2>
            <form action="editarInstructores.php" method="POST">
                <input type="hidden" name="id" value="<?= $row['instructor_id'] ?>">
                <div class="form-group">
                    <label for="nombre_instructor">Nombre</label>
                    <input type="text" class="form-control" name="nombre_instructor" placeholder="Nombre" value="<?= $row['nombre_instructor'] ?>">
                </div>
                <div class="form-group">
                    <label for="especialidad">Especialidad</label>
                    <input type="text" class="form-control" name="especialidad" placeholder="Especialidad" value="<?= $row['especialidad'] ?>">
                </div>
                <div class="form-group">
                    <label for="correo_electronico">Correo Electrónico</label>
                    <input type="email" class="form-control" name="correo_electronico" placeholder="Correo Electrónico" value="<?= $row['correo_electronico'] ?>">
                </div>
                <div class="form-group">
                    <label for="telefono">Teléfono</label>
                    <input type="tel" class="form-control" name="telefono" placeholder="Teléfono" value="<?= $row['telefono'] ?>">
                </div>
                <div class="form-group">
                    <label for="direccion">Dirección</label>
                    <input type="text" class="form-control" name="direccion" placeholder="Dirección" value="<?= $row['direccion'] ?>">
                </div>
                <!-- Puedes agregar más campos según la estructura de tu tabla 'instructores' -->
                <div class="form-group text-center">
                    <input type="submit" class="btn btn-primary" value="Actualizar">
                </div>
            </form>
        </div>
    </div>

    <!-- Agrega scripts de Bootstrap y otros que puedas necesitar -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
