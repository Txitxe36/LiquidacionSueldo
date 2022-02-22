<?php
  require'config/database.php';
    $id_recibo=$_GET['id_recibo'];
    $sql=("SELECT * FROM `recibos` WHERE id_recibo = $id_recibo");
    $resultado=mysqli_query($conexion, $sql);
    $row=mysqli_fetch_array($resultado);
    $id_empleado=$row['id_empleado'];
    $sql2=("SELECT nombre FROM empleados WHERE id_empleado = $id_empleado");
    $resultado2=mysqli_query($conexion, $sql2);
    $row2=mysqli_fetch_array($resultado2);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" conntent="width=device-width, initial-scale=0">
    <title>Recibo</title>
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <script src="public/js/bootstrap.bundle.min.js"></script>
</head>
<body class="py-3">
    <main class="container">
        </br><h5 class="fw-bold">Liquidacion de haberes</h5></br>
        <div class="card">
            <div class="card-body">
                <div class="row table-info">
                    <div class="col fw-bold"><?php echo "Recibo n° " .$row['id_recibo']; ?></div>
                    <div class="col fw-bold"><?php echo "Fecha de liquidacion ".$row['fecha_liquidacion']; ?></div>
                    <div class="col fw-bold"><?php echo "Nombre completo ".$row2['nombre']; ?></div>
                    <div class="col fw-bold"><?php echo "Legajo n° ".$id_empleado; ?></div>
                </div>
            </div>
        </div>
        <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Descripcion</th>
      <th scope="col">Unidad</th>
      <th scope="col">Haberes</th>
      <th scope="col">Retenciones</th>
      <th scope="col">Adicionales</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Sueldo</th>
      <td>-</td>
    <td><?php echo $row['s_sueldo']; ?></td>
      <td>-</td>
      <td>-</td>
    </tr>
    <tr>
      <th scope="row">Adicional</th>
      <td>-</td>
      <td><?php echo $row['s_adicional']; ?></td>
      <td>-</td>
      <td>-</td>
    </tr>
    <tr>
      <th scope="row">Antiguedad s/adic</th>
      <td>-</td>
      <td><?php echo $row['s_antiguedad_s_adic']; ?></td>
      <td>-</td>
      <td>-</td>
    </tr>
    <tr>
      <th scope="row">Antiguedad</th>
      <td><?php echo $row['e_antiguedad']; ?></td>
      <td><?php echo $row['s_antiguedad']; ?></td>
      <td>-</td>
      <td>-</td>
    </tr>
      <tr>
      <th scope="row">Presentismo</th>
      <td>-</td>
      <td><?php echo $row['s_presentismo']; ?></td>
      <td>-</td>
      <td>-</td>
    </tr>
      <tr>
      <th scope="row">Horas al 50</th>
      <td><?php echo $row['e_horas_cta']; ?></td>
      <td><?php echo $row['s_horas_cta']; ?></td>
      <td>-</td>
      <td>-</td>
    </tr>
      <tr>
      <th scope="row">Horas al 100</th>
      <td><?php echo $row['e_horas_cien']; ?></td>
      <td><?php echo $row['s_horas_cien']; ?></td>
      <td>-</td>
      <td>-</td>
    </tr>
      <tr>
      <th scope="row">Horas nocturnas</th>
      <td><?php echo $row['e_horas_n']; ?></td>
      <td><?php echo $row['s_horas_n']; ?></td>
      <td>-</td>
      <td>-</td>
    </tr>
      <tr>
      <th scope="row">Horas feriadas</th>
      <td><?php echo $row['e_horas_f']; ?></td>
      <td><?php echo $row['s_horas_f']; ?></td>
      <td>-</td>
      <td>-</td>
    </tr>
      <tr>
      <th scope="row">Jubillacion</th>
      <td>-</td>
      <td>-</td>
      <td><?php echo $row['jubilacion']; ?></td>
      <td>-</td>
    </tr>
      <tr>
      <th scope="row">Ley 19.032</th>
      <td>-</td>
      <td>-</td>
      <td><?php echo $row['ley_19032']; ?></td>
      <td>-</td>
    </tr>
      <tr>
      <th scope="row">Obra social</th>
      <td>-</td>
      <td>-</td>
      <td><?php echo $row['obra_social']; ?></td>
      <td>-</td>
    </tr>
      <tr>
      <th scope="row">Viaticos</th>
      <td>-</td>
      <td>-</td>
      <td>-</td>
      <td><?php echo $row['s_viaticos']; ?></td>
    </tr>
    <tfoot class="striped">
      <th scope="col">Totales</th>
      <th scope="col"></th>
      <th scope="col">Bruto</th>
      <th scope="col">Descuento</th>
      <th scope="col">Neto</th>
      <tr>
          <td>-</td>
          <td>-</td>
          <td class="table-primary"><?php echo $row['bruto']; ?></td>
          <td class="table-danger"><?php echo $row['descuentos']; ?></td>
          <td class="table-success"><?php echo $row['neto']; ?></td>
      </tr>
    </tfoot>
  </tbody>
</table>
</div>
<div class="row">
    <div class="col-2">
        <div class="btn-group" role="group" aria-label="">
            <a href="menu.php" class="btn btn-primary">Regresar</a> 
        </div>
    </div>
</div>
    </main>
 
</body>
</html>
