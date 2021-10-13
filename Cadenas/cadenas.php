<?php
$nombre = $_GET["nombre"] ?? "Juan";
$prefijo = $_GET["prefijo"] ?? "J";
$url = 'http://username:password@hostname:9090/path?arg=value';

echo 'Bienvenido ' . $nombre;
echo '<br>Longitud de nombre ' . strlen($nombre);
echo '<br>Bienvenido ' . strtoupper($nombre);
echo '<br>Bienvenido ' . strtolower($nombre);

if (strpos($nombre,$prefijo)===0) {
    echo '<br>Tu nombre empieza por ' . $prefijo;
}else {
    echo '<br>Tu nombre no empieza por ' . $prefijo;
}

if (stripos(strtolower($nombre),"a")>0||stripos(strtolower($nombre),"a")===0) {
    echo "<br>La a esta en la posicion: ".stripos(strtolower($nombre),"a")."<br>";
}

else {
    echo "<br>No tienes una a en tu nombre<br>";
}

$array=str_split($nombre,strlen($nombre)-1);
$array=str_ireplace("o","0",$nombre);
print_r ($array);
echo '<br>'.parse_url($url, PHP_URL_SCHEME);
echo '<br>'.parse_url($url, PHP_URL_USER);
echo '<br>'.parse_url($url, PHP_URL_PATH);
echo '<br>'.parse_url($url, PHP_URL_QUERY);


