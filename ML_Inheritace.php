<?PHP 

class A {

    protected $id = 2;
    protected $name = "Manish";
}

class B extends A {

    function show() {

        echo $this -> id;
    }
}

class C extends B {

    function print() {

        echo $this -> name;
    }
}

$o = new C();

$o -> show();
$o -> print();