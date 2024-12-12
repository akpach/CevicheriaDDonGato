<?php
session_start();
 if (isset($_POST)) {
    include_once('conexion.php');
    $id = 0;
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['password'];

    $consulta = "SELECT * FROM login WHERE login_usu='$usuario' AND login_contr='$contrasena'";
    $ejecutar = mysqli_query($con,$consulta);

    if ($fila = mysqli_fetch_array($ejecutar)) {
        
        $id = $fila['log_id'];

        if($id > 0){

            $sql1 = "SELECT * FROM empleado WHERE log_id='$id'";
            $sql2 = "SELECT cli_nombre, cli_apellido FROM cliente WHERE log_id='$id'";
            $nombres = "";
            $rol = 0;

            if($resultado1 = mysqli_query($con,$sql1) ){

                if($row1 = mysqli_fetch_array($resultado1)){
                    $nombres = $row1['emp_nombre']." ".$row1['emp_apellido'];
                    $rol= $row1['rol_id'];
                }
                $_SESSION['rol'] = $rol; 
                $_SESSION['id'] = $id ;

                

            }

            if($resultado2 = mysqli_query($con,$sql2)){

                $_SESSION['id'] = $id ;
                $_SESSION['rol'] = $rol;
                if($row2 = mysqli_fetch_array($resultado2)){
                    $nombres = $row2['nombre_cli']." ".$row2['apellido_cli'];
                }

            }


            header( "Location: ../redireccionar.php" );

        }

        echo $nombres;
    }

 }

?>