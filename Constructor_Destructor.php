<?php

class Demo {

    function __construct() {
        echo "<p>Object Constructed.";
    }

    function __destruct() {
        echo "<p>Object Destroyed.";
    }
}

$Show = new Demo ();