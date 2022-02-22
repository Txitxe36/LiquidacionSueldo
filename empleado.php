<?php
    require 'config/database.php';
    $sql=("SELECT * FROM empleados WHERE id_empleado = 2");
    $resultado=mysqli_query($conexion,$sql);
    $empleado=mysqli_fetch_array($resultado);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleado</title>
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <script src="public/js/bootstrap.bundle.min.js"></script>
</head>
<body class="py-3">
<main class="container">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title"><?php echo $empleado['nombre']; ?></h5>
            <a href="menu.php" class="btn btn-success float-right">Regresar</a>
        </div>
    </div>
    <div class="row py-3">
        <div class="col">
            <table class="table table-border">
                <thead>
                    <tr>
                        <th>Legajo</th>
                        <th>Rol</th>
                        <th>Nombre</th>
                        <th>DNI</th>
                        <th>Ingreso</th>
                        <th>Direccion</th>
                        <th>Telefono</th>
                        <th>Correo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                    <td><?php echo $empleado['id_empleado']; ?></td>
                    <td><?php echo $empleado['rol']; ?></td>
                    <td><?php echo $empleado['nombre']; ?></td>
                    <td><?php echo $empleado['dni']; ?></td>
                    <td><?php echo $empleado['ingreso']; ?></td>
                    <td><?php echo $empleado['direccion']; ?></td>
                    <td><?php echo $empleado['telefono']; ?></td>
                    <td><?php echo $empleado['correo']; ?></td>
                    <td>
                    <div class="btn-group" role="group" aria-label="">
                        <a href="editarEmpleado.php?id_empleado=<?php echo $empleado['id_empleado']; ?>" class="btn btn-warning">Editar</a> 
                        <a href="recibos.php?id_empleado=<?php echo $empleado['id_empleado']; ?>" class="btn btn-primary">Recibos</a>
                    </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>