<?php
$arr = ['a', 'b', 'c', 'd'];
$length = count($arr) - 1;
for ($i = 0; $i <= $length / 2; $i++) {
    $temp = $arr[$length - $i];
    $arr[$length - $i] = $arr[$i];
    $arr[$i] = $temp;
}
for ($i = 0; $i <= $length; $i++) {
    print($arr[$i]);
    print("\n");
}
$count = 0;
$a = 2;
$b = 72;
for ($i = $a; $i < $b; $i++) {
    if ($i == 3 || $i == 2) {
        $count++;
        continue;
    }
    if ($i % 2 != 0 && $i % 3 != 0) {
        $j = strrev($i);
        if ($j % 2 != 0 && $j % 3 != 0) {
            $count++;
        }
    }
}
print($count);
print("\n");
$text = "Hello,BWT GROUP! I am, a programmer.Lorem ipsum,dolor sit amet?Hi";
$text2 = "Точка. Любой символ.Точка. Любой символ.";
$words = preg_split("/([.\s,?])+/s",$text);
print(count($words));
print("\n");
