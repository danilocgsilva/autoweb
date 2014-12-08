<?php

$name = $_GET['name'];
$format = $_GET['format'];
$chunk = $_GET['chunk'];

// Provides default value for empty name's form
if (empty($name)) {
  $name = 'index';
}

// Provides the final name of the file
$final_name = $name . "." . $format;

// Content, loads from a string in the program
$file_content = file_get_contents($chunk . '/index.txt');

error_log($file_content);

header("Content-type: text/plain; charset=utf-8");
header("Content-disposition: attachment; filename=\"" . $final_name);

echo $file_content;
