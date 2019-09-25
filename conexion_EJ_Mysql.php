<?php
$enlace =  mysql_connect('1.1.1.1', 'user_Ej', 'pass_Ej');
if (!$enlace) {
    die('No pudo conectarse: ' . mysql_error());
}
?>