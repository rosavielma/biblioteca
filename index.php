<?php   
    session_start();
    if (!isset($_SESSION['s_usuario'])) { header("location: public/view/login.php"); }
?>

<!DOCTYPE html>
<html> 
<head> 
	<meta charset="UTF-8">
	<title>Menu del Sistema</title> 
	<link rel="stylesheet" type="text/css" href="public/assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="public/assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="public/assets/css/main.css">
</head> 
<body> 
	<div class="container-fluid">
    		<header>
			<img id="logo1" src="public/assets/imagen/membrete.jpg">
			<img id="logo2" src="public/assets/imagen/logo.png">
    		</header>

		<nav>
			<?php require_once 'public/include/navIndex.php'; ?>
	    	</nav>

		<section>
			<article class="mision">
	        		<h3>MISION</h3>
	        			<p>
	        				La Escuela Básica “Campo Elías” permite la participación de todos los entes 
	         				de la colectividad ejidense Promueve la preservación de los espacios ecológicos
	         			</p>
	        </article>
	    	<article class="vision">
			     	<h3>VISION</h3>
	        			<p>
	        				La Escuela Básica “Campo Elías” es un ente formador y orientador del proceso
	        				socializador del Sistema Educativo Bolivariano impartiendo conocimientos hacia
	         				el aprendizaje humanístico, significativo
	         			</p>
	        </article>
	    </section>

		<footer>
	        		<?php require_once 'public/include/footer.php'; ?>
	    </footer>
    	</div>
</body> 
</html>