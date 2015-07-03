<?php   
    session_start();
    if (!isset($_SESSION['s_usuario'])) { header("location: login.php"); }
?>

<!DOCTYPE html>
<html> 
<head> 
 <meta charset="UTF-8">
  <title>Prueba de Bootstrap</title> 
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head> 
<body  background="imagen/fondo.jpeg"> 
    <div class="container-fluid">
    <header>
        <?php require_once ('include/header.php');?>
    </header>
    <nav>
        <?php require_once ('include/nav.php');?>
    </nav>
    
        <section>
    <div class="mision">
        <h4> <strong> MISION: </strong> 
        <br><br> La Escuela Básica “Campo Elías” permite la participación de todos los entes 
         de la colectividad ejidense Promueve la preservación de los espacios ecológicos 
 </h4>
        </div>
<br><br>
    <div class="vision">
        <h4> <strong> VISION: </strong> 
        <br><br> La Escuela Básica “Campo Elías” es un ente formador y orientador del proceso
        socializador del Sistema Educativo Bolivariano impartiendo conocimientos hacia
         el aprendizaje humanístico, significativo </h4>
        </div>
        </section>
        <footer></footer>
    </div>
</body> 
</html>
