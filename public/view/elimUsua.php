<?php  
$clave = $_GET['cota'];

echo "<html><body>
      <div align=center STYLE='color:brown;  font-size:27px; font-weight:bold;'>";
require_once ('../../consultas/conexion.php');
$fallo=0;   //inicialmente no hay fallo de actualización
$cont=0;

$sql= "DELETE FROM texto WHERE cota='$clave' ";

$res = mysqli_query($conexion, $sql);

if ($fallo==0) 
{
  echo "<BR>1 registro eliminado en la tabla estudiantes.<BR>";

else if ($fallo==1) 
     { 
       echo "<BR>No se pudo eliminar el registro en la tabla estudiantes.<BR>(", mysqli_error($conexion), ")<BR>";
     }

mysqli_close($conexion);
echo "<BR><INPUT  TYPE=button  VALUE='Eliminar Otro' OnClick=location='seleccionar_para_eliminar.php'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <INPUT  TYPE=button  VALUE='Volver al Men&uacute;' OnClick=location='menu.php'>
</div></body></html>";

?>
