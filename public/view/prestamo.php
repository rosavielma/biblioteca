<!DOCTYPE html>
<html> 
<head> 
    <meta charset='UTF-8'>
    <title>Registro Usuario Sistema Bibliotecario</title> 
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/form.css">

  <script src="../assets/js/jquery-1.11.3.min.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>

</head> 
<body>

  <div class="container-fluid">
          <header>
              <?php require_once ('../include/header.php');?>
          </header>
          <nav>
              <?php require_once ('../include/nav.php');?>
          </nav>

          <section>
        <article>
        <fieldset>
            <legend>Registro de Prestamo</legend>
             <form action="../../consultas/prestamo/insertar.php" method="POST" autocomplete="off">


            <div>
                    <label for="codi">Cedula Usuario</label>
               <input id="codi" class="form-control input-sm tu" type="text" name="usuario" value="" placeholder="Ingrese la Cedula" required>
  
                          <a id="mas" class="btn btn-default btn-sm" href="usuarios.php">
                    <span class="glyphicon glyphicon-plus"></span>
                </a> 
                    </div>

        <div>
                    <label for="codi">Código del Material</label>
               <input id="codi" class="form-control input-sm tu" type="text" name="cota" value="" placeholder="Ingrese la Cedula" required>
  
                          <a id="mas" class="btn btn-default btn-sm" href="texto.php" >
                    <span class="glyphicon glyphicon-plus"></span>
                </a> 
                    </div>

            <div>
                <label for="Descri">Fecha de Préstamo:</label>
                <input id="Descri" class="form-control input-sm" type="date" name="fecha_prestamo" value="" placeholder="Ingrese la Descipcion"> 
            </div> 

            <div>
                <label for="Descri">Fecha de Devolución:</label>
                <input id="Descri" class="form-control input-sm" type="date" name="fechaLimite" value="" placeholder="Ingrese la Descipcion"> 
            </div>         

           <div id="btn">
                <input class="btn btn-primary" type="submit" value="Registrar">
           </div>
        </form>
        </fieldset>
        </article>
  
      </section>
