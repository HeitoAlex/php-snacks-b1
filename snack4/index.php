<?php 
$randomeNumbers = [];

while(count($randomeNumbers) < 15){
    $number = rand(1,100);

    if(!in_array($number, $randomeNumbers)){
        array_push($randomeNumbers, $number);
    }
    
}

var_dump($randomeNumbers);
?>