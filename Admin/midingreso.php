<?php
$servername ="localhost";
$database="id19027177_soporte";
$username ="id19027177_root";
$pass="Password123!";
$conn=mysqli_connect($servername, $username, $pass, $database);

function write_to_console($data) {

    $console = 'console.log(' . json_encode($data) . ');';
    $console = sprintf('<script>%s</script>', $console);
    echo $console;
}


if (!$conn){
    die("Conexion fallida");
}
$sim = mysqli_query ($conn, "INSERT INTO `Tickets` (`ID`, `Descripcion`, `Administrador`, `Usuario`, `Fecha_solicitud`, `estado`, `area`) VALUES (NULL, '".$_POST['desc'] ."','root', 'prueba', now(), '3', '".$_POST['area'] ."')");
write_to_console($sim);
write_to_console($_POST['area']);

    header("location:ingresarfuser.html");

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Tickets</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="styleuser.css">
  </head>
  <body>
    <div class="main-block">
      <div class="left-part">
        
        <h1>Ticket registrado</h1>
        <p>Concordia S.A.</p>
        <div class="btn-group">
          <a class="btn-item" href="ingresar-usuario.php">Ingresar Ticket</a>
          <a class="btn-item" href="consultar-usuario.php">Consultar</a>
          <br><a class="btn-exit" href="loginuser.html">Salir</a>
        </div>
      </div>
    </div>
  </body>
</html>
