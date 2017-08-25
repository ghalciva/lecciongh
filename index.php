<?php
session_start();
?>

<!DOCTYPE html>
<html>
<body>

<?php

 if (isset($_SESSION['MiSesion'])){
  echo "<p> Hola usuario:(" . $_SESSION['MiSesion']. ") 
  [<a href='salir.php'>Salir</a>]";

include_once("UsuariosCollector.php");

$id =1;

$UsuariosCollectorObj = new UsuariosCollector();
?>
<br/>
<h2> Usuarios </h2>

<?php
foreach ($UsuariosCollectorObj->showDemos() as $c){ 
  echo "<div>";
  echo $c->getIdUsuario() . "  && " .$c->getNombre();                                     
  echo " <a href='formularioVer.php?id=". $c->getIdUsuario() . "'>ver</a> " ;
  echo "</div>"; 
}
echo "<a href='formularioNuevo.php'>nuevo</a>";
 }
else{
?>

<form action="login.php" method="post">
  Usuario: <input type="text" name="Usuario" value="">
  <br>
  Clave: <input type="text" name="Clave" value="">
  <br>
  <input type="submit" value="Enviar">
</form> 
<?php } ?>

</body>
</html>
