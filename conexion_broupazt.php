<?php
$dbstr ="(DESCRIPTION =(ADDRESS = (PROTOCOL = TCP)(HOST =10.213.8.70)(PORT = 1521)) (CONNECT_DATA = (SERVICE_NAME = BROUPAZT)))";  
#$dbstr ="(DESCRIPTION = (ADDRESS = (PROTOCOL = TCP)(HOST = scan-tvamddb)(PORT = 1521))(CONNECT_DATA =(SERVER = DEDICATED)(SERVICE_NAME = BROUPAZT)))";

$conn = oci_pconnect('GPAGOS', 'G69p4G0z52015tTp',$dbstr) ;
if (!$conn)
     {
       $e = oci_error();
       trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
     }
?>