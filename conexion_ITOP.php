<?php
$enlace =  mysql_connect('10.213.8.75:1521', 'root', 'itop');
if (!$enlace) {
    die('No pudo conectarse: ' . mysql_error());
}
?>