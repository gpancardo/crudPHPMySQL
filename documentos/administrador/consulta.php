<?php
include "../conexion/conexion.php";
include "cabecera.php";
?>
<div id="titulo">
  Consultar usuarios
</div>
<?php
$consulta="SELECT * FROM documentos.usuario";
$resultado=$con->query($consulta);
  printf("<thead>
  </thead>");
while($obj=$resultado->fetch_object()){
  $tipoletra=0;
  if($obj->tipo==1){
    $tipoletra="administrador";
  }
  else{
    $tipoletra="usuario";
  }
  $obj->nombre;
  printf("<table border='2'>
  <tr>
    <td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td>
    <td>
    <form class='formtabla' action='editarusu.php' method='get'>
      <input type='hide' name='id_usuario' value='%s'>
      <button type='btntabla' name='editar'>Editar</button>
    </form>
    </td>
    <td>
    <form class='formtabla' action='borrarusu.php' method='get'>
      <input type='hide' name='id_usuario' value='%s'>
      <button type='btntabla' name='borrar'>Borrar</button>
    </form>
    </td>

  </tr>",$obj->nombre,$obj->primer_apellido,$obj->segundo_apellido,$obj->nick,$obj->clave,$tipoletra,$obj->id_usuario,$obj->id_usuario);
}
 ?>
