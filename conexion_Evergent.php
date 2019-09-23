<?php
$enlace =  mysql_connect('10.213.8.151', 'videocubo', 'Videocubo2015');
if (!$enlace) {
    die('No pudo conectarse: ' . mysql_error());
}
?>