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
            <legend>Registro de Devolución</legend>
             <form action="../../consultas/devolucion/insertar.php" method="POST" >


            <div>
                <label for="codi">Cédula Usuario:</label>
                <input id="codi" class="form-control input-sm" type="text" name="id" value="" placeholder="Ingrese el Código" required>
            </div>
            <div>
                <label for="Descri">Código del Material:       </label>
                <input id="Descri" class="form-control input-sm" type="text" name="prestamo" value="" placeholder="Ingrese la Descipcion"> 
            </div>

             <div>
                <label for="Descri">Fecha de Entrega:</label>
                <input id="Descri" class="form-control input-sm" type="date" name="fechaEntrega" value="" placeholder="Ingrese la Descipcion"> 
            </div> 

           <div id="btn">
                <input class="btn btn-primary" type="submit" value="Registrar">
           </div>
        </form>
        </fieldset>
        </article>
  
      </section>

