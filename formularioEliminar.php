<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title> Eliminar </title>
</head>
<body>

<?php
$id=$_GET["id"];

echo "Borrando... </br>";
include_once("UsuariosCollector.php");
$DemoCollectorObj= new UsuariosCollector();
$DemoCollectorObj->deleteDemo($id);
echo "id: " .$id. " eliminado";
?>
<br>
<a href="index.php"> Volver </a>
</body>
</html>
