<?php

session_start();
extract($_POST);
if (isset($_POST["MM_login"]))
{
  require_once'../../consultas/conexion.php';
  $sql = "SELECT * FROM admin where usuario = '$usuario'";
  $res = mysqli_query($conexion, $sql);
  $row = mysqli_fetch_assoc($res);

  if ($password == "" || $usuario == "") {?>
    <script>
    alert("Campos Vacíos");
    </script>
  <?php }
  else if($usuario != $row['usuario']){ ?>
    <script>
    alert("usuario incorrecto");
    </script>
  <?php }
  else if($password != $row['password']){ ?>
    <script>
    alert("password incorrecto");
    </script>
  <?php }
  else{
    $_SESSION['s_usuario'] = " $usuario";
    header("location: ../../index.php"); 
  }
}
?>

<!DOCTYPE html>
<html> 
<head> 
  <meta charset='UTF-8'>
  <title>login del sistema Bibliotecario</title> 
  <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
</head> 
<body background="../assets/imagen/fondo.jpeg"  >

    <div class="container-fluid">
      <header>
        <?php require_once ('../include/header.php');?>
      </header>

        <section>
          <article>
             <hgroup>
         <h1>Bienvenidos </h1>   
         <h3>Biblioteca "Edelmira Quintero de Lobo"</h3>
          <h3>Escuela Basica "Campo Elias"</h3>
          </hgroup>
                <fieldset>
                  <legend></legend>
                    <form action="" method="POST" autocomplete="off">
                  <div>
                  <label for="usuario">Usuario:</label>
                  <input id="usuario" class="form-control" type="text" name="usuario" value="">
                    </div>
                     <div>
                  <label for="password">Contraseña:</label>
                  <input id="password" class="form-control" type="password" name="password" value="">
                            <input id="" type="hidden" name="MM_login" value="true">
                        </div>
                        
                        <div>
                            <input class="btn btn-primary" type="submit" value="Ingresar">

                        </div>
                    </form>
                </fieldset>
            </article>
        </section>
    </div>
</body> 
</html>