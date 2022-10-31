<?php
/*
 * Definition
    A Tidy number is a number whose digits are in non-decreasing order.
    Task
    Given a number, Find if it is Tidy or not .
 */
//function tidyNumber($n)
//{
//    $flag = true;
//    $number = (string)($n);
//    $result = $number[0];
//    print_r($result);
//    echo "\n";
//    for($i=0;$i<strlen($number);$i++){
//        if ($number[$i] > $number[$i + 1]){
//            $flag = false;
//        }
//        1 -> 2 -> 3 -> 4 -> 5 -> 6 -> 7 -> 8 -> 9 true
//        5 -> 4 false
//        $result = $result <= $number[$i] ?: $number[$i];
//    }
//    return $result;
//}

//print_r(tidyNumber(56));//true
//echo "\n";
//print_r(tidyNumber(102));//false
