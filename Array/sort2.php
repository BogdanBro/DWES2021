
<?php
$temperaturas="2,1,6,5,4,3,7,8,9,15,12,13,10,14,16,17";

$dias = explode(",", $temperaturas);
$suma=0;


foreach ($dias as $dia) {
   $suma.=intval($dia);
}
echo ($suma);

sort($dias);

for ($i=0;$i<5;$i++) {
    echo $dias[$i].",";
}
 echo "<br>";

rsort($dias);

for ($i=0;$i<5;$i++) {
    echo $dias[$i].",";
}
