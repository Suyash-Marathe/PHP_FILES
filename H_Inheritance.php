<?PHP 

class A {

    protected $comp = "Micorsoft";
    protected $emp_1 = "Manish";
    protected $emp_2 = "Nilesh";
}

class B extends A {

    function show1() {

        echo "<p> Company Name = ". $this -> comp;
        echo "<p> Employee 1 Name = ". $this -> emp_1;
    }
}

class C extends A {

    function show2() {

        echo "<p> Company Name = ". $this -> comp;
        echo "<p> Employee 2 Name = ". $this -> emp_2;
    }
}

$o1 = new B();
$o2 = new C();

$o1 -> show1();
$o2 -> show2();