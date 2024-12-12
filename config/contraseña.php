<?php
session_start();

if( isset($_POST) ){

    include_once('./conexion.php');

    $id = $_SESSION['id'];

    $contrasena = $_POST['password'];

    $contrasena2 = $_POST['password2'];

    if($contrasena == $contrasena2){

        $consulta = "UPDATE login SET contr_log='$contrasena' WHERE id_log='$id'";

        $ejecutar = mysqli_query($con,$consulta);

        if($ejecutar){
            echo "Contraseña actualizada";
            session_destroy();
            header('Location: ../index.php');
        }else{
            echo "Error al actualizar contraseña";
            header('Location: ../contraseña.php');
        }

    }else{
        echo "Las contraseñas no coinciden";
        header('Location: ../contraseña.php');
    }

} else {
    echo "No se ha recibido ningun dato";
    header('Location: ../contraseña.php');
}

?>