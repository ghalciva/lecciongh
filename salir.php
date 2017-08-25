<?php
session_start();
?>

<!DOCTYPE html>
<html>
<body>

<?php

 if (isset($_SESSION['MiSesion'])){
  session_destroy();
  echo "Se ha destruido la sesion exitosamente <br>";
  echo "<a href='index.php'>Volver</a>";
 }else{
   echo "ERROR... <br>";
   echo "<a href='index.php'>Volver</a>";
 }
?>

</body>
</html>
