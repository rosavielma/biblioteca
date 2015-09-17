<!DOCTYPE html>
<html> 
<head> 
<meta charset='UTF-8'>
<script lenguage="javascript">

function Confirmar(destino, c) 
{
var respuesta=confirm("¿Realmente desea eliminar el estudiante con cédula: "+c+" ?");
if (respuesta==true) window.location=destino;
else return false;
}
</script></head>

<body>
<DIV ALIGN=center STYLE='font-size:22px; font-weight:bold'>SISTEMA AUTOMATIZADO<BR><BR>
<?php
require_once ('../../consultas/conexion.php');
 
$sql= "SELECT * FROM  texto order by cota";

$res = mysqli_query($conexion, $sql);

echo "<table  border=2  bordercolor=blue  cellspacing=5> 
      <caption STYLE='color:blue;'>SELECCIONE UN ESTUDIANTE</caption>
      <tr><th>APELLIDO Y NOMBRE<th>CEDULA<th>SEXO<th>FECHA DE NACIMIENTO<th>DEPORTES QUE PRACTICA</tr>";

     echo "<tr>
             <td>$row[apellido_nombre]<td>$row[cedula]<td>$row[sexo]</td>
             <td>";
        
             echo "</td>
             <td><BUTTON  ONCLICK=Confirmar('eliminar_estudiante.php?cedula=$REGISTRO[cedula]','$REGISTRO[cedula]')>   
                     <IMG  SRC='boton_eliminar.png' width=30  height=25'>
                 </BUTTON></td>
           </tr>"; 

   }
echo "</table>";
?>
<BR><INPUT   TYPE=button   VALUE='Volver al Men&uacute;' OnClick=location='menu.php'>
</DIV></body></html>