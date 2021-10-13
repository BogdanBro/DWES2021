<?php
$frase=["Seguro", "que", "apruebo", "esta", "asignatura"];
$array=array(array());

function partlist ($a,$array){

    for ($i=0; $i < count($a)-1; $i++) { 
        
        $primera = array_slice($a, 0,$i+1);
        $segunda = array_slice($a, $i+1);
        implode(" ",$primera);
        $array[$i][0]=implode(" ",$primera);
        $array[$i][1]=implode(" ",$segunda);
    }

    return print_r($array);
   
}
echo(partlist($frase,$array));
?>