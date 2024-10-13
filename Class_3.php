<?php

class Emp 
{
    public $id;
    public $name;

    public function print ()
    {
        echo "<p>ID = {$this -> id}";
        echo "<p>Name = {$this -> name}";
    }
}

$e = new Emp ();
$e -> id = 1;
$e -> name = "Nitin";

$e -> print ();