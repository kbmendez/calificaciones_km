<?php
    require("conexion.php");
    include("alumno.php");
    $con=mysql_query("select id FROM profesores");
    $reg=mysql_fetch_array($con);
?>
<script>
    function eliminar(){
    if (confirm("Seguro que Deseas Eliminar Proyecto")){
        miform.submit();
    }else{
        alert("Buena Eleccion u.U ");
    }}

</script>
<center>
<form method="post" name="miform">
Seleccione ID para dar de baja a Profesor:
    <select onchange="eliminar()" name="profesores">
    <option>Seleccione</option>
        <?php
            do{
                $nc=$reg['id'];
                
            ?>

            <option value="<?php echo $nc;  ?>"><?php
                echo $nc;  ?></option>
                <?php
                    }while ($reg=mysql_fetch_array($con));
                ?>
    </select>

</form>
</center>

<?php
    if(isset($_POST['profesores'])){
        $p=$_POST['profesores'];
        mysql_query("delete from profesores where id='$p' ")or die(mysql_error());
        echo "<script>alert('Dato Eliminado');
            location='alumno.php';</script>";
    }
?>
