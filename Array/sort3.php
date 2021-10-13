<?php
$array=array('3'=> "abcd",'4'=> "abc",'5'=> "ab",'2'=> "abcde",'5'=> "a",'1'=> "abcdef");

function ordenarLongitud ($a, $b) {
    return strlen($b) - strlen($a);
}

uasort($array, 'ordenarLongitud');

print_r($array);