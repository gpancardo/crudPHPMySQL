<?php
$nombreDado=$_REQUEST["nombre"];
$primerDado=$_REQUEST["segundo_apellido"];
$segundoDado=$_REQUEST["primer_apellido"];
$nickDado=$_REQUEST["nick"];
$claveDado=$_REQUEST["clave"];
$tipoDado=$_REQUEST["tipo"];

$consulta="
INSERT INTO documentos.usuario(
  nombre,
  primer_apellido,
  segundo_apellido,
  nick,
  clave,
  tipo)
VALUES(
  '".$nombreDado."',
  '".$primerDado."',
  '".$segundoDado."',
  '".$nickDado."',
  '".$claveDado."',
  ".$tipoDado."
)";
include "../conexion/conexion.php";
if (mysqli_query($con, $consulta)){
    echo "<script>alert('Usuario registrado');</script>
    <script>window.location.replace('http://localhost/documentos/administrador/consulta.php');</script>
";
}
else{
  echo "<script>alert('Usuario no registrado');</script>";
}
?>
