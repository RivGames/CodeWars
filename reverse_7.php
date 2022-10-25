<?php
function reverse(array $a): array {
    $result = [];
    $j = 0;
    for($i = count($a) - 1;$i >= 0;$i--){
        $result[$j] = $a[$i];
        $j++;
    }
    return $result;
}
print_r(reverse([1,2,'hello','php','storm','is','the','best','IDE','I\'ve','ever','seen']));