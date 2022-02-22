<?php
  require 'config/database.php';
  $id_empleado = $_GET['id_empleado'];
  $sql=("SELECT * FROM empleados WHERE id_empleado = $id_empleado");
  $resultado=mysqli_query($conexion,$sql);
  $row=mysqli_fetch_array($resultado);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" conntent="width=device-width, initial-scale=0">
    <title>Editar empleado</title>
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <script src="public/js/bootstrap.bundle.min.js"></script>
</head>
<body class="py-3">
    <main class="container">
      <div class="row">
        <div class="col">
          <h4>Editar registro</h4>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <form class="row g-3" method="POST" action="actualizar.php" autocomplete="off">
            <div class="col-md-4">
              <label for="ID" class="form-label">Legajo</label>
                <input type="text" id="id_empleado" name="id_empleado" class="form-control" value="<?php echo $row['id_empleado']; ?>" readonly>
                <label for="rol" class="form-label">Rol</label>
                <input type="text" id="rol" name="rol" class="form-control" value="<?php echo $row['rol']; ?>" readonly>
                <label for="usuario" class="form-label">Usuario</label>
                <input type="text" id="usuario" name="usuario" class="form-control" value="<?php echo $row['usuario']; ?>" autofocus>
                <label for="clave" class="form-label">Clave</label>
                <input type="password" id="clave" name="clave" class="form-control" value="<?php echo $row['clave']; ?>">
                <label for="nombre" class="form-label">Nombre completo</label>
                <input type="text" id="nombre" name="nombre" class="form-control" value="<?php echo $row['nombre']; ?>">
                <label for="dni" class="form-label">DNI</label>
                <input type="text" id="dni" name="dni" class="form-control" value="<?php echo $row['dni']; ?>">
                <label for="ingreso" class="form-label">Fecha de ingreso</label>
                <input type="date" id="ingreso" name="ingreso" class="form-control" value="<?php echo $row['ingreso']; ?>" readonly>
                <label for="direccion" class="form-label">Direccion</label>
                <input type="text" id="direccion" name="direccion" class="form-control" value="<?php echo $row['direccion']; ?>">
                <label for="telefono" class="form-label">Telefono</label>
                <input type="text" id="telefono" name="telefono" class="form-control" value="<?php echo $row['telefono']; ?>">
                <label for="correo" class="form-label">Correo</label>
                <input type="email" id="correo" name="correo" class="form-control" value="<?php echo $row['correo']; ?>">
                <br>
                <a class="btn btn-secondary" href="menu.php">Regresar</a>
                <button type="submit" class="btn btn-primary" name="btn_actualizar">Actualizar</button>
            </div>
          </form>
        </div>
      </div>
    </main>
</body>
</html>