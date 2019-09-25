<?php
set_include_path(get_include_path() . PATH_SEPARATOR . 'phpseclib');
include('phpseclib/Net/SSH2.php');
$ssh = new Net_SSH2('1.1.1.1',22);
if (!$ssh->login('root', 'PASS_EJ')) 
{
    exit('Login Failed');
}
?>
