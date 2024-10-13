<?php

class Programs {

    public function lang() {
        echo "<p>Program using programming language.";
    }
}

class Cpp extends Programs {

    public function cpp() {
        echo "<p>Program using cpp.";
    }
}

class Php extends Programs {

    public function php() {
        echo "<p>Program using php.";
    }
}


$cpp = new Cpp();

$cpp -> lang();
$cpp -> cpp();


$cpp = new Php();

$cpp -> lang();
$cpp -> php();