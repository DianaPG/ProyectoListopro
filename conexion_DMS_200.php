<?php
$enlace =  mysql_connect('10.200.200.176', 'monitoreovc', 'm0m1t0r30vc2015');
if (!$enlace) {
    die('No pudo conectarse: ' . mysql_error());
}

?>