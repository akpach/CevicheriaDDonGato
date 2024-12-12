<?php
session_start();

if( isset($_POST) ){

    include_once('conexion.php');

    $id_cliente = $_SESSION['id_cliente'];

    $nombre = $_POST['nombre'];

    $apellido = $_POST['apellido'];

    $telefono = $_POST['telefono'];

    $persona = $_POST['persona'];

    $fecha = $_POST['fecha'];

    $hora = $_POST['hora'];

    $buscar = "SELECT * FROM cliente WHERE id_cliente='$id_cliente'";

    $ejecutar = mysqli_query($con,$buscar);

    $fila = mysqli_fetch_array($ejecutar);

    $id_cliente = $fila['id_cliente'];

    $consulta = "INSERT INTO reservacion (reser_id,reser_cantidad,reser_fecha,reser_hora,cli_id) VALUES (null,'$persona','$fecha','$hora','$id_cliente')";

    $ejecutar = mysqli_query($con,$consulta);

    if($ejecutar){
        echo "Reservacion realizada";
        header('Location: ../index.php');

    }else{

        echo "Error al realizar reservacion";

        header('Location: ../reservar.php');

    }

} else {
    echo "No se ha recibido ningun dato";
    header('Location: ../reservar.php');
}


?>