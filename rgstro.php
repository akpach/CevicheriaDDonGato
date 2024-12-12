<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <input type="text" id="nombre" name="nombre"> <br>
        <input type="text" id="apellido" name="apellido"> <br>
        <input type="email" name="usuario" id="usuario"> <br>
        <input type="password" id="contrasena" name="contrasena"> <br>
        <input type="text" name="telefono" id="inputphone"> <br>
        <input type="text" name="direccion" id="inputaddress"> <br>
        <select class="form-control" name="distrito" id="distrito">
            <option value="" selected>Seleccione</option>
            <option value="">ANCON</option>
            <option value="">ATE</option>
            <option value="">BARRANCO</option>
            <option value="">BREÑA</option>
            <option value="">CARABAYLLO</option>
            <option value="">CHACLACAYO</option>
            <option value="">CHORRILLOS</option>
            <option value="">CIENEGUILLA</option>
            <option value="">COMAS</option>
            <option value="">EL AGUSTINO</option>
            <option value="">INDEPENDENCIA</option>
            <option value="">JESUS MARIA</option>
            <option value="">LA MOLINA</option>
            <option value="">LA VICTORIA</option>
            <option value="">LIMA</option>
            <option value="">LINCE</option>
            <option value="">LOS OLIVOS</option>
            <option value="">LURIGANCHO</option>
            <option value="">LURIN</option>
            <option value="">MAGDALENA DEL MAR</option>
            <option value="">MIRAFLORES</option>
            <option value="">PACHACAMAC</option>
            <option value="">PUCUSANA</option>
            <option value="">PUEBLO LIBRE</option>
            <option value="">PUENTE PIEDRA</option>
            <option value="">PUNTA HERMOSA</option>
            <option value="">PUNTA NEGRA</option>
            <option value="">RIMAC</option>
            <option value="">SAN BARTOLO</option>
            <option value="">SAN BORJA</option>
            <option value="">SAN ISIDRO</option>
            <option value="">SAN JUAN DE LURIGANCHO</option>
            <option value="">SAN JUAN DE MIRAFLORES</option>
            <option value="">SAN LUIS</option>
            <option value="">SAN MARTIN DE PORRES</option>
            <option value="">SAN MIGUEL</option>
            <option value="">SANTA ANITA</option>
            <option value="">SANTA MARIA DEL MAR</option>
            <option value="">SANTA ROSA</option>
            <option value="">SANTIAGO DE SURCO</option>
            <option value="">SURQUILLO</option>
            <option value="">VILLA EL SALVADOR</option>
            <option value="">VILLA MARIA DEL TRIUNFO</option> </select> <br>
        
        <input type="submit" name="register">
    </form>
    <?php
    include("./config/registrar.php"); 
    ?>
</body>
</html>