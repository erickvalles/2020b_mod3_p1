<?php

@$edad = $_GET["edad"];
$nombre = base64_decode($_GET["nombre"]);
$precio = $_GET["precio"];

echo $nombre." pagará $".number_format($precio,2);

?>