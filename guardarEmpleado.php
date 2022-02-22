<?php   
    if(isset($_POST['guardar'])){
        require 'config/database.php';
       $rol=$_POST['rol'];
       $usuario=$_POST['usuario'];
       $clave=$_POST['clave'];
       $nombre=$_POST['nombre'];
       $dni=$_POST['dni'];
       $ingreso=$_POST['ingreso'];
       $direccion=$_POST['direccion'];
       $telefono=$_POST['telefono'];
       $correo=$_POST['correo'];
       $sql=("INSERT INTO empleados(id_empleado, rol, usuario, clave, nombre, dni, ingreso, direccion, telefono, correo) VALUES('NULL','$rol', '$usuario', '$clave', '$nombre', '$dni', '$ingreso', '$direccion', '$telefono', '$correo')");
       $resultado=mysqli_query($conexion,$sql);
    }
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
           <div class="card">
               <div class="card-body">
               <?php if($resultado || $resultado3){ ?>
                <h3><?php echo "El registro se ha creado correctamente."; ?></h3>
                <?php } ?>
                <a href="menu.php" class="btn btn-primary float-right">Regresar</a>
               </div>
           </div>
        </div>
    </div>
</main>
</body>
</html>