<?php

$host = '';
$uname = 'root';
$pass = 2244;
$dbname = 'demo';



$conn = mysqli_connect($host,$uname,$pass,$dbname);

echo $conn;


// $q = "create table std;";

// mysqli_query($conn, $q);