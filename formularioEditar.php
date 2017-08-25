<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title> Editar </title>
</head>
<body>

<?php

$id= $_GET["id"];
echo "valor de id es ". $id;
include_once("UsuariosCollector.php");
include_once("Usuarios.php");
$UsuariosCollectorObj = new UsuariosCollector();
$ObjDemo = $UsuariosCollectorObj->showPerfil($id);
print_r($ObjDemo);
?>

<h2>Editar</h2>
<form action="formularioActualizar.php" method="post">
  <p> Id: <input type="text" name="iddemo" value="<?php echo $ObjDemo->getIdPerfil(); ?>" readonly /> </p>
<img src="display.php">
  <p> Nombre: <input type="text" name="nombre" value="<?php echo $ObjDemo->getNombre(); ?>" autofocus required/> </p>
  <p> Tipo: <input type="text" name="tipo" value="" autofocus required/> </p>
  <p> Fecha Nacimiento: <input type="text" name="fecha" value="" autofocus required/> </p>
  <input type="submit" value="Guardar"/>
  <a href="index.php">Cancelar</a>
</form>
 
</body>
</html>
