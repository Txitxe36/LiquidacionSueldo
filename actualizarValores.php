<?php
    if(isset($_POST['btn_actualizar'])){
        require'config/database.php';
        $valor_sueldo=$_POST['valor_sueldo'];
        $valor_adicional=$_POST['valor_adicional'];
        $valor_ant_s_adic=$_POST['valor_ant_s_adic'];
        $valor_presentismo=$_POST['valor_presentismo'];
        $valor_ant=$_POST['valor_ant'];
        $valor_horas_cien=$_POST['valor_horas_cien'];
        $valor_horas_cta=$_POST['valor_horas_cta'];
        $valor_horas_n=$_POST['valor_horas_n'];
        $valor_viaticos=$_POST['valor_viaticos'];
        $sql=("UPDATE valores SET valor_sueldo = '$valor_sueldo', valor_adicional ='$valor_adicional', valor_ant_s_adic = '$valor_ant_s_adic', valor_presentismo = '$valor_presentismo', valor_ant = '$valor_ant', valor_horas_cien = '$valor_horas_cien', valor_horas_cta = '$valor_horas_cta', valor_horas_n ='$valor_horas_n', valor_viaticos ='$valor_viaticos' WHERE id_valor = 1");
        $resultado=mysqli_query($conexion,$sql);
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" conntent="width=device-width, initial-scale=0">
    <title>Actualizar valores</title>
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <script src="public/js/bootstrap.bundle.min.js"></script>
</head>
<body class="py-3">
    <main class="container">
      <div class="row">
        <div class="col">
          <h4>Actualizar valores </h4>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <form class="row g-3" method="POST" action="actualizarValores.php" autocomplete="off">
            <div class="col-md-4">
              <label for="valor_sueldo" class="form-label">Sueldo basico</label>
                <input type="text" id="valor_sueldo" name="valor_sueldo" class="form-control">
                <label for="valor_adicional" class="form-label">Adicional</label>
                <input type="text" id="valor_adicional" name="valor_adicional" class="form-control">
                <label for="valor_ant_s_adic" class="form-label">Antiguedad sin adicional</label>
                <input type="text" id="valor_ant_s_adic" name="valor_ant_s_adic" class="form-control" required>
                <label for="valor_presentismo" class="form-label">Presentismo</label>
                <input type="text" id="valor_presentismo" name="valor_presentismo" class="form-control" required>
                <label for="valor_ant" class="form-label">Antiguedad</label>
                <input type="text" id="valor_ant" name="valor_ant" class="form-control" required>
                <label for="valor_horas_cien" class="form-label">Horas extras al 100</label>
                <input type="text" id="valor_horas_cien" name="valor_horas_cien" class="form-control" required>
                <label for="valor_horas_cta" class="form-label">Horas extras al 50</label>
                <input type="text" id="valor_horas_cta" name="valor_horas_cta" class="form-control" required>
                <label for="valor_horas_n" class="form-label">Horas nocturnas</label>
                <input type="text" id="valor_horas_n" name="valor_horas_n" class="form-control" required>
                <label for="valor_viaticos" class="form-label">Viaticos</label>
                <input type="text" id="valor_viaticos" name="valor_viaticos" class="form-control" required>
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