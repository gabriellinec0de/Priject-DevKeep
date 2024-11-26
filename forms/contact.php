<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'contact@example.com';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['email'];
  $contact->from_email = $_POST['email'];
  $contact->subject ="New Subscription: " . $_POST['email'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

  $contact->add_message( $_POST['email'], 'Email');

  echo $contact->send();

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
