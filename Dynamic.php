<?php

    $txt = $_GET["page"];

    switch ($txt)
    {
        case "about":
            echo "About Us : ";
            echo "We are the team of passionate developers.";
        break;

        case "contact":
            echo "Contact Us : ";
            echo "Email us at contact@example.com.";
        break;
    }

?>