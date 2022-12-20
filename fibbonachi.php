<?php
//0 1 1 2 3 5 8 13 21 34 55 89 144 233........
function fib(int $limit = 5): int
{
//    for ($i=0;$i<$limit;$i++){
//
//    }
    if ($limit == 0 || $limit == 1) {
        return 1;
    }
    return fib($limit - 1) + fib($limit - 2);

}

$a = fib(4);
print($a);