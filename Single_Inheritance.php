<?php

class Animal {
    public $name;

    public function sound() {
        echo "<p>Generic animal sound.";
    }
}

class Dog extends Animal {
    public function bark() {
        echo "<p>Woof !";
    }
}

$dog = new Dog();
$dog -> sound();
$dog -> bark();