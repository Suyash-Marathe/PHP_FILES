<?php

    $marks = $_POST["num"];

    if ($marks <= 100)
    {
        if ($marks >= 90)
        {
            echo "Grade A";
        }
        else if ($marks >= 80)
        {
            echo "Grade B";
        }
        else if ($marks >= 70)
        {
            echo "Grade C";
        }
        else if ($marks >= 60)
        {
            echo "Grade D";
        }
        else
        {
            echo "Grade E";
        }
    }
    else
    {
        echo "Invalid Input !";
    }

?>