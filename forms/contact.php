<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address

  include("conexion.php");

  if(isset($_POST['contact'])){

    if(

      strlen($_POST['name']) >= 1 &&
      strlen($_POST['correo']) >= 1 &&
      strlen($_POST['razon']) >=  1 &&
      strlen($_POST['descripcion']) >= 1 &&
    ){

      $name = trim($_POST['name']);
      $correo = trim($_POST['correo']);
      $razon = trim($_POST['razon']);
      $descripcion = trim($_POST['descripcion']);

      $consulta = "INSERT INTO peticiones(nombre, correo, razon, descripcion)
                  values ('name', 'correo', 'razon', 'descripcion', "")";
      
      $resultado = mysqli_query($conex, $consulta );
      if($resultado){
        ?>
        <h3>tu registro se ha completado</h3>
        <?php
      }else{
        ?>
        <h3> class="error">ocurrio un error </h3>
        <?php
      }
    }else{
      ?>
       <h3> class="error">ocurrio un error </h3>
      <?php
    }



  }
?>
