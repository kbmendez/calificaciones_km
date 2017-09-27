<?php
	include("conexion.php");
	require("menu.html");
?>


<table class="table table-bordered">
  <tr class="info">
    <td>
      <h3 class="text-info"><img src="imagenes/admin.jpg" class="img-circle" width="40" height="40"> 
       DAR DE ALTA UN NUEVO USUARIO:  </h3>
    </td>
  </tr>
</table>

<style type="text/css">
body
{
	font-size:0.9em;
}

.wraper{
	margin:0 auto;
	width:320px;
	height:auto;
	padding:10px;

	/*Borde redondeado*/
	border:1px solid #000;
	border-radius: .8em;
	-moz-border-radius: .8em;
	-webkit-border-radius: .8em;
	-o-border-radius: .8em;
	background-attachment: fixed;
}

.informacion
{
	text-align:center;
}


#formAjax label{
	display: block;
}


#formAjax .error{
	font-size:0.8em;
	color:#ff0000;
	display:inline;
	padding:0 0 0 3px;
}

#datosContacto{
    border-radius: 5px 5px 5px 5px;
}

#datosContacto input{
	width: 290px;
	height:25px;
	border: 1px solid rgba(0, 0, 0, 0.1);
    border-radius: 5px 5px 5px 5px;
    font-size: 0.8em;
}

.boton {
    background: none repeat scroll 0 0 #FAFAFA;
    border: 1px solid rgba(0, 0, 0, 0.1);
    border-radius: 5px 5px 5px 5px;
    color: #000000;
    font-size: 0.9em;
    font-weight: bold;
    padding: 5px;
}

</style>



<html lang="es">
<head>
	<meta charset="UTF-8">

	<script>
		
	function validarFormulario(){
 
		var txtnumerocontrol = document.getElementById('nc').value;
		var txtnombre = document.getElementById('nombre').value;
		var txtapellido = document.getElementById('apellido').value;
		var txtCorreo = document.getElementById('correo').value;
		var rbtEstado = document.getElementsByName('genero');
 
		var banderaRBTN = false;
 
		//Test campo obligatorio
		if(txtnumerocontrol == null || txtnumerocontrol.length == 0 || /^\s+$/.test(txtnumerocontrol)){
			alert('ERROR: El campo nombre no debe ir vacío o lleno de solamente espacios en blanco');
			return false;
		}
 		
 		if(txtnombre== null || txtnombre.length == 0 || /^\s+$/.test(txtnombre)){
			alert('ERROR: El campo nombre no debe ir vacío o lleno de solamente espacios en blanco');
			return false;
		}

		if(txtapellido== null || txtapellido.length == 0 || /^\s+$/.test(txtapellido)){
			alert('ERROR: El campo nombre no debe ir vacío o lleno de solamente espacios en blanco');
			return false;
		}
		
 
		//Test correo
		if(!(/\S+@\S+\.\S+/.test(txtCorreo))){
			alert('ERROR: Debe escribir un correo válido');
			return false;
		}
 
		//Test RadioButtons
		for(var i = 0; i < rbtEstado.length; i++){
			if(rbtEstado[i].checked){
				banderaRBTN = true;
				break;
			}
		}
		if(!banderaRBTN){
			alert('ERROR: Debe elegir un genero');
			return false;
		}
 
		return true;
	}
 
	</script>
</head>
<body>

	<div  class="wraper">
		<div class="informacion">
			<h3>USUARIO</h3>
		</div>
	<form method="POST" action="" onsubmit="return validarFormulario()">
		<label for="rg_nombre">Número de Control:</label>
				<span></span>
				<input type="text" id="nit" name="nit"/>
				<br>
	
		<label for="rg_nombre">Nombre(s):</label>
				<br>
				<span></span>
				<input type="text" id="nombre" name="nombre"/>
				<br>

		<label for="rg_nombre">Apellido(s):</label>
		<br>
				<span></span>
				<input type="text" id="apellido" name="apellido"/>
				<br>
 
		<label for="rg_nombre">Correo Electrónico:</label>
				<span></span>
				<input type="text" id="correo" name="correo"/>
				<br>
 
		<label for="radioButton">
			<span>Selecciona una opción:</span>
		</label><br>
		<input value="H" type="radio" id="genero" name="genero"> Hombre<br>
		<input value="M" type="radio" id="genero" name="genero"> Mujer<br>
 		<center>
		<input type="submit" value="Registrar Usuario">
 		</center>
	</form>
</body>
</html>


<?php
    	if ($_POST) {
    		$nc=$_POST['nit'];
    		$n=$_POST['nombre'];
    		$a=$_POST['apellido'];
    		$e=$_POST['correo'];
    		
    		mysql_query("insert into profesores(nit,nombre,apellido,correo) values('$nc','$n','$a','$e')")or die (mysql_error());

    		 
    	}
    ?>
 <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

  
  <meta charset="utf-8">
  
  

    <!-- jQuery -->
    <scipt src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
