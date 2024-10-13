<?php

    $n = $_POST["num"];

    for ($i = 1; $i <= 10; $i++)
    {
        echo "$n X $i = ". $i * $n; 
        echo "<br>";
    }

?>