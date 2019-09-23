<?php
$enlace =  mysql_connect('10.213.9.149', 'acajas', 'ac4j4s2015');
if (!$enlace) {
    die('No pudo conectarse: ' . mysql_error());
}
?>