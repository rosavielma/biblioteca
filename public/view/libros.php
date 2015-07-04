<?php   
    session_start();
    if (!isset($_SESSION['s_usuario'])) { header("location: login.php"); }
?>

<!DOCTYPE html>
<html> 
<head> 
  <meta charset='UTF-8'>
  <title>Prueba de Bootstrap</title> 
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" type="text/css" href="css/form.css">
</head> 
<body background="imagen/fondo.jpeg">

      <div class="container-fluid">
      <header>
        <?php require_once ('include/header.php');?>
      </header>
      <nav>
        <?php require_once ('include/nav.php');?>
      </nav>
      <section>
        <article>
        <fieldset>
            <legend>Registro de Libros</legend>
        <form action="menu.php" method="" >
            <div>
                <label for="tip_lib">Tipo de Libro:</label>
                <select id="tip_lib"> 
                    <option value="" >Seleccione</option>
                    <option>Referencia</option>
                    <option>Complementarios</option>
                    <option>Recreativos</option>
                    <option>Revistas</option>
                    <option>Periodicos</option>
                    <option>Docentes</option>
                </select>
           </div>

            <div>
                <label for="cota">Cota:</label>
                <input id="cota"  type="text" name="" value="" placeholder="Ingrese la Cota" required>
            </div>
            <div>
                <label for="autor">Autor:</label>
                <input id="autor"  type="text" name="" value="" placeholder="Ingrese el Autor"> 
            </div>

          <div class="titulo">
                <label for="titulo">Titulo:</label>
                <input id="titulo"  type="text" name="" value=""placeholder="Ingrese el Titulo"> 
            </div>

            <div>
                <label for="Editorial">Editorial :</label>
                <input id="Editorial"  type="text" name="" value="" placeholder="Ingrese el Editorial"> 
            </div>

           <div id="btn">
                <input class="btn btn-primary" type="submit" value="Registrar">
           </div>
        </form>
        </fieldset>
        </article>
  
      </section>
