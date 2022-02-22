<?php
require 'config/database.php';



$id_empleado = $_GET['id_empleado'];
$consulta=("SELECT rol,nombre, dni, ingreso, direccion, telefono, correo FROM empleados WHERE id_empleado = :id_empleado");
$resultado=mysqli_query($conexion,$consulta);
$row=mysqli_fetch_array($resultado);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" conntent="width=device-width, initial-scale=0">
    <title>Nuevo empleado</title>
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <script src="public/js/bootstrap.bundle.min.js"></script>
</head>
<body class="py-3">
    <main class="container">
      <div class="row">
        <div class="col">
          <h4>Editar registrro</h4>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <form class="row g-3" method="POST" action="guardar.php" autocomplete="off">
            <div class="col-md-4">
                <label for="rol" class="form-label">Rol</label>
                <input type="text" id="rol" name="rol" class="form-control" value="<?php echo $row['rol']; ?>" required autofocus>
                <label for="nombre" class="form-label">Nombre completo</label>
                <input type="text" id="nombre" name="nombre" class="form-control" value="<?php echo $row['nombre']; ?>" required>
                <label for="dni" class="form-label">DNI</label>
                <input type="text" id="dni" name="dni" class="form-control" value="<?php echo $row['dni']; ?>" required>
                <label for="ingreso" class="form-label">Fecha de ingreso</label>
                <input type="date" id="ingreso" name="ingreso" class="form-control" value="<?php echo $row['ingreso']; ?>" required>
                <label for="direccion" class="form-label">Direccion</label>
                <input type="text" id="direccion" name="direccion" class="form-control" value="<?php echo $row['direccion']; ?>"required>
                <label for="telefono" class="form-label">Telefono</label>
                <input type="text" id="telefono" name="telefono" class="form-control" value="<?php echo $row['telefono']; ?>"required>
                <label for="correo" class="form-label">Correo</label>
                <input type="email" id="correo" name="correo" class="form-control" value="<?php echo $row['correo']; ?>" required>
                <br>
                <a class="btn btn-secondary" href="index.php">Regresar</a>
                <button type="submit" id="editar" class="btn btn-primary">Guardar</button>
                
            </div>
          </form>
        </div>
      </div>
    </main>
</body>
</html>