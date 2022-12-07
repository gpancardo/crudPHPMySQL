<?php
$usuariodado=$_REQUEST['usu'];
$clavedado=$_REQUEST['pass'];
echo "hola " . $usuariodado  . " tu contraseña es " . $clavedado;
include "conexion.php";

$consulta="SELECT * FROM documentos.usuario WHERE nick='".$usuariodado."'";
$resultado=$con->query($consulta);
while ($row=$resultado->fetch_row()){
  $nombrec=$row[1]." ".$row[2]." ".$row[3];
  echo $nombrec;
  $nickbd=$row[4];
  $clavebd=$row[5];
  $tipobd=$row[6];
}
if($usuariodado==$nickbd && $tipobd==1 && $clavedado==$clavebd){
  $entrada=true;
  session_start();
  $_SESSION["administrador"]=true;
  $_SESSION["nombreuser"]=$nombrec;
  header("Location:http://localhost/documentos/administrador/agregar_usuario.php");
}
if($usuariodado==$nickbd && $tipobd==2 && $clavedado==$clavebd){
  $entrada=true;
  session_start();
  $_SESSION["usuario"]=true;
  $_SESSION["nombreuser"]=$nombrec;
  header("Location:http://localhost/documentos/usuario/mis_asignaciones.php");
}
 ?>
