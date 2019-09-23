<?php
  $session = new SNMP(SNMP::VERSION_1, "127.0.0.1", "public");
  $session->close();
?>