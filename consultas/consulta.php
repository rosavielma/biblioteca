<!DOCTYPE html>
<html> 
<head> 
	<meta charset='UTF-8'>
	<title>Consulta Usuario</title> 
</head> 

<body>

<?php
require_once ('../../consultas/conexion.php'); 
$sql = "SELECT * FROM usuario order by cedula";
$res = mysqli_query($conexion, $sql);

echo "<table  border=2  bordercolor=blue  cellspacing=3  cellpadding=7> 

    <caption STYLE='color:blue; font-size:22px; font-weight:bold'>USUARIOS ORDENADOS POR CEDULA</caption>
    <tr STYLE='color:blue;'><th>CEDULA<th>NOMBRE<th>APELLIDO<th>TIPO DE USUARIO</tr>";

while ($row = mysqli_fetch_array($res)) 

    echo "<tr valign=top>
        <td>$REGISTRO[cedula]<td>$REGISTRO[nombre]<td>$REGISTRO[apellido]<td>$REGISTRO[tipo]";
	echo "</td></tr>"; 
  
echo "</table>";

?>
<CENTER><BR><input  TYPE=button   VALUE='Volver al Men&uacute;' OnClick=location='menu.php'></CENTER>
</body></html>