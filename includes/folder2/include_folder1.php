<?php
// include "../folder1/include.php";
// include "../folder1/include_sub.php";

// error
// include(dirname(__FILE__)."../folder1/include.php");
// include(dirname(__FILE__)."../folder1/include_sub.php");

include(dirname(__DIR__)."/folder1/include.php");
include(dirname(__DIR__)."/folder1/include_sub.php");

// ok
// include "../folder1/include_root.php";

echo "<br />";
?>