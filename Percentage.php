<?php

    $php = $_POST["p"];
    $cpp = $_POST["c"];
    $maths = $_POST["m"];
    $os = $_POST["o"];

    $total_marks = $php + $cpp + $maths + $os;

    $percentage = ($total_marks / 400) * 100;

    echo "Percentage = $percentage %";

?>