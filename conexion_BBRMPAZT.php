<?php
$dbstr ="(DESCRIPTION =(ADDRESS = (PROTOCOL = TCP)(HOST =10.213.8.43)(PORT = 1521)) (CONNECT_DATA = (SERVICE_NAME = BBRMPAZT)))";  
$conn = oci_pconnect('GPAGOS', 'GP4g05_2016',$dbstr) ;
if (!$conn)
    {
       $e = oci_error();
       trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
    }
?>