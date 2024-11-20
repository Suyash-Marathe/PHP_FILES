<?PHP 

abstract class Product {

    abstract function p_name();
    abstract function p_price();
    abstract function p_mfg();
    abstract function p_exp();
}

class U_Product {

    function p_name() {

        echo "<p> Name = Kit Kat";
    }

    function p_price() {

        echo "<p> Price = 20";
    }

    function p_mfg() {

        echo "<p> Manufactured Date = 20 - November - 2022";
    }

    function p_exp() {

        echo "<p> Expiry Date = 14 - April - 2026";
    }
}

$prdt = new U_Product();

$prdt -> p_name();
$prdt -> p_price();
$prdt -> p_mfg();
$prdt -> p_exp();