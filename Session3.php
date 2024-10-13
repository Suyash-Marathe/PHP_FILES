<?php

session_start();

echo "<p>Name = ". $_SESSION ["name"];
echo "<p>Username = ". $_SESSION ["uname"];

session_unset();
session_destroy();

echo "<p>Name = ". $_SESSION ["name"];
echo "<p>Username = ". $_SESSION ["uname"];