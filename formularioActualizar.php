<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title> Actualizar </title>
</head>
<body>

<?php
$nombre= $_POST["nombre"];
$iddemo= $_POST["iddemo"];

echo "Edicion en proceso... </br>";
include_once("UsuariosCollector.php");
$DemoCollectorObj= new UsuariosCollector();
$DemoCollectorObj->updateDemo($iddemo,$nombre);
echo "id: " .$iddemo. " actualizado a: " .$nombre. " </br>";
?>
<a href="index.php"> Volver </a>
</body>
</html>
