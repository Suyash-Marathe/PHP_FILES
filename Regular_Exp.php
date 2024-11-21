<?PHP 

// Regular Expression is used to find a keyword in the string.

// preg_match() : preg_match() will find keyword only one time in the string. If the word is repeated it will not counted.
// preg_match_all() : preg_match_all will find all repeated keywords in the string.


$str = "PHP is a server-side scripting language. Repeated php.";

$exp = preg_match_all("/PhP/i", $str, $arr);

if ($exp) {

    echo "<p> Match has Founded.";

} else {

    echo "<p> No Match has Founded.";
}

echo "<pre>";
print_r($arr);
echo "</pre>";