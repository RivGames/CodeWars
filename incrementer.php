<?php
/*
 * Given an input of an array of digits, return the array with each digit incremented by its position in the array: the first digit will be incremented by 1, the second digit by 2, etc. Make sure to start counting your positions from 1 ( and not 0 ).

Your result can only contain single digit numbers, so if adding a digit with its position gives you a multiple-digit number, only the last digit of the number should be returned.

Notes:
return an empty array if your array is empty
arrays will only contain numbers so don't worry about checking that
 */
function incrementer($nums): array
{
    $result = [];
    for ($i = 0; $i < count($nums); $i++) {
        if ($nums[$i] + ($i + 1) >= 10) {
            $result[$i] = (int)substr((string)($nums[$i] + ($i + 1)),1,1);
        } else {
            $result[$i] = $nums[$i] + ($i + 1);
        }
    }
    return $result;
}

print_r(incrementer([4, 6, 7, 1, 3]));//[5,8,0,5,8]