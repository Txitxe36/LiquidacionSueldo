<?php
    require 'config/database.php';
    $sql=("SELECT * FROM empleados");
    $resultado=mysqli_query($conexion,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleados</title>
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <script src="public/js/bootstrap.bundle.min.js"></script>
</head>
<body class="py-3">
<main class="container">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Lista de empleados</h5>
            <a href="nuevoEmpleado.php" class="btn btn-success float-right">Nuevo empleado</a>
            <a href="menu.php" class="btn btn-primary float-right">Regresar</a>
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
                <?php
                foreach($resultado as $row){
                ?>
                <tr>
                    <td><?php echo $row['id_empleado']; ?></td>
                    <td><?php echo $row['rol']; ?></td>
                    <td><?php echo $row['nombre']; ?></td>
                    <td><?php echo $row['dni']; ?></td>
                    <td><?php echo $row['ingreso']; ?></td>
                    <td><?php echo $row['direccion']; ?></td>
                    <td><?php echo $row['telefono']; ?></td>
                    <td><?php echo $row['correo']; ?></td>
                    <td>
                    <div class="btn-group" role="group" aria-label="">
                        <a href="editarEmpleados.php?id_empleado=<?php echo $row['id_empleado']; ?>" class="btn btn-warning">Editar</a> 
                        <a href="eliminar.php?id_empleado=<?php echo $row['id_empleado']; ?>" class="btn btn-danger">Borrar</a>
                        <a href="recibos.php?id_empleado=<?php echo $row['id_empleado']; ?>" class="btn btn-primary">Recibos</a>
                    </div>
                    </td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>