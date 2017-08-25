<?php
$conn  = pg_connect("user=postgres password=postgres dbname=Leccion host=localhost");
$query = pg_query($conn, "SELECT imagen FROM perfil WHERE id = 1");
$row   = pg_fetch_row($query);
$image = pg_unescape_bytea($row[0]);

header("Content-type: image/jpeg");
echo $image;

pg_close($conn);
?>
