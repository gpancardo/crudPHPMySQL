<?php
session_start();
if(@$_SESSION["administrador"]==true){
?>


<?php include 'cabezera.php'; ?>
<div id="nombreusuario">
	Hola <?php echo $_SESSION["nombreuser"];?>
</div>


<?php

$idusu = $_GET['id_usuario'];


include "../conexion/conexionbd.php";

	$consulta = "SELECT * FROM archivo.usuario WHERE id_usuario='".$idusu."'";
	//echo $consulta;
	$resultado = $con->query($consulta);
	$obj = $result->fetch_object();
	//echo $obj->nombre;
?>

<div id="titulo">Actualizar Usuario</div>

<form class="" action="actualizar_usuariobd.php" method="get">
<label for="nombre">Nombre</label>
<input type="text" name="nombre" value="">
<label for="Primer">Primer Apellido</label>
<input type="text" name="segundo_apellido" value="">
<label for="Segundo">Segundo Apellido</label>
<input type="text" name="primer_apellido" value="">
<label for="Contraseña">Contraseña</label>
<input type="text" name="clave" value="">
<label for="Nickname">Nickname</label>
<input type="text" name="nick" value="">
<label for="tipo"></label>
<select class="" name="tipo">
<option value="1">Administrador</option>
<option value="2" selected>Usuario</option>
</select>
<input type="submit" name="" value="Actualizar">

    <?php
    }
    //session_destroy();

    ?>
<?php include 'pie.php'; ?>
