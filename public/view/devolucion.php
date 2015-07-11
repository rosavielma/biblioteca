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
    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.min.css">   

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
                    <label for="codi">Cedula Usuario</label>
               <input id="codi" class="form-control input-sm tu" type="text" name="id" value=""
                placeholder="Ingrese la Cedula" required autocomplete="off">
  
                          <a id="mas" class="btn btn-default btn-sm" href="#">
                    <span class="icon-facebook"></span>
                </a> 
                    </div>

           <div id="btn">
                <input class="btn btn-primary" type="submit" value="Buscar">
           </div>
        </form>
        </fieldset>
        </article>
  
      </section>

