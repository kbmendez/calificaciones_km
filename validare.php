<?php
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];

//Conectarnos  a la base de datos
$conexion=mysqli_connect("localhost", "root", "", "logine");
$consulta="SELECT * FROM usuarios WHERE usuario='$usuario' and clave='$clave'";
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if($filas>0){
	header("location:bienvenido.html");
}
else{
	echo "Error en la autenticacion";
}
mysqli_free_result($resultado);
mysqli_close($conexion);
