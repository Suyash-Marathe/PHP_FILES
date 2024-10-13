<?php

    $un = $_POST["uname"];
    $n = $_POST["num"];

    if ($un == "admin" || $n == "admin123")
    {
        echo "Welcome, Admin";
    }
    else
    {
        echo "Invalid credentials. Please try again.";
    }

?>