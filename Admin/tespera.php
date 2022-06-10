<?php
$servername ="localhost";
$database="id19027177_soporte";
$username ="id19027177_root";
$pass="Password123!";

$conn=mysqli_connect($servername, $username, $pass, $database);
if($conn -> connect_errno)
{
    die("Fallo la conexion: (".$onn -> mysqli_connect_errno().")".$conn -> mysqli_connect_error());
}
function write_to_console($data) {

    $console = 'console.log(' . json_encode($data) . ');';
    $console = sprintf('<script>%s</script>', $console);
    echo $console;
}
$tickets = "SELECT t.id id, t.Descripcion descripcion, t.Administrador administrador, t.Usuario usuario, t.Fecha_solicitud fecha_solicitud, a.area area from Tickets t inner join areas a on a.id = t.area where t.estado = 3";
$restickets = $conn->query($tickets);
write_to_console($restickets);
?>

<html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cinco Cero Dos</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>
<body>
    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="menu.html"><i class="pe-7s-menu"></i>Dashboard </a>
                    </li>
                    <li class="menu-title">Gestiones</li><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tag"></i>Tickets</a>
                        <ul class="sub-menu children dropdown-menu"><li><i class="fa fa fa-tag"></i><a href="tactivos.php">Tickets Activos</a></li>
                            <li><i class="fa fa fa-tag"></i><a href="treporte.php">Reporte de Tickets</a></li>
                            <li><i class="fa fa fa-tag"></i><a href="busqueda.php">Busqueda de Tickets</a></li>
                            <li><i class="fa fa fa-tag"></i><a href="tespera.php">Tickets en Espera</a></li>
                            <li><i class="fa fa fa-tag"></i><a href="trespuesta.php">Respuesta de tickets</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-filter"></i>Busqueda</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-filter"></i><a href="busquedaUsuario.php">Usuario solicitante</a></li>
                        </ul>
                    </li>
                    <li class="menu-title">Extras</li><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-info"></i>Asistencia</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-info"></i><a href="ayuda.html">Ayuda</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
                    </div>

                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="perfil.php"><i class="fa fa- user"></i>Mi Perfil</a>

                            <a class="nav-link" href="login.html"><i class="fa fa-power -off"></i>Cerrar Sesion</a>
                        </div>
                    </div>

                </div>
            </div>
        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Reporte de Tickets</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="animated fadeIn">

                <div class="badges">
                    <div class="row">
                        <div class="col-lg-6">

                            <div class="card">
                                <div class="card-body">

                                    <h1> Listado de Tickets en espera</h1>
                                    <section>
                    <table class="table">
                    <table border>
                                    <tr>
                                    <th colspan=2>ID</th> <th colspan=2>DESCRIPCION</th> <th colspan=2>ADMINISTRADOR</th> <th colspan=2>USUARIO</th>
                                    <th colspan=2>FECHA DE SOLICITUD</th> <th colspan=2>AREA</th>
                                    </tr>
                                    <?php
                                    while($registrotickets = $restickets -> fetch_array(MYSQLI_BOTH))
                                    {
                                    echo    '<tr>
                                    <td colspan=2>'.$registrotickets['id'].'</td>   <td colspan=2>'.$registrotickets['descripcion'].'</td>
                                    <td colspan=2>'.$registrotickets['administrador'].'</td>  <td colspan=2>'.$registrotickets['usuario'].'</td>
                                    <td colspan=2>'.$registrotickets['fecha_solicitud'].'</td> <td colspan=2>'.$registrotickets['area'].'</td>
                                    </tr>';
                                    }
                                    ?>
                    </table>
                                </div>
                            </div><!-- /# card -->
                        </div><!--  /.col-lg-6 -->
                    </div> <!-- .badges -->

                </div><!-- .row -->
            </div><!-- .animated -->
        </div><!-- .content -->

        <div class="clearfix"></div>

    </div><!-- /#right-panel -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>


</body>
</html>
