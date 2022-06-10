<?php
$servername ="localhost";
$database="id19027177_soporte";
$username ="id19027177_root";
$pass="Password123!";

$conn=mysqli_connect($servername, $username, $pass, $database);
session_start();
if (!$conn){
    die("Conexion fallida");
}

$result = mysqli_query($conn,"SELECT * FROM usuarios WHERE Usuario='" . $_POST["user"] . "' and Password = '". $_POST["password"]."'");
    $usuario = $_GET["user"];
    $_SESSION['user'] = $usuario;
    $count  = mysqli_num_rows($result);
    if($count==0) {
        echo"Usuario o contraseña incorrectos";
    } else {
        header("location:ticketsusuarios.html");
    }
mysqli_close($conn);

?>