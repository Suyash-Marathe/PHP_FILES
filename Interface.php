<?PHP 

// Interface = In PHP, interface is a blueprint that defines a set of method that a class must implement.

interface Adder {

    public function add($a, $b);
}

class N_Adder implements Adder {

    function add($a, $b) {

        return $a + $b;
    }
}

$a = new N_Adder();

$result = $a -> add(20, 40);
echo $result;