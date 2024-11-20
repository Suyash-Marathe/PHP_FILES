<?PHP

$arr1 = array("Mango", "Orange");

array_push($arr1, "Grapes");
echo "<p>"; print_r($arr1);

array_pop($arr1);
echo "<p>"; print_r($arr1);

$arr2 = ["B", "A", "C", "D", "E", "F"];
echo "<p>"; print_r(array_chunk($arr2, 2));

echo "<p>"; print_r(array_reverse($arr2));

echo "<p>"; print_r(rsort($arr2));

sort($arr2);
echo "<p>"; print_r($arr2);


$arr3 = ["A"=>"B", "E"=>"D", "C"=>"A", "T"=>"E"];
echo "<p>"; print_r($arr3);

asort($arr3);
echo "<p>"; print_r($arr3);

arsort($arr3);
echo "<p>"; print_r($arr3);

ksort($arr3);
echo "<p>"; print_r($arr3);

krsort($arr3);
echo "<p>"; print_r($arr3);