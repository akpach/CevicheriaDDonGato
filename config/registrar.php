<?php 
include("./conexion.php");

/* if(isset($_POST['register'])){
    if(strlen($_POST['nombre'])>1 && strlen($_POST['apellido'])>1 && strlen($_POST['usuario'])>1 && strlen($_POST['contrasena'])>1 && strlen($_POST['telefono'])>=1 && strlen($_POST['direccion'])>1 && strlen($_POST['distrito'])>1){ */
        $nombre=trim($_POST['nombre']);
        $apellido=trim($_POST['apellido']);
        $usuario=trim($_POST['usuario']);
        $contrasena=trim($_POST['contrasena']);
        $telefono=trim($_POST['telefono']);
        $direccion=trim($_POST['direccion']);
        $distrito=trim($_POST['distrito']);
        
        $consulta="INSERT INTO usuarios(nombre, apellido, correo, contra, direccion, telefono, distrito, id_cargo) VALUES ('$nombre','$apellido','$usuario','$contrasena','$direccion','$telefono','$distrito','2')";

        $ver_usuario=mysqli_query($con,"SELECT * FROM usuarios WHERE correo='$usuario'");
        if(mysqli_num_rows($ver_usuario)>0){
            echo '<script> 
            alert("El usuario ya está registrado");
            window.history.go(-1);
            </script>';
            exit;
        }

        $resultado=mysqli_query($con,$consulta);
        if($resultado){
            echo '<script> 
            alert("Se ha registrado correctamente");
            window.history.go(-1);
            </script>';
        } else{
            echo '<script> 
            alert("Ha ocurrido un error");
            window.history.go(-1);
            </script>';
        }
/*     } else {
        ?>
        <h3>Por favor complete los campos</h3>
        <?php
    }
} */
?>