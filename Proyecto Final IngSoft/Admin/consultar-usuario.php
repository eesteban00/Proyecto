<?php
$servername ="localhost";
$database="id19027177_soporte";
$username ="id19027177_root";
$pass="Password123!";
session_start();
$conn=mysqli_connect($servername, $username, $pass, $database);

if (!$conn){
    die("Conexion fallida");
}

$tickets = "SELECT t.ID, t.Descripcion, t.fecha_solicitud, e.estado_desc, a.area FROM Tickets as t INNER JOIN Estados as e ON t.estado = e.id INNER JOIN areas as a ON t.area=a.id";
$restickets = $conn->query($tickets);

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Educational registration form</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="styleuser.css">
  </head>
  <body>
    <div class="main-block">
      <div class="left-part">
        
        <h1>consulta de tickets de soporte</h1>
        <p>Concordia S.A.</p>
        <div class="btn-group">
          <a class="btn-item" href="ingresar-usuario.php">Ingresar Ticket</a>
          <a class="btn-item" href="consultar-usuario.php">Consultar</a>
          <br><a class="btn-exit" href="loginuser.html">Salir</a>
        </div>
      </div>
      <form action="/">
        <div class="title">
      
          <h2>Consulta</h2>
        </div>
        <div class="info">
        <table class="table">
                    <table border>
                                    <tr>
                                    <th colspan=2>ID</th> <th colspan=2>DESCRIPCION</th> <th colspan=2>FECHA</th> <th colspan=2>ESTADO</th>
                                    <th colspan=2>AREA</th>
                                    </tr>
                                    <?php
                                    while($registrotickets = $restickets -> fetch_array(MYSQLI_BOTH))
                                    {
                                    echo    '<tr>
                                    <td colspan=2>'.$registrotickets['ID'].'</td>
                                    <td colspan=2>'.$registrotickets['Descripcion'].'</td>   <td colspan=2>'.$registrotickets['fecha_solicitud'].'</td>
                                    <td colspan=2>'.$registrotickets['estado_desc'].'</td>  <td colspan=2>'.$registrotickets['area'].'</td>
                                    
                                    </tr>';
                                    }
                                    ?>
                    </table>
        </div>
      </form>
    </div>
  </body>
</html>