<?php
function rand_Pass($upper = 4, $lower = 16, $numeric = 3, $other = 2){
    

$password=array("");

for($i =0;$i<$lower;$i++){
array_push($password,chr(rand(97, 122))); 
}
for($i =0;$i<$upper;$i++){
array_push($password,chr(rand(65, 90)));
}
for($i =0;$i<$numeric;$i++){
array_push($password,chr(rand(48, 57)));
}
for($i =0;$i<$other;$i++){
array_push($password,chr(rand(33, 47))); 
}

shuffle($password);

$newpassword=implode($password);

echo($newpassword);


}

echo (rand_Pass());
