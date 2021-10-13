<?php

$colores = array('blanco'=>'blanco.html', 'verde' => 'verde.html', 'rojo' => 'rojo.html');
$claves=(array_keys($colores));
$contador=0;

echo '<ul>';

foreach($colores as $color){


echo "<li><a href='".$color."'>".$claves[$contador]."</a></li>";

$contador++;

}

echo '</ul>';
