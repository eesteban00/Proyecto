<?php
$servername ="localhost";
$database="id19027177_soporte";
$username ="id19027177_root";
$pass="Password123!";

$conn=mysqli_connect($servername, $username, $pass, $database);

mysqli_query($conn, "UPDATE Tickets SET ID = '$_POST[id]', Administrador = '$_POST[administrador]', estado = 2, fecha_solucion = now(), respuesta = '$_POST[respuesta]' WHERE id = '$_POST[id]'");
header("location:trespuesta.php");
?>