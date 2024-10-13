<?php

class Animal {

    public function sound() {
        echo "<p>Dog's sound.";
    }
}

class Dog extends Animal {

    public function bark() {
        echo "<p>Woof.";
    }
}

class Jungle extends Dog {

    public function all() {
        echo "<p>All animal's sounds.";
    }
}

$forest = new Jungle();

$forest -> sound();
$forest -> bark();
$forest -> all();