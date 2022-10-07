<?php
/*
 * Write a simple palindrome function that returns false or true
 */
function isPalindrome($word): bool{
    $reverse_word = strrev($word);
    return $word == $reverse_word;
}
print_r(isPalindrome('did'));//true
print_r(isPalindrome('kit'));//false
print_r(isPalindrome('abba'));//true
print_r(isPalindrome('hello'));//false