<?php   
    session_start();
    if (!isset($_SESSION['s_usuario'])) { header("location: public/view/login.php"); }
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
</head> 
<body  background="../assets/imagen/fondo.jpeg">
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
            <legend>Registro de Usuario</legend>
        <form action="menu.php" method="" >

       <div class="grado">
             <label for="tu">Tipo de Usuario</label>
               <select id="tu" class="form-control"> 
                <option value="" >Seleccione</option>
                <option>Estudiante</option>
                <option>Obrero</option>
                <option>Administrativo</option>
                <option>Docente</option>
              </select>
           </div>
       <div class="grado">
                <label for="ci">Cedula</label>
                <input id="ci" class="form-control" type="text" name="" value="" placeholder="Ingrese Cedula" required >
            </div>
       <div class="grado">
                <label for="nombre">Nombre</label>
                <input id="nombre" class="form-control" type="text" name="" value="" placeholder="Ingrese Nombre"> 
            </div>
       <div class="grado">
                <label for="apellido">Apellido</label>
                <input id="apellido" class="form-control" type="text" name="" value="" placeholder="Ingrese su Apellido"> 
            </div>

           <div class="grado">
             <label for="Grado">Grado</label>
               <select id="Grado" class="form-control"> 

                
                <option value="" >Seleccione</option>
                <option>Primero</option>
                <option>Segundo</option>
                <option>Tercero</option>
                <option>Cuarto</option>
                <option>Quinto</option>
                <option>Sexto</option>
              </select>
           </div>
           
       <div class="grado">
             <label for="Sección">Sección</label>
               <select id="Sección" class="form-control"> 
                <option value="" >Seleccione</option>
                <option>A</option>
                <option>B</option>
                <option>C</option>
                <option>D</option>
                <option>E</option>
                <option>F</option>
              </select>
           </div>
           <div id="btn">
                <input class="btn btn-primary" type="submit" value="Registrar">
           </div>
        </form>
        </fieldset>
        </article>
  
      </section>
