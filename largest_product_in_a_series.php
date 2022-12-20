<?php
$file = file_get_contents('number_1000.txt');
$arr = [];
$arr = str_split($file, 4);
echo "<pre>";
print_r($arr);
echo "</pre>";
//print($arr[81]);
$sum = 1;
$items = [];
for ($i = 0; $i < count($arr); $i++) {
    for($j = 0;$j<strlen($arr[$i]);$j++){
        $sum *= (int)$arr[$i][$j];
    }
    $items[$i] = $sum;
    $sum = 1;
}
echo "<pre>";
print_r($items);
echo "</pre>";

$result = $items[0];
for($i = 0;$i<count($items);$i++){
    $result = max($items[$i],$result);
}
print($result);