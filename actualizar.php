<?php
	include("conexion.php");
	$con=mysql_query("select * from profesores");
	$reg=mysql_fetch_array($con);
?>

<form action="" method="post">
	<select name="profesores">
	<?php
		do{
			$nc=$reg['nit'];
			$nom=$reg['nombre'];
	?>
		<option value="<?php echo $nit; ?>"><?php  echo $nc ?></option>
			<?php
				}while ($reg=mysql_fetch_array($con));
			?>
	</select>
	<input type="submit" name="actu" value="Actualizar"/>
</form>
<?php
	if (isset($_POST['actu'])){
		$p=$_POST['profesores'];
		$con1=mysql_query("select * from profesores where nit='$p'")or die(mysql_error());
		$reg1=mysql_fetch_array($con1);
		$n=$reg1['nit'];
		$no=$reg1['nombre'];
		$ap=$reg1['apellido'];
		$c=$reg1['correo'];
		$g=$reg1['genero'];
?>
<form method="post">
	Numero control: <input name="nit" value="<?php echo $n; ?>"/><br>
	Nombre: <input name="no" value="<?php echo $no; ?>"/><br>
	Apellido: <input name="ap" value="<?php echo $ap; ?>"/><br>
	Correo: <input name="c" value="<?php echo $c; ?>"/><br>
	Genero: <input name="g" value="<?php echo $g; ?>"/><br>
	<input type="hidden" name="id" value="<?php echo $p;?>"/>
	<input type="submit" name="actufinal/">
</form>

<?php
	}
?>

<?php
	if(isset($_POST['actufinal'])){
		$nit=$_POST['nit'];
		$id=$_POST['id'];
		$no=$_POST['no'];
		$ap=$_POST['ap'];
		$c=$_POST['c'];
		mysql_query("update profesores set nit='$nit',nombre=$no'' where id='$id'")or die(mysql_error());
		echo "<script>alert('date(actu)')location='actualizar.php'</script>";
	}
?>