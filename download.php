<?php

$name = $_GET['name'];
$format = $_GET['format'];

// Provides default value for empty name's form
if (empty($name)) {
  $name = 'index';
}

// Provides the final name of the file
$final_name = $name . "." . $format;

// Content, loads from a string in the program
$file_content = file_get_contents('basic_html/index.txt');

header("Content-type: text/plain; charset=utf-8");
header("Content-disposition: attachment; filename=\"" . $final_name);

echo $file_content;
