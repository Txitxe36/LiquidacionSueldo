<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" conntent="width=device-width, initial-scale=0">
    <title>Ingresar</title>
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <script src="public/js/bootstrap.bundle.min.js"></script>
</head>
<body class="py-3">
    <main class="container">
      <div class="row">
        <div class="col"></div>
          <div class="col-4">
            <br>
            <br>
            <h4>Iniciar Sesion</h4>
            <br>
            <br>
            <form class="row g-3" method="POST" action="ingresar.php" autocomplete="off">
                <label for="usuario" class="form-label">Usuario</label>
                <input type="text" id="usuario" name="usuario" class="form-control" required autofocus>
                <label for="clave" class="form-label">Clave</label>
                <input type="password" id="clave" name="clave" class="form-control" required>
                <button type="submit" id="ingresar" class="btn btn-primary" name="btn_ingresar">Ingresar</button>
            </form>
          </div>
        <div class="col"></div>
      </div>
    </main>
</body>
</html>

