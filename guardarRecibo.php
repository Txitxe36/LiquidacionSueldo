<?php

if(isset($_POST['btn_liquidar'])){
    require 'config/database.php';
    $id_empleado=$_POST['id_empleado'];
    $fecha_liquidacion=$_POST['fecha_liquidacion'];
    $e_horas_cien=$_POST['horas_cien'];
    $e_horas_cta=$_POST['horas_cta'];
    $e_horas_f=$_POST['horas_f'];
    $e_horas_n=$_POST['horas_n'];
    //Para calcular la antiguedad a partir de la fecha de ingreso a la empresa
    $sql1=("SELECT ingreso FROM empleados WHERE id_empleado = $id_empleado");
    $resultado1=mysqli_query($conexion,$sql1);
    $res=mysqli_fetch_array($resultado1);
    require'calcularAntiguedad.php';
    $e_antiguedad=calcularAtiguedad($res['ingreso'],$fecha_liquidacion);
    //Consulta para traer los valores para los calculos 
    $sql2=("SELECT * FROM valores");
    $resultado2=mysqli_query($conexion, $sql2);
    $valor=mysqli_fetch_array($resultado2);
    //Calculo de los valores para el recibo
    $s_sueldo=$valor['valor_sueldo'];
    $s_adicional=$valor['valor_adicional'];
    $s_antiguedad_s_adic=$e_antiguedad[0]*$valor['valor_ant_s_adic'];
    $s_antiguedad=$e_antiguedad[0]*$valor['valor_ant'];
    $s_presentismo=$valor['valor_presentismo'];
    $s_horas_cien=$e_horas_cien*$valor['valor_horas_cien'];
    $s_horas_cta=$e_horas_cta*$valor['valor_horas_cta'];
    $s_horas_n=$e_horas_n*$valor['valor_horas_n'];
    $s_horas_f=$e_horas_f*$valor['valor_horas_cien'];
    $s_viaticos=$valor['valor_viaticos'];
    $bruto=$s_sueldo + $s_adicional + $s_antiguedad_s_adic + $s_antiguedad + $s_presentismo + $s_horas_cien + $s_horas_cta + $s_horas_n + $s_horas_f + $s_viaticos;
    $jubilacion=($bruto * 11)/ 100;
    $obra_social=($bruto * 3)/ 100;
    $ley_19032=$obra_social;
    $descuentos=$jubilacion + $obra_social + $ley_19032;
    $neto=($bruto - $descuentos) + $s_viaticos;
    //Consulta creacion del recibo
    $sql3=("INSERT INTO recibos (id_recibo, id_empleado, fecha_liquidacion, s_sueldo, s_adicional, s_antiguedad_s_adic, s_presentismo, e_antiguedad, s_antiguedad, e_horas_cien, s_horas_cien, e_horas_cta, s_horas_cta, e_horas_n, s_horas_n, e_horas_f, s_horas_f, jubilacion, ley_19032, obra_social, s_viaticos, descuentos, bruto, neto) VALUES ('NULL', '$id_empleado', '$fecha_liquidacion', '$s_sueldo', '$s_adicional', '$s_antiguedad_s_adic', '$s_presentismo', '$e_antiguedad[0]', '$s_antiguedad', '$e_horas_cien', '$s_horas_cien', '$e_horas_cta', '$s_horas_cta', '$e_horas_n', '$s_horas_n', '$e_horas_f', '$s_horas_f', '$jubilacion', '$ley_19032', '$obra_social', '$s_viaticos', '$descuentos', '$bruto', '$neto')");
    $resultado3=mysqli_query($conexion, $sql3);
    mysqli_close($conexion);
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
               <?php if($resultado3){ ?>
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
     
    