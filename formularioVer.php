<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title> Perfil </title>
</head>
<body>
<?php

 if (isset($_SESSION['MiSesion'])){
  include_once("UsuariosCollector.php");

$id =1;

$UsuariosCollectorObj = new UsuariosCollector();
?>
<h2>Perfil</h2>
<?php
foreach ($UsuariosCollectorObj->showPerfil() as $c){ 
  echo "<div>";
  echo $c->getIdPerfil() . "  && " .$c->getNombre();                                     
  echo " <a href='formularioEditar.php?id=". $c->getIdPerfil() . "'>editar</a> " ;
  echo " <a href='formularioEliminar.php?id=". $c->getIdPerfil(). "'>eliminar</a>";
  echo "</div>"; 
}
 }
else{
?>

<form action="formularioEditar.php" method="post">
  <p> Id: <input type="text" name="idperfil" value="" readonly /> </p>
  <img src="display.php"> 
  <p> Nombre: <input type="text" name="nombre" value="" autofocus required/> </p>
  <p> Tipo: <input type="text" name="tipo" value="" autofocus required/> </p>
  <p> Fecha Nacimiento: <input type="text" name="fecha" value="" autofocus required/> </p>
  
  <a href="index.php">Regresar</a>
</form>
 <?php } ?>
</body>
</html>
