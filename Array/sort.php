<?php

$edades=array("Juan"=>"31","María"=>"41","Andrés"=>"39","Berta"=>"40");

asort($edades);

foreach ($edades as $key => $val) {
    echo "$key = $val\n";
}
 echo "<br> <br> <br>";
arsort($edades);

foreach ($edades as $key => $val) {
    echo "$key = $val\n";
}
echo "<br> <br> <br>";;
ksort($edades);

foreach ($edades as $key => $val) {
    echo "$key = $val\n";
}
echo "<br> <br> <br>";
krsort($edades);

foreach ($edades as $key => $val) {
    echo "$key = $val\n";
}