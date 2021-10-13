<?php
$cadenas=array("abc42d","abc","a","ab");

function long($n) {

return strlen($n);

}

$longitudes=array_map('long',$cadenas);

echo("Maximo: ".max($longitudes));
echo("<br>Minimo: ".min($longitudes));
?>