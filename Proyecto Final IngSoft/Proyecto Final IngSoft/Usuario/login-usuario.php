<?php
$servername ="localhost";
$database="id17495444_proyecto";
$username ="id17495444_esteban";
$pass="N7hD{qUg(^Y/3P)g";

$conn=mysqli_connect($servername, $username, $pass, $database);

if (!$conn){
    die("Conexion fallida");
}

$result = mysqli_query($conn,"SELECT * FROM usuario WHERE usuario='" . $_POST["user"] . "' and contraseña = '". $_POST["password"]."'");
    $count  = mysqli_num_rows($result);
    if($count==0) {
        echo"Usuario o contraseña incorrectos";
    } else {
        header("location:menu.html");
    }
mysqli_close($conn);

?>