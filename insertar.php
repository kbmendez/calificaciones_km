<?php
	include("conexion.php");
?>
<meta charset="utf-8">
<form action="" method="post">
	Cedula: <input name="ce"><br >
	Nombre: <input name="nom"><br/>
	Edad: <input name="edad"><br/>
	Genero: <br/>
	Hombre<input checked value="m" type="radio" name="genero">
	Mujer<input value="f" type="radio" name="genero">
	<input type="submit">
</form>