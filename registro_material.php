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
            <legend>Registro de Material</legend>
        <form action="menu.php" method="" >
            <div>
                <label for="codi">Codigo:</label>
                <input id="codi"  type="text" name="" value="" placeholder="Ingrese el Código" required>
            </div>
            <div>
                <label for="Descri">Descripcion:</label>
                <input id="Descri"  type="text" name="" value="" placeholder="Ingrese la Descipcion"> 
            </div>

           <div id="btn">
                <input class="btn btn-primary" type="submit" value="Registrar">
           </div>
        </form>
        </fieldset>
        </article>
  
      </section>
