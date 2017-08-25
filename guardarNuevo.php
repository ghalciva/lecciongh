<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title> Guardar </title>
</head>
<body>

<?php
$valor=$_POST["nombre"];
$valor2=$_POST["tipo"];
$valor3=$_POST["fecha"];
$valor4=$_POST["imagen"];
echo 'Hola ' . htmlspecialchars($valor) . '!';

include_once("UsuariosCollector.php");

$UsuariosCollectorObj = new UsuariosCollector();
$UsuariosCollectorObj->insertUsuarios($valor,$valor2,$valor3,$valor4);

echo "valor agregado! </br>";
?>
<a href="index.php">Regresar</a>

</body>
</html>
