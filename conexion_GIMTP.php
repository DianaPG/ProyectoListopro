<?php
$dbstr ="(DESCRIPTION =(ADDRESS = (PROTOCOL = TCP)(HOST =10.216.16.84)(PORT = 1521)) (CONNECT_DATA = (SERVICE_NAME = GIMTP)))";  
$conn = oci_pconnect('VIDEOCUBOS', 'Vid0cu3os_2017',$dbstr) ;
if (!$conn)
     {
       $e = oci_error();
       trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
     }
?>