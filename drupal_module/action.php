<?php

// Loads the function to create the machine name
require_once('functions/machine_name.php');

// Sets the machine_name, if not setted by the user trough format
if ($_GET['module_machine_name'] == '') {
	$machine_name = machine_name($name);
} else {
	$machine_name = $_GET['module_machine_name'];
}

// Content, loads from a string in the program
$file_content = file_get_contents($chunk . '/infobase.txt');

// Writes the .info file
$info_file = sprintf($file_content, $machine_name, 'a', 'b');

// Creates de php zip object
//$php_zip = new ZipArchive();

echo $info_file;