<?php
$serverName = "KQGIMDBCL01"; //serverName\instanceName
$connectionInfo = array( "Database"=>"MONITSF", "UID"=>"SF_MONITSF", "PWD"=>"Us3r_m0n1TsF");
$conn = sqlsrv_connect( $serverName, $connectionInfo);
     if( $conn ) 
     {}
    else
     {
       echo "Conexión no se pudo establecer.<br />";
       die( print_r( sqlsrv_errors(), true));
     }
?>
