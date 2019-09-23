<?php
set_include_path(get_include_path() . PATH_SEPARATOR . 'phpseclib');
include('phpseclib/Net/SSH2.php');
$ssh = new Net_SSH2('10.231.8.150',22);
if (!$ssh->login('root', 'SIEoperaciones01')) {
    exit('Login Failed');
}
echo $ssh->exec('pwd');
echo $ssh->exec('ls -la');
?>
