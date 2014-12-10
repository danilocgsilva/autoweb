<?php

$format = $_GET['format'];

// Provides default value for empty name's form
if (empty($name)) {
  $name = 'index';
}

// Provides the final name of the file
$final_name = $name . "." . $format;

// Loads the basic html variable
require_once('../includes/basic_html_2_variable.php');

header("Content-type: text/plain; charset=utf-8");
header("Content-disposition: attachment; filename=\"" . $final_name);

echo $basic_html_2;
