<?php
    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $basededatos= "proyectoweb2";

    $enlace = mysqli_connect ($servidor, $usuario, $clave, $basededatos);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
</head>
<body>
    <form action="/forms/contact.php" name="proyectoweb2" method ="POST">
     <input type="text" name = "nombre" placeholder= "nombre">
     <input type="email" name = "correo" placeholder= "correo">
     <input type="text" name = "razon" placeholder= "razon">
     <input type="text" name = "descripcion" placeholder= "descripcion">

     <input type="submit" name = "registro">
     <input type="reset">
     
    </form>
</body>
<?php

     if (isset ($_POST['registro'])){

        $nombre = $_POST ['nombre'];
        $correo = $_POST ['correo'];
        $razon = $_POST ['razon'];
        $descripcion = $_POST ['descripcion'];


        $insertar= "INSERT INTO datosc VALUES('','$nombre', '$correo' , '$razon' , '$descripcion')";

        $ejecutarinsertar = mysqli_query($enlace,$insertar);


     }
?>
</html>
