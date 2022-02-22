<?php
   
    if(isset($_POST['btn_actualizar'])){
        require'config/database.php';
        $id_empleado=$_POST['id_empleado'];
        $rol=$_POST['rol'];
        $usuario=$_POST['usuario'];
        $clave=$_POST['clave'];
        $nombre=$_POST['nombre'];
        $dni=$_POST['dni'];
        $ingreso=$_POST['ingreso'];
        $direccion=$_POST['direccion'];
        $telefono=$_POST['telefono'];
        $correo=$_POST['correo'];
        $sql="UPDATE empleados SET rol='$rol', usuario='$usuario', clave='$clave', nombre='$nombre', dni ='$dni', ingreso ='$ingreso', direccion ='$direccion', telefono='$telefono', correo='$correo' WHERE id_empleado='$id_empleado'";
        $resultado=mysqli_query($conexion,$sql);   
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <script src="public/js/bootstrap.bundle.min.js"></script>
</head>
<body class="py-3">
<main class="container">
    <div class="row"> 
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <?php if($resultado){ ?>
                    <h3><?php echo "El registro se ha actualizado correctamente."; ?></h3>
                    <?php } ?>
                    <a href="menu.php" class="btn btn-primary float-right">Regresar</a>
                </div>
            </div>
        </div>
    </div>
</main>
</body>
</html>