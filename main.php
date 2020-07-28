<?php

require_once('CProj4.php');

// Dans le constructeur de Proj4Class
$obj = new CProj4("+proj=utm +zone=29 +ellps=clrk80 +no_defs +towgs84=-124.76,53,466.79,0,0,0,0 +units=m");

printf('Returned string %s', $obj->getDatumString());

?>