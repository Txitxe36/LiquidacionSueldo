<?php
    $id_empleado=$_GET['id_empleado'];
   


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" conntent="width=device-width, initial-scale=0">
    <title>Nuevo recibo</title>
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <script src="public/js/bootstrap.bundle.min.js"></script>
</head>
<body class="py-3">
    <main class="container">
      <div class="row">
        <div class="col">
          <h4>Nuevo recibo</h4>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <form class="row g-3" method="POST" action="guardarRecibo.php" autocomplete="off">
            <div class="col-md-4">
               <label for="ID" class="form-label">ID</label>
               <input type="text" id="id_empleado" name="id_empleado" class="form-control" value="<?php echo $id_empleado; ?>" readonly>
               <label for="ingreso" class="form-label">Fecha de liquidacion</label>
               <input type="date" id="fecha_liquidacion" name="fecha_liquidacion" class="form-control" required>
               <label for="horas_cien" class="form-label">Horas extras al 100</label>
               <input type="text" id="horas_cien" name="horas_cien" class="form-control" required>
               <label for="horas_cta" class="form-label">Horas extras al 50</label>
               <input type="text" id="horas_cta" name="horas_cta" class="form-control" required>
               <label for="horas_n" class="form-label">Horas nocturnas</label>
               <input type="text" id="horas_n" name="horas_n" class="form-control" required>
               <label for="horas_cta" class="form-label">Horas feriadas</label>
               <input type="text" id="horas_f" name="horas_f" class="form-control" required>
               <br>
               <a class="btn btn-secondary" href="menu.php">Regresar</a>
               <button type="submit" id="liquidar" class="btn btn-primary" name="btn_liquidar">Guardar</button>
            </div>
          </form>
        </div>
      </div>
    </main>
</body>
</html>