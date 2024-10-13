<?php

    $o = $_REQUEST["n"];

    switch ($o)
    {
        case 1:
            echo "Your order is Ice Cream.";
        break;

        case 2:
            echo "Your order is Cone.";
        break;

        case 3:
            echo "Your order is Kulfi.";
        break;

        case 4:
            echo "Your order is Choco Bar.";
        break;

        default:
            echo "Invalid Order.";
        break;
    }

?>