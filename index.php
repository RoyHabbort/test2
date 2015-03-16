<?php

header('Content-Type: text/html; charset=utf8');

function array_swap(&$arr, $num){
    
    $pre = $arr[$num];
    $arr[$num] = $arr[0]; 
    $arr[0] = $pre;
    return $arr;
}

$data =  array(4, 5, 8, 9, 1, 7, 2);

echo "Исходный массив:";
var_dump($data);

//Сортировка массива
$n = count($data) - 1;
for($i=0; $i <= $n; $i++){
    
    $max = 0;
    for($j = 1; $j <= $n - $i; $j++){
        if($data[$j] > $data[$max] ){
            $max = $j;
        }
    }
    $data = array_swap($data, $max);
    $data = array_swap($data, $n - $i);
}

echo "Результат:";
var_dump($data);

?>