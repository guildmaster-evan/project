<?php

$user = 'root'; // DO NOT leave this as root | host username
$pass = ''; // DO NOT leave this blank || host password
$db = 'mydatabase'; //DO whatcha want with this || database name

$conn = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");

echo"Great work!!!";

?>