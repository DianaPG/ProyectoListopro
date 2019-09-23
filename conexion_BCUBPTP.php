<?php
$serverName = "TPVSCOMDB01\DATAWAREHOUSE"; //serverName\instanceName
$connectionInfo = array( "Database"=>"BVCBPTP", "UID"=>"sa", "PWD"=>"Passw0rd");
$conn = sqlsrv_connect( $serverName, $connectionInfo);
   if( $conn ) 
     {
     }
    else
     {
       echo "Conexión no se pudo establecer.<br />";
       die( print_r( sqlsrv_errors(), true));
     }
?>