<?php

class Car
{
    public $brand;
    public $model;
    public $year;

    public function startEngine()
    {
        echo "<p>Starting the engine of {$this -> year} {$this -> brand} {$this -> model}.";
    }

    public function accelerate()
    {
        echo "<p>Accelerating.";
    }

    public function brake()
    {
        echo "<p>Applying the brakes.";
    }
}

$myCar = new Car();
$myCar->brand = "Toyota";
$myCar->model = "Camry";
$myCar->year = 2023;

$myCar->startEngine();
$myCar->accelerate();
$myCar->brake();
