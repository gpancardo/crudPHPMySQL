<?php
$idusurecibido=$_GET['id_usuario'];
echo "El usuario con el ID ".$idusurecibido." ha sido borrado.";

include "../conexion/conexion.php";

$consulta="DELETE FROM documentos.usuario WHERE id_usuario='".$idusurecibido."'";
mysqli_query($con,$consulta);
 ?>
