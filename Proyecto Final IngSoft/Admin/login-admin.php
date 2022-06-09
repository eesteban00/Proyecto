<?php
$servername ="localhost";
$database="id19027177_soporte";
$username ="id19027177_root";
$pass="Password123!";

$conn=mysqli_connect($servername, $username, $pass, $database);

if (!$conn){
    die("Conexion fallida");
}

$result = mysqli_query($conn,"SELECT * FROM usuarioadmin WHERE usuario='" . $_POST["user"] . "' and password = '". $_POST["password"]."'");
    $usuario = $_GET["user"];
    $count  = mysqli_num_rows($result);
    if($count==0) {
        echo"Usuario o contraseña incorrectos";
    } else {
        header("location:menu.html");
    }
mysqli_close($conn);

?>