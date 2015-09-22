<?php   
    session_start();
    if (!isset($_SESSION['s_usuario'])) { header("location: ../view/login.php"); }
?>
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
             <form action="devo.php" method="POST" autocomplete="off">
            <div>
                    <label for="codi">Cedula Usuario</label>
               <input id="codi" class="form-control input-sm tu" type="number" name="cedula" value="24391784"
                placeholder="Ingrese la Cedula" required  min="0">
  
                    </div>
                    <div>
  <input class="btn btn-primary btn-sm" type="submit" value="Buscar"></div>
              </form>
           
        </form>
        </fieldset>
        </article>
  
      </section>

 $sql = "SELECT * FROM usuario order by cedula";