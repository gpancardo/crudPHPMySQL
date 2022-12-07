<?php
$con=new mysqli("localhost","root","","documentos");
if($con->connect_errno){
  printf("No se puede conectar por %s",$con->connect_errno);
}
 ?>
