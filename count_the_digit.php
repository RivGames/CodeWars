<?php
/*
    Take an integer n (n >= 0) and a digit d (0 <= d <= 9) as an integer.

    Square all numbers k (0 <= k <= n) between 0 and n.

    Count the numbers of digits d used in the writing of all the k**2.

    Call nb_dig (or nbDig or ...) the function taking n and d as parameters and returning this count.
*/
function nbDig($n, $d) {
    $arr = [];
    for($i = 0; $i<= $n;$i++){
        $arr[] = (string)($i * $i);
    }
    $count = 0;
    foreach($arr as $item){
        for($i = 0;$i<strlen($item);$i++){
            if($item[$i] == $d){
                $count++;
            }
        }
    }
    return $count;
}
var_dump(nbDig(5,1));