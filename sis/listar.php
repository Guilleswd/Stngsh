<?php 
	$db=mysql_connect("localhost","root","");
	mysql_select_db("stngsh",$db);
	$sql="select *from clientess";
	$result = mysql_query($sql);
?>
<table>
<tr>
		<td>Nombre</td>
		<td>Apellido</td>					      
		<td>User</td>					      
		<td>Correo</td>	
		<td>Contraseña</td>
		<td>Repita Contraseña</td>	
	</tr>
<?php
while ($row= mysql_fetch_row($result)) {
	?>
		
	<tr>
		<td><?= $row[0] ?></td>
		<td><?= $row[1] ?></td>					      
		<td><?= $row[2] ?></td>					      
		<td><?= $row[3] ?></td>	
		<td><?= $row[4] ?></td>	
		<td><?= $row[5] ?></td>	
	</tr>

<?php 
 } 
?>
</table>


<h1> guardado correctamente</h1>

<a href="index.html"> REGRESAR</a>
