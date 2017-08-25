<?php
$data = file_get_contents('.jpg');
$image = pg_escape_bytea($data);
$conn = pg_connect("user=DB password=admin dbname=DB host=localhost");

pg_query($conn, "UPDATE usuarios SET foto = '{$image}' WHERE id = 1");
pg_close($conn);
?>
