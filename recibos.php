<?php
    require 'config/database.php';
    $id_empleado = $_GET['id_empleado'];
    $sql=("SELECT * FROM recibos WHERE id_empleado = $id_empleado");
    $resultado=mysqli_query($conexion,$sql);
    $sql2=("SELECT * FROM empleados WHERE id_empleado = $id_empleado");
    $resultado2=mysqli_query($conexion, $sql2);
    $empleado=mysqli_fetch_array($resultado2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de recibos</title>
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <script src="public/js/bootstrap.bundle.min.js"></script>
</head>
<body class="py-3">
<main class="container">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Lista de recibos de: <?php echo $empleado['nombre']; ?></h5>
            <?php if($empleado['rol']=='administrador'){ ?>
            <a href="nuevoRecibo.php?id_empleado=<?php echo $id_empleado; ?>" class="btn btn-success float-right">Nueva liquidacion</a>
            <?php } ?>
            <a href="menu.php" class="btn btn-primary float-right">Regresar</a>
        </div>
    </div>
    <div class="row py-3">
        <div class="col">
            <table class="table table-border">
                <thead>
                    <tr>
                        <th>N° Recibo</th>
                        <th>Legajo</th>
                        <th>Fecha de liquidacion</th>
                        <th>Neto</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                foreach($resultado as $row){
                ?>
                <tr>
                    <td><?php echo $row['id_recibo']; ?></td>
                    <td><?php echo $row['id_empleado']; ?></td>
                    <td><?php echo $row['fecha_liquidacion']; ?></td>
                    <td><?php echo $row['neto']; ?></td>
                    <td>
                    <div class="btn-group" role="group" aria-label="">
                        <a href="detalleRecibo.php?id_recibo=<?php echo $row['id_recibo']; ?>" class="btn btn-secondary">Detalle</a> 
                        <?php if($empleado['rol']=='administrador'){ ?>
                        <a href="eliminarRecibo.php?id_recibo=<?php echo $row['id_recibo']; ?>" class="btn btn-danger">Borrar</a>
                        <?php } ?>
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