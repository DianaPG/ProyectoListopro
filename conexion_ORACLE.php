<?php
$dbstr ="(DESCRIPTION =(ADDRESS = (PROTOCOL = TCP)(HOST =1.1.1.1)(PORT = 1521)) (CONNECT_DATA = (SERVICE_NAME = DB_EJ)))";  
$conn = oci_pconnect('USER_EJE', 'PASS_EJE',$dbstr) ;
if (!$conn)
    {
       $e = oci_error();
       trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
    }
?>