<?php
include("connection.php");
$con = connection();

$ejercicioID = $_GET['id'];

$sql = "SELECT * FROM ejercicios WHERE ejercicio_id='$ejercicioID'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Ejercicio</title>
    <!-- Agrega enlaces a Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .ejercicio-form {
            max-width: 400px;
            margin: 50px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .ejercicio-form input {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="ejercicio-form">
            <h2 class="mb-4">Editar Ejercicio</h2>
            <form action="editarEjercicios.php" method="POST">
                <input type="hidden" name="id" value="<?= $row['ejercicio_id'] ?>">
                <div class="form-group">
                    <label for="nombre_ejercicio">Nombre del Ejercicio</label>
                    <input type="text" class="form-control" name="nombre_ejercicio" placeholder="Nombre del Ejercicio" value="<?= $row['nombre_ejercicio'] ?>">
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripción</label>
                    <textarea class="form-control" name="descripcion" placeholder="Descripción"><?= $row['descripcion'] ?></textarea>
                </div>
                <div class="form-group">
                    <label for="grupo_muscular">Grupo Muscular</label>
                    <input type="text" class="form-control" name="grupo_muscular" placeholder="Grupo Muscular" value="<?= $row['grupo_muscular'] ?>">
                </div>
                <!-- Puedes agregar más campos según la estructura de tu tabla 'ejercicios' -->
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
