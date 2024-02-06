<?php

function binary_search($arr , $i , $l , $key){
    while ($i <= $l) {
    $middle = $i +($l-1)/2;
    if($arr[$middle] == $key){
        return floor($middle);
    }
    if($arr[$middle] < $key){
        $i = $middle+1;
    }
    else{
        $l = $middle-1;
    }
    }
    return -1;
    
    }

$arr = [1,2,3,4,5,6,7,8,9];
$l = count($arr);
$key = 70;

$result = binary_search($arr , 0, $l-1 , 4);
 if ($result == -1){
    echo "Not Found";
 }
 else{
    var_dump($result) ;
 }