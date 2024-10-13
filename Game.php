<?php

    $n1 = rand(0, 50);

    echo "$n1";
    echo "<br><br>";

    $n2 = $_POST["num"];

    if ($n1 <= $n2)
    {
        echo "Feedback - Too high !  Try again.";
    }
    else if ($n1 >= $n2)
    {
        echo "Feedback - Too low !  Try again.";
    }
    else
    {
        echo "Your guess was Correct !";
    }


?>