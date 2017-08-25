<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title> Ingreso </title>
</head>
<body>

<h2>Nuevo Registro</h2>
<form action="guardarNuevo.php" method="post">
  <p> Id: <input type="text" name="idperfil" value="" readonly /> </p>
  <img name="imagen" src="display.php"> 
  <p> Nombre: <input type="text" name="nombre" value="" autofocus required/> </p>
  <p> Tipo: <input type="text" name="tipo" value="" autofocus required/> </p>
  <p> Fecha Nacimiento: <input type="text" name="fecha" value="" autofocus required/> </p>
  <input type="submit" value="Guardar"> </input>
  <a href="formularioEliminar.php">Eliminar</a>
</form>
</body>
</html>
