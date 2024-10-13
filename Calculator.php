<?php

$num_1 = $_POST['n_1'];
$num_2 = $_POST['n_2'];
$operations = $_POST['operation'];

function add($num_1, $num_2)
{
    return $num_1 + $num_2;
}

function sub($num_1, $num_2)
{
    return $num_1 - $num_2;
}

function mul($num_1, $num_2)
{
    return $num_1 * $num_2;
}

function div($num_1, $num_2)
{
    return $num_1 / $num_2;
}

switch ($operations)
{
    case "add":
        $result = add($num_1, $num_2);
        break;

    case "sub":
        $result = sub($num_1, $num_2);
        break;

    case "mul":
        $result = mul($num_1, $num_2);
        break;

    case "div":
        $result = div($num_1, $num_2);
        break;
}

echo "Result : ". $result;

?>