<?php

    class Employee 
    {
        public $id;
        public $name;
        public $salary;

        function __construct() 
        {
            $this -> id = 0;
            $this -> name = "No Name";
            $this -> salary = 0;
        }
    
        function __destruct ()
        {
            echo "<p>Project Destroyed !";
        }

        function setdata($x, $y, $z)
        {
            $this -> id = $x;
            $this -> name = $y;
            $this -> salary = $z;
        }
    
        function showdata()
        {
            echo "<p>ID = ". $this -> id;
            echo "<p>Name = ". $this -> name;
            echo "<p>Salary = ". $this -> salary;
        }
    }

    $E1 = new Employee ();
    $E1 -> setdata(1, "Nayan", 400000);
    $E1 -> showdata();

    $E2 = new Employee ();
    $E2 -> setdata(2, "Sagar", 600000);
    $E2 -> showdata();

?>