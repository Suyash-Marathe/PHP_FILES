<?PHP

class A {

    protected $number = 1;
    protected $name = "Nilesh";
}

class B extends A {

    function show () {

        echo "<p> Number = ". $this -> number;
        echo "<p> Name = ". $this -> name;
    }
}

$obj = new B();

$obj -> show();