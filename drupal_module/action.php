<?php

$format = $_GET['format'];

// Loads the function to create the machine name
require_once('functions/machine_name.php');

// Sets the machine_name, if not setted by the user trough format
if (isset($_GET['module_machine_name'])) {
	$machine_name = $_GET['module_machine_name'];
} else {
	$machine_name = machine_name($name);
}

// Content, loads from a string in the program
$file_content = file_get_contents($chunk . '/infobase.txt');



header("Content-type: text/plain; charset=utf-8");
header("Content-disposition: attachment; filename=\"" . $final_name);

echo $file_content;
