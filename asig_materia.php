<?php
include("menu.html");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Blanco</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/docs.css" rel="stylesheet">
    <link href="js/google-code-prettify/prettify.css" rel="stylesheet">
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>
    <script src="js/bootstrap-affix.js"></script>
    <script src="js/holder/holder.js"></script>
    <script src="js/google-code-prettify/prettify.js"></script>
    <script src="js/application.js"></script>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

<br>
<br>
<br>
<font color="purple"><h1 align="center"> Asignar Materia: </h1></font>
<body background="a.jpg">

<div class="col-md-10 mv">
<table class=table table-bordered table table-hover>

<?php
    $consulta=mysql_query("select * from alumnos")or die (mysql_error());
$consulta1=mysql_query("select * from alumnos")or die (mysql_error());
$registro1=mysql_fetch_array($consulta1);
echo "  
        <tr class=info>
            <th>Numero de Control</th>
            <th>Nombre Completo</th>
            <th>Correo Electrónico</th>
            <th>Genero</th>
            <th>Estado</th>
        </tr>";
do{
    
    $nc=$registro1['nit'];
    $id=$registro1['id'];
    $nom=$registro1['nombre'];
    $ape=$registro1['apellido'];
    $co=$registro1['correo'];
    $g=$registro1['ciudad'];
    echo "
            <tr>
            <td>$id | $nc</td>

            <td>$ape $nom</td>

            <td> $co</td>

            <td>".$registro1[4]."</td>
            
          

        ";
   
}while ($registro1=mysql_fetch_array($consulta1));      
?>
<td><?php  ?>           
 <a title="Asignar Materia" data-toggle="modal" href="asig_materia.php" class="btn btn-primary btn-lg active" role="button"><span class="glyphicon glyphicon-check"></span></a>
 </td>
</tr>
</tr>
</table>

<br>
<br>
<br>
<td align="center">
<?php

	include("conexion.php");
	$consulta1=mysql_query("select e.nombre, d.iddepto, p.nombreproyecto
                                FROM empleado e, departamento d, proyecto p
                                where e.iddepto = d.iddepto
                                and d.idproyecto = p.idproyecto")or die(mysql_error());
	$registro1=mysql_fetch_array($consulta1);
	echo "<center>";
	echo "<table border=1";
	echo "<bgcolor=pink>";
	echo "P R O Y E C T O";
	
	
	do{
		$p=$registro1['nombreproyecto'];
		echo "<tr>
				<td>$p</td>  
			      </tr>";

	}while($registro1=mysql_fetch_array($consulta1));
	echo "</table>";
	
	echo "</center>";
?>
</td>
<tr>
</table>
</div>
</center>


