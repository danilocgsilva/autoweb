<?php

$name = $_GET['name'];
$format = $_GET['format'];

// Provides default value for empty name's form
if (empty($name)) {
  $name = 'index';
}

// Content, loads from a string in the program
$file_content = file_get_contents('empty_webpage/index.txt');

$file_content_compressed = gzcompress($file_content

$final_name = $name . "." . $format;

print $file_content;

header("Content-type: text/plain; charset=utf-8");
header("Content-disposition: attachment; filename=\"" . $final_name . "\"");

