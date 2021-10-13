<?php

$langs=$_SERVER['HTTP_ACCEPT_LANGUAGE'];
echo substr($langs,0,-strlen($langs)+2);

?>