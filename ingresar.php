<?php
    require'config/database.php';

    session_start();

    $usuario=$_POST['usuario'];
    $clave=$_POST['clave'];

    $sql=("SELECT * FROM empleados WHERE usuario = '$usuario' AND clave = '$clave'");

    $resultado=mysqli_query($conexion, $sql);
    $row=mysqli_fetch_array($resultado);

    if($resultado){
        $_SESSION['usuario']=$usuario;
        header("Location : menu.php");
    }else{
        header("Location: login.php");
    }

    if(!$resultado){
        echo "Usuario y/o clave incorrecta";
    }else{
        echo "Bienvenido ".$row['nombre'];
    }
?>