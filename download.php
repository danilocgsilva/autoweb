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
$file_content = file_get_contents('empty_webpage/index.txt');

// Saves the file before zipping
$fp = fopen('files/tmp/' . $final_name, 'w');
fwrite($fp, $file_content);
fclose($fp);

// Zip file
$zip = new ZipArchive;
$zip->open('files/tmp/' . $final_name . ".zip", ZipArchive::CREATE);
$zip->addFile('files/tmp/' . $final_name);
$zip->close();

header("Content-type: text/plain; charset=utf-8");
header("Content-disposition: attachment; filename=\"" . $final_name . "\"");

