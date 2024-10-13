<?php

$str = "Hello World";

echo "Length is ". strlen($str);
echo "<br>Word = ". str_word_count($str);
echo "<br>Reverse = ". strrev($str);
echo "<br>UpperCase = ". strtoupper($str);
echo "<br>LowerCase = ". strtolower($str);
echo "<br>". ucwords($str);

?>