<?php

$cookie_name = "admin";
$cookie_uname = "admin@email.com";

setcookie($cookie_name, $cookie_uname, time() + 86400);

if (isset ($_COOKIE))
{
    echo "<p>Name = ". $cookie_name;
    echo "<p>Username - ". $cookie_uname;
}
else
{
    echo "<p>Cookie not set.";
}

setcookie($cookie_name, $cookie_uname, time() - 86400);

echo "<p>Name = ". $cookie_name;
echo "<p>Username - ". $cookie_uname;
