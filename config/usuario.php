<?php
session_start();
if( isset($_POST) ){
    include_once('conexion.php');

    //si el usuario es correcto puede ingresar a cambiar la contraseña

    $usuario = $_POST['usuario'];

    $consultaUsuario = "SELECT * FROM login WHERE usu_log='$usuario'";

    $ejecutar = mysqli_query($con,$consultaUsuario);

    if($fila = mysqli_fetch_array($ejecutar)){
        
        
        $_SESSION['id'] =  $fila['id_log']; 

        header('Location: ../contraseña.php');

    }else{
        echo "Usuario incorrecto";
        header('Location: ../recuperacion.php');

    }

                
}

?>