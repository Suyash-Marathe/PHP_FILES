<?PHP

// Class is a blueprint to create objects. Class is a collection of attributes and properties.
// Object is instance of class. Object is real-world entity.

class Demo {

    public 
    $id = 22;

    function show() {

        echo $this->id;
    }
}

$d = new Demo();

$d -> show();