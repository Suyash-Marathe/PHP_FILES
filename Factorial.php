<?php

$n = 5;
$fact = 1;

for ($i = 1; $i <= $n; $i++)
{
    $fact = $i * $fact;
}

echo "Factorial of $n is $fact.";

?>