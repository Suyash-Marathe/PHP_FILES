<?PHP 

$n = 5;
$d = 0;
$result;

try {

    if ($d == 0) {

        throw new Exception;
    }

    $result = $a / $b;
}

catch (Exception $e) {

    echo "Division with Zero Not Possible !";
}

echo $result;
