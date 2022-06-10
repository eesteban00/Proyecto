<!DOCTYPE html>
<html>
  <head>
      <?php
      session_start();
      $_session["user"];
      echo $_session["user"];
      ?>
    <title>Educational registration form</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="styleuser.css">
  </head>
  <body>
    <div class="main-block">
      <div class="left-part">
        
        <h1>Registro tickets de soporte</h1>
        <p>Concordia S.A.</p>
        <div class="btn-group">
          <a class="btn-item" href="ingresar-usuario.php">Ingresar Ticket</a>
          <a class="btn-item" href="consultar-usuario.php">Consultar</a>
          <br><a class="btn-exit" href="loginuser.html">Salir</a>
        </div>
      </div>
      <form method="POST" action="midingreso.php">
        <div class="title">
          <i class="fas fa-pencil-alt"></i> 
          <h2>Formulario de registro de tickets</h2>
        </div>
        <div class="info">
          <input type="text" name="desc" id="desc" placeholder="descripcion">
          <select name="area" id="area">
            <option value="1" selected>(Area de soporte)</option>
            <option value="3">Telefonia</option>
            <option value="4">computo</option>
            <option value="5">navegacion</option>
            <option value="6">Permisos a sistemas</option>
            <option value="7">Correo electronico</option>
            <option value="8">Falla en portales</option>
            <option value="9">Instalacion de software</option>
            <option value="10">Licencias</option>
            <option value="11">Antivirus</option>
            <option value="1">Otras</option>
          </select>
        </div>
        
        <button type="submit">Ingresar</button>
      </form>
    </div>
  </body>
</html>