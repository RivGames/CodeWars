<?php
function number_joy(int $n) {
    $numbers = str_split((string)($n),1);
    return $n == array_sum($numbers) * strrev(array_sum($numbers));
}
print_r(number_joy(1998));//false
echo "\n";
print_r(number_joy(1997));//false
echo "\n";
print_r(number_joy(1729));//true
echo "\n";
print_r(number_joy(18));//false
echo "\n";
print_r(number_joy(1));//true
echo "\n";
print_r(number_joy(1458));//false
