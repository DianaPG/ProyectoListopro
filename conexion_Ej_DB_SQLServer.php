<?php
$serverName = "CAR1\CAP2"; //serverName\instanceName
$connectionInfo = array( "Database"=>"NAME1", "UID"=>"USER1", "PWD"=>"PASS1");
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