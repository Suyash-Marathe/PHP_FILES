<?php 

$cookie_name = "Admin";
$cookie_pass = "admin@1234";

setcookie($cookie_name, $cookie_pass, time() +36400);

echo "Name = $cookie_name \n";
echo "Passward = $cookie_pass \n";

setcookie($cookie_name, $cookie_pass, time () -86400);

echo "Name = $cookie_name \n";
echo "Passward = $cookie_pass \n";