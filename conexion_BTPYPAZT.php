<?php
$dbstr ="(DESCRIPTION =(ADDRESS = (PROTOCOL = TCP)(HOST =10.213.8.100)(PORT = 1521)) (CONNECT_DATA = (SERVICE_NAME = BTPYPAZT)))";  
$conn = oci_pconnect('VIDEOCUBO', 'v1d30cub0$2016',$dbstr) ;
if (!$conn)
     {
       $e = oci_error();
       trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
     }
?>