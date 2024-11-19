<?php 

session_start();

$_SESSION ["name"] = "Admin";
$_SESSION ["pass"] = "admin@1234";

echo "<p> Name = ". $_SESSION ["name"];
echo "<p> Passward = ". $_SESSION ["pass"];

session_unset();
session_destroy();

echo "<p> Name = ". $_SESSION ["name"];
echo "<p> Passward = ". $_SESSION ["pass"];