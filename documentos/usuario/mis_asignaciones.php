<?php
session_start();
if(@$_SESSION["usuario"]==true){
    echo"Hola, usuario ". @$_SESSION["nombreuser"];
  ?>
Página usuarios
  <?php
}
session_destroy();
 ?>
