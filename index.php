<?php
//archivo requerido
require 'config/database.php';
//instancia de la clase databas
$consulta=("SELECT * FROM empleados");
$resultado=mysqli_query($conexion,$consulta);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema</title>

    <link rel="stylesheet" href="public/css/bootstrap.min.css">

    <script src="public/js/bootstrap.bundle.min.js"></script>

</head>
<body class="py-3">
 
<main class="container">
    <div class="row"> 
        <div class="col">
            <h4>Empleados</h4>
            <a href="nuevo.php" class="btn btn-primary float-right">Nuevo</a>
        </div>
    </div>
    <div class="row py-3">
        <div class="col">
            <table class="table table-border">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Rol</th>
                        <th>Usuario</th>
                        <th>Clave</th>
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
                    <td><?php echo $row['usuario']; ?></td>
                    <td><?php echo $row['clave']; ?></td>
                    <td><?php echo $row['nombre']; ?></td>
                    <td><?php echo $row['dni']; ?></td>
                    <td><?php echo $row['ingreso']; ?></td>
                    <td><?php echo $row['direccion']; ?></td>
                    <td><?php echo $row['telefono']; ?></td>
                    <td><?php echo $row['correo']; ?></td>
                    <td>
                    <div class="btn-group" role="group" aria-label="">
                        <a href="editar.php?id_empleado=<?php echo $row['id_empleado']; ?>" class="btn btn-info">Editar</a>
                        <a href="#" class="btn btn-danger">Borrar</a>
                        <a href="#" class="btn btn-secondary">Cargar horas</a>
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