<?php
$dbstr ="(DESCRIPTION =(ADDRESS = (PROTOCOL = TCP)(HOST =10.213.8.70)(PORT = 1521)) (CONNECT_DATA = (SERVICE_NAME = BSWOPAZT)))";  
#$conn = oci_pconnect('GPAGOS', 'G6PA4G6P5S',$dbstr) ;
$conn = oci_pconnect('VIDEOCUBOS', 'v1d3oCu80s_2019',$dbstr) ;
if (!$conn)
     {
       $e = oci_error();
       trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
     }
?>