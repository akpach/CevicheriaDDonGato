<?php 

session_start();
if($_SESSION){

    switch ($_SESSION['rol']) {
        case 0:
            header('Location: clientes/index.php');
            break;
        case 1:
            header('Location: administrador/index.php');
            break;
    }


}else{
    header("Location: login.html");
}

?>