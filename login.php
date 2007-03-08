<!DOCTYPE html>
<html> 
<head> 
  <meta charset='UTF-8'>
  <title>login del sistema Bibliotecario</title> 
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head> 
<body background="imagen/fondo.jpeg"  >

    <div class="container-fluid">
      <header>
        <?php require_once ('include/header.php');?>
      </header>

        </footer>
        <section>
          <article>
             <hgroup>
         <h1>Bienvenidos </h1>   
         <h3>Biblioteca "Edelmira Quintero de Lobo"</h3>
          <h3>Escuela Basica "Campo Elias"</h3>
          </hgroup>
                <fieldset>
                  <legend></legend>
                    <form action="index.php" method="" >
                        <div>
                          <label for="usuario">Usuario:</label>
                            <input id="usuario" type="text" name="" value="">
                        </div>
                        <div>
                            <label for="password">Contraseña:</label>
                            <input id="password" type="text" name="" value="">
                        </div>
                        <div><br/>
                            <input class="btn btn-primary" type="submit" value="Ingresar">

                        </div>
                    </form>
                </fieldset>
            </article>
        </section>
        <footer>
    </div>
</body> 
</html>
