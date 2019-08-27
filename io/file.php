<?php

$file = "test.txt";

// write
$handle = fopen($file, 'w+');

fwrite($handle,"hello");

fclose($handle);

// write line
$handle = fopen($file, 'a');
fwrite($handle,"hello again");

fclose($handle);

// read
$handle = fopen($file, 'r');
$contonent = fread($handle, 5);
echo $contonent."<br>";

$contonent = fread($handle, filesize($file));
echo $contonent;

fclose($handle);

// delete
unlink($file);

?>