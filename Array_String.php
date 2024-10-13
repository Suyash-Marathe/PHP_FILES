<?php
$str = ("Oppo Vivo");
print_r(explode(" ", $str));

$array = ["Oppo", "Vivo"];
echo implode(" ", $array);

$str2 = "Hello World";
echo "UpperCase = " . strtoupper($str2);
echo "LowerCase = ", strtolower($str2);
echo "Words = " . str_word_count($str2);

$array2 = array("A", "B", "C", "D", "E", "F");
print_r(array_chunk($array2, 2));

array_push($array2, "H");
print_r($array2);

array_pop($array2);
print_r($array2);

echo count($array2);

print_r(array_reverse($array2));