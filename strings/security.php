<?php

$password = "php";

$hashFormat = "$2y$10$"; 
$salt = "iusesomecrazystrings22";
$hashF_and_salt = $hashFormat . $salt;
$password_crypt = crypt($password,$hashF_and_salt);
echo $password_crypt;

echo "<br>";

$password_hash = password_hash($password, PASSWORD_BCRYPT, array('cost' => 12));
echo $password_hash;

?>