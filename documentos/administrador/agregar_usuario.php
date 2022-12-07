<?php
session_start();
if(@$_SESSION["administrador"]==true){
  include 'cabecera.php';
  echo"Hola, administrador ". @$_SESSION["nombreuser"];
  ?>
  <div id="titulo">Agregar Usuario</div>
  <form class="" action="agregar_usuariobd.php" method="get">
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
<input type="submit" name="" value="Registro Usuario">
  </form>
  <?php
}
session_destroy();
 ?>
